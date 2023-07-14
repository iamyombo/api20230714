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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'name' => 'required|unique:products',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'photo_url' => 'required|url',
            'category' =>  'required',
            //'user_id' => 'required'
        ];
    }
}