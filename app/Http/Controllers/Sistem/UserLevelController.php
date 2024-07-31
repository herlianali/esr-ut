<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Models\UserLevel;
use App\Services\Sistem\UserLevelServices;
use Illuminate\Http\Request;

class UserLevelController extends Controller
{
    protected $userLevelServices;
    public function __construct(UserLevelServices $userLevelServices)
    {
        $this->userLevelServices = $userLevelServices;
        view()->share([
            'active_route' => 'employee.user_level.index',
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

    public function edit($id)
    {
        $userLevel = $this->userLevelServices->getOne($id);
        return view('sistem.user_level._info', compact('userLevel'));
    }

    public function store(Request $request)
    {
        return $this->userLevelServices->createUserLevel($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->userLevelServices->updateUserLevel($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->userLevelServices->deleteUserLevel($id);
    }

    public function search(Request $request)
    {
        // $userLevels = new UserLevel();
        $userLevels = $this->userLevelServices->searchUserLevel($request->all());
        // dd($userLevels->all());
        return view('sistem.user_level._table', compact('userLevels'));
    }
}
