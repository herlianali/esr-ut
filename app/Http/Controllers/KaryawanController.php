<?php

namespace App\Http\Controllers;

use App\Services\PegawaiServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    protected $pegawaiServices;
    public function __construct(PegawaiServices $pegawaiServices) 
    {
        $this->pegawaiServices = $pegawaiServices;
    }

    public function index() 
    {
        return view('employee.management_user.index');
    }
    
    public function search(Request $request) 
    {
        $pegawai = $this->pegawaiServices->searchPegawai($request);
        dd($pegawai);
        if ($request->has('ajax')) return $pegawai;
        return view('employee.management_user._table', compact('pegawai'));
    }

    public function create() 
    {
        return view('employee.management_user.add');
    }
}
