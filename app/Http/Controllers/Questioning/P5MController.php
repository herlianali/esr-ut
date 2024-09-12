<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\P5MServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class P5MController extends Controller
{
    protected $p5MServices;
    public function __construct(P5MServices $p5MServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->p5MServices = $p5MServices;
        view()->share([
            'title' => 'P5M',
            'active_route' => 'questioning.p5m.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas()
        ]);
        
    }

    public function index()
    {
        return view('questioning.p5m.add');
    }

    public function create()
    {
        return view('questioning.p5m._info');
    }

    public function show($id)
    {
        $p5m = $this->p5MServices->getOne($id);
        return view('questioning.p5m._detail', compact('p5m'));
    }

    public function edit($id)
    {
        $p5m = $this->p5MServices->getOne($id);
        return view('questioning.p5m.add', compact('p5m'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'p5m', 'foto');
        if($filename != '') $request->merge(['foto' => $filename]);
        $param = $request->request->all();
        return $this->p5MServices->createP5m($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'p5m', 'foto');
        if($filename != '') $request->merge(['foto' => $filename]);
        $param = $request->request->all();
        return $this->p5MServices->updateP5m($param, $id);
    }
}
