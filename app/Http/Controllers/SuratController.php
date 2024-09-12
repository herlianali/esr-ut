<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('surat.index');
    }

    public function create()
    {
        return view('surat.add');
    }

    public function show($id)
    {
        return view('surat.detail');
    }
}
