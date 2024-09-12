<?php

namespace App\Services\Questioning;

use App\Models\Questioning\InspeksiTools;
use App\Services\Services;
use Illuminate\Http\Request;

class InspeksiToolsServices extends Services 
{
    protected $inspeksi_tools;
    public function __construct(InspeksiTools $inspeksi_tools)
    {
        $this->inspeksi_tools = $inspeksi_tools;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->inspeksi_tools->where($column, $value)->first();
    }

    public function searchInspeksiTools($params)
    {
        $inspeksi_tools = $this->inspeksi_tools;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $inspeksi_tools = $inspeksi_tools->where('tanggal', $tanggal);

        return $this->searchResponse($params, $inspeksi_tools);
    }

    public function createInspeksiTools($params)
    {
        return $this->inspeksi_tools->create($params);
    }

    public function updateInspeksiTools($params, $id)
    {

        $inspeksi_tools = $this->inspeksi_tools->find($id);
        if ($inspeksi_tools) $inspeksi_tools->update($params);
        return $inspeksi_tools;
    }

    public function deleteInspeksiTools($id)
    {
        $inspeksi_tools = $this->inspeksi_tools->find($id);
        if ($inspeksi_tools) $inspeksi_tools->delete();
        return $inspeksi_tools;
    }

    public function listPosisi()
    {
        // $result = [];
        // foreach ($this->inspeksi_tools::LIST_POSISI as $value) $result[$value] = $value;
        // return $result;
        return $this->inspeksi_tools::LIST_POSISI;
    }
    
}