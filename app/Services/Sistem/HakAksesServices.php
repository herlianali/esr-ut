<?php

namespace App\Services\Sistem;

use App\Models\HakAkses;
use App\Services\Services;

class HakAksesServices extends Services {

    protected $hakAkses, $userLevelServices;
    public function __construct(HakAkses $hakAkses, UserLevelServices $userLevelServices)
    {
        $this->userLevelServices = $userLevelServices;
        $this->hakAkses = $hakAkses;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->hakAkses->where($column, $value)->first();
    }

    public function searchHakAkses($params)
    {
        $hakAkses = $this->hakAkses;

        $nama = $params['nama'] ?? '';
        if ($nama !== '') $hakAkses = $hakAkses->where('nama', $nama);

        return $this->searchResponse($params, $hakAkses);
    }

    public function createHakAkses($params)
    {
        return $this->hakAkses->create($params);
    }

    public function updateHakAkses($params, $id)
    {
        $hakAkses = $this->hakAkses->find($id);
        if ($hakAkses) {
            $hakAkses->update($params);
        };
        return $hakAkses;
    }

    public function deleteHakAkses($id)
    {
        $hakAkses = $this->hakAkses->find($id);
        if ($hakAkses) $hakAkses->delete();
        return $hakAkses;
    }

    public function listUserLevel()
    {
        $result = [];
        foreach ($this->userLevelServices->searchUserLevel([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }
}