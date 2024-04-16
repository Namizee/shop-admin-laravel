<?php

namespace App\Http\Requests\User;

use App\Http\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'address' => 'required|string',
            'birthday' => 'required|date_format:Y-m-d',
            'gender' => ['required', new Enum(Gender::class)],
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:6|string|confirmed',
        ];
    }
}
