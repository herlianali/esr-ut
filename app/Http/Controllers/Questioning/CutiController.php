<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\CutiServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    protected $cutiServices;
    public function __construct(CutiServices $cutiServices, PengawasServices $pengawasServices, FiturProgramServices $fiturProgramServices)
    {
        $this->middleware('auth');
        $this->cutiServices = $cutiServices;
        view()->share([
            'title'         => 'Cuti',
            'active_route'  => 'questioning.cuti.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
        ]);
    }

    public function index()
    {
        return view('questioning.cuti.add');
    }

    public function create()
    {
        $cuti = null;
        return view('questioning.cuti._info',compact('cuti'));
    }

    public function show($id)
    {
        $cuti = $this->cutiServices->getOne($id);
        return view('questioning.cuti._detail', compact('cuti'));
    }

    public function edit($id)
    {
        $create = 0;
        $cuti = $this->cutiServices->getOne($id);
        return view('questioning.cuti.add', compact('cuti', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->cutiServices->createCuti($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->cutiServices->updateCuti($request->all(), $id);
    }

    public function search(Request $request)
    {
        $cuti = $this->cutiServices->searchCuti($request->all());
        return view('questioning.cuti._table', compact('cuti'));
    }
}
