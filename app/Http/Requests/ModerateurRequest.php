<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class ModerateurRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => ['required', 'integer', 'unique:admins,telephone'],
            'adresse' => 'required|string|max:20',
            'email' => ['required', 'email', 'max:50', 'unique:admins,email'],
            'password' => ['required','min:4'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:4096']
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est obligatoire',
            'prenom.required' => 'Le prenom est obligatoire',
            'telephone.required' => 'Le téléphone est obligatoire',
            'telephone.unique' => 'Le téléphone existe déjà',
            'adresse.required' => 'L\'adresse est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.unique' => 'L\'email existe déjà',
            'email.email' => 'Le type n\'est pas valide',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.min' => 'Veuillez saisir au moins 4 caractères',
            'avatar.nullable' => 'Ce champ n\'est pas obligatoire',
            'avatar.image' => 'Ce champ est de type image',
            'avatar.mimes' => 'Seulement les images de type jpg, jpeg et png sont valable',
            'avatar.max' => 'Les images de plus de 4Mo sont pas valable'
        ];
    }
}
