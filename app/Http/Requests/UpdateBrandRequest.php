<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'unique:brands,name'],
            'image' => ['required', 'string'],
            'description' => ['required', 'string', 'min:3',],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Brand name is required',
            'name.string' => 'Brand name must be a string',
            'name.min' => 'Brand name must be at least 3 characters',
            'image.required' => 'Brand image is required',
            'image.string' => 'Brand image must be a string',
            'description.required' => 'Brand description is required',
            'description.string' => 'Brand description must be a string',
            'description.min' => 'Brand description must be at least 3 characters',
        ];
    }
}
