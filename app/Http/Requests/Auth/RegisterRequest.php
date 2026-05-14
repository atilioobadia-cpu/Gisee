<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Errors land in the "register" bag so the homepage re-opens the auth
     * modal on the sign-up panel.
     *
     * @var string
     */
    protected $errorBag = 'register';

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
     * Field names mirror the legacy sign-up modal inputs.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'signup_name' => ['required', 'string', 'max:120'],
            'signup_email' => ['required', 'email', 'max:180', 'unique:users,email'],
            'signup_password' => ['required', 'string', Password::defaults()],
        ];
    }

    /**
     * Human-friendly attribute names for validation messages.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'signup_name' => 'name',
            'signup_email' => 'e-mail address',
            'signup_password' => 'password',
        ];
    }
}
