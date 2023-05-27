<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        $remember_token = $request->has('remember_token') ? true : false;
        if (Auth::attempt($credentials, $remember_token)) {
            if (Auth::user()->profile_type === 'App\Models\Admin') {
                return redirect()->route('admins.dashboard');
            } elseif (Auth::user()->profile_type === 'App\Models\Student') {
                return redirect()->route('auth.dashboard');
            } elseif (Auth::user()->profile_type === 'App\Models\Agent') {
                return redirect()->route('auth.dashboard');
            } elseif (Auth::user()->profile_type === 'App\Models\University') {
                return redirect()->route('auth.dashboard');
            } elseif (Auth::user()->profile_type === 'App\Models\Staff') {
                return redirect()->route('auth.dashboard');
            }
        } else {
            return back()->withErrors(['password' => 'Wrong Credentials']);
        }
    }
}
