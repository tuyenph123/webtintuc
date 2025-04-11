<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('categories.index');
            } elseif ($user->role === 'editor') {
                return redirect()->route('news.index');
            }
        }

        return view('admin.auth.login');
    }


    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $request->session()->regenerate();
            return redirect()->route('categories.index');
        } elseif ($user->role === 'editor') {
            $request->session()->regenerate();
            return redirect()->route('news.index');
        }

        Auth::logout();
        return back()->withErrors(['email' => 'You do not have the required access.']);
    }

    return back()->withErrors(['email' => 'Invalid credentials.']);
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
