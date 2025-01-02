<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if ($request->username === 'Admin' && $request->password === 'Heslo') {
            session(['role' => 'admin']);
            return redirect()->route('admin.index');
        }

        return redirect()->route('admin.login')->withErrors(['invalid' => 'Nespravne jmeno uzivatele']);
    }


    public function logout()
    {
        session()->forget('role');
        return redirect()->route('index');
    }

}
