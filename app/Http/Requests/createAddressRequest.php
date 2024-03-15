<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAddressRequest extends FormRequest
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
            'id_contact' => 'required|exists:contact,id',
            'street_address' => 'required|string',
            'city_address' => 'required|string',
            'province_address' => 'required|string',
            'country_address' => 'required|string',
            'postal_code_address' => 'required|string'
        ];
    }
}
