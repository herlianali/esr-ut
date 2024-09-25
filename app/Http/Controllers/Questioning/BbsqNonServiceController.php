<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\BbsqNonServiceServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class BbsqNonServiceController extends Controller
{
    protected $bbsqNonServiceServices;
    public function __construct(
            BbsqNonServiceServices $bbsqNonServiceServices, 
            PengawasServices $pengawasServices, 
            FiturProgramServices $fiturProgramServices,
        )
    {
        $this->middleware('auth');
        $this->bbsqNonServiceServices = $bbsqNonServiceServices;
        view()->share([
            'title'                     => 'BBSQ Non Service',
            'menu'                      => '1',
            'active_route'              => 'questioning.bbsq_non_service.index',
            'fitur'                     => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas'             => $pengawasServices->listNamaPengawas(),
            'list_perusahaan'           => $bbsqNonServiceServices->listPerusahaan(),
            'list_area'                 => $bbsqNonServiceServices->listArea(),
            'list_kategori'             => $bbsqNonServiceServices->listKategori(),
            'list_Folowup'              => $bbsqNonServiceServices->listFolowup(),
            'option_prosedur'           => $bbsqNonServiceServices->optionPosedur(),
            'option_alat_peralatan'     => $bbsqNonServiceServices->optionAlatPeralatan(),
            'option_lingkungan_kerja'   => $bbsqNonServiceServices->optionLingkunganKerja(),
            'option_karyawan'           => $bbsqNonServiceServices->optionKaryawan(),
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
        $bbsq_non_service = $this->bbsqNonServiceServices->getOne($id);
        $prosedur = json_decode($bbsq_non_service->prosedur, true);
        $peralatan = json_decode($bbsq_non_service->peralatan, true);
        $lingkungan_kerja = json_decode($bbsq_non_service->lingkungan_kerja, true);
        $karyawan = json_decode($bbsq_non_service->karyawan, true);
        return view('questioning.bbsq_non_service._detail', compact('bbsq_non_service', 'prosedur', 'peralatan', 'lingkungan_kerja', 'karyawan'));
    }

    public function edit($id)
    {
        $bbsq_non_service = $this->bbsqNonServiceServices->getOne($id);
        $prosedur = json_decode($bbsq_non_service->prosedur, true);
        $peralatan = json_decode($bbsq_non_service->peralatan, true);
        $lingkungan_kerja = json_decode($bbsq_non_service->lingkungan_kerja, true);
        $karyawan = json_decode($bbsq_non_service->karyawan, true);
        return view('questioning.bbsq_non_service.add', compact('bbsq_non_service', 'prosedur', 'peralatan', 'lingkungan_kerja', 'karyawan'));
    }

    public function store(Request $request)
    {
        return $this->bbsqNonServiceServices->createBbsqNonService($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->bbsqNonServiceServices->updateBbsqNonService($request->all(), $id);
    }
}
