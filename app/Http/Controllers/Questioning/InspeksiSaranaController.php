<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\InspeksiSaranaServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class InspeksiSaranaController extends Controller
{
    protected $inspeksiSaranaServices;
    public function __construct(
            InspeksiSaranaServices $inspeksiSaranaServices, 
            PengawasServices $pengawasServices, 
            FiturProgramServices $fiturProgramServices
        )
    {
        $this->middleware('auth');
        $this->inspeksiSaranaServices = $inspeksiSaranaServices;
        view()->share([
            'title'                     => 'Inspeksi Sarana',
            'active_route'              => 'questioning.inspeksi_sarana.index',
            'fitur'                     => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas'             => $pengawasServices->listNamaPengawas(),
            'options_kondisi_kendaraan' => $inspeksiSaranaServices->optionsKondisiKendaran(),
            'options_driver'            => $inspeksiSaranaServices->optionsDriver(),
            'options_prosedur'          => $inspeksiSaranaServices->optionsProsedur(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.inspeksi_sarana.add');
    }

    public function create()
    {
        return view('questioning.inspeksi_sarana._info');
    }

    public function show($id)
    {
        $inspeksi_sarana = $this->inspeksiSaranaServices->getOne($id);
        $kondisi = json_decode($inspeksi_sarana->kondisi_kendaraan, true);
        $driver = json_decode($inspeksi_sarana->driver_dan_penumpang, true);
        $prosedur = json_decode($inspeksi_sarana->prosedur_standar, true);
        return view('questioning.inspeksi_sarana._detail', compact('inspeksi_sarana', 'kondisi', 'driver', 'prosedur'));
    }

    public function edit($id)
    {
        $inspeksi_sarana = $this->inspeksiSaranaServices->getOne($id);
        $kondisi = json_decode($inspeksi_sarana->kondisi_kendaraan, true);
        $driver = json_decode($inspeksi_sarana->driver_dan_penumpang, true);
        $prosedur = json_decode($inspeksi_sarana->prosedur_standar, true);
        return view('questioning.inspeksi_sarana.add', compact('inspeksi_sarana', 'kondisi', 'driver', 'prosedur'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        return $this->inspeksiSaranaServices->createInspeksiSarana($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        return $this->inspeksiSaranaServices->updateInspeksiSarana($request->all(), $id);
    }
}
