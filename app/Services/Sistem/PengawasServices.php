<?php

namespace App\Services\Sistem;

use App\Models\Pengawas;
use App\Services\Services;

class PengawasServices extends Services 
{
    protected $pengawas, $userServices, $sektorServices;
    public function __construct(Pengawas $pengawas, UserServices $userServices, SektorServices $sektorServices)
    {
        $this->pengawas = $pengawas;
        $this->userServices = $userServices;
        $this->sektorServices = $sektorServices;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->pengawas->where($column, $value)->first();
    }

    public function searchPengawas($params)
    {
        $pengawas = $this->pengawas;
        
        $id = $params['id'] ?? '';
        if ($id !== '') $pengawas = $pengawas->where('id', $id);

        $sektor_id = $params['sektor_id'] ?? '';
        if ($sektor_id !== '') $pengawas = $pengawas->where('sektor_id', $sektor_id);

        if (isset($params['user_id']) && $params['user_id'] !== '') {
            $pengawas = $pengawas->where('user_id', 'like', "%{$params['user_id']}%");
        }

        if (isset($params['sektor']) && $params['sektor'] !== '') {
            $pengawas = $pengawas->where('sektor', 'like', "%{$params['sektor']}%");
        }
    
        if (isset($params['kelompok_target']) && $params['kelompok_target'] !== '') {
            $pengawas = $pengawas->where('kelompok_target', 'like', "%{$params['kelompok_target']}%");
        }
        
        return $this->searchResponse($params, $pengawas);
    }

    public function createPengawas($params)
    {
        return $this->pengawas->create($params);
    }

    public function updatePengawas($params, $id)
    {
        $pengawas = $this->pengawas->find($id);
        if ($pengawas) $pengawas->update($params);
        return $pengawas;
    }

    public function deletePengawas($id)
    {
        $pengawas = $this->pengawas->find($id);
        if ($pengawas) $pengawas->delete();
        return $pengawas;
    }

    public function listKelompokTarget()
    {
        $result = [];
        foreach (Pengawas::LIST_KELOMPOK_TARGET as $value) $result[$value] = $value;
        return $result;
    }

    public function listUser()
    {
        $result = [];
        foreach ($this->userServices->searchUser([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }

    public function listSektor()
    {
        $result = [];
        foreach ($this->sektorServices->searchSektor([]) as $value) $result[$value->id] = $value->nama." ( ".($value->sub_sektor ?? '-')." ) ";
        return $result;
    }

    public function listPengawas()
    {
        $result = [];
        foreach ($this->searchPengawas([]) as $value) $result[$value->id] = $value->user->nama;
        return $result;
    }

    public function listNamaPengawas()
    {
        $result = [];
        foreach ($this->searchPengawas([]) as $value) $result[$value->user->nama] = $value->user->nama;
        return $result;
    }
}