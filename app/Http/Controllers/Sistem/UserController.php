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
    protected $user, $userLevel;
    public function __construct(UserServices $user, UserLevelServices $userLevel)
    {
        // $this->middleware('auth', 'fitur_program');
        // view()->share([
            // 'user_level' => $userLevel->listUserLevel()
            // 'user_level' => $userLevel->searchUserLevel(new Request())
            //     ->pluck('nama', 'id')->toArray()
        // ]);
        $this->user = $user;
        $this->userLevel = $userLevel;
    }

    public function index()
    {
        return view('sistem.user.index');
    }

    public function create()
    {
        return view('sistem.user._info');
    }
    
    public function store(Request $request)
    {
        return $this->user->saveUser($request);
    }

    public function search(Request $request)
    {
        $levelUser = UserLevel::all();
        dd($levelUser);
        $users = $this->user->searchUser($request->all());
        if ($request->has('ajax')) return $users;
        return view('sistem.user._table', compact('users'));
    }

    
    
}
