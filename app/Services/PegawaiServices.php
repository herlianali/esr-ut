<?php

namespace App\Services;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiServices extends Services 
{
    protected $pegawai;
    public function __constract(Pegawai $pegawai)
    {
        $this->pegawai = $pegawai;
    }

    public function getOnse($value, $column = 'id')
    {
        return $this->pegawai->where($column, $valur)->first();
    }

    public function searchPegawai($params)
    {
        $pegawai = $this->pegawai;

        $nik = $params['nik'] ?? '';
        if ($nik !== '') $pegawai = $pegawai->where('nik', $nik);

        return $this->searchPegawai($params, $pegawai);
    }

    public function savePegawai(Request $request)
    {
        $id = $request->input('id') ?? '';
        if ($id == '') {
            $pegawai = $this->pegawai->create($request->all());
        } else {
            $pegawai = $this->pegawai->find($id);
            $pegawai->update($request->all());
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
}