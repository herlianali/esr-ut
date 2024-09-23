<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\GreencardServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class GreencardController extends Controller
{
    protected $greencardServices;
    public function __construct(
            GreencardServices $greencardServices, 
            PengawasServices $pengawasServices, 
            FiturProgramServices $fiturProgramServices
        )
    {
        $this->middleware('auth');
        $this->greencardServices = $greencardServices;
        view()->share([
            'title'             => 'Green Card',
            'active_route'      => 'questioning.green_card.index',
            'fitur'             => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas'     => $pengawasServices->listNamaPengawas(),
            'list_perusahaan'   => $greencardServices->listPerusahaan(),
            'list_sektor1'      => $greencardServices->listSektor1(),
            'list_sektor2'      => $greencardServices->listSektor2(),
            'list_deviasi'      => $greencardServices->listDeviasi(),
        ]);
        
    }

    public function index()
    {
        return view('questioning.green_card.add');
    }

    public function create()
    {
        return view('questioning.green_card._info');
    }

    public function show($id)
    {
        $green_card = $this->greencardServices->getOne($id);
        return view('questioning.green_card._detail', compact('green_card'));
    }

    public function edit($id)
    {
        $green_card = $this->greencardServices->getOne($id);
        return view('questioning.green_card.add', compact('green_card'));
    }

    public function store(Request $request)
    {
        if ($request->jabatan === '1') {
            $request->merge([
                'non_pengawas' => '-',
                'nama_lengkap' => '-',
                'nrp'          => '-',
                'perusahaan'   => '-',
                'sektor'       => '-'
            ]);
        } elseif ($request->jabatan === '2') {
            $request->merge([
                'pengawas' => '-',
                'nama_pengawas' => '-'
            ]);
        }
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'green_card', 'foto');
        if($filename != '') $request->merge(['foto' => $filename]);
        $param = $request->request->all();
        return $this->greencardServices->createGreencard($param);
    }

    public function update(Request $request, $id)
    {
        if ($request->jabatan === '1') {
            $request->merge([
                'non_pengawas' => '-',
                'nama_lengkap' => '-',
                'nrp'          => '-',
                'perusahaan'   => '-',
                'sektor'       => '-'
            ]);
        } elseif ($request->jabatan === '2') {
            $request->merge([
                'pengawas' => '-',
                'nama_pengawas' => '-'
            ]);
        }
        $request->merge(['tanggal' => unformat_date($request->tanggal)]);
        $filename = $this->save_file($request, 'green_card', 'foto');
        if($filename != '') $request->merge(['foto' => $filename]);
        $param = $request->request->all();
        return $this->greencardServices->updateGreencard($param, $id);
    }
}
