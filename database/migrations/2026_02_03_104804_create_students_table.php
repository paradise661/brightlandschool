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

            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('blood_group')->nullable();
            $table->string('nationality');
            $table->string('religion')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('student_photo');


            $table->string('applying_grade');
            $table->string('academic_year');
            $table->string('previous_school_name')->nullable();
            $table->string('previous_grade')->nullable();


            $table->string('father_name');
            $table->string('father_occupation')->nullable();
            $table->string('father_phone');
            $table->string('father_email');

            $table->string('mother_name');
            $table->string('mother_occupation')->nullable();
            $table->string('mother_phone');
            $table->string('mother_email');

            $table->string('guardian_name')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_email')->nullable();


            $table->text('current_address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->boolean('same_as_permanent')->default(false);


            $table->text('medical_conditions')->nullable();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_number');


            $table->string('birth_certificate'); // file path
            $table->string('transfer_certificate')->nullable();
            $table->string('academic_records')->nullable();
            $table->json('passport_photos'); // multiple photos


            $table->string('heard_about_school');
            $table->text('why_join_school')->nullable();
            $table->text('student_hobbies')->nullable();


            // $table->boolean('agree_terms');
            // $table->boolean('consent_contact');
            // $table->boolean('receive_updates')->default(false);

            $table->enum('status', ['draft', 'submitted'])->default('submitted');
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
