<?php

namespace App\Http\Requests\Admin\ZsyList;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'zsy_type_id' => 'required|integer',
            'image' => 'required|file'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле повинно бути заповненим!',
            'name.string' => 'Поле повинно бути строкового типу!',
            'zsy_type_id.required' => 'Виберіть пункт!',
            'zsy_type_id.integer' => 'Поле повинно бути цілочисельного типу!',
            'image.required' => 'Поле повинно бути заповненим!',
            'image.file' => 'необхідно вибрати файл!'
        ];
    }
}
