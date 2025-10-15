<?php

namespace App\Http\Requests\Admin\Assignment\Payment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'billing_type' => 'The billing type is required',
            'miles' => 'The miles field is required',
            'price' => 'The price field is requierd'
        ];
    }

    
    public function messages(): array
    {
        return [
            'billing_type' => 'The billing type is required',
            'miles' => 'The miles field is required',
            'price' => 'The price field is requierd'
        ];
    }
}
