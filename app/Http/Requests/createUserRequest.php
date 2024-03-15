<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'username_user' => 'required|string|unique:user|min:6',
            'password_user' => 'required|string|min:8',
            'name_user' => 'required|string|min:3'
        ];
    }
}
