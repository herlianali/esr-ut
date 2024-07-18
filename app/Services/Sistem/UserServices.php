<?php

namespace App\Services\Sistem;

use App\Models\User;
use App\Services\Services;
use Illuminate\Http\Request;

class UserServices extends Services 
{
    protected $user;
    public function __constract(User $user)
    {
        $this->user = $user;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->user->where($column, $value)->first();
    }

    public function searchUser($params)
    {
        $user = new User;
        
        $nama = $params['nama'] ?? '';
        if ($nama !== '') $user = $user->where('nama', 'like', "%$nama%");

        $email = $params['email'] ?? '';
        if ($email !== '') $user = $user->where('email', 'like', "%$email%");

        return $this->searchResponse($params, $user);
    }

    public function saveUser(Request $request)
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