<?php namespace Exdeliver\Forum\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPasswordFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}