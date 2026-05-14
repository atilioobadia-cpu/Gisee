<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Validation errors are flashed into a dedicated bag so the homepage
     * knows to re-open the contact modal (and not the auth modal).
     *
     * @var string
     */
    protected $errorBag = 'contact';

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
     * The field names mirror the legacy contact form inputs.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'contact_name' => ['required', 'string', 'max:120'],
            'contact_email' => ['required', 'email', 'max:180'],
            'contact_phone' => ['nullable', 'string', 'max:40'],
            'contact_service' => ['nullable', 'string', 'max:120'],
            'contact_message' => ['required', 'string', 'min:10', 'max:4000'],
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
            'contact_name' => 'name',
            'contact_email' => 'e-mail address',
            'contact_phone' => 'phone number',
            'contact_service' => 'service',
            'contact_message' => 'message',
        ];
    }

    /**
     * Map the prefixed form inputs onto the ContactMessage columns.
     *
     * @return array<string, mixed>
     */
    public function toContactMessage(): array
    {
        return [
            'name' => $this->validated('contact_name'),
            'email' => $this->validated('contact_email'),
            'phone' => $this->validated('contact_phone'),
            'service' => $this->validated('contact_service'),
            'message' => $this->validated('contact_message'),
        ];
    }
}
