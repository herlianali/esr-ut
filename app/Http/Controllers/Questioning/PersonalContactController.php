<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\PegawaiServices;
use Illuminate\Http\Request;

class PersonalContactController extends Controller
{
    public function __construct(PegawaiServices $pegawaiServices)
    {
        // $this->greencardServices = $greencardServices;
        view()->share([
            'list_pengawas' => $pegawaiServices->listPengawas(),
            'active_route' => 'questioning.personal_contact.index',
        ]);
    }

    public function index()
    {

    }

    public function create()
    {
        return view('questioning.personal_contact.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
