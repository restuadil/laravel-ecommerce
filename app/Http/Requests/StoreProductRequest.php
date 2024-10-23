<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255', 'unique:products,name'],
            'description' => ['required', 'string', 'min:3', 'max:255'],
            'image' => ['required', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['required', 'exists:brands,id'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'numeric', 'min:0'],
            'is_active' => ['required', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 3 characters',
            'name.unique' => 'Name must be unique',
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 3 characters',
            'image.required' => 'Image is required',
            'category_id.required' => 'Category is required',
            'brand_id.required' => 'Brand is required',
            'price.required' => 'Price is required',
            'stock.required' => 'Stock is required',
            'is_active.required' => 'Is active is required',
            'is_active.boolean' => 'Is active must be true or false',
        ];
    }
}
