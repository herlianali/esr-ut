<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\UserLevelServices;
use Illuminate\Http\Request;

class UserLevelController extends Controller
{
    protected $userLevelServices, $fiturProgramServices;
    public function __construct(
            UserLevelServices $userLevelServices,
            FiturProgramServices $fiturProgramServices
        ) {
        $this->userLevelServices = $userLevelServices;
        view()->share([
            'title' => 'User Level',
            'active_route' => 'sistem.user_level.index',
            'fitur' => $fiturProgramServices->searchFiturProgram(['parent_kode' => '05']),
            'fitur_program' => $fiturProgramServices->searchFiturProgram([]),
            'list_akses_menu' => $fiturProgramServices->listFiturProgram(),
        ]);
    }

    public function index()
    {
        return view('sistem.user_level.index');
    }

    public function create()
    {
        return view('sistem.user_level._info');
    }

    public function show($id)
    {
        $getOne = $this->userLevelServices->getOne($id);
        return $getOne;
    }

    public function edit($id)
    {
        $create = 0;
        $user_level = $this->userLevelServices->getOne($id);
        $akses_menu = json_decode($user_level->akses_menu, true);
        return view('sistem.user_level._info', compact('user_level', 'akses_menu', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->userLevelServices->createUserLevel($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->userLevelServices->updateUserLevel($request->all(), $id);
    }

    public function search(Request $request)
    {
        $user_level = $this->userLevelServices->tableUserLevel($request->all());
        return view('sistem.user_level._table', compact('user_level'));
    }

    public function destroy($id)
    {
        return $this->userLevelServices->deleteUserLevel($id);
    }
}
