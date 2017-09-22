<?php

namespace Exdeliver\Forum\Controllers;

use Exdeliver\Forum\Requests\LoginFormRequest;
use Exdeliver\Forum\Requests\RegisterFormRequest;
use Exdeliver\Forum\Requests\RequestPasswordFormRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function getLogin()
    {
        if(\Auth::check())
        {
            return redirect()
                ->to('/');
        }
        return view('forum::pages.user.login');
    }

    public function getRegister()
    {
        if(\Auth::check())
        {
            return redirect()
                ->to('/');
        }

        return view('forum::pages.user.register');
    }

    public function getRequestPassword()
    {
        if(\Auth::check())
        {
            return redirect()
                ->to('/');
        }

        return view('forum::pages.user.request_password');
    }

    public function getRequestPasswordCode($code = null)
    {
        if(isset($code))
        {
            return view('forum::pages.user.login');
        }

        return redirect()->to('/');
    }

    public function getProfile()
    {
        return view('forum::pages.user.profile');
    }

    public function getLogout()
    {
        \Auth::logout();

        return redirect()
            ->to('/')
            ->with('status', trans('forum::user.you_have_successfully_been_logged_out'));
    }

    public function login(LoginFormRequest $request)
    {

        $result = \UserService::login($request);

        return json_encode(['status' => $result, 'redirect' => redirect()->intended('dashboard')]);
    }

    public function register(RegisterFormRequest $request)
    {
        $result = \UserService::save($request);

        // expects array as result
        return json_encode($result);
    }

    public function requestPassword(RequestPasswordFormRequest $request)
    {
        $result = \UserService::requestPassword($request);

        return $result;
    }
}