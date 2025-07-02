<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'phone' => 'required',
                'password' => 'required',
            ]
        );
        $credentials = $request->only("phone", "password");

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('dashboard.test');
        }

        return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ])->onlyInput('phone');
    }

    public function logout()
    {
        $user = Auth::guard('tenant');
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return to_route('login');
    }
}
