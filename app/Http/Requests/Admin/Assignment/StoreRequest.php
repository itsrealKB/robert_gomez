<?php

namespace App\Http\Requests\Admin\Assignment;

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
            'insurance' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:20',
            'owner_email' => 'required|email|max:255',
            'claim' => 'required|string|max:255|unique:assignments,claim',
            'claim_type' => 'required|string|max:255',
            'loss_type' => 'required|string|max:255',
            'vehicle_location' => 'required|string|max:255',
            'appointment' => 'required|date',
        ];
    }
}
