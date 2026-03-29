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

            // Student Detail
            'name' => 'required|string|max:255',
            'dob_ad' => 'required|date',
            'dob_bs' => 'nullable|string|max:20',
            'age' => 'nullable|integer|min:3|max:25',
            'gender' => 'required|in:male,female',
            'email' => 'required|email|max:255',
            'nationality' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'student_class' => 'nullable|string|max:255',

            // Student Educational Information
            'last_class_attended' => 'nullable|string|max:100',
            'result' => 'nullable|string|max:100',
            'school_name_address' => 'nullable|string|max:255',
            'medical_history' => 'nullable|string|max:255',
            'school_name' => 'nullable|string|max:255',
            'school_passed' => 'nullable|string|max:255',
            'school_reason' => 'nullable|string|max:255',
            'know_us_required' => 'nullable|string|max:255',

            // Father Information
            'father_name' => 'required|string|max:255',
            'father_address' => 'nullable|string|max:255',
            'father_occupation' => 'nullable|string|max:255',
            'father_religion' => 'nullable|string|max:100',
            'father_ethnicity' => 'nullable|string|max:100',
            'father_phone' => 'nullable|string|max:20',
            'father_email' => 'nullable|email|max:255',

            // Mother Information
            'mother_name' => 'required|string|max:255',
            'mother_address' => 'nullable|string|max:255',
            'mother_occupation' => 'nullable|string|max:255',
            'mother_religion' => 'nullable|string|max:100',
            'mother_ethnicity' => 'nullable|string|max:100',
            'mother_phone' => 'nullable|string|max:20',
            'mother_email' => 'nullable|email|max:255',

            // Guardian Information
            'guardian_name' => 'nullable|string|max:255',
            'guardian_address' => 'nullable|string|max:255',
            'guardian_relationship' => 'nullable|string|max:100',
            'guardian_phone' => 'nullable|string|max:20',
            'guardian_qualifaction' => 'nullable|string|max:255',
            'guardian_occupation' => 'nullable|string|max:255',
            'guardian_office' => 'nullable|string|max:255',
            'guardian_email' => 'nullable|email|max:255',

            // Bus Information
            'bus_required' => 'nullable|in:yes,no',
            'bus_pickup_point' => 'nullable|string|max:255',
            'bus_guardian_name' => 'nullable|string|max:255',
            'bus_address' => 'nullable|string|max:255',
            'bus_phone' => 'nullable|string|max:20',

            // Sibling Information
            'has_sibling' => 'nullable|in:yes,no',
            'sibling1_name' => 'nullable|string|max:255',
            'sibling1_class' => 'nullable|string|max:50',
            'sibling2_name' => 'nullable|string|max:255',
            'sibling2_class' => 'nullable|string|max:50',
            'sibling3_name' => 'nullable|string|max:255',
            'sibling3_class' => 'nullable|string|max:50',

            // Documents Upload
            'student_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'birth_certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'last_report_card' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'transfer_certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'character_certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',




            // Declaration
            // 'declaration_confirmed' => 'accepted',
            'declaration_relations' => 'nullable|string|max:255',
            'declaration_sign' => 'nullable|image|max:2048',
            'declaration_date' => 'nullable|date',



            // Agreement Section
            'agreement_name' => 'nullable|string|max:255',
            'agreement_relations' => 'nullable|string|max:255',
            'agreement_date' => 'nullable|date',
            'agreement_sign' => 'nullable|image|max:2048',

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

            // 'student_photo.required' => 'Student photograph is required.',
            // 'student_photo.image' => 'Photo must be an image file.',

            // Declaration
            'declaration_confirmed.accepted' => "You must confirm the declaration to proceed.",
        ];
    }
}
