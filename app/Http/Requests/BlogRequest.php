<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['required'],
            'title' => ['required','string','max:255'],
            'subtitle' => ['required'],
            'second_title' => ['required','string','max:255'],
            'sub_second_title' => ['required'],
            'button_text' => ['required','string','max:255'],
            'button_link' => ['required','string','max:255'],
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязательно',
            'title.required' => 'Основной текст обязателен',
            'subtitle.required' => 'Основной текст обязателен',
            'second_title.required' => 'Основной текст обязателен',
            'sub_second_title.required' => 'Основной текст обязателен',
            'button_text.required' => 'Основной текст обязателен',
            'button_link.required' => 'Дополнительный текст обязателен'
        ];
    }
}
