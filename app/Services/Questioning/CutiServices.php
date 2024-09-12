<?php

namespace App\Services\Questioning;

use App\Models\Pengawas;
use App\Models\Questioning\Cuti;
use App\Services\Services;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class CutiServices extends Services
{
    protected $cuti, $pengawasServices;
    public function __construct(Cuti $cuti, PengawasServices $pengawasServices)
    {
        $this->cuti = $cuti;
        $this->pengawasServices = $pengawasServices;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->cuti->where($column, $value)->first();
    }

    public function searchCuti($params)
    {
        $cuti = $this->cuti;

        $bulan = $params['bulan'] ?? '';
        if ($bulan !== '') $cuti = $cuti->where('bulan', $bulan);

        $nama_pengawas = $params['nama_pengawas'] ?? '';
        if ($nama_pengawas !== '') $cuti = $cuti->where('nama_pengawas', 'LIKE', $nama_pengawas);

        return $this->searchResponse($params, $cuti);
    }

    public function createCuti($params)
    {
        return $this->cuti->create($params);
    }

    public function updateCuti($params, $id)
    {

        $cuti = $this->cuti->find($id);
        if ($cuti) $cuti->update($params);
        return $cuti;
    }

    public function deleteCuti($id)
    {
        $cuti = $this->cuti->find($id);
        if ($cuti) $cuti->delete();
        return $cuti;
    }

    
}
