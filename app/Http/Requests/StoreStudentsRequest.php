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
            'guardian_name' => 'required|string|max:255',
            'guardian_address' => 'nullable|string|max:255',
            'guardian_relationship' => 'nullable|string|max:100',
            'guardian_phone' => 'required|string|max:20',
            'guardian_qualifaction' => 'required|string|max:255',
            'guardian_occupation' => 'required|string|max:255',
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

            // =========================
            // Student Details
            // =========================
            'student_photo.required' => "*Please upload the student photo.",
            'name.required' => "*Please enter the student's full name.",
            'dob_ad.required' => "*Please select the date of birth (AD).",
            'age.required' => "*Please enter the student's age.",
            'age.integer' => "*Age must be a valid number.",
            'age.min' => "*Age must be at least 3 years.",
            'age.max' => "*Age cannot be more than 25 years.",
            'gender.required' => "*Please select the student's gender.",
            'gender.in' => "*Please select a valid gender (Male or Female).",
            'email.required' => "*Please enter the student's email address.",
            'email.email' => "*Please enter a valid email address for the student.",
            'nationality.required' => "*Please enter the student's nationality.",
            'address.required' => "*Please enter the student's address.",

            // =========================
            // Father Information
            // =========================
            'father_name.required' => "*Please enter the father's name.",
            'father_phone.required' => "*Please enter the father's phone number.",
            'father_ethnicity.required' => "*Please enter the father's qualification.",
            'father_occupation.required' => "*Please enter the father's occupation.",

            // =========================
            // Mother Information
            // =========================
            'mother_name.required' => "*Please enter the mother's name.",
            'mother_phone.required' => "*Please enter the mother's phone number.",
            'mother_ethnicity.required' => "*Please enter the mother's qualification.",
            'mother_occupation.required' => "*Please enter the mother's occupation.",

            // =========================
            // Guardian Information
            // =========================
            'guardian_name.required' => "*Please enter the guardian's name.",
            'guardian_phone.required' => "*Please enter the guardian's phone number.",
            'guardian_qualifaction.required' => "*Please enter the guardian's qualification.",
            'guardian_occupation.required' => "*Please enter the guardian's occupation.",

            // =========================
            // Academic Information
            // =========================
            'school_name.required_unless' => "*Please enter the student's previous school.",
            'school_name_address.required_unless' => "*Please enter the previous school address.",
            'last_class_attended.required_unless' => "*Please enter the student's last attended class.",
            'school_passed.required_unless' => "*Please enter the school the student passed from.",
            'result.required_unless' => "*Please enter the student's academic result.",
            'school_reason.required_unless' => "*Please provide the reason for leaving the previous school.",

            // =========================
            // Documents Upload
            // =========================

            // Birth Certificate
            'birth_certificate.required' => "*Please upload the birth certificate.",
            'birth_certificate.file' => "*The birth certificate must be a valid file.",
            'birth_certificate.mimes' => "*Allowed formats: PDF, JPG, JPEG, PNG.",
            'birth_certificate.max' => "*File size must not exceed 2MB.",

            // Report Card
            'last_report_card.required' => "*Please upload the report card.",
            'last_report_card.file' => "*The report card must be a valid file.",
            'last_report_card.mimes' => "*Allowed formats: PDF, JPG, JPEG, PNG.",
            'last_report_card.max' => "*File size must not exceed 2MB.",

            // Transfer Certificate
            'transfer_certificate.required' => "*Please upload the transfer certificate.",
            'transfer_certificate.file' => "*The transfer certificate must be a valid file.",
            'transfer_certificate.mimes' => "*Allowed formats: PDF, JPG, JPEG, PNG.",
            'transfer_certificate.max' => "*File size must not exceed 2MB.",

            // Character Certificate
            'character_certificate.required' => "*Please upload the character certificate.",
            'character_certificate.file' => "*The character certificate must be a valid file.",
            'character_certificate.mimes' => "*Allowed formats: PDF, JPG, JPEG, PNG.",
            'character_certificate.max' => "*File size must not exceed 2MB.",

            // =========================
            // Declaration
            // =========================
            'declaration_confirmed.accepted' => "*Please confirm the declaration before submitting.",
        ];
    }
}
