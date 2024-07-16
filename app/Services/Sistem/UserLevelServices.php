<?php

namespace App\Services\Sistem;

use App\Models\UserLevel;
use App\Services\Services;
use Illuminate\Http\Request;

class UserLevelServices extends Services 
{
    protected $user;
    public function __constract(UserLevel $user)
    {
        $this->user = $user;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->user->where($column, $value)->first();
    }

    public function searchUserLevel($params)
    {
        $user = $this->user;

        $nama = $params['nama'] ?? '';
        if ($nama !== '') $user = $user->where('nama', $nama);

        return $this->searchUserLevel($params, $user);
    }

    public function saveUserLevel(Request $request)
    {
        $id = $request->input('id') ?? '';
        if ($id == '') {
            $user = $this->user->create($request->all());
        } else {
            $user = $this->user->find($id);
            $user->update($request->all());
        }
        return $user;
    }

    public function deleteUserLevel($id)
    {
        $user = $this->user->find($id);
        if ($user) $user->delete();
        return $user;
    }

    public function listUserLevel()
    {
        $result = [];
        foreach ($this->searchUserLevel([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }
}