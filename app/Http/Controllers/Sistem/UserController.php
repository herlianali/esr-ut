<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Sistem\UserLevelServices;
use App\Services\Sistem\UserServices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    public function __construct(UserServices $user, UserLevelServices $userLevel)
    {
        // $this->middleware('auth', 'fitur_program');
        // view()->share([
        //     'user_level' => $userLevel->searchUserLevel(new Request())
        //         ->pluck('nama', 'id')->toArray()
        // ]);
        $this->user = $user;
    }

    public function index()
    {
        return view('sistem.user.index');
    }

    public function search(Request $request)
    {
        // $user = User::where('nama', 'like', "%%")->get();
        // dd($user);
        $users = $this->user->searchUser($request->all());
        if ($request->has('ajax')) return $users;
        return view('sistem.user._table', compact('users'));
    }

    
}
