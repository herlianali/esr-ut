<?php

namespace App\Services\Questioning;

use App\Models\Questioning\JSA;
use App\Services\Services;
use Illuminate\Http\Request;

class JSAServices extends Services 
{
    protected $jsa;
    public function __construct(JSA $jsa)
    {
        $this->jsa = $jsa;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->jsa->where($column, $value)->first();
    }

    public function searchJsa($params)
    {
        $jsa = $this->jsa;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $jsa = $jsa->where('tanggal', $tanggal);

        return $this->searchResponse($params, $jsa);
    }

    public function createJsa($params)
    {
        return $this->jsa->create($params);
    }

    public function updateJsa($params, $id)
    {

        $jsa = $this->jsa->find($id);
        if ($jsa) $jsa->update($params);
        return $jsa;
    }

    public function deleteJsa($id)
    {
        $jsa = $this->jsa->find($id);
        if ($jsa) $jsa->delete();
        return $jsa;
    }
}