<?php

namespace App\Http\Controllers\Sistem;

use App\Http\Controllers\Controller;
use App\Services\Sistem\AuthServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    const REDIRECT = 'dashboard';
    protected $auth;
    public function __construct(AuthServices $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        if (Auth::check()) return response()
            ->redirectToRoute(self::REDIRECT);
        return view('auth.index');
    }

    public function logout()
    {
        $user = Auth::user();
        $this->auth->logout($user->id);
        return redirect()->route('login');
    }

    public function login_proses(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);
        $auth = $this->auth->login(
            $request->input('email'),
            $request->input('password'),
            $request->has('remember')
        );
        if (!empty($auth['errors']))
            return redirect()->back()->withErrors($auth['errors']);
        return redirect()->route(self::REDIRECT);
    }
}
