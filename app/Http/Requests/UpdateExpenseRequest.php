<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpenseRequest extends FormRequest
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
            'user_id' => ['nullable', 'numeric', 'min:1'],
            'category_id' => ['required', 'numeric', 'min:1'],
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'status' => ['nullable', 'numeric'],
        ];
    }
}
