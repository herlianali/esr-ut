<?php

namespace App\Http\Middleware;

use App\Models\UserLog;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = (Auth::check()) ? Auth::user()->id : null;
        if($user_id != null && $request->method() != 'GET'){
            UserLog::create([
                'user_id' => $user_id,
                'method' => $request->method(),
                'url' => $request->fullUrl(),
                'request_data' => json_encode($request->all()),
            ]);
        }
        return $next($request);
    }
}
