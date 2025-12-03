<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfile extends FormRequest
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
            'fullname' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(Auth::user())],
            'contact' => ['required', 'min_digits:10', 'max_digits:15', Rule::unique('users')->ignore(Auth::user())],
            'address' => ['required', 'max:255'],
            'cv_path' => ['sometimes', 'nullable', 'file', 'mimetypes:application/pdf', 'max:2048']
        ];
    }
    public function attributes()
    {
        return [
            'cv_path' => 'CV'
        ];
    }
}
