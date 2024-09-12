<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\FlpgServices;
use App\Services\Sistem\PengawasServices;
use App\Services\Sistem\QuestioningOptionsServices;
use Illuminate\Http\Request;
use PhpParser\Node\Identifier;

class FlpgController extends Controller
{
    protected $flpgServices, $questioningOptionsServices;
    public function __construct(
            FlpgServices $flpgServices, 
            PengawasServices $pengawasServices,
            QuestioningOptionsServices $questioningOptionsServices,
        )
    {
        $this->middleware('auth');
        $this->flpgServices = $flpgServices;
        $this->questioningOptionsServices = $questioningOptionsServices;
        view()->share([
            'title' => 'FLPG',
            'active_route' => 'questioning.flpg.index',
            'list_pengawas' => $pengawasServices->listNamaPengawas(),
            'list_aktivitas' => $flpgServices->listAktivitas(),
        ]);
    }

    public function index()
    {
        return view('questioning.flpg.add');
    }

    public function create()
    {
        return view('questioning.flpg._info');
    }

    public function show($id)
    {
        $getOne = $this->flpgServices->getOne($id);
    }

    public function edit($id)
    {
        $flpg = $this->flpgServices->getOne($id);
        $aktivitas = json_decode($flpg->aktivitas, true);
        // dd(json_decode($flpg->aktivitas, true));
        return view('questioning.flpg.add', compact('flpg', 'aktivitas'));
    }
    
    public function store(Request $request)
    {
        return $this->flpgServices->createFlpg($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->flpgServices->updateFlpg($request->all(), $id);
    }

    public function search(Request $request)
    {
        $flpg = $this->flpgServices->searchFlpg($request->all());
        return view('questioning.flpg._table', compact('flpg'));
    }

    public function options($id)
    {
        $list_options = $this->questioningOptionsServices->listOptions($id);
        return view('questioning.flpg.aktivitas._options', compact('list_options'));
    }
    
}
