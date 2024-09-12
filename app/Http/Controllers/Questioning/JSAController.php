<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\JSAServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class JSAController extends Controller
{
    protected $jsaServices;
    public function __construct(JSAServices $jsaServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->jsaServices = $jsaServices;
        view()->share([
            'title' => 'Safety Talk',
            'active_route' => 'questioning.safety_talk.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.jsa.add');
    }

    public function create()
    {
        return view('questioning.jsa._info');
    }

    public function show($id)
    {
        $jsa = $this->jsaServices->getOne($id);
        return view('questioning.jsa._detail', compact('jsa'));
    }

    public function edit($id)
    {
        $jsa = $this->jsaServices->getOne($id);
        return view('questioning.jsa.add', compact('jsa'));
    }

    public function store(Request $request)
    {
        if ($request->posisi === '2') {
            $request->merge([
                'review' => '-',
                'jenis_review'   => '-',
                'judul_jsa'      => '-',
                'nomor_jsa'      => '-',
                'jumlah_pekerja' => '-',
                'hasil_review'   => '-',
            ]);
        }
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'jsa', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->jsaServices->createJsa($param);
    }

    public function update(Request $request, $id)
    {
        if ($request->posisi === '2') {
            $request->merge([
                'review' => '-',
                'jenis_review'   => '-',
                'judul_jsa'      => '-',
                'nomor_jsa'      => '-',
                'jumlah_pekerja' => '-',
                'hasil_review'   => '-',
            ]);
        }
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'jsa', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->jsaServices->updateJsa($param, $id);
    }
}
