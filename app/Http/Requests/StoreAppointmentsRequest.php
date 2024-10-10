<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentsRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', // Ensure email is required and valid
            'date' => 'required|date',
            'time' => 'required|string',
            'description' => 'nullable|string',
        ];
    }
}
