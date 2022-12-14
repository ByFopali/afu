<?php

namespace App\Http\Requests\Admin\Rank;

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
        return [
            'name' => 'nullable|string',
            'category_id' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|file'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле повинно бути заповненим!',
            'name.string' => 'Поле повинно бути строкового типу!',
            'category_id.required' => 'Виберіть пункт!',
            'category_id.integer' => 'Поле повинно бути цілочисельного типу!',
            'description.required' => 'Поле повинно бути заповненим!',
            'description.string' => 'Поле повинно бути строкового типу!',
            'image.required' => 'Поле повинно бути заповненим!',
            'image.file' => 'необхідно вибрати файл!',
        ];
    }
}
