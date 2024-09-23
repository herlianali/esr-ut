<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserLevel;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use App\Services\Sistem\UserLevelServices;
use App\Services\Sistem\UserServices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userServices, $pengawasServices;
    public function __construct(
            UserServices $userServices, 
            UserLevelServices $userLevel, 
            PengawasServices $pengawasServices,
            FiturProgramServices $fiturProgramServices
        )
    {
        $this->middleware('auth');
        $this->userServices     = $userServices;
        $this->pengawasServices = $pengawasServices;

        view()->share([
            'title'         => 'User',
            'active_route'  => 'sistem.user.index',
            'fitur'         => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
            'user_level'    => $userLevel->searchUserLevel(new Request())
                                ->pluck('nama', 'id')->toArray(),
            'list_target'   => $pengawasServices->listKelompokTarget(),
            'list_sektor'   => $pengawasServices->listSektor(),
        ]);
    }

    public function index()
    {
        return view('sistem.user.index');
    }

    public function create()
    {
        return view('sistem.user._info')->with(['create' => 1]);
    }

    public function show($id)
    {
        $getOne = $this->userServices->getOne($id);

    }

    public function edit($id)
    {
        $create   = 0;
        $user     = $this->userServices->getOne($id);
        $pengawas = $this->pengawasServices->searchPengawas(['user_id' => $id, 'first' => 0]);
        return view('sistem.user._info', compact('user', 'pengawas', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->userServices->createUser($request->all());
    }

    public function update(Request $request, $id)
    {
        $foto = $this->save_file($request, 'foto_profile', 'foto');
        if($foto != '') $request->merge(['foto' => $foto]);
        $params = $request->request->all();
        return $this->userServices->updateUser($params, $id);
    }

    public function testUpload(Request $request)
    {
        dd($request->file('foto'), $request->file('profile_foto'));
    }

    public function search(Request $request)
    {
        $users = $this->userServices->searchUser($request->all());
        return view('sistem.user._table', compact('users'));
    }

    
    
}
