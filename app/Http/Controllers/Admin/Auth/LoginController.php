<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withInput()->with('login-failed', 'Email atau password salah');
    }
}
