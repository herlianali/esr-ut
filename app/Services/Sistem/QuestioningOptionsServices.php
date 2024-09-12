<?php

namespace App\Services\Sistem;

use App\Models\Questioning\QuestioningOption;
use App\Services\Services;
use Illuminate\Http\Request;

class QuestioningOptionsServices extends Services 
{
    protected $questioningOptions;
    public function __construct(QuestioningOption $questioningOptions)
    {
        $this->questioningOptions = $questioningOptions;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->questioningOptions->where($column, $value)->first();
    }

    public function searchQuestioningOptions($params)
    {
        $questioningOptions = $this->questioningOptions;

        $menu = $params['menu'] ?? '';
        if ($menu !== '') $questioningOptions = $questioningOptions->where('menu', $menu);

        $title = $params['title'] ?? '';
        if ($title !== '') $questioningOptions = $questioningOptions->where('title', $title);
        
        return $this->searchResponse($params, $questioningOptions);
    }

    public function createQuestioningOptions($params)
    {
        return $this->questioningOptions->create($params);
    }

    public function updateQuestioningOptions($params, $id)
    {

        $questioningOptions = $this->questioningOptions->find($id);
        if ($questioningOptions) $questioningOptions->update($params);
        return $questioningOptions;
    }

    public function deleteQuestioningOptions($id)
    {
        $questioningOptions = $this->questioningOptions->find($id);
        if ($questioningOptions) $questioningOptions->delete();
        return $questioningOptions;
    }

    public function listOptions($id)
    {
        if ($id === '10') {
            $no = '010';
        }else{
            $no = '00'.$id;
        }
        $result = [
            'identifier' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'first' => 1])->identifier,
            'no_form' => $no,
            'process' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'title' => 'A. process']),
            'people' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'title' => 'B. People Competence']),
            'equipment' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'title' => 'C. Equipment & Tools']),
            'supervision' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'title' => 'D. Supervision & Accountability']),
            'keadaan' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'title' => 'E. Keadaan Darurat']),
            'tindakan' => $this->searchQuestioningOptions(['menu' => 'flpg_'.$id, 'title' => 'F. Tindakan Disiplin']),
        ];
        return $result;
    }

    public function listObservasi($id)
    {
        $result = [];

        if($id === 1) {
            $result = [
                'options' => $this->searchQuestioningOptions(['menu' => 'bbsq_service', 'title' => 'Preventive Maintenance']),
                'title'   => "Preventive Maintenance",
            ];
        } elseif($id === 2 ) {
            $result = [
                'options' => $this->searchQuestioningOptions(['menu' => 'bbsq_service', 'title' => 'Remove & Install (R&I)']),
                'title'   => "Remove & Install (R&I)",
            ];
        } else {
            $result = [
                'options' => $this->searchQuestioningOptions(['menu' => 'bbsq_service', 'title' => 'Troubleshooting & Repair']),
                'title'   => "Troubleshooting & Repair"
            ];
        }

        return $result;
    }

}