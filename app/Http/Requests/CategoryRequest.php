<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'name'=>'required|max:255',
            'icon' => 'required|mimes:jpeg,jpg,png,gif,svg,webp|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is requird',
        ];
    }
}
