<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $roles)
    {
        $user = Auth::user();
        $need_roles = explode('|', $roles);
        if (in_array($user->role, $need_roles)) {
            return $next($request);
        }
        return response()->json(['message' => 'Yetkisiz giriş'], 401);
    }
}