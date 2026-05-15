<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'image' => 'required|mimes:jpg,png',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|max:8',
        ];
    }

    public function messages(){

        return [

            'name.required' => 'Ismni kiriting',
            'name.max' => 'Ismni 255ta belgidan oshmasligi kerak',

            'image.required' => 'Faylni yuklang',
            'image.mimes' => 'Fayl jpg yoki png formatda bo\'lsin',

            'email.required' => 'Email bo\'lishi kerak',
            'email.unique' => 'Bu email jadvalda bor boshqasini kiriting',
            'email.email' => 'Buyerga ...@gmail.com kiritishingiz kerak',

            'password.required' => 'Parolni kiriting',
            'password.max' => 'Parolni maksimal 8ta belgidan oshmasin',
        ];
    }
}
