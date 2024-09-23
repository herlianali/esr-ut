<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\InspeksiToolsServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class InspeksiToolsController extends Controller
{
    protected $inspeksiToolsServices;
    public function __construct(
            InspeksiToolsServices $inspeksiToolsServices, 
            PengawasServices $pengawasServices, 
            FiturProgramServices $fiturProgramServices
        )
    {
        $this->middleware('auth');
        $this->inspeksiToolsServices = $inspeksiToolsServices;
        view()->share([
            'title'         => 'Inspeksi Tools',
            'active_route'  => 'questioning.inspeksi_tools.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            'list_posisi'   => $inspeksiToolsServices->listPosisi(),
        ]);
    }
    
    public function index()
    {
        return view('questioning.inspeksi_tools.add');
    }
    public function create()
    {
        return view('questioning.inspeksi_tools._info');
    }

    public function show($id)
    {
        $inspeksi_tools = $this->inspeksiToolsServices->getOne($id);
        return view('questioning.inspeksi_tools._detail', compact('inspeksi_tools'));
    }

    public function edit($id)
    {
        $inspeksi_tools = $this->inspeksiToolsServices->getOne($id);
        return view('questioning.inspeksi_tools.add', compact('inspeksi_tools'));
    }
    
    public function store(Request $request)
    {
        $request->merge([
            'tanggal' => unformat_date($request->tanggal) , 
            'tanggal_laporan' => unformat_date($request->tanggal_laporan), 
            'tanggal_inspeksi' => unformat_date($request->tanggal_inspeksi)
        ]);
        $filename = $this->save_file($request, 'inspeksi_tools', 'file');
        if($filename != '') $request->merge(['file' => $filename]);
        $param = $request->request->all();
        return $this->inspeksiToolsServices->createInspeksiTools($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'tanggal' => unformat_date($request->tanggal) , 
            'tanggal_laporan' => unformat_date($request->tanggal_laporan), 
            'tanggal_inspeksi' => unformat_date($request->tanggal_inspeksi)
        ]);
        $filename = $this->save_file($request, 'inspeksi_tools', 'file');
        if($filename != '') $request->merge(['file' => $filename]);
        $param = $request->request->all();
        return $this->inspeksiToolsServices->updateInspeksiTools($param, $id);
    }
}
