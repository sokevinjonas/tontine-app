<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function loginPost(LoginRequest $request)
    {
        $credentials = $request->only(['phone', 'password']);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('user.login')->with('msg_error', 'Les données entrées sont invalides !');
        }
    }
}
