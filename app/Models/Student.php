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
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'blood_group',
        'nationality',
        'religion',
        'mother_tongue',
        'student_photo',
        'applying_grade',
        'academic_year',
        'previous_school_name',
        'previous_grade',
        'father_name',
        'father_occupation',
        'father_phone',
        'father_email',
        'mother_name',
        'mother_occupation',
        'mother_phone',
        'mother_email',
        'guardian_name',
        'guardian_relationship',
        'guardian_phone',
        'guardian_email',
        'current_address',
        'city',
        'state',
        'postal_code',
        'country',
        'same_as_permanent',
        'medical_conditions',
        'emergency_contact_name',
        'emergency_contact_number',
        'birth_certificate',
        'transfer_certificate',
        'academic_records',
        'passport_photos',
        'heard_about_school',
        'why_join_school',
        'student_hobbies',
        'agree_terms',
        'consent_contact',
        'receive_updates',
        'status',
        'source',
        'priority',
        'note',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'date_of_birth'     => 'date',
        'passport_photos'   => 'array',
    ];
}
