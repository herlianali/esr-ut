<?php

namespace App\Services\Sistem;

use App\Models\User;
use App\Services\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserServices extends Services 
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->user->where($column, $value)->first();
    }

    public function searchUser($params)
    {
        $user = $this->user;
        
        if (isset($params['nama']) && $params['nama'] !== '') {
            $user = $user->where('nama', 'like', "%{$params['nama']}%");
        }
    
        if (isset($params['email']) && $params['email'] !== '') {
            $user = $user->where('email', 'like', "%{$params['email']}%");
        }
        
        return $this->searchResponse($params, $user);
    }

    public function createUser($params)
    {
        $params = $this->cleanDate($params, ['tanggal_lahir']);
        $params = $this->strToInt($params, ['user_level_id']);
        if (!empty($params['password'])) $params['password'] = Hash::make($params['password']);
        $user = $this->user->create($params);
        // if (!empty($params['role'])) $this->assignUserRole($params['role'], $user);
        return $user;
    }

    public function updateUser($params, $id)
    {
        $params = $this->cleanDate($params, ['tanggal_lahir']);
        if (($params['password'] ?? '') === '') unset($params['password']);
        else $params['password'] = Hash::make($params['password']);

        $user = $this->user->find($params);
        if ($user) {
            $user->update($params);
        //     if (!empty($params['role'])) $this->assignUserRole($params['role'], $user);
        }
        return $user;
    }

    public function deleteUser($id)
    {
        $user = $this->user->find($id);
        if ($user) $user->delete();
        return $user;
    }

    public function listUser()
    {
        $result = [];
        foreach ($this->searchUser([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }


}