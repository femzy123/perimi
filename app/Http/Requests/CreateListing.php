<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListing extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'string',
            'name' => 'string|required',
            'tagline' => 'string',
            'description' => 'string|required',
            'email' => 'required|e-mail',
            'phone' => 'required|digits',
            'website' => 'url|required',
            'address' => 'string|required',
            'state_id' => 'integer|required',
            'logo' => 'image|nullable',
            'cover_image' => 'image|nullable'
        ];
    }
}
