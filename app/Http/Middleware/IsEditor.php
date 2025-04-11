<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsEditor
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== 'editor') {
            return redirect()->route('admin.login')->withErrors(['access' => 'You do not have editor access.']);
        }

        return $next($request);
    }
}