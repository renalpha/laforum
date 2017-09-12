<?php

namespace Exdeliver\Forum\Services;

use App\User;

class UserService
{
    public function save($input = null)
    {
        dd($input->all());
        // already have validated existing user, but we want to do that again
        $user = User::where('username','=', $input->username)->first();
        if(isset($user))
        {
            return false;
        }

        $input->name = ucfirst($input->first_name) . ' '.$input->last_name;
        $input->password = \Hash::make($input->user_password);

        $result = User::create($input->all());

        return true;
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