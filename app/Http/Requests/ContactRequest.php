<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContactRequest extends FormRequest
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
            'address' => ['required','string','max:255'],
            'number' => ['required','string','max:255'],
            'email' => ['required','string','max:255'],
            'work_mode' => ['required', 'string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'address.required' => 'Адрес обязателен',
            'number.required' => 'Номер телефона обязателен',
            'email.required' => 'Почта обязательна',
            'work_mode.required' => 'Режим работы обязателен'
        ];
    }
}
