<?php

namespace App\Services\Sistem;

use App\Models\Sektor;
use App\Services\Services;

class SektorServices extends Services 
{
    protected $sektor;
    public function __construct(Sektor $sektor)
    {
        $this->sektor = $sektor;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->sektor->where($column, $value)->first();
    }

    public function searchSektor($params)
    {
        $sektor = $this->sektor;
        
        if (isset($params['nama']) && $params['nama'] !== '') {
            $sektor = $sektor->where('nama', 'like', "%{$params['nama']}%");
        }
    
        if (isset($params['sub_sektor']) && $params['sub_sektor'] !== '') {
            $sektor = $sektor->where('sub_sektor', 'like', "%{$params['sub_sektor']}%");
        }
        
        return $this->searchResponse($params, $sektor);
    }

    public function createSektor($params)
    {
        return $this->sektor->create($params);
    }

    public function updateSektor($params, $id)
    {
        $sektor = $this->sektor->find($id);
        if ($sektor) {
            $sektor->update($params);
        };
        return $sektor;
    }

    public function deleteSektor($id)
    {
        $sektor = $this->sektor->find($id);
        if ($sektor) $sektor->delete();
        return $sektor;
    }


}