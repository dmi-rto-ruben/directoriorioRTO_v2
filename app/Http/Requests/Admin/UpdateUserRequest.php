<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $user = $this->route('user');

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
//            'roles' => ['array'],
//            'roles.*' => ['exists:roles,id'],
//            'permissions' => ['array'],
//            'permissions.*' => ['exists:permissions,id'],
//            'status' => ['required', 'in:active,inactive'],
//            'avatar' => ['nullable', 'image', 'max:2048'], // Optional
//            'bio' => ['nullable', 'string', 'max:500'], // Optional
//            'social_links' => ['array'], // Optional
//            'social_links.*' => ['url'], // Optional, each link must be a valid URL
//            'preferences' => ['array'], // Optional, for user preferences
//            'preferences.*' => ['string', 'max:255'], // Optional, each preference must be a string
//            'settings' => ['array'], // Optional, for user settings
//            'settings.*' => ['string', 'max:255'], // Optional, each setting must be a string
//            'custom_fields' => ['array'], // Optional, for custom fields
//            'custom_fields.*' => ['string', 'max:255'], // Optional, each custom field must be a string
//            'two_factor_enabled' => ['boolean'], // Optional, for two-factor authentication
//            'last_login_at' => ['nullable', 'date'], // Optional
//            'last_login_ip' => ['nullable', 'ip'], // Optional
//            'created_at' => ['nullable', 'date'], // Optional, for created at timestamp
        ];
    }
}
