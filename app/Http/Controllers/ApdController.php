<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApdController extends Controller
{
    public function index() 
    {
        return view('peminjaman.apd.index');
    }

    public function create()
    {
        return view('peminjaman.apd.add');
    }
}
