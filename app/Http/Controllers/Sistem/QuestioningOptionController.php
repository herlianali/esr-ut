<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;

class QuestioningOptionController extends Controller
{
    protected $questioningOptionsServices;
    public function __construct(QuestioningOptionsServices $questioningOptionsServices, FiturProgramServices $fiturProgramServices) {
        $this->middleware('auth');
        $this->questioningOptionsServices = $questioningOptionsServices;
        view()->share([
            'title'         => 'Questioning Options',
            'active_route'  => 'sistem.questioning_option.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
        ]);
    }

    public function index()
    {
        return view('sistem.questioning_option.index');
    }

    public function create()
    {
        return view('sistem.questioning_option._info');
    }

    public function show($id)
    {
        $getOne = $this->questioningOptionsServices->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $questioning_option = $this->questioningOptionsServices->getOne($id);
        return view('sistem.questioning_option._info', compact('questioning_option', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->questioningOptionsServices->createQuestioningOptions($request->all());
    }

    public function update(Request $request, $id)
    {
        // $request->merge(['sektor_id' => $id]);
        return $this->questioningOptionsServices->updateQuestioningOptions($request->all(), $id);
    }

    public function search(Request $request)
    {
        $questioning_option = $this->questioningOptionsServices->searchQuestioningOptions($request->all());
        return view('sistem.questioning_option._table', compact('questioning_option'));
    }
}
