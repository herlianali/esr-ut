<?php

namespace App\Http\Controllers\EsrCorner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringCofController extends Controller
{
    public function index()
    {
        return view('esr_corner.monitoring_cof.index');
    }
}
