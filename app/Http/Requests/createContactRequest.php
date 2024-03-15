<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name_contact' => 'required|string',
            'last_name_contact' => 'required|string',
            'email_contact' => 'required|email|unique:contact',
            'phone_contact' => 'required|string'
        ];
    }
}
