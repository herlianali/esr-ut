<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\SCMLServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class SCMLController extends Controller
{
    protected $scmlServices;
    public function __construct(SCMLServices $scmlServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->scmlServices = $scmlServices;
        view()->share([
            'title' => 'SCML 2',
            'active_route' => 'questioning.scml.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            // 'list_lokasi' => $scmlServices->listLokasi(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.scml.add');
    }

    public function create()
    {
        return view('questioning.scml._info');
    }

    public function show($id)
    {
        $scml = $this->scmlServices->getOne($id);
        return view('questioning.scml._detail', compact('scml'));
    }

    public function edit($id)
    {
        $scml = $this->scmlServices->getOne($id);
        return view('questioning.scml.add', compact('scml'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'scml', 'file');
        if($filename != '') $request->merge(['file' => $filename]);
        $param = $request->request->all();
        return $this->scmlServices->createScml($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'scml', 'file');
        if($filename != '') $request->merge(['file' => $filename]);
        $param = $request->request->all();
        return $this->scmlServices->updateScml($param, $id);
    }
}
