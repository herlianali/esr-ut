<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\PengawasServices;
use App\Services\Sistem\SektorServices;
use Illuminate\Http\Request;

class PengawasController extends Controller
{
    protected $pengawasServices;
    public function __construct(PengawasServices $pengawasServices)
    {
        // $this->middleware('auth', 'fitur_program');
        $this->pengawasServices = $pengawasServices;
        view()->share([
            'title' => 'Pengawas',
            'active_route' => 'sistem.pengawas.index',
            'list_user' => $pengawasServices->listUser(),
            'list_sektor' => $pengawasServices->listSektor(),
            'list_kelompok_target' => $pengawasServices->listKelompokTarget(),
        ]);
    }

    public function index()
    {
        return view('sistem.pengawas.index');
    }

    public function create()
    {
        return view('sistem.pengawas._info');
    }

    public function show($id)
    {
        $getOne = $this->pengawasServices->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $pengawas = $this->pengawasServices->getOne($id);
        return view('sistem.pengawas._info', compact('pengawas', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->pengawasServices->createPengawas($request->all());
    }

    public function update(Request $request, $id)
    {
        // $request->merge(['pengawas_id' => $id]);
        return $this->pengawasServices->updatePengawas($request->all(), $id);
    }

    public function search(Request $request)
    {
        $pengawas = $this->pengawasServices->searchPengawas($request->all());
        return view('sistem.pengawas._table', compact('pengawas'));
    }

    
    
}
