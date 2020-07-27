<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Auth\Authenticatable as Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view("dashboard.auth.login");
    }

    public function postLogin(Request $request)
    {
        if (Str::is("*@*", $request->email))
        {
            $user = User::where(['Email' => $request->email])->first();
        }
        else
        {
            $user = User::where(['username' => $request->email])->first();
        }

        if ($user != null)
        {
            if (Hash::check($request->password, $user->Password))
            {
                $auth = \Auth::loginUsingId($user->UserID);

                return redirect()->route('dashboard')->with(["Message" => "Login Succes!, Welcome $user->Name"]);
            }

            return redirect()->back()->withErrors(['Password is Wrong!']);
        }
        
        return redirect()->back()->withErrors(['Username/Email Not Found!']);   
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route("login");
    }
}
