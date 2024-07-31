<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\PegawaiServices;
use Illuminate\Http\Request;

class SafetyTalkController extends Controller
{
    public function __construct(PegawaiServices $pegawaiServices)
    {
        // $this->greencardServices = $greencardServices;
        view()->share([
            'list_pengawas' => $pegawaiServices->listPengawas(),
            'active_route' => 'questioning.safety_talk.index',
        ]);
    }

    public function index()
    {

    }

    public function create()
    {
        return view('questioning.safety_talk.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
