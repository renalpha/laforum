<?php namespace Exdeliver\Forum\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
            'message' => 'required'
        ];
    }
}