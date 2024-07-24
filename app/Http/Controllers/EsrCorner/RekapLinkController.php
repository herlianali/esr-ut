<?php

namespace App\Http\Controllers\EsrCorner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekapLinkController extends Controller
{
    public function index()
    {
        return view('esr_corner.rekap_link.index');
    }
}
