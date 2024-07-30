<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\PegawaiServices;
use Illuminate\Http\Request;

class GreencardController extends Controller
{
    protected $pegawaiServices;
    public function __construct(PegawaiServices $pegawaiServices)
    {
        $this->pegawaiServices = $pegawaiServices;
        view()->share('list_pengawas', $pegawaiServices->listPengawas());
    }

    public function index()
    {

    }

    public function create()
    {
        return view('questioning.green_card.add');
    }
}
