<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Services\Questioning\GreencardServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class GreenCardController extends Controller
{
    protected $greenCardService, $pengawasServices;
    public function __construct(GreencardServices $greenCardService, PengawasServices $pengawasServices)
    {
        // $this->middleware('auth');
        $this->greenCardService = $greenCardService;
        $this->pengawasServices = $pengawasServices;
        view()->share([
            'title' => "Report Greencard",
            'active_route' => "report.green_card.index",
            'list_pengawas' => $pengawasServices->listPengawas(),
            'list_perusahaan' => $greenCardService->listPerusahaan(),
            'list_sektor1' => $pengawasServices->listSektor(),
        ]);
    }

    public function index()
    {
        return view('report.greencard.index');
    }

    public function search(Request $request)
    {
        $request->merge(['mount' => format_mount($request->mount)]);
        $greencard = $this->greenCardService->searchGreencard([]);
        return view('report.greencard._table', compact('greencard'));
    }

    public function planSearch(Request $request)
    {
        $greencard = $this->greenCardService->getReportGreencard($request);
        return view('report.greencard._table_plan', compact('greencard'));
    }
}
