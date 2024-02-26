<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => ['required', 'min:3'],
            "phone" => ['required', 'min:7', 'max:12'],
            "subjects.*" => ['required', 'array']
        ];
    }
    public function messages()
    {
        return [
            "subjects.0.required" => "Please enter a subject1 field",
            "subjects.1.required" => "Please enter a subject2 field"
        ];
    }
}
