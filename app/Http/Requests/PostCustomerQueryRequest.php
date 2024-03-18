<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class PostCustomerQueryRequest extends FormRequest
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
     * @return array
     */
    #[ArrayShape(['name' => "string[]", 'phone' => "string[]", 'email' => "string[]", 'project_detail' => "string[]"])]
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'phone' => ['required', 'numeric', 'min:10', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'project_detail' => ['required', 'string', 'max:1024']
        ];
    }

    #[ArrayShape(['phone.regex' => "string", 'phone.numeric' => "string", 'project_detail.max' => "string"])]
    public function messages(): array
    {
        return [
            'phone.regex' => 'Invalid Phone Number',
            'phone.numeric' => 'only numeric value is allowed',
            'project_detail.max' => 'Text is too long'
        ];
    }
}
