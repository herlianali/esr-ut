<?php

namespace App\Services;

use App\Models\PlanTarget;
use Illuminate\Http\Request;

class PlanTargetServices extends Services 
{
    protected $plan_target;
    public function __construct(PlanTarget $plan_target)
    {
        $this->plan_target = $plan_target;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->plan_target->where($column, $value)->first();
    }

    public function searchPlanTarget($params)
    {
        $plan_target = $this->plan_target;

        $item = $params['item'] ?? '';
        if ($item !== '') $plan_target = $plan_target->where('item', $item);

        return $this->searchResponse($params, $plan_target);
    }

    public function createPlanTarget($params)
    {
        return $this->plan_target->create($params);
    }
    
    public function updatePlanTarget($params, $id)
    {
        $plan_target = $this->plan_target->find($id);
        if ($plan_target) $plan_target->update($params);
        return $plan_target;
    }

    public function deletePlanTarget($id)
    {
        $plan_target = $this->plan_target->find($id);
        if ($plan_target) $plan_target->delete();
        return $plan_target;
    }

    public function listItem()
    {
        return $this->plan_target::LIST_ITEM;
    }
}