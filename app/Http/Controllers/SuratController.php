<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function __construct()
    {
        view()->share([
            'active_route' => 'surat.permohonan_surat.index',
            'menu' => '2',
        ]);
    }

    public function index()
    {
        return view('esr_corner.surat.index');
    }

    public function create()
    {
        return view('esr_corner.surat.add');
    }

    public function show($id)
    {
        return view('esr_corner.surat.detail');
    }
}
