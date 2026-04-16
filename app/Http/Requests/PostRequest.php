<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha majburiy',
            'title.max' => 'Sarlavha 255ta belgidan oshmasligi kerak',
            'title.unique' => 'Bu sarlavha mavjud! Boshqasini kiriting',

            'short_content.required' => "Qisqacha ma'lumot majburiy",
            'short_content.min' => "Qisqacha ma'lumot kamida 25ta belgi kiritilishi kerak",

            'content.required' => "Batafsil ma'lumotni majburiy",
            'content.min' => "Batafsil ma'lumot kamida 200ta belgi kiritilgan bo'lish kerak!",

            
            'image.max' => "Fayl maksimal 2 mb bo'lishi kerak yoki 2048kb",
        ];
    }



    public function rules(): array
    {
        return [

            'title' => 'required|max:255|unique:posts',
            'image' => 'max:2048',
            'short_content' => 'required|min:25',
            'content' => 'required|min:200',

            // |images = it combain png,jpeg,jpg,bmp and other all image type files
        ];
    }
}
