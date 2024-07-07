<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreateProductRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'product' => ['required', 'max:255'],
            'price' => ['required', 'max:255'],
            'category_id' => ['required'],
            'image' => ['required', 'max:4000', 'image', 'mimes:jpeg,png,jpg'],
        ];
    }
}
