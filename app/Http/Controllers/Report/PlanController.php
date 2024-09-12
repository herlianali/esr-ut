<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Services\Questioning\PlanServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    protected $planService;
    public function __construct(PlanServices $planService, PengawasServices $pengawasServices) {
        $this->planService = $planService;
        view()->share([
            'title' => "Report Plan",
            'active_route' => "report.plan.index",
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
        ]);
    }

    public function index()
    {
        return view('report.plan.index');
    }

    public function search(Request $request)
    {
        $request->merge([
            'plan_awal_gc' => 15, 
            'st_plan_prop' => 2, 
            'jsa_plan_prop' => 1, 
            'p5m_plan_prop' => 7, 
            'flpg_plan_prop' => 13, 
            'hk_plan_prop' => 8
        ]);
        
        $plan = $this->planService->reportCuti($request);
        return view('report.plan._table', compact('plan'));
    }
}
