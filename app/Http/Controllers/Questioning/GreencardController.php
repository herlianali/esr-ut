<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\PegawaiServices;
use App\Services\Questioning\GreencardServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GreencardController extends Controller
{
    protected $greencardServices, $pegawaiServices;
    public function __construct(PegawaiServices $pegawaiServices, GreencardServices $greencardServices)
    {
        $this->greencardServices = $greencardServices;
        $this->pegawaiServices = $pegawaiServices;
        view()->share([
            'list_pengawas' => $pegawaiServices->listPengawas(),
            'active_route' => 'questioning.green_card.index',
        ]);
    }

    public function index()
    {

    }

    public function create()
    {
        return view('questioning.green_card.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
