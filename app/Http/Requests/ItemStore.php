<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStore extends FormRequest
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
            'name'=>'bail|required|min:1|unique:items',
            'description'=>'bail|required|String|min:10',
            'picture'=>'bail|required|image|mimes:jpeg,png',
            'Stock'=>'bail|required',
        ];
    }
}
