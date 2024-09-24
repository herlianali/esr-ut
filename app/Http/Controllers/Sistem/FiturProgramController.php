<?php

namespace App\Http\Controllers\Sistem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;

class FiturProgramController extends Controller
{
    protected $fiturProgramService;
    public function __construct(FiturProgramServices $fiturProgramService, FiturProgramServices $fiturProgramServices)
    {
        // $this->middleware(['auth', 'fitur_program']);
        $this->fiturProgramService = $fiturProgramService;
        
        view()->share([
            'title'         => 'Fitur Program',
            'active_route'  => 'sistem.fitur.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
        ]);
    }

    public function index()
    {
        return view('sistem.fitur_program.index');
    }

    public function create()
    {
        return view('sistem.fitur_program._info');
    }

    public function show($id)
    {
        $getOne = $this->fiturProgramService->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $fitur_program = $this->show($id);
        return view('sistem.fitur_program._info', compact('fitur_program', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->fiturProgramService->saveFiturProgram($request);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['id' => $id]);
        return $this->fiturProgramService->saveFiturProgram($request);
    }

    public function search(Request $request)
    {
        $fitur_program = $this->fiturProgramService->searchFiturProgram($request->all());
        return view('sistem.fitur_program._table', compact('fitur_program'));
    }

    public function destroy($id)
    {
        return $this->fiturProgramService->deleteFiturProgram($id);
    }
}
