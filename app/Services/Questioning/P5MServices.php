<?php

namespace App\Services\Questioning;

use App\Models\Questioning\P5M;
use App\Services\Services;
use Illuminate\Http\Request;

class P5MServices extends Services 
{
    protected $p5m;
    public function __construct(P5M $p5m)
    {
        $this->p5m = $p5m;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->p5m->where($column, $value)->first();
    }

    public function searchP5m($params)
    {
        $p5m = $this->p5m;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $p5m = $p5m->where('tanggal', $tanggal);

        return $this->searchResponse($params, $p5m);
    }

    public function createP5m($params)
    {
        return $this->p5m->create($params);
    }

    public function updateP5m($params, $id)
    {

        $p5m = $this->p5m->find($id);
        if ($p5m) $p5m->update($params);
        return $p5m;
    }

    public function deleteP5m($id)
    {
        $p5m = $this->p5m->find($id);
        if ($p5m) $p5m->delete();
        return $p5m;
    }
}