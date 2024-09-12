<?php

namespace App\Services\Questioning;

use App\Models\Pengawas;
use App\Services\Services;
use App\Services\Sistem\PengawasServices;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class PlanServices extends Services
{
    protected $cutiService, $pengawasServices;
    public function __construct(CutiServices $cutiService, PengawasServices $pengawasServices)
    {
        $this->cutiService = $cutiService;
        $this->pengawasServices = $pengawasServices;
    }

    public function jumlahHariCuti($nama_pengawas, $mount)
    {
        if($mount === '') return date('m');
        $sum_day_now = date_now_sum($mount);
        $day_cuti = $this->cutiService->searchCuti(['nama_pengawas' => $nama_pengawas, 'sum' => 'total_cuti']);
        $result = $sum_day_now - $day_cuti;
        return $result;
    }

    public function reportCuti($param)
    {
        $pengawas = $this->pengawasServices->searchPengawas([]);

        $result = [];

        foreach($pengawas as $value){
            $hari_aktif = $this->jumlahHariCuti($value->user->nama, $param->mount);
            $result[] = [
                'nama_pengawas' => $value->user->nama,
                'kelompok_target' => $value->kelompok_target,
                'sektor' => $value->sektor->nama,
                'hari_aktif' => $hari_aktif,
                'gc_plan_prop' => (int)format_number(round($param->plan_awal_gc / date_now_sum($param->mount) * $hari_aktif)),
                'st_plan_prop' => (int)format_number(round($param->st_plan_prop / date_now_sum($param->mount) * $hari_aktif)),
                'jsa_plan_prop' => (int)format_number(round($param->jsa_plan_prop / date_now_sum($param->mount) * $hari_aktif)),
                'p5m_plan_prop' => (int)format_number(round($param->p5m_plan_prop / date_now_sum($param->mount) * $hari_aktif)),
                'flpg_plan_prop' => (int)format_number(round($param->flpg_plan_prop / date_now_sum($param->mount) * $hari_aktif)),
                'hk_plan_prop' => (int)format_number(round($param->hk_plan_prop / date_now_sum($param->mount) * $hari_aktif)),
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
