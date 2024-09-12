<?php

namespace App\Services\Questioning;

use App\Models\Questioning\Genba;
use App\Services\Services;
use Illuminate\Http\Request;

class GenbaServices extends Services 
{
    protected $genba;
    public function __construct(Genba $genba)
    {
        $this->genba = $genba;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->genba->where($column, $value)->first();
    }

    public function searchGenba($params)
    {
        $genba = $this->genba;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $genba = $genba->where('tanggal', $tanggal);

        return $this->searchResponse($params, $genba);
    }

    public function createGenba($params)
    {
        return $this->genba->create($params);
    }

    public function updateGenba($params, $id)
    {

        $genba = $this->genba->find($id);
        if ($genba) $genba->update($params);
        return $genba;
    }

    public function deleteGenba($id)
    {
        $genba = $this->genba->find($id);
        if ($genba) $genba->delete();
        return $genba;
    }

    public function listArea()
    {
        return $this->genba::LIST_AREA;
    }

    public function listKategori()
    {
        return $this->genba::LIST_KATEGORI;
    }

    public function listFollowUp()
    {
        return $this->genba::LIST_FOLLOW_UP;
    }

    public function listPenyelenggara()
    {
        return $this->genba::LIST_PENYELENGGARA;
    }
}