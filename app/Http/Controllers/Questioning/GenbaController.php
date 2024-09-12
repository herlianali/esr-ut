<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\GenbaServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class GenbaController extends Controller
{
    protected $genbaServices;
    public function __construct(GenbaServices $genbaServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->genbaServices = $genbaServices;
        view()->share([
            'title' => 'Genba',
            'active_route' => 'questioning.genba.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            'list_area' => $genbaServices->listArea(),
            'list_kategori' => $genbaServices->listKategori(),
            'list_follow_up' => $genbaServices->listFollowUp(),
            'list_penyelenggara' => $genbaServices->listPenyelenggara(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.genba.add');
    }

    public function create()
    {
        return view('questioning.genba._info');
    }

    public function show($id)
    {
        $genba = $this->genbaServices->getOne($id);
        return view('questioning.genba._detail', compact('genba'));
    }

    public function edit($id)
    {
        $genba = $this->genbaServices->getOne($id);
        return view('questioning.genba.add', compact('genba'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);

        $foto_tindakan = $this->save_file($request, 'genba', 'foto_tindakan');
        if($foto_tindakan != '') $request->merge(['foto_tindakan' => $foto_tindakan]);

        $foto_kondisi = $this->save_file($request, 'genba', 'foto_kondisi');
        if($foto_kondisi != '') $request->merge(['foto_kondisi' => $foto_kondisi]);

        $dokumentasi = $this->save_file($request, 'genba', 'dokumentasi');
        if($dokumentasi != '') $request->merge(['dokumentasi' => $dokumentasi]);

        $param = $request->request->all();
        return $this->genbaServices->createGenba($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);

        $foto_tindakan = $this->save_file($request, 'genba', 'foto_tindakan');
        if($foto_tindakan != '') $request->merge(['foto_tindakan' => $foto_tindakan]);

        $foto_kondisi = $this->save_file($request, 'genba', 'foto_kondisi');
        if($foto_kondisi != '') $request->merge(['foto_kondisi' => $foto_kondisi]);

        $dokumentasi = $this->save_file($request, 'genba', 'dokumentasi');
        if($dokumentasi != '') $request->merge(['dokumentasi' => $dokumentasi]);
        
        $param = $request->request->all();
        return $this->genbaServices->updateGenba($param, $id);
    }
}
