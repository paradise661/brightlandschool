<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * Mass assignable fields
     */
    protected $fillable = [
        // Student's Detail
        'name',
        'dob_ad',
        'dob_bs',
        'age',
        'gender',
        'email',
        'nationality',
        'address',

        // Student's Educational Information
        'last_class_attended',
        'result',
        'school_name_address',
        'medical_history',
        'school_name',
        'school_passed',
        'school_reason',
        'know_us_required',
        'student_class',


        // Father's Information
        'father_name',
        'father_address',
        'father_occupation',
        'father_religion',
        'father_ethnicity',
        'father_phone',
        'father_email',

        // Mother's Information
        'mother_name',
        'mother_address',
        'mother_occupation',
        'mother_religion',
        'mother_ethnicity',
        'mother_phone',
        'mother_email',

        // Guardian's Information
        'guardian_name',
        'guardian_address',
        'guardian_relationship',
        'guardian_phone',
        'guardian_qualifaction',
        'guardian_occupation',
        'guardian_office',
        'guardian_email',

        // School Bus Information
        'bus_required',
        'bus_pickup_point',
        'bus_guardian_name',
        'bus_address',
        'bus_phone',

        // Sibling Information
        'has_sibling',
        'sibling1_name',
        'sibling1_class',
        'sibling2_name',
        'sibling2_class',
        'sibling3_name',
        'sibling3_class',

        // Required Documents Upload
        'student_photo',
        'birth_certificate',
        'last_report_card',
        'transfer_certificate',
        'character_certificate',

        // Declaration
        'declaration_relations',
        'declaration_sign',
        'declaration_date',
        'declaration_confirmed',

        // Agreement Section
        'agreement_name',
        'agreement_relations',
        'agreement_date',
        'agreement_sign',


        'status',
        'source',
        'priority',
        'note',

        'esewa_transaction_code',
        'esewa_details',
        'payment_status',
    ];
}
