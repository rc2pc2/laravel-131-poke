<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            "name" => "required|string|min:3|max:255",
            "species" => "required|string|min:6|max:255",
            "element" => "required|string|min:4|max:255",
            "ability" => "required|string|min:4|max:255",
            "image" => "required|url",
        ];
    }

    public function messages(){
        return [
            "name.required" => "Il nome e' obbligatorio",
        ];
    }
}
