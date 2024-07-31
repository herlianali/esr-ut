<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\HakAksesServices;
use Illuminate\Http\Request;

class HakAksesController extends Controller
{
    protected $hakAksesServices;
    public function __construct(HakAksesServices $hakAksesServices)
    {
        $this->hakAksesServices = $hakAksesServices;
        view()->share([
            'active_route' => 'employee.hak_akses.index',
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

    public function edit($id)
    {
        $hakAkses = $this->hakAksesServices->getOne($id);
        return view('sistem.hak_akses._info', compact('hakAkses'));
    }

    public function store(Request $request)
    {
        return $this->hakAksesServices->createHakAkses($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->hakAksesServices->updateHakAkses($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->hakAksesServices->deleteHakAkses($id);
    }

    public function search(Request $request)
    {
        $hakAksess = $this->hakAksesServices->searchHakAkses($request->all());
        // dd($hakAksess);
        return view('sistem.hak_akses._table', compact('hakAksess'));
    }
}
