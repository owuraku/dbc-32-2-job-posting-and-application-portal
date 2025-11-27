<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyCreateRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:255', Rule::unique('companies', 'name')->ignore($this->company)],
            'address' => ['required', 'min:5', 'max:255'],
            'contact' => ['required', 'min_digits:10', 'max_digits:255', 'numeric', Rule::unique('companies', 'contact')->ignore($this->company)],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'contact.unique' => 'Masa, you cannot use this number'
    //     ];
    // }

    public function attributes()
    {
        return [
            'name' => 'company name'
        ];
    }
}
