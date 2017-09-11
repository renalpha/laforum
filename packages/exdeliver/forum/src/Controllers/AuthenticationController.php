<?php

namespace Exdeliver\Forum\Controllers;

use Exdeliver\Forum\Requests\LoginFormRequest;
use Exdeliver\Forum\Requests\RegisterFormRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function getLogin()
    {
        return view('forum::user.login');
    }

    public function getRegister()
    {
        return view('forum::user.register');
    }

    public function getProfile()
    {
        return view('forum::user.profile');
    }

    public function login(LoginFormRequest $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('profile');
        }
    }

    public function register(RegisterFormRequest $request)
    {

    }
}