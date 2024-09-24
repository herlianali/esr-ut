<?php

namespace App\Services\Sistem;

use App\Models\QuestioningOption;
use App\Services\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class QuestioningOptionServices extends Services 
{
    protected $questioning;
    public function __construct(QuestioningOption $questioning)
    {
        $this->questioning = $questioning;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->questioning->where($column, $value)->first();
    }

    public function searchQuestioning($params)
    {
        $questioning = $this->questioning;
        
        if (isset($params['pertanyaan']) && $params['pertanyaan'] !== '') {
            $questioning = $questioning->where('pertanyaan', 'like', "%{$params['pertanyaan']}%");
        }
    
        if (isset($params['title']) && $params['title'] !== '') {
            $questioning = $questioning->where('title', 'like', "%{$params['title']}%");
        }
        
        return $this->searchResponse($params, $questioning);
    }

    public function createQuestioning($params)
    {
        $questioning = $this->questioning->create($params);
        return $questioning;
    }

    public function updateQuestioning($params, $id)
    {
        $questioning = $this->questioning->find($id);
        if ($questioning) {
            $questioning->update($params);
        //     if (!empty($params['role'])) $this->assignUserRole($params['role'], $user);
        }
        return $questioning;
    }

    public function deleteQuestioning($id)
    {
        $questioning = $this->questioning->find($id);
        if ($questioning) $questioning->delete();
        return $questioning;
    }

    public function listQuestioning()
    {
        $result = [];
        foreach ($this->searchQuestioning([]) as $value) $result[$value->id] = $value->menu;
        return $result;
    }


}