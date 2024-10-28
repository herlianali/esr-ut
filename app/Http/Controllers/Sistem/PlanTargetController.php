<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PlanTargetServices;
use Illuminate\Http\Request;

class PlanTargetController extends Controller
{
    protected $planTargetServices;
    public function __construct(
            PlanTargetServices $planTargetServices, 
            FiturProgramServices $fiturProgramServices
        ) {
        $this->middleware('auth');
        $this->planTargetServices = $planTargetServices;
        view()->share([
            'title'        => 'Plan Target',
            'active_route' => 'sistem.plan_target.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
        ]);
    }

    public function index()
    {
        return view('sistem.plan_target.index');
    }

    public function create()
    {
        return view('sistem.plan_target._info');
    }

    public function show($id)
    {
        $getOne = $this->planTargetServices->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $plan_target = $this->planTargetServices->getOne($id);
        return view('sistem.plan_target._info', compact('plan_target', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->planTargetServices->createPlanTarget($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->planTargetServices->updatePlanTarget($request->all(), $id);
    }

    public function search(Request $request)
    {
        $plan_target = $this->planTargetServices->searchPlanTarget($request->all());
        return view('sistem.plan_target._table', compact('plan_target'));
    }

    public function destroy($id)
    {
        return $this->planTargetServices->deletePlanTarget($id);
    }
}
