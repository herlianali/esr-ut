<?php

namespace App\Services\Questioning;

use App\Models\Questioning\SCML;
use App\Services\Services;
use Illuminate\Http\Request;

class SCMLServices extends Services 
{
    protected $scml;
    public function __construct(SCML $scml)
    {
        $this->scml = $scml;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->scml->where($column, $value)->first();
    }

    public function searchScml($params)
    {
        $scml = $this->scml;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $scml = $scml->where('tanggal', $tanggal);

        return $this->searchResponse($params, $scml);
    }

    public function createScml($params)
    {
        return $this->scml->create($params);
    }

    public function updateScml($params, $id)
    {

        $scml = $this->scml->find($id);
        if ($scml) $scml->update($params);
        return $scml;
    }

    public function deleteScml($id)
    {
        $scml = $this->scml->find($id);
        if ($scml) $scml->delete();
        return $scml;
    }
}