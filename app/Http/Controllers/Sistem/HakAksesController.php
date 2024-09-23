<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\HakAksesServices;
use Illuminate\Http\Request;

class HakAksesController extends Controller
{
    protected $hakAksesServices, $fiturProgramServices;
    public function __construct(
            HakAksesServices $hakAksesServices,
            FiturProgramServices $fiturProgramServices
        ) {
        $this->hakAksesServices = $hakAksesServices;
        view()->share([
            'title'         => 'Hak Akses',
            'active_route'  => 'sistem.hak_akses.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
            'user_level'    => $hakAksesServices->listUserLevel(),
        ]);
    }

    public function index()
    {
        return view('sistem.hak_akses.index');
    }

    public function create()
    {
        return view('sistem.hak_akses._info');
    }

    public function show($id)
    {
        $getOne = $this->hakAksesServices->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $hak_akses = $this->hakAksesServices->getOne($id);
        return view('sistem.hak_akses._info', compact('hak_akses', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->hakAksesServices->createHakAkses($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->hakAksesServices->updateHakAkses($request->all(), $id);
    }

    public function search(Request $request)
    {
        $hak_akses = $this->hakAksesServices->searchHakAkses($request->all());
        return view('sistem.hak_akses._table', compact('hak_akses'));
    }
}
