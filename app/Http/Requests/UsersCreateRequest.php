<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Por favor informe o nome!',
            'email.required' => 'Por favor informe o email!',
            'email.email' => 'O email informado não possui um formato válido!',
            'password.required' => 'É obrigatório informar a senha!',
            'password.min' => 'A senha deve conter no mínimo 6 caracteres!',
        ];
    }
}
