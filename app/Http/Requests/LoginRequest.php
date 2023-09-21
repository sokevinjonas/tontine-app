<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'phone' => 'required|integer|exists:users,phone',
            'password' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string>
     */
    public function message(): array
    {
        return [
            'phone.required' => 'Le numéro de téléphone est obligatoire',
            'phone.exists' => 'Le numéro de téléphone n\'existe pas',
            'password.required' => 'Le mot de passe est obligatoire',
        ];
    }
}
