<?php

namespace App\Services\Questioning;

use App\Models\Questioning\InspeksiSarana;
use App\Services\Services;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class InspeksiSaranaServices extends Services 
{
    protected $inspeksiSarana, $questioningOptionsServices;
    public function __construct(
            InspeksiSarana $inspeksiSarana, 
            QuestioningOptionsServices $questioningOptionsServices
        )
    {
        $this->inspeksiSarana = $inspeksiSarana;
        $this->questioningOptionsServices = $questioningOptionsServices;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->inspeksiSarana->where($column, $value)->first();
    }

    public function searchInspeksiSarana($params)
    {
        $inspeksiSarana = $this->inspeksiSarana;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $inspeksiSarana = $inspeksiSarana->where('tanggal', $tanggal);

        return $this->searchResponse($params, $inspeksiSarana);
    }

    public function createInspeksiSarana($params)
    {
        $kondisiKendaraan = [];
        $driver = [];
        $prosedur = [];
        foreach ($params as $key => $value) {
            if (str_starts_with($key, 'kondisi_kendaraan_')) {
                $kondisiKendaraan[$key] = $value;
            }elseif (str_starts_with($key, 'driver_')) {
                $driver[$key] = $value;
            }elseif (str_starts_with($key, 'prosedur_')) {
                $prosedur[$key] = $value;
            }
        }
        $data = [
            'kondisi_kendaraan' => json_encode($kondisiKendaraan),
            'driver_dan_penumpang' => json_encode($driver),
            'prosedur_standar' => json_encode($prosedur)
        ];
        $result = array_merge($params, $data);
        return $this->inspeksiSarana->create($result);
    }

    public function updateInspeksiSarana($params, $id)
    {

        $inspeksiSarana = $this->inspeksiSarana->find($id);
        if ($inspeksiSarana) $inspeksiSarana->update($params);
        return $inspeksiSarana;
    }

    public function deleteInspeksiSarana($id)
    {
        $inspeksiSarana = $this->inspeksiSarana->find($id);
        if ($inspeksiSarana) $inspeksiSarana->delete();
        return $inspeksiSarana;
    }
    
    public function optionsKondisiKendaran()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'inspeksi sarana', 'title' => 'A']);
    }

    public function optionsDriver()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'inspeksi sarana', 'title' => 'B']);
    }

    public function optionsProsedur()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'inspeksi sarana', 'title' => 'C']);
    }

}