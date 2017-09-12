<?php namespace Exdeliver\Forum\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username' => 'required|unique:users,username',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'terms' => 'nullable',
            'password' => 'nullable|between:8,255|confirmed',
        ];
    }

    public function authorize()
    {
        return true;
    }
}