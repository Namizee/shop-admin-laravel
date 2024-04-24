<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|file|image',
            'price' => 'required|regex:/^\d+(\.\d{2})?$/',
            'count' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
            'brand_id' => 'required|string|exists:brands,id',
            'color_ids' => 'nullable|array',
            'color_ids.*' => 'nullable|integer|exists:brands,id',
            'disabled' => 'required|boolean'
        ];
    }
}
