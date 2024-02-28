<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRegisterRequest extends FormRequest
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
            'telephone' => ['required', 'integer', Rule::unique('admins')->ignore($this->route()->parameter('admin'))],
            'adresse' => 'required|string|max:20',
            'email' => ['required', 'email', 'max:50', Rule::unique('admins')->ignore($this->route()->parameter('admin'))],
        ];
    }
}
