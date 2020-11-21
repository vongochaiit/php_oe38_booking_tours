<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        view('client.pages.login');
    }

    public function login(LoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember == 'on' ? true : false;
        if (Auth::attempt(['username' => $username, 'password' => $password],$remember)) {
            return redirect()->route('home.index');
        }
        Session::flash('Error', trans('language.error.error_login'));
        return redirect()->route('home.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home.index');
    }
}
