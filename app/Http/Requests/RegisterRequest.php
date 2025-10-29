<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:users,name',
            'password' => 'required|min:4|confirmed ',

        ];
    }

    public function messages(): array
    {
        return [
            // поле-specific
            'name.required' => 'Укажи своё имя.',
            'name.unique' => 'Имя занято, введи другое.',
            // password
            'password.required' => 'Пароль обязателен.',
            'password.min' => 'Пароль минимум :min символа.',
            // очень важный ключ — field.confirmed
            'password.confirmed' => 'Пароли не совпадают.',
        ];
    }

}
