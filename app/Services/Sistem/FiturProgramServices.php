<?php

namespace App\Services\Sistem;

use App\Models\FiturProgram;
use Illuminate\Http\Request;
use App\Services\Services;

class FiturProgramServices extends Services
{
    protected $fiturProgram;
    public function __construct(FiturProgram $fiturProgram)
    {
        $this->fiturProgram = $fiturProgram;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->fiturProgram->where($column, $value)->first();
    }

    public function searchFiturProgram($params)
    {
        $fiturProgram = new FiturProgram;
        
        $nama = $params['nama'] ?? '';
        if ($nama !== '') $fiturProgram = $fiturProgram->where('nama', 'like', "%$nama%");
        
        $parent_kode = $params['parent_kode'] ?? '';
        if ($parent_kode !== '') $fiturProgram = $fiturProgram->where('parent_kode', '=', $parent_kode);

        $query_in = $params['query_in'] ?? '';
        if ($query_in !== '') $fiturProgram = $fiturProgram->whereIn('id', $query_in);

        $fiturProgram = $fiturProgram->orderBy('kode', 'asc');

        return $this->searchResponse($params, $fiturProgram);
    }

    public function saveFiturProgram(Request $request)
    {
        $id = $request->input('id') ?? '';
        if ($id == '') {
            $fiturProgram = $this->fiturProgram->create($request->all());
        } else {
            $fiturProgram = $this->fiturProgram->find($id);
            $fiturProgram->update($request->all());
        }
        return $fiturProgram;
    }

    public function deleteFiturProgram($id)
    {
        $fiturProgram = $this->fiturProgram->find($id);
        if ($fiturProgram) $fiturProgram->delete();
        return $fiturProgram;
    }

    public function listFiturProgram()
    {
        $result = [];
        foreach ($this->searchFiturProgram([]) as $value) $result[$value->id] = $value->nama;
        return $result;
    }

    protected $skip = array();
    public function nested_data($data, $parent_kode = '#')
    {
        $result = array();
        foreach ($data as $item) {
            if (!in_array($item->id, $this->skip) && $item->parent_kode == $parent_kode) {
                array_push($this->skip, $item->id);
                $item->children = $this->nested_data($data, $item->kode);
                array_push($result, $item);
            }
        }
        return $result;
    }

    public function kode($parent_kode)
    {
        return $this->auto_kode($this->fiturProgram, $parent_kode);
    }

}