<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\SafetyTalkServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class SafetyTalkController extends Controller
{
    protected $safetyTalkServices;
    public function __construct(SafetyTalkServices $safetyTalkServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->safetyTalkServices = $safetyTalkServices;
        view()->share([
            'title' => 'Safety Talk',
            'active_route' => 'questioning.safety_talk.index',
            'form_route' => 'questioning.safety_talk.create',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            'list_lokasi' => $safetyTalkServices->listLokasi(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.safety_talk.add');
    }

    public function create()
    {
        return view('questioning.safety_talk._info');
    }

    public function show($id)
    {
        $safety_talk = $this->safetyTalkServices->getOne($id);
        return view('questioning.safety_talk._detail', compact('safety_talk'));
    }

    public function edit($id)
    {
        $safety_talk = $this->safetyTalkServices->getOne($id);
        return view('questioning.safety_talk.add', compact('safety_talk'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'safety_talk', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->safetyTalkServices->createSafetyTalk($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'safety_talk', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->safetyTalkServices->updateSafetyTalk($param, $id);
    }
}
