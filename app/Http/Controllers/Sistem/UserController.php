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
        dd($getOne);
    }

    public function edit($id)
    {
        $user = $this->userServices->getOne($id);
        return view('sistem.user._info', compact('user'));
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
        if ($request->has('ajax')) return $users;
        return view('sistem.user._table', compact('users'));
    }

    
    
}
