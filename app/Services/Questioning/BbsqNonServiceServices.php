<?php

namespace App\Services\Questioning;

use App\Models\Questioning\BbsqNonService;
use App\Services\Services;
use Illuminate\Http\Request;

class BbsqNonServiceServices extends Services 
{
    protected $bbsqNonService;
    public function __construct(BbsqNonService $bbsqNonService)
    {
        $this->bbsqNonService = $bbsqNonService;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->bbsqNonService->where($column, $value)->first();
    }

    public function searchBbsqNonService($params)
    {
        $bbsqNonService = $this->bbsqNonService;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $bbsqNonService = $bbsqNonService->where('tanggal', $tanggal);

        return $this->searchResponse($params, $bbsqNonService);
    }

    public function createBbsqNonService($params)
    {
        return $this->bbsqNonService->create($params);
    }

    public function updateBbsqNonService($params, $id)
    {

        $bbsqNonService = $this->bbsqNonService->find($id);
        if ($bbsqNonService) $bbsqNonService->update($params);
        return $bbsqNonService;
    }

    public function deleteBbsqNonService($id)
    {
        $bbsqNonService = $this->bbsqNonService->find($id);
        if ($bbsqNonService) $bbsqNonService->delete();
        return $bbsqNonService;
    }

    public function listPerusahaan()
    {
        return $this->bbsqNonService::LIST_PERUSAHAN;
    }

    public function listArea()
    {
        return $this->bbsqNonService::LIST_AREA;
    }

    public function listKategori()
    {
        return $this->bbsqNonService::LIST_KATEGORI;
    }

    public function listFolowup()
    {
        return $this->bbsqNonService::LIST_FOLOWUP;
    }
}