<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Services\Questioning\CutiServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    protected $cutiService, $pengawasServices;
    public function __construct(CutiServices $cutiService, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->cutiService = $cutiService;
        $this->pengawasServices = $pengawasServices;
        view()->share([
            'title' => "Report Cuti",
            'active_route' => "report.green_card.index",
            'list_pengawas' => $pengawasServices->listNamaPengawas()
        ]);
    }

    public function index()
    {
        return view('report.cuti.index');
    }

    public function search(Request $request)
    {
        $cuti = $this->cutiService->searchCuti($request);
        return view('report.cuti._table', compact('cuti'));
    }
}
