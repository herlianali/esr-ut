<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\PegawaiServices;
use Illuminate\Http\Request;

class BbsqNonServiceController extends Controller
{
    // protected $greencardServices;
    public function __construct(PegawaiServices $pegawaiServices)
    {
        // $this->greencardServices = $greencardServices;
        view()->share([
            'list_pengawas' => $pegawaiServices->listPengawas(),
            'active_route' => 'questioning.bbsq_non_service.index',
        ]);
    }

    public function index()
    {

    }

    public function create()
    {
        return view('questioning.bbsq_non_service.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
