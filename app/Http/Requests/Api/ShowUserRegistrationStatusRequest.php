<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ShowUserRegistrationStatusRequest extends FormRequest
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
            'identity_number' => ['required', 'max_digits:12', 'exists:users,identity_number'],
        ];
    }

    public function messages()
    {
        return [
            'identity_number.exists' => 'Pengguna ini tiada di dalam pangkalan data Skuad AADK',
        ];
    }
}