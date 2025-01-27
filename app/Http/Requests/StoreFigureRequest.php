<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFigureRequest extends FormRequest
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

     /* Szabályok */
    public function rules(): array 
    {   //Másik formátum 'name' => 'required|string|max:255 (altgr + w szimbóluma)'
        return [
            'name' => ['required', 'string', 'max:255'], // Required, must be a string, and max 255 characters.
            'price' => ['required', 'numeric', 'min:0'], // Required, numeric, and must be at least 0.
            'description' => ['required', 'string', 'max:500'], // Optional, string, max 500 characters.
            'origin' => ['required', 'string', 'max:255'], // Optional, string, max 255 characters.
            'limited' => ['required', 'boolean'], // Optional, boolean value (checkbox).
            'quantity' => ['required', 'integer', 'min:0'], // Required if limited is true, optional otherwise, integer, and min 0.
        ];
    }

    /* Eredeti validálás szövegének felülírása */
    public function messages() {
        return [
            "name.required" => "A név kitöltése kötelező",
            "name.string" => "A név mezőnek string típusúnak kell lennie"
        ];
    }
}
