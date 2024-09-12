<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengawasController extends Controller
{
    public function index()
    {
        return view('employee.management_pengawas.index');
    }

    public function search()
    {
        return view('employee.management_pengawas._table');
    }
}
