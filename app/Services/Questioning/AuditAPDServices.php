<?php

namespace App\Services\Questioning;

use App\Models\Questioning\AuditAPD;
use App\Services\Services;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class AuditAPDServices extends Services 
{
    protected $auditApd, $questioningOptionsServices;
    public function __construct(AuditAPD $auditApd, QuestioningOptionsServices $questioningOptionsServices)
    {
        $this->auditApd = $auditApd;
        $this->questioningOptionsServices = $questioningOptionsServices;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->auditApd->where($column, $value)->first();
    }

    public function searchAuditApd($params)
    {
        $auditApd = $this->auditApd;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $auditApd = $auditApd->where('tanggal', $tanggal);

        return $this->searchResponse($params, $auditApd);
    }

    public function createAuditApd($params)
    {
        $cheklist = [];
        foreach ($params as $key => $value) {
            if(str_starts_with($key, 'checklist_')) {
                $cheklist[$key] = $value;
            }
        }
        $data = [
            'checklist_audit' => json_encode($cheklist),
        ];
        $result = array_merge($params, $data);
        return $this->auditApd->create($result);
    }

    public function updateAuditApd($params, $id)
    {

        $auditApd = $this->auditApd->find($id);
        if ($auditApd) $auditApd->update($params);
        return $auditApd;
    }

    public function deleteAuditApd($id)
    {
        $auditApd = $this->auditApd->find($id);
        if ($auditApd) $auditApd->delete();
        return $auditApd;
    }

    public function listPerusahaan()
    {
        $result = [];
        foreach($this->auditApd::LIST_PERUSAHAAN as $value) $result[$value] = $value;
        return $result;
    }

    public function optionChecklist()
    {
        return $this->questioningOptionsServices->searchQuestioningOptions(['menu' => 'audit_apd', 'title' => 'checklist']);
    }
}