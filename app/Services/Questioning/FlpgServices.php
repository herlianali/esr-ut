<?php

namespace App\Services\Questioning;

use App\Models\Questioning\Flpg;
use App\Services\Services;
use Illuminate\Http\Request;

class FlpgServices extends Services 
{
    protected $flpg;
    public function __construct(Flpg $flpg)
    {
        $this->flpg = $flpg;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->flpg->where($column, $value)->first();
    }

    public function searchFlpg($params)
    {
        $flpg = $this->flpg;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $flpg = $flpg->where('tanggal', $tanggal);

        return $this->searchResponse($params, $flpg);
    }

    public function createFlpg($params)
    {
        $process = [];
        $people = [];
        $equipment = [];
        $supervision = [];
        $keadaan = [];
        $tindakan = [];
        foreach ($params as $key => $value) {
            if (str_starts_with($key, 'process_flpg_')) {
                $process[$key] = $value;
            }
            if (str_starts_with($key, 'people_flpg_')) {
                $people[$key] = $value;
            }
            if (str_starts_with($key, 'equipment_flpg_')) {
                $equipment[$key] = $value;
            }
            if (str_starts_with($key, 'supervision_flpg_')) {
                $supervision[$key] = $value;
            }
            if (str_starts_with($key, 'keadaan_flpg_')) {
                $keadaan[$key] = $value;
            }
            if (str_starts_with($key, 'tindakan_flpg_')) {
                $tindakan[$key] = $value;
            }
        }

        $aktivitas = [
            'process' => json_encode($process),
            'people' => json_encode($people),
            'equipment' => json_encode($equipment),
            'supervision' => json_encode($supervision),
            'keadaan' => json_encode($keadaan),
            'tindakan' => json_encode($tindakan),
        ];

        $data = [
            'tanggal' => unformat_date($params['tanggal']),
            'nama_pengawas' => $params['nama_pengawas'],
            'lokasi' => $params['lokasi'],
            'jenis_pekerjaan' => $params['jenis_pekerjaan'],
            'aktivitas_flpg' => $params['aktivitas_flpg'],
            'aktivitas' => json_encode($aktivitas),
            'catatan' => $params['catatan'],
            'is_flpg' => $params['is_flpg'],
        ];

        return $this->flpg->create($data);
    }

    public function updateFlpg($params, $id)
    {

        $flpg = $this->flpg->find($id);
        if ($flpg) $flpg->update($params);
        return $flpg;
    }

    public function deleteFlpg($id)
    {
        $flpg = $this->flpg->find($id);
        if ($flpg) $flpg->delete();
        return $flpg;
    }

    public function listAktivitas()
    {
        $result = [];
        foreach ($this->flpg::LIST_AKTIVITAS as $key => $value) $result[$key] = $key.' - '.$value;
        return $result;
    }
}