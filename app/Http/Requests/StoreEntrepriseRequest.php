<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrepriseRequest extends FormRequest
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
            'nom_entreprise' => ['required','string','max:100'],
            'adresse' => ['required','max:100'],
            'contact' => ['required','max:100'],
            'email' => ['required','email','unique:entreprises,email','max:100'],
            'description' => ['required'],
            'site_web' => ['required','string','max:100'],
            'logo' => ['required','image', 'mimes:jpeg,png,jpg', 'max:4096'],
            'secteurs' => ['required','array', 'exists:secteurs,id'],
        ];
    }

}
