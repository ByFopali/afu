<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest
    extends FormRequest
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
//        dd($this->user_id);
        return [
            'name' => 'required|string',
            'email' => 'required|string|email| unique:users, email' . $this->user_id,
            'role' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле повинно бути заповненим!',
            'name.string' => 'Поле повинно бути строкового типу!',
            'email.required' => 'Поле повинно бути заповненим!',
            'email.string' => 'Поле повинно бути строкового типу!',
            'role.required' => 'Поле повинно бути заповненим!',
            'role.integer' => 'Поле повинно бути цілочисельного типу типу!',
            'email.unique' => 'Ця електронна пошта зайнята!'
        ];
    }
}
