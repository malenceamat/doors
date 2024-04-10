<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SliderRequest extends FormRequest
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
            'subtitle' => ['required', 'string','max:255'],
            'button_text' => ['required','string','max:255'],
            'button_link' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Основной текст обязателен',
            'subtitle.required' => 'Дополнительный текст обязателен',
            'image.required' => 'Изображение обязательно',
            'button_text.required' => 'Текст на кнопке обязателен',
            'button_link.required' => 'Ссылка для кнопки обязателена'
        ];
    }
}
