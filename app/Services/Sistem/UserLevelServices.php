<?php

namespace App\Services\Sistem;

use App\Models\UserLevel;
use App\Services\Services;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class UserLevelServices extends Services 
{
    protected $userLevel, $fiturProgramServices;
    public function __construct(UserLevel $userLevel, FiturProgramServices $fiturProgramServices)
    {
        $this->fiturProgramServices = $fiturProgramServices;
        $this->userLevel = $userLevel;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->userLevel->where($column, $value)->first();
    }

    public function searchUserLevel($params)
    {
        $userLevel = $this->userLevel;

        $nama = $params['nama'] ?? '';
        if ($nama !== '') $userLevel = $userLevel->where('nama', $nama);

        return $this->searchResponse($params, $userLevel);
    }

    public function createUserLevel($params)
    {
        $params = array_merge($params, ['akses_menu' => json_encode($params['akses_menu'])]);
        return $this->userLevel->create($params);
    }

    public function updateUserLevel($params, $id)
    {
        $userLevel = $this->userLevel->find($id);
        if ($userLevel) {
            $userLevel->update($params);
        };
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

    public function tableUserLevel($params)
    {
        $result = [];
        $user_level = $this->searchUserLevel([$params]);
        foreach ($user_level as $value) {
            if(!empty($value->akses_menu)){ 
                $akses_menu_id = json_decode($value->akses_menu, true);
                $akses_menu = $this->fiturProgramServices->searchFiturProgram(['query_in' => array_map('intval', $akses_menu_id)]);
            }else{
                $akses_menu = "";
            };
            
            $result[] = [
                'id' => $value->id,
                'nama' => $value->nama,
                'keterangan' => $value->keterangan,
                'akses_menu' => $akses_menu,
            ];
        }

        $resultCollection = collect($result);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10;
        $currentPageItems = $resultCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedResult = new LengthAwarePaginator($currentPageItems, $resultCollection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return $paginatedResult;
    }
}