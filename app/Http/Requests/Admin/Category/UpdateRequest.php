<?php

namespace App\Http\Requests\Admin\ZsyList;

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
            'name' => 'required|string',
            'zsy_type_id' => 'required|integer',
            'image' => 'required|file'
        ];
    }
}