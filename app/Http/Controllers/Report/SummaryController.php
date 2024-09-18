<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    protected $pengawasService;
    public function __construct( PengawasServices $pengawasService)
    {
        // $this->summaryController = $summaryController;
        $this->pengawasService = $pengawasService;
        view()->share([
            'title' => 'Summary 13 PW',
            'active_route' => 'questioning.summary.index',
            'list_pengawas' => $pengawasService->listNamaPengawas(),
        ]);
    }

    public function index() 
    {
        return view('report.summary.index');
    }

    public function search()
    {
        $summary = $this->pengawasService->searchPengawas([]);
        return view('report.summary._table', compact('summary'));
    }
}
