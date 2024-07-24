<?php

namespace App\Services;

class Services
{

    public function searchFilter($params, $model, $filters)
    {
        foreach ($filters as $filter) {
            $value = $params[$filter] ?? '';
            if ($value !== '') $model = $model->where($filter, $value);
        }
        return $model;
    }

    public function searchResponse($params, $model)
    {
        // dd($params);
        $with = $params['with'] ?? '';
        if ($with !== '') $model = $model->with($with);
        $limit = $params['limit'] ?? '';
        if ($limit !== '') $model = $model->limit($limit);
        $skip = $params['skip'] ?? '';
        if ($skip !== '') $model = $model->skip($skip);

        $count = $params['count'] ?? '';
        if ($count !== '') return $model->count();
        $sum = $params['sum'] ?? '';
        if ($sum !== '') return $model->sum($sum);
        $first = $params['first'] ?? '';
        if ($first !== '') return $model->first();
        $paginate = $params['paginate'] ?? '';
        if ($paginate !== '') return $model->paginate($paginate);
        return $model->get();
    }

    public function cleanNumber($params, $columns = [])
    {
        foreach ($columns as $column) {
            if (!empty($params[$column])) $params[$column] = unformat_number($params[$column]);
        }
        return $params;
    }

    public function strToInt($params, $columns = [])
    {
        foreach ($columns as $column) {
            if (!empty($params[$column])) $params[$column] = (int)$params[$column]; 
        }
        return $params;
    }

    public function cleanDate($params, $columns = [])
    {
        foreach ($columns as $column) {
            if (!empty($params[$column])) $params[$column] = unformat_date($params[$column]);
        }
        return $params;
    }

    public function auto_kode($model, $parent_kode = '#')
    {
        $last_row = $model
            ->where('parent_kode', $parent_kode)
            ->orderBy('kode', 'desc')
            ->first();
        $kode = '01';
        if (!empty($last_row)) {
            $temp = explode(".", $last_row->kode);
            $kode = intval(end($temp))+1;
            if (strlen($kode) == 1) $kode = "0$kode" ;
        }
        return $parent_kode == '#' ? $kode : "$parent_kode.$kode";
    }

}
