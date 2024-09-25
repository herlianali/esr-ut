<?php

namespace App\Services\Questioning;

use App\Models\Questioning\BbsqNonService;
use App\Services\Services;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class BbsqNonServiceServices extends Services 
{
    protected $bbsqNonService, $questioningOptionsServices;
    public function __construct(BbsqNonService $bbsqNonService, QuestioningOptionsServices $questioningOptionsServices)
    {
        $this->bbsqNonService = $bbsqNonService;
        $this->questioningOptionsServices = $questioningOptionsServices;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->bbsqNonService->where($column, $value)->first();
    }

    public function searchBbsqNonService($params)
    {
        $bbsqNonService = $this->bbsqNonService;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $bbsqNonService = $bbsqNonService->where('tanggal', $tanggal);

        return $this->searchResponse($params, $bbsqNonService);
    }

    public function createBbsqNonService($params)
    {
        $prosedur = [];
        $peralatan = [];
        $lingkungan_kerja = [];
        $karyawan = [];

        foreach ($params as $key => $value) {
            if (str_starts_with($key, 'prosedur_')) {
                $prosedur[$key] = $value;
            }
            if (str_starts_with($key, 'peralatan_')) {
                $peralatan[$key] = $value;
            }
            if (str_starts_with($key, 'lingkungan_kerja_')) {
                $lingkungan_kerja[$key] = $value;
            }
            if (str_starts_with($key, 'karyawan_')) {
                $karyawan[$key] = $value;
            }
        }

        $params = array_merge($params, [
            'tanggal' => unformat_date($params['tanggal']),
            'prosedur' => json_encode($prosedur),
            'peralatan' => json_encode($peralatan),
            'lingkungan_kerja' => json_encode($lingkungan_kerja),
            'karyawan' => json_encode($karyawan)
        ]);

        return $this->bbsqNonService->create($params);
    }

    public function updateBbsqNonService($params, $id)
    {

        $bbsqNonService = $this->bbsqNonService->find($id);
        if ($bbsqNonService) $bbsqNonService->update($params);
        return $bbsqNonService;
    }

    public function deleteBbsqNonService($id)
    {
        $bbsqNonService = $this->bbsqNonService->find($id);
        if ($bbsqNonService) $bbsqNonService->delete();
        return $bbsqNonService;
    }

    public function listPerusahaan()
    {
        $result = [];
        foreach($this->bbsqNonService::LIST_PERUSAHAN as $value) $result[$value] = $value;
        return $result;
    }

    public function listArea()
    {
        $result = [];
        foreach($this->bbsqNonService::LIST_AREA as $value) $result[$value] = $value;
        return $result;
    }

    public function listKategori()
    {
        $result = [];
        foreach($this->bbsqNonService::LIST_KATEGORI as $value) $result[$value] = $value;
        return $result;
    }

    public function listFolowup()
    {
        $result = [];
        foreach($this->bbsqNonService::LIST_FOLOWUP as $value) $result[$value] = $value;
        return $result;
    }

    public function optionPosedur()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'bbsq_non_service', 'title' => 'prosedur']);
    }

    public function optionAlatPeralatan()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'bbsq_non_service', 'title' => 'alat_peralatan']);
    }

    public function optionLingkunganKerja()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'bbsq_non_service', 'title' => 'lingkungan_kerja']);
    }

    public function optionKaryawan()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'bbsq_non_service', 'title' => 'karyawan']);
    }
}