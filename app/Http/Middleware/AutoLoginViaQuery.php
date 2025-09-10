<?php
// app/Http/Middleware/AutoLoginViaQuery.php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AutoLoginViaQuery
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('user-login') && !auth()->check()) {
            $userId = $request->query('user-login');

            // Optional: validate user ID exists and is active
            $user = User::find($userId);

            if ($user) {
                Auth::loginUsingId($userId);
            }
        }

        return $next($request);
    }
}
