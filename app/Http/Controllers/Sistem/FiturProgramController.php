<?php

namespace App\Http\Controllers\Sistem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;

class FiturProgramController extends Controller
{
    protected $fiturProgram;
    public function __construct(FiturProgramServices $fiturProgram)
    {
        // $this->middleware(['auth', 'fitur_program']);
        $this->fiturProgram = $fiturProgram;
    }

    public function index()
    {
        return view('sistem.fitur_program.index');
    }

    public function search(Request $request)
    {
        $parent_kode = $request->input('parent_kode') ?? '#';
        $fitur_program = $this->fiturProgram->searchFiturProgram($request->all());
        foreach ($fitur_program as $key => $value) {
            $fitur_program[$key]->text = $value->nama;
        }
        $fitur_program = $this->fiturProgram->nested_data($fitur_program, $parent_kode);
        // dd($fitur_program);
        if ($request->has('ajax')) return $fitur_program;
        return view('sistem.fitur_program._treeview', compact('fitur_program'));
    }
}
