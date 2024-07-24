<?php

namespace App\Http\Controllers\EsrCorner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringLaporanController extends Controller
{
    public function index()
    {
        return view('esr_corner.monitoring_laporan.index');
    }
}
