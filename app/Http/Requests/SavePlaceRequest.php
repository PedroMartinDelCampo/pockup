<?php

namespace Pockup\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePlaceRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'max:255',
            'photo' => 'required|image',

            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'phone' => [
                'required',
                'regex:/^\+\d{12,13}$/'
            ],

            'address' => 'required|max:255',
            'lat' => 'required|numeric|min:0',
            'long' => 'required|numeric|min:0',

            'general_price' => 'required_with:has_general_price',
            'price.*' => 'numeric|min:0'
        ];
    }
}
