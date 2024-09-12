<?php

namespace App\Services\Questioning;

use App\Models\Questioning\BbsqService;
use App\Services\Services;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class BbsqServiceServices extends Services 
{
    protected $bbsq_service;
    public function __construct(BbsqService $bbsq_service)
    {
        $this->bbsq_service = $bbsq_service;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->bbsq_service->where($column, $value)->first();
    }

    public function searchBbsqService($params)
    {
        $bbsq_service = $this->bbsq_service;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $bbsq_service = $bbsq_service->where('tanggal', $tanggal);

        return $this->searchResponse($params, $bbsq_service);
    }

    public function createBbsqService($params)
    {
        return $this->bbsq_service->create($params);
    }

    public function updateBbsqService($params, $id)
    {

        $bbsq_service = $this->bbsq_service->find($id);
        if ($bbsq_service) $bbsq_service->update($params);
        return $bbsq_service;
    }

    public function deleteBbsqService($id)
    {
        $bbsq_service = $this->bbsq_service->find($id);
        if ($bbsq_service) $bbsq_service->delete();
        return $bbsq_service;
    }

    public function listPerusahaan()
    {
        return $this->bbsq_service::LIST_PERUSAHAAN;
    }

    public function listRintangan()
    {
        return $this->bbsq_service::LIST_RINTANGAN;
    }

    
}