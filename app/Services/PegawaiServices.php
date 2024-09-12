<?php

namespace App\Services;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiServices extends Services 
{
    protected $pegawai;
    public function __construct(Pegawai $pegawai)
    {
        $this->pegawai = $pegawai;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->pegawai->where($column, $value)->first();
    }

    public function searchPegawai($params)
    {
        $pegawai = $this->pegawai;

        $nik = $params['nik'] ?? '';
        if ($nik !== '') $pegawai = $pegawai->where('nik', $nik);

        return $this->searchPegawai($params, $pegawai);
    }

    public function createPegawai($params)
    {
        return $this->pegawai->create($params);
    }
    
    public function updatePegawai($params, $id)
    {
        $pegawai = $this->pegawai->find($id);
        if ($pegawai) $pegawai->update($params);
        return $pegawai;
    }

    public function deletePegawai($id)
    {
        $pegawai = $this->pegawai->find($id);
        if ($pegawai) $pegawai->delete();
        return $pegawai;
    }

    public function listPegawai()
    {
        $result = [];
        foreach ($this->searchPegawai([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }
}