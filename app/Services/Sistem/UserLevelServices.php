<?php

namespace App\Services\Sistem;

use App\Models\UserLevel;
use App\Services\Services;
use Illuminate\Http\Request;

class UserLevelServices extends Services 
{
    protected $userLevel;
    public function __constract(UserLevel $userLevel)
    {
        $this->userLevel = $userLevel;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->userLevel->where($column, $value)->first();
    }

    public function searchUserLevel($params)
    {
        $userLevel = new UserLevel;

        $nama = $params['nama'] ?? '';
        if ($nama !== '') $userLevel = $userLevel->where('nama', $nama);

        return $this->searchResponse($params, $userLevel);
    }

    public function saveUserLevel(Request $request)
    {
        $id = $request->input('id') ?? '';
        if ($id == '') {
            $userLevel = $this->userLevel->create($request->all());
        } else {
            $userLevel = $this->userLevel->find($id);
            $userLevel->update($request->all());
        }
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