<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password' => 'required|string|min:4        ', // Mot de passe actuel
            'new_password' => 'required|string|min:4|different:password', // Nouveau mot de passe
            // 'confirm_password' => 'required|string|min:4|same:new_password', // Confirmation du nouveau mot de passe
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Le champ mot de passe actuel est requis.',
            'password.string' => 'Le champ mot de passe actuel doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe actuel doit contenir au moins 4 caractères.',

            'new_password.required' => 'Le champ nouveau mot de passe est requis.',
            'new_password.string' => 'Le champ nouveau mot de passe doit être une chaîne de caractères.',
            'new_password.min' => 'Le nouveau mot de passe doit contenir au moins 4 caractères.',
            'new_password.different' => 'Le nouveau mot de passe doit être différent du mot de passe actuel.',

            'confirm_password.required' => 'Le champ confirmation du mot de passe est requis.',
            'confirm_password.string' => 'Le champ confirmation du mot de passe doit être une chaîne de caractères.',
            'confirm_password.min' => 'La confirmation du mot de passe doit contenir au moins 4 caractères.',
            'confirm_password.same' => 'La confirmation du mot de passe doit correspondre au nouveau mot de passe.',
        ];
    }

    
}
