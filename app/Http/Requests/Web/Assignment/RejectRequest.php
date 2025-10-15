<?php

namespace App\Http\Requests\Web\Assignment;

use Illuminate\Foundation\Http\FormRequest;

class RejectRequest extends FormRequest
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
            'accept' => 'required|in:0,1',
            'reason' => 'required_if:accept,0|string|max:255',
        ];
    }
}
