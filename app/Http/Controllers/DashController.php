<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\DashServices;
use App\Services\Sistem\FiturProgramServices;

class DashController extends Controller
{
    protected $fiturProgramServices, $dashServices;
    public function __construct(
            FiturProgramServices $fiturProgramServices,
            DashServices $dashServices
        )
    {
        $this->middleware(['auth']);
        $this->fiturProgramServices = $fiturProgramServices;
        $this->dashServices = $dashServices;

        view()->share(['title' => 'Dashboard']);
    }
    public function index() 
    {
        return view('dashboard.index');
    }

    public function questioningDash()
    {
        $title = 'Questioning';
        $fitur = $this->fiturProgramServices->searchFiturProgram(['parent_kode' => '01']);
        return view('dashboard.questioning', compact('fitur', 'title'));
    }

    public function reportDash()
    {
        // $fitur = $this->fiturProgramServices->searchFiturProgram(['parent_kode' => (string)$id]);
        return view('dashboard.report');
    }

    public function esrCornerDash()
    {
        // $fitur = $this->fiturProgramServices->searchFiturProgram(['parent_kode' => (string)$id]);
        return view('dashboard.esrCorner');
    }

    public function healthCornerDash()
    {
        
        return view('dashboard.healthCorner');
    }

    public function settingDash()
    {
        $title = 'Setting';
        $fitur = $this->fiturProgramServices->searchFiturProgram(['parent_kode' => '05']);
        $data  = $this->dashServices->dashSistem();
        return view('dashboard.setting', compact('title', 'fitur', 'data'));
    }

    public function dash2()
    {
        return view('dashboard.report');
    }
}
