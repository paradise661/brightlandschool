<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            // Student's Detail
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:3|max:25',
            'gender' => 'required|in:male,female',

            // Parental Information
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',

            // Documents Upload
            'birth_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'student_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',

            // Declaration
            'declaration_confirmed' => 'accepted',

        ];
    }

    public function messages(): array
    {
        return [
            // Student's Detail
            'name.required' => "Please enter the student's full name.",
            'age.required' => "Please enter the student's age.",
            'age.integer' => "Age must be a number.",
            'age.min' => "Age must be at least 3 years.",
            'age.max' => "Age cannot exceed 25 years.",
            'gender.required' => "Please select the student's gender.",
            'gender.in' => "Gender must be either Male or Female.",


            // Parental Information
            'father_name.required' => "Please enter father's name.",

            // Documents Upload
            'birth_certificate.required' => "Please upload the birth certificate.",
            'birth_certificate.file' => "The birth certificate must be a valid file.",
            'birth_certificate.mimes' => "Birth certificate must be a file of type: pdf, jpg, jpeg, png.",
            'birth_certificate.max' => "Birth certificate file size cannot exceed 2MB.",

            'student_photo.required' => 'Student photograph is required.',
            'student_photo.image' => 'Photo must be an image file.',

            // Declaration
            'declaration_confirmed.accepted' => "You must confirm the declaration to proceed.",
        ];
    }
}
