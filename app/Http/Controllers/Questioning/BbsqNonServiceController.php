<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\BbsqNonServiceServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class BbsqNonServiceController extends Controller
{
    protected $bbsqNonServiceServices;
    public function __construct(
            BbsqNonServiceServices $bbsqNonServiceServices, 
            PengawasServices $pengawasServices, 
            FiturProgramServices $fiturProgramServices
        )
    {
        $this->middleware('auth');
        $this->bbsqNonServiceServices = $bbsqNonServiceServices;
        view()->share([
            'title'             => 'Safety Talk',
            'menu'              => '1',
            'active_route'      => 'questioning.bbsq_non_service.index',
            'fitur'             => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas'     => $pengawasServices->listNamaPengawas(),
            'list_perusahaan'   => $bbsqNonServiceServices->listPerusahaan(),
            'list_area'         => $bbsqNonServiceServices->listArea(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.bbsq_non_service.add');
    }

    public function create()
    {
        return view('questioning.bbsq_non_service._info');
    }

    public function show($id)
    {
        $safety_talk = $this->bbsqNonServiceServices->getOne($id);
        return view('questioning.bbsq_non_service._detail', compact('safety_talk'));
    }

    public function edit($id)
    {
        $safety_talk = $this->bbsqNonServiceServices->getOne($id);
        return view('questioning.bbsq_non_service.add', compact('safety_talk'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'safety_talk', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->bbsqNonServiceServices->createBbsqNonService($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'safety_talk', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->bbsqNonServiceServices->updateBbsqNonService($param, $id);
    }
}
