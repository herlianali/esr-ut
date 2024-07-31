<?php

namespace App\Services\Sistem;

use App\Models\HakAkses;
use App\Services\Services;

class HakAksesServices extends Services
{
    protected $hakAkses, $userLevelServices;
    public function __construct(HakAkses $hakAkses, UserLevelServices $userLevelServices)
    {
        $this->hakAkses = $hakAkses;
        $this->userLevelServices = $userLevelServices;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->hakAkses->where($column, $value)->first();
    }

    public function searchHakAkses($params)
    {
        $hakAkses = $this->hakAkses;

        $nama = $params['nama'] ?? '';
        if ($nama !== '') $hakAkses = $hakAkses->where('nama', 'like', "%$nama%");

        return $this->searchResponse($params, $hakAkses);
    }

    public function createHakAkses($params)
    {
        return $this->hakAkses->create($params);
    }

    public function updateHakAkses($params, $id)
    {

        $hakAkses = $this->hakAkses->find($id);
        if ($hakAkses) $hakAkses->update($params);
        return $hakAkses;
    }

    public function deleteHakAkses($id)
    {
        $hakAkses = $this->hakAkses->find($id);
        if ($hakAkses) $hakAkses->delete();
        return $hakAkses;
    }
}