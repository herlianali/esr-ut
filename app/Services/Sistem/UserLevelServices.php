<?php

namespace App\Services\Sistem;

use App\Models\UserLevel;
use App\Services\Services;
use Illuminate\Http\Request;

class UserLevelServices extends Services 
{
    protected $userLevel;
    public function __construct(UserLevel $userLevel)
    {
        $this->userLevel = $userLevel;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->userLevel->where($column, $value)->first();
    }

    public function searchUserLevel($params)
    {
        $userLevel = $this->userLevel;

        if (isset($params['nama']) && $params['nama'] !== '') {
            $userLevel = $userLevel->where('nama', 'like', "%{$params['nama']}%");
        }
        
        return $this->searchResponse($params, $userLevel);
    }

    public function createUserLevel($params)
    {
        return $this->userLevel->create($params);
    }

    public function updateUserLevel($params, $id)
    {

        $userLevel = $this->userLevel->find($id);
        if ($userLevel) $userLevel->update($params);
        return $userLevel;
    }

    public function deleteUserLevel($id)
    {
        $userLevel = $this->userLevel->find($id);
        if ($userLevel) $userLevel->delete();
        return $userLevel;
    }

    public function listUserLevel()
    {
        $result = [];
        foreach ($this->searchUserLevel([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }
}