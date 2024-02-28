<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOffreRequest extends FormRequest
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
            'titre' => ['required','string','max:20'],
            'description' => ['required','string','max:500'],
            'contenu' => ['required','string','max:10000'],
            'photo' => ['required','image', 'mimes:jpeg,png,jpg', 'max:4096'],
            'date_debut' => ['required','date'],
            'date_fin' => ['required','date'],
            'lieu' => ['required','string','max:100'],
            'salaire' => ['nullable','numeric'],
            'type_offre_id' => ['required','string','exists:type_offres,id'],
            'departement_id' => ['required','string','exists:departements,id'],
            'domaine_id' => ['required','string','exists:domaines,id'],
            'entreprise_id' => ['required','string','exists:entreprises,id'],
        ];
    }
}
