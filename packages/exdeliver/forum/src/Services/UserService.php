<?php

namespace Exdeliver\Forum\Services;

use App\User;

class UserService
{
    public function save()
    {

    }

    public function login($request = null)
    {
        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            // Authentication passed...
            return true;
        }else{
            return false;
        }
    }
}