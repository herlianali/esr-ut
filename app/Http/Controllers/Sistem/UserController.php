<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserLevel;
use App\Services\Sistem\UserLevelServices;
use App\Services\Sistem\UserServices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userServices;
    public function __construct(UserServices $userServices, UserLevelServices $userLevel)
    {
        // $this->middleware('auth', 'fitur_program');
        $this->userServices = $userServices;
        view()->share([
            'title' => 'User',
            'active_route' => 'employee.user.index',
            'user_level' => $userLevel->searchUserLevel(new Request())
                ->pluck('nama', 'id')->toArray()
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
        $create = 0;
        $user = $this->userServices->getOne($id);
        return view('sistem.user._info', compact('user', 'create'));
    }
    
    public function store(Request $request)
    {
        return $this->userServices->createUser($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->userServices->updateUser($request, $id);
    }

    public function search(Request $request)
    {
        $users = $this->userServices->searchUser($request->all());
        return view('sistem.user._table', compact('users'));
    }

    
    
}
