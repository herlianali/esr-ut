<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\PersonalContactServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class PersonalContactController extends Controller
{
    protected $personalContactServices;
    public function __construct(PersonalContactServices $personalContactServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->personalContactServices = $personalContactServices;
        view()->share([
            'title' => 'Personal Contact',
            'active_route' => 'questioning.personal_contact.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            'list_perusahaan' => $personalContactServices->listPerusahaan(),
        ]);
    }
    
    public function index()
    {
        return view('questioning.personal_contact.add');
    }
    public function create()
    {
        return view('questioning.personal_contact._info');
    }

    public function show($id)
    {
        $personal_contact = $this->personalContactServices->getOne($id);
        return view('questioning.personal_contact._detail', compact('personal_contact'));
    }

    public function edit($id)
    {
        $personal_contact = $this->personalContactServices->getOne($id);
        return view('questioning.personal_contact.add', compact('personal_contact'));
    }
    
    public function store(Request $request)
    {
        $request->merge([
            'tanggal' => unformat_date($request->tanggal), 
            'is_personal_contact' => (int)$request->is_personal_contact,
            'is_persetujuan' => (int)$request->is_persetujuan,
        ]);
        return $this->personalContactServices->createPersonalContact($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal), 'is_personal_contact' => (int)$request->is_personal_contact]);
        return $this->personalContactServices->updatePersonalContact($request->all(), $id);
    }

}
