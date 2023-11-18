<?php

namespace App\Http\Requests;

use App\Http\Requests\UserRegisterRequest;

class UpdateUserRequest extends UserRegisterRequest
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
            'age' => 'string',
            'gender' => 'in:male,female,other',
            'location' => 'string'
        ];
    }
}
