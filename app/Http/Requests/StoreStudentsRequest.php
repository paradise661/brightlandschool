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
            /* =========================
         * STUDENT INFORMATION
         * ========================= */
            'first_name'      => 'required|string|max:255',
            'last_name'       => 'required|string|max:255',
            'date_of_birth'   => 'required|date',
            'gender'          => 'required|in:male,female,other',
            'student_photo'   => 'required|image|max:2048',

            /* =========================
         * ADMISSION DETAILS
         * ========================= */
            'applying_grade'       => 'required|string|max:255',
            'previous_school_name' => 'nullable|string|max:255',

            /* =========================
         * FATHER DETAILS
         * ========================= */
            'father_name'       => 'required|string|max:255',
            'father_occupation' => 'nullable|string|max:255',
            'father_phone'      => 'required|string|max:20',
            'father_email'      => 'required|email|max:255',


            /* =========================
         * GUARDIAN DETAILS
         * ========================= */
            'guardian_name'         => 'nullable|string|max:255',
            'guardian_relationship' => 'nullable|string|max:255',
            'guardian_phone'        => 'nullable|string|max:20',
            'guardian_email'        => 'nullable|email|max:255',

            /* =========================
         * ADDRESS INFORMATION
         * ========================= */
            'current_address'  => 'required|string',



            /* =========================
         * DOCUMENT UPLOADS
         * ========================= */
            'birth_certificate'    => 'required|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'transfer_certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'academic_records'     => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'passport_photos'      => 'nullable|array',
            'passport_photos.*'    => 'image|max:2048',

            /* =========================
         * ADDITIONAL INFORMATION
         * ========================= */
            'heard_about_school' => 'required|string|max:255',
            'why_join_school'    => 'nullable|string',
            'student_hobbies'   => 'nullable|string',

        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'date_of_birth.required' => 'Please enter the date',
            'gender.required' => 'Please select gender',
            'nationality.required' => 'Please enter nationality',

            'student_photo.required' => 'Please upload student photo',

            'applying_grade.required' => 'Please select applying grade',
            'academic_year.required' => 'Please enter academic year',

            'father_name.required' => 'Please enter father name',
            'father_phone.required' => 'Please enter father phone number',
            'father_email.required' => 'Please enter father email',

            'mother_name.required' => 'Please enter mother name',
            'mother_phone.required' => 'Please enter mother phone number',
            'mother_email.required' => 'Please enter mother email',

            'current_address.required' => 'Please enter current address',
            'city.required' => 'Please enter city',
            'state.required' => 'Please enter state',
            'postal_code.required' => 'Please enter postal code',
            'country.required' => 'Please enter country',

            'emergency_contact_name.required' => 'Please enter emergency contact name',
            'emergency_contact_number.required' => 'Please enter emergency contact number',

            'birth_certificate.required' => 'Please upload birth certificate',

            'heard_about_school.required' => 'Please tell us how you heard about the school',

            'agree_terms.required' => 'Please accept the terms and conditions',
            'agree_terms.accepted' => 'Please accept the terms and conditions',

            'consent_contact.required' => 'Please give contact consent',
            'consent_contact.accepted' => 'Please give contact consent',
        ];
    }
}
