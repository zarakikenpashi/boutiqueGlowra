<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            "name" => ['required', 'max:255'],
            'image_path' => ['nullable', 'image'],
            "description" => ['nullable', 'string'],
            'quantity' => ['nullable', 'integer'],
            'price' => ['nullable', 'integer'],
            'category_id' => ['nullable', 'integer']
        ];
    }
}
