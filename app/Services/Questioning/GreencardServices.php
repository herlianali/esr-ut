<?php

namespace App\Services\Questioning;

use App\Models\Questioning\Greencard;
use App\Services\Services;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class GreencardServices extends Services 
{
    protected $greencard, $pengawasServices, $planServices;
    public function __construct(Greencard $greencard, PengawasServices $pengawasServices, PlanServices $planServices)
    {
        $this->greencard = $greencard;
        $this->pengawasServices = $pengawasServices;
        $this->planServices = $planServices;

    }

    public function getOne($value, $column = 'id')
    {
        return $this->greencard->where($column, $value)->first();
    }

    public function searchGreencard($params)
    {
        $greencard = $this->greencard;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $greencard = $greencard->where('tanggal', $tanggal);

        $dateStart = $params['dateStart'] ?? '';
        $dateEnd = $params['dateEnd'] ?? '';
        if ($dateStart !== '' && $dateEnd !== '') $greencard = $greencard->whereBetween('tanggal', [$dateStart, $dateEnd]);

        $mount = $params['mount'] ?? '';
        if($mount !== '') $greencard = $greencard->where('tanggal', 'LIKE', "{$mount}%");

        $nama_pengawas = $params['nama_pengawas'] ?? '';
        if ($nama_pengawas !== '') $greencard = $greencard->where('nama_pengawas', $nama_pengawas);

        $nama_lengkap = $params['nama_lengkap'] ?? '';
        if ($nama_lengkap !== '') $greencard = $greencard->where('nama_lengkap', $nama_lengkap);

        return $this->searchResponse($params, $greencard);
    }

    public function createGreencard($params)
    {
        return $this->greencard->create($params);
    }

    public function updateGreencard($params, $id)
    {

        $greencard = $this->greencard->find($id);
        if ($greencard) $greencard->update($params);
        return $greencard;
    }

    public function deleteGreencard($id)
    {
        $greencard = $this->greencard->find($id);
        if ($greencard) $greencard->delete();
        return $greencard;
    }

    public function getActual($target_prop, $actual)
    {
        $result_cek = ($target_prop != 0) ? ($actual / $target_prop) : 1;
        $result = round(min(1, $result_cek)*100);
        return $result;
    }

    public function getReportGreencard($params)
    {
        $greenCard = [];
        $mount     = format_mount($params->mount);
        $pengawas  = $this->pengawasServices->searchPengawas(['id' => $params->nama_pengawas, 'sektor_id' => $params->sektor]);
        foreach ($pengawas as $value) {
            $actual      = $this->searchGreencard(['nama_pengawas' => $value->user->nama, 'mount' => $mount, 'count' => 1]);
            $hari_aktif  = $this->planServices->jumlahHariCuti($value->user->nama, $params->mount);
            $target_prop = (int)format_number(round($params->plan_awal_gc / date_now_sum($params->mount) * $hari_aktif));
            $greenCard[] = [
                'nama_pengawas'       => $value->user->nama,
                'kelompok_target'     => $value->kelompok_target,
                'sektor'              => $value->sektor->nama,
                'target_proporsional' => $target_prop,
                'actual'              => $actual,
                'persentase'          => $this->getActual($target_prop, $actual),
                'total_bulan_ini'     => $this->searchGreencard(['nama_pengawas' => $value->user->nama, 'mount' => $mount, 'count' => 1])
            ];
        }

        $return = paginate($greenCard);
        
        return $return;

    }

    public function listPerusahaan()
    {
        $result = [];
        foreach ($this->greencard::LIST_PERUSAHAAN as $value) $result[$value] = $value;
        return $result;
    }

    public function listSektor1()
    {
        $result = [];
        foreach ($this->greencard::LIST_SEKTOR_1 as $value) $result[$value] = $value;
        return $result;
    }

    public function listSektor2()
    {
        $result = [];
        foreach ($this->greencard::LIST_SEKTOR_2 as $value) $result[$value] = $value;
        return $result;
    }

    public function listDeviasi()
    {
        $result = [];
        foreach ($this->greencard::LIST_DEVIASI as $value) $result[$value] = $value;
        return $result;
    }

}