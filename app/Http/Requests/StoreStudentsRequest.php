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


            // Father Information
            'father_name' => 'required|string|max:255',
            'father_address' => 'nullable|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_religion' => 'nullable|string|max:100',
            'father_ethnicity' => 'required|string|max:100',
            'father_phone' => 'required|string|max:20',
            'father_email' => 'nullable|email|max:255',

            // Mother Information
            'mother_name' => 'required|string|max:255',
            'mother_address' => 'nullable|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_religion' => 'nullable|string|max:100',
            'mother_ethnicity' => 'required|string|max:100',
            'mother_phone' => 'required|string|max:20',
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

            // Previous Educational Information
            'school_name' => 'required_unless:student_class,nursery',
            'school_name_address' => 'required_unless:student_class,nursery',
            'last_class_attended' => 'required_unless:student_class,nursery',
            'school_passed' => 'required_unless:student_class,nursery',
            'result' => 'required_unless:student_class,nursery',
            'school_reason' => 'required_unless:student_class,nursery',


            'medical_history' => 'nullable|string|max:255',
            'know_us_required' => 'nullable|string|max:255',


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
            'student_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'birth_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'last_report_card' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'transfer_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'character_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',

            // Declaration
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
            'father_phone.required' => "Please enter father's phone number.",
            'father_ethnicity.required' => "Please enter father's qualification.",
            'father_occupation.required' => "Please enter father's occupation.",

            // Mother Information
            'mother_name.required' => "Please enter mother's name.",
            'mother_phone.required' => "Please enter mother's phone number.",
            'mother_ethnicity.required' => "Please enter mother's qualification.",
            'mother_occupation.required' => "Please enter mother's occupation.",


            'school_name.required' => 'Please enter the name of your previous school.',
            'school_name_address.required' => 'Please provide the address of your previous school.',
            'last_class_attended.required' => 'Please specify the last class you attended.',
            'school_passed.required' => 'Please mention the school you passed from.',
            'result.required' => 'Please enter your academic result from the previous school.',
            'school_reason.required' => 'Please provide the reason for leaving your previous school.',

            // Documents Upload
            // Birth Certificate
            'birth_certificate.required' => "Please upload the birth certificate.",
            'birth_certificate.file' => "The birth certificate must be a valid file.",
            'birth_certificate.mimes' => "The birth certificate must be in PDF, JPG, JPEG, or PNG format.",
            'birth_certificate.max' => "The birth certificate file size must not exceed 2MB.",

            // Last Report Card
            'last_report_card.required' => "Please upload the last report card.",
            'last_report_card.file' => "The last report card must be a valid file.",
            'last_report_card.mimes' => "The last report card must be in PDF, JPG, JPEG, or PNG format.",
            'last_report_card.max' => "The last report card file size must not exceed 2MB.",

            // Transfer Certificate
            'transfer_certificate.required' => "Please upload the transfer certificate.",
            'transfer_certificate.file' => "The transfer certificate must be a valid file.",
            'transfer_certificate.mimes' => "The transfer certificate must be in PDF, JPG, JPEG, or PNG format.",
            'transfer_certificate.max' => "The transfer certificate file size must not exceed 2MB.",

            // Character Certificate
            'character_certificate.required' => "Please upload the character certificate.",
            'character_certificate.file' => "The character certificate must be a valid file.",
            'character_certificate.mimes' => "The character certificate must be in PDF, JPG, JPEG, or PNG format.",
            'character_certificate.max' => "The character certificate file size must not exceed 2MB.",

            // 'student_photo.required' => 'Student photograph is required.',
            // 'student_photo.image' => 'Photo must be an image file.',

            // Declaration
            'declaration_confirmed.accepted' => "You must confirm the declaration to proceed.",
        ];
    }
}
