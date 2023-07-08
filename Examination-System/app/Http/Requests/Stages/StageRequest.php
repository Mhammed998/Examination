<?php

namespace App\Http\Requests\Stages;

use Illuminate\Foundation\Http\FormRequest;

class StageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_en' => 'required|string|min:2',
            'name_ar' => 'required|string|min:2',
        ];

    }


    public function messages(): array
    {
        return [
            'name_en.required' => 'Stage name in english is required',
            'name_ar.required' => 'Stage name in arabic is required',
            'name_en.string' => 'Stage name in english must be string',
            'name_ar.string' => 'Stage name in arabic must be string',
        ];
    }
}
