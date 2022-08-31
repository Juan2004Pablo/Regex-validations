<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[A-Z,a-z]{3,20}/|not_regex:/[0-9]/',
            'last_name' => 'required|regex:/^[A-Z,a-z]{3,20}/',
            'id_type' => 'required|regex:/^[A-Z,a-z]{2,30}/',
            'identification' => 'required|regex:/^\d/|not_regex:/[a-z]/',
            'email' => 'required|regex:/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/',
        ];
    }

    public function messages(): array
    {
        return[
            'name' => 'The name is required and must be alphabetical',
            'last_name' => 'The name is required and must be alphabetical',
            'id_type' => 'The type of identification is required and must be alphabetical',
            'identification' => 'The identification is required and must be numeric',
            'email' => 'The email is required and must be type e-mail',
        ];
    }
}
