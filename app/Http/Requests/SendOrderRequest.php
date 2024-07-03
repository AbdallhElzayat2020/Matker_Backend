<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendOrderRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'country_code' => ['required', 'in:+966,+971,+973,+965,+968,+974,+20'],
            'number' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string'],
            'offer' => ['required', 'in:اشترى 1 بسعر 199 ريال +25 رسوم توصيل,اشترى 2 بسعر 329 ريال (توصيل مجاني),اشترى 3 بسعر 399 ريال (توصيل مجاني)'],
        ];
    }
}
