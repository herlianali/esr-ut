<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\QuestioningOptionServices;
use Illuminate\Http\Request;

class QuestioningOptionController extends Controller
{
    protected $questioning;
    public function __construct(QuestioningOptionServices $questioning)
    {
        $this->questioning = $questioning;
    }

    public function index()
    {
        return view('sistem.questioning_options.index');
    }

    public function search(Request $request)
    {
        $questioning = $this->questioning->searchQuestioning($request->all());
        return view('sistem.questioning_options._table', compact('questioning'));
    }

    public function create()
    {
        return view('sistem.questioning_options._info');
    }

    public function edit($id)
    {
        $questioning = $this->questioning->getOne($id);
        return view('sistem.questioning_options._info', compact('questioning'));
    }

    public function update(Request $request, $id)
    {
        return $this->questioning->updateQuestioning($request, $id);
    }

    public function delete($id)
    {
        return $this->questioning->deleteQuestioning($id);
    }
}
