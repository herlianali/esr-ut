<?php

namespace App\Services\Questioning;

use App\Models\Questioning\Greencard;
use App\Services\Services;
use Illuminate\Http\Request;

class GreencardServices extends Services 
{
    protected $greenCard;
    public function __construct(Greencard $greenCard)
    {
        $this->greenCard = $greenCard;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->greenCard->where($column, $value)->first();
    }

    public function searchGreenCard($params)
    {
        $greenCard = $this->greenCard;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $greenCard = $greenCard->where('tanggal', $tanggal);

        return $this->searchResponse($params, $greenCard);
    }

    public function createGreenCard($params)
    {
        $params = $this->cleanDate($params, ['tanggal']);
        return $this->greenCard->create($params);
    }

    public function updateGreenCard($params, $id)
    {
        $params = $this->cleanDate($params, ['tanggal']);
        $greenCard = $this->greenCard->find($id);
        if ($greenCard) $greenCard->update($params);
        return $greenCard;
    }

    public function deleteGreenCard($id)
    {
        $greenCard = $this->greenCard->find($id);
        if ($greenCard) $greenCard->delete($id);
        return $greenCard;
    }
}