<?php

namespace App\Services\Questioning;

use App\Models\Questioning\PersonalContact;
use App\Services\Services;
use Illuminate\Http\Request;

class PersonalContactServices extends Services 
{
    protected $personal_contact;
    public function __construct(PersonalContact $personal_contact)
    {
        $this->personal_contact = $personal_contact;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->personal_contact->where($column, $value)->first();
    }

    public function searchPersonalContact($params)
    {
        $personal_contact = $this->personal_contact;

        $tanggal = $params['tanggal'] ?? '';
        if ($tanggal !== '') $personal_contact = $personal_contact->where('tanggal', $tanggal);

        return $this->searchResponse($params, $personal_contact);
    }

    public function createPersonalContact($params)
    {
        return $this->personal_contact->create($params);
    }

    public function updatePersonalContact($params, $id)
    {

        $personal_contact = $this->personal_contact->find($id);
        if ($personal_contact) $personal_contact->update($params);
        return $personal_contact;
    }

    public function deletePersonalContact($id)
    {
        $personal_contact = $this->personal_contact->find($id);
        if ($personal_contact) $personal_contact->delete();
        return $personal_contact;
    }

    public function listPerusahaan()
    {
        return $this->personal_contact::LIST_PERUSAHAAN;
    }
}