<?php

namespace App\Services\Questioning;

use App\Models\Questioning\SafetyTalk;
use App\Services\Services;
use Illuminate\Http\Request;

class SafetyTalkServices extends Services 
{
    protected $safetyTalk;
    public function __construct(SafetyTalk $safetyTalk)
    {
        $this->safetyTalk = $safetyTalk;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->safetyTalk->where($column, $value)->first();
    }

    public function searchSafetyTalk($params)
    {
        $safetyTalk = $this->safetyTalk;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $safetyTalk = $safetyTalk->where('tanggal', $tanggal);

        return $this->searchResponse($params, $safetyTalk);
    }

    public function createSafetyTalk($params)
    {
        return $this->safetyTalk->create($params);
    }

    public function updateSafetyTalk($params, $id)
    {

        $safetyTalk = $this->safetyTalk->find($id);
        if ($safetyTalk) $safetyTalk->update($params);
        return $safetyTalk;
    }

    public function deleteSafetyTalk($id)
    {
        $safetyTalk = $this->safetyTalk->find($id);
        if ($safetyTalk) $safetyTalk->delete();
        return $safetyTalk;
    }

    public function listLokasi()
    {
        $result = [];
        foreach($this->safetyTalk::LIST_LOKASI as $value) $result[$value] = $value;
        return $result;
    }
}