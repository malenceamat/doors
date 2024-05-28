<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DealerRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'email' => ['required','string','max:255'],
            'password' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'ФИО обязателено',
            'email.required' => 'E-mail обязателен',
            'password.required' => 'Пароль обязателен'
        ];
    }
}
