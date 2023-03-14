<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'details' => 'required|string',
            'image' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'حقل عنوان المنشور مطلوب.',
            'title.string' => 'حقل عنوان المنشور يجب أن يكون نصًا.',
            'details.required' => 'حقل تفاصيل المنشور مطلوب.',
            'details.string' => 'حقل تفاصيل المنشور يجب أن يكون نصًا.',
            'image.required' => 'حقل الصورة مطلوب.',
            'image.image' => 'حقل الصورة يجب أن يكون صورة.',
        ];
    }
}
