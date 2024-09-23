<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;
use Illuminate\Http\Request;

class DashController extends Controller
{
    protected $fiturProgramServices;
    public function __construct(FiturProgramServices $fiturProgramServices)
    {
        $this->middleware(['auth']);
        $this->fiturProgramServices = $fiturProgramServices;
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
        return view('dashboard.setting', compact('title', 'fitur'));
    }

    public function dash2()
    {
        return view('dashboard.report');
    }
}
