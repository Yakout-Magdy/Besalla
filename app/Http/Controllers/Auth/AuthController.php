<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Multitenancy\Models\Tenant;
use App\Services\Users\CreateAdminService;
use App\Services\Users\Enums\UserTypeEnum;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('dashboard.login');
        // return view('dashboard.tenant.authentication.login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        $credentials = $request->only("email", "password");
        // $userGuard = Auth::guard('tenant');


        // if ($userGuard->attempt($credentials)) {
        //     return to_route('dashboard.tenant.index')->with(
        //         'success',
        //         __('dashboard/messages.success.login')
        //     );
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Prevent session fixation
            return view('dashboard.test');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
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
