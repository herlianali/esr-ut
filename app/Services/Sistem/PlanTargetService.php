<?php

namespace App\Services\Sistem;

use App\Models\PlanTarget;
use App\Services\Services;

class PlanTargetServices extends Services 
{
    protected $planTarget;
    public function __construct(PlanTarget $planTarget)
    {
        $this->planTarget = $planTarget;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->planTarget->where($column, $value)->first();
    }

    public function searchPlanTarget($params)
    {
        $planTarget = $this->planTarget;
        
        if (isset($params['nama']) && $params['nama'] !== '') {
            $planTarget = $planTarget->where('nama', 'like', "%{$params['nama']}%");
        }
    
        return $this->searchResponse($params, $planTarget);
    }

    public function createPlanTarget($params)
    {
        return $this->planTarget->create($params);
    }

    public function updatePlanTarget($params, $id)
    {
        $planTarget = $this->planTarget->find($id);
        if ($planTarget) {
            $planTarget->update($params);
        };
        return $planTarget;
    }

    public function deletePlanTarget($id)
    {
        $planTarget = $this->planTarget->find($id);
        if ($planTarget) $planTarget->delete();
        return $planTarget;
    }


}