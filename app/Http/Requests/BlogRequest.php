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
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязательно',
            'title.required' => 'Заголовок обязателен',
            'subtitle.required' => 'Основной текст обязателен',
        ];
    }
}
