<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Services\PlanTargetServices;
use Illuminate\Http\Request;

class PlanTargetController extends Controller
{
    protected $planTargetServices;
    public function __construct(PlanTargetServices $planTargetServices) {
        $this->planTargetServices = $planTargetServices;
        view()->share([
            'title'     => 'Plan Target',
            'list_item' => $this->planTargetServices->listItem(),
        ]);
    }

    public function index()
    {
        return view('report.target_plan.index');
    }

    public function create()
    {
        $plan_target = null;
        return view('questioning.plan_target._info',compact('plan_target'));
    }

    public function show($id)
    {
        $plan_target = $this->planTargetServices->getOne($id);
        return view('questioning.plan_target._detail', compact('plan_target'));
    }

    public function edit($id)
    {
        $create = 0;
        $cuti = $this->planTargetServices->getOne($id);
        return view('questioning.cuti.add', compact('cuti', 'create'));
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
        return view('report.target_plan._table', compact('plan_target'));
    }
}
