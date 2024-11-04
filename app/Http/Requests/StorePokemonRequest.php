<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePokemonRequest extends FormRequest
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
            "name" => ["required", "string", "min:3", "max:255"],
            "species" => "required|string|min:6|max:255",
            "element" => "required|string|min:4|max:255",
            "ability" => "required|string|min:4|max:255",
            "image" => "required|url",
        ];
    }

    public function messages(){
        return [
            "name.required" => "Il nome e' obbligatorio",
            "name.string" => "Il nome deve essere una stringa",
            "name.min" => "Il nome deve avere almeno tre caratteri",
            "name.max" => "Il nome non puo' avere piu' di 255 caratteri",
            "species.required" => "La specie e' obbligatoria",
            "element.required" => "L'elemento e' obbligatorio",
            "ability.required" => "L'abilita' e' obbligatoria",
            "image.required" => "L'immagine e' obbligatoria",
            "image.url" => "L'immagine deve essere un URL ben composto",
        ];
    }
}
