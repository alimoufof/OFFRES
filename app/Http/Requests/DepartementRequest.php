<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartementRequest extends FormRequest
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
            'nom_departement' => ['required', 'string', 'max:100', 'unique:departements,nom_departement'],
        ];
    }

    public function messages()
    {
        return [
            'nom_departement.required' => 'Le nom du département est requis',
            'nom_departement.string' => 'Le nom du département est une chaine de caratère',
            'nom_departement.max' => 'Le maximum est 100 caractères',
            'nom_departement.unique' => 'Le nom du département est unique',

        ];
    }
}
