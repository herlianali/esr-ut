<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\SektorServices;
use Illuminate\Http\Request;

class SektorController extends Controller
{
    protected $sektorServices;
    public function __construct(SektorServices $sektorServices, FiturProgramServices $fiturProgramServices) {
        $this->middleware('auth');
        $this->sektorServices = $sektorServices;
        view()->share([
            'title'        => 'Sektor',
            'active_route' => 'sistem.sektor.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
        ]);
    }

    public function index()
    {
        return view('sistem.sektor.index');
    }

    public function create()
    {
        return view('sistem.sektor._info');
    }

    public function show($id)
    {
        $getOne = $this->sektorServices->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $sektor = $this->sektorServices->getOne($id);
        return view('sistem.sektor._info', compact('sektor', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->sektorServices->createSektor($request->all());
    }

    public function update(Request $request, $id)
    {
        // $request->merge(['sektor_id' => $id]);
        return $this->sektorServices->updateSektor($request->all(), $id);
    }

    public function search(Request $request)
    {
        $sektor = $this->sektorServices->searchSektor($request->all());
        return view('sistem.sektor._table', compact('sektor'));
    }

    public function destroy($id)
    {
        return $this->sektorServices->deleteSektor($id);
    }
}
