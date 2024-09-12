<?php

namespace App\Services\Questioning;

use App\Models\Questioning\Housekeeping;
use App\Services\Services;
use Illuminate\Http\Request;

class HousekeepingServices extends Services 
{
    protected $housekeeping;
    public function __construct(Housekeeping $housekeeping)
    {
        $this->housekeeping = $housekeeping;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->housekeeping->where($column, $value)->first();
    }

    public function searchHouseKeeping($params)
    {
        $housekeeping = $this->housekeeping;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $housekeeping = $housekeeping->where('tanggal', $tanggal);

        return $this->searchResponse($params, $housekeeping);
    }

    public function createHouseKeeping($params)
    {
        return $this->housekeeping->create($params);
    }

    public function updateHouseKeeping($params, $id)
    {

        $housekeeping = $this->housekeeping->find($id);
        if ($housekeeping) $housekeeping->update($params);
        return $housekeeping;
    }

    public function deleteHouseKeeping($id)
    {
        $housekeeping = $this->housekeeping->find($id);
        if ($housekeeping) $housekeeping->delete();
        return $housekeeping;
    }
}