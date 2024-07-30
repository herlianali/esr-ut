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

        $nama_lengkap = $params['nama_lengkap'] ?? '';
        if ($nama_lengkap !== '') $pegawai = $pegawai->where('nama_lengkap', $nama_lengkap);

        $is_pengawas = $params['is_pengawas'] ?? '';
        if ($is_pengawas !== '') $pegawai = $pegawai->where('is_pengawas', $is_pengawas);

        return $this->searchResponse($params, $pegawai);
    }

    public function savePegawai(Request $request)
    {
        $pegawai = New Pegawai();
        $request->merge(['is_pengawas' => (int)$request->pengawas]);
        $params = $request->except(['nama', 'password', 'email', 'user_level_id']);
        $id = $params['id_pegawai'] ?? '';
        if ($id == '') {
            $pegawai = $pegawai->create($params);
        } else {
            $pegawai = $pegawai->find($id);
            $pegawai->update($params);
        }
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

    public function listPengawas()
    {
        $result = [];
        foreach ($this->searchPegawai(['is_pengawas' => 0]) as $value) $result[$value->id] = $value->nama_lengkap;
        return $result;
    }
}