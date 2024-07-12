<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index() 
    {
        return view('dashboard.index');
    }

    public function dash1($id)
    {
        return view('dashboard.dash1', compact('id'));
    }

    public function dash2()
    {
        return view('dashboard.report');
    }
}
