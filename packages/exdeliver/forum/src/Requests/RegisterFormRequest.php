<?php namespace Exdeliver\Forum\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
}