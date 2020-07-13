<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view("dashboard.auth.login");
    }

    public function postLogin(Request $request)
    {
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            return redirect()->back();
        };

        return redirect()->route("dashboard");
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route("login");
    }
}
