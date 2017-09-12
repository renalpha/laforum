<?php namespace Exdeliver\Forum\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_reminder' => 'required|same:password',
        ];
    }

    public function authorize()
    {
        return true;
    }
}