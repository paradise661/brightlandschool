<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            /* =========================
         * STUDENT INFORMATION
         * ========================= */
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('blood_group')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('student_photo')->nullable();

            /* =========================
         * ADMISSION DETAILS
         * ========================= */
            $table->string('applying_grade')->nullable();
            $table->string('academic_year')->nullable();
            $table->string('previous_school_name')->nullable();
            $table->string('previous_grade')->nullable();

            /* =========================
         * FATHER DETAILS
         * ========================= */
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_email')->nullable();

            /* =========================
         * MOTHER DETAILS
         * ========================= */
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_email')->nullable();

            /* =========================
         * GUARDIAN DETAILS
         * ========================= */
            $table->string('guardian_name')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_email')->nullable();

            /* =========================
         * ADDRESS INFORMATION
         * ========================= */
            $table->text('current_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->boolean('same_as_permanent')->default(false);

            /* =========================
         * MEDICAL INFORMATION
         * ========================= */
            $table->text('medical_conditions')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_number')->nullable();

            /* =========================
         * DOCUMENT UPLOADS
         * ========================= */
            $table->string('birth_certificate')->nullable();
            $table->string('transfer_certificate')->nullable();
            $table->string('academic_records')->nullable();
            $table->json('passport_photos')->nullable();

            /* =========================
         * ADDITIONAL INFORMATION
         * ========================= */
            $table->string('heard_about_school')->nullable();
            $table->text('why_join_school')->nullable();
            $table->text('student_hobbies')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
