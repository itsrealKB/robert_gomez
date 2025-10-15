<?php

namespace App\Http\Requests\Admin\Assignment\Payment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'billing_type.*' => 'required',
            'miles.*' => 'required',
            'price.*' => 'required'
        ];
    }


    public function messages(): array
    {
        return [
            'billing_type.*.required' => 'The billing type is required',
            'miles.*.required' => 'The miles field is required',
            'price.*.required' => 'The price field is requierd'
        ];
    }
}
