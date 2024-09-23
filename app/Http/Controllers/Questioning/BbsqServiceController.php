<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\BbsqServiceServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class BbsqServiceController extends Controller
{
    protected $bbsqServiceServices, $questioningOptionsServices;
    public function __construct(
            BbsqServiceServices $bbsqServiceServices, 
            PengawasServices $pengawasServices,
            QuestioningOptionsServices $questioningOptionsServices, 
            FiturProgramServices $fiturProgramServices
        ) 
    {
        $this->questioningOptionsServices = $questioningOptionsServices;
        $this->middleware('auth');
        view()->share([
            'title'             => 'BBSQ Service',
            'active_route'      => 'questioning.bbsq_service.index',
            'fitur'             => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas'     => $pengawasServices->listNamaPengawas(),
            'list_perusahaan'   => $bbsqServiceServices->listPerusahaan(),
            'list_rintangan'    => $bbsqServiceServices->listRintangan(),
        ]);
    }

    public function index()
    {
        return view('questioning.bbsq_service.add');
    }

    public function create()
    {
        return view('questioning.bbsq_service._info');
    }

    public function show($id)
    {
        $getOne = $this->bbsqServiceServices->getOne($id);
    }

    public function edit($id)
    {
        $flpg = $this->bbsqServiceServices->getOne($id);
        $aktivitas = json_decode($flpg->aktivitas, true);
        return view('questioning.bbsq_service.add', compact('flpg', 'aktivitas'));
    }
    
    public function store(Request $request)
    {
        return $this->bbsqServiceServices->createBbsqService($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->bbsqServiceServices->updateBbsqService($request->all(), $id);
    }

    public function search(Request $request)
    {
        $flpg = $this->bbsqServiceServices->searchBbsqService($request->all());
        return view('questioning.bbsq_service._table', compact('flpg'));
    }

    public function options($id)
    {
        $list_options = $this->questioningOptionsServices->listObservasi((int)$id);
        return view('questioning.bbsq_service.observasi._options', compact('list_options'));
    }
}
