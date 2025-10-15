<?php

namespace App\Http\Requests\Admin\GeneralForm;

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
            'label' => 'required|string|max:255',
            'file' => ['required', 'mimes:docx,pdf', 'max:512000'] // Same validation rules
        ];
    }

    public function messages(): array
    {
        return [
            'file.max' => 'file Size must not be max than 500mb'
        ];
    }
}
