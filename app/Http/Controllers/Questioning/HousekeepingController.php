<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\HousekeepingServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class HousekeepingController extends Controller
{
    protected $housekeepingServices;
    public function __construct(HousekeepingServices $housekeepingServices, PengawasServices $pengawasServices)
    {
        $this->middleware('auth');
        $this->housekeepingServices = $housekeepingServices;
        view()->share([
            'title' => 'House Keeping',
            'active_route' => 'questioning.housekeeping.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.housekeeping.add');
    }

    public function create()
    {
        return view('questioning.housekeeping._info');
    }

    public function show($id)
    {
        $housekeeping = $this->housekeepingServices->getOne($id);
        return view('questioning.housekeeping._detail', compact('housekeeping'));
    }

    public function edit($id)
    {
        $housekeeping = $this->housekeepingServices->getOne($id);
        // dd(format_date($housekeeping->tanggal));
        return view('questioning.housekeeping.add', compact('housekeeping'));
    }

    public function store(Request $request)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'housekeeping', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->housekeepingServices->createHousekeeping($param);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'housekeeping', 'dokumentasi');
        if($filename != '') $request->merge(['dokumentasi' => $filename]);
        $param = $request->request->all();
        return $this->housekeepingServices->updateHousekeeping($param, $id);
    }
}
