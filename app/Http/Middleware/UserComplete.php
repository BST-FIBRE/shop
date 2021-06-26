<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserComplete
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->firstname == null) {
            return redirect(route('user.complete'));
        } else return $next($request);
    }
}
