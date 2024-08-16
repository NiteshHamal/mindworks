<?php

namespace App\Http\Requests\PricingCustom;

use Illuminate\Foundation\Http\FormRequest;

class PricingCustomCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname'=>['required'],
            'email'=>['required'],
            'phone'=>[ 'required'],
            'services'=>['required'],
            'contact_message'=>['nullable']
        ];
    }
}
