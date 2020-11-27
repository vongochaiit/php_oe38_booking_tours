<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'bail|required|min:3',
            'password' => 'bail|required|min:3'
        ];
    }

    public function messages()
    {
        return[
            'username.required' => trans('language.messages.username_required'),
            'username.min' => trans('language.messages.username_min'),
            'password.required' => trans('language.messages.password_required'),
            'password.min' => trans('language.messages.username_min'),
        ];
    }
}
