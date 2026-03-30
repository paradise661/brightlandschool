<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'start_date' => [
                'required',
                'regex:/^\d{4}-\d{2}-\d{2}$/', // BS date format YYYY-MM-DD
            ],
            'end_date' => [
                'nullable',
                'regex:/^\d{4}-\d{2}-\d{2}$/', // BS date format YYYY-MM-DD
                function ($attribute, $value, $fail) {
                    $startDate = $this->input('start_date');
                    if ($startDate && $value) {
                        // Compare BS dates using AnuzPandey/convert logic if needed
                        // Here simple string comparison works for YYYY-MM-DD format
                        if ($value < $startDate) {
                            $fail('End date must be after start date.');
                        }
                    }
                },
            ],
            'event_categories_id' => 'required|exists:event_categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'event_categories_id.required' => 'Please select a category.',
            'event_categories_id.exists' => 'Selected category is invalid.',
            'start_date.required' => 'Please select a start date.',
            'start_date.regex' => 'Start date must be in BS format YYYY-MM-DD.',
            'end_date.regex' => 'End date must be in BS format YYYY-MM-DD.',
        ];
    }
}
