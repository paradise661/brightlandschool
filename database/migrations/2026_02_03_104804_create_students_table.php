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

            // Student's Detail
            $table->string('name')->nullable();
            $table->date('dob_ad')->nullable();
            $table->string('dob_bs')->nullable();
            $table->integer('age')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();

            $table->string('email')->nullable(); //new
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();

            // Student's Educational Information
            $table->string('last_class_attended')->nullable();
            $table->string('result')->nullable();
            $table->string('school_name_address')->nullable();
            $table->text('medical_history')->nullable();

            $table->string('school_name')->nullable(); //new
            $table->string('school_passed')->nullable();
            $table->string('school_reason')->nullable();
            $table->string('know_us_required')->nullable();
            $table->string('student_class')->nullable();

            // Father's Information
            $table->string('father_name')->nullable();
            $table->string('father_address')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_religion')->nullable();
            $table->string('father_ethnicity')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_email')->nullable();



            // Mother's Information
            $table->string('mother_name')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_religion')->nullable();
            $table->string('mother_ethnicity')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_email')->nullable();

            // Guardian's Information
            $table->string('guardian_name')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->string('guardian_phone')->nullable();


            $table->string('guardian_qualifaction')->nullable(); //new
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_office')->nullable();
            $table->string('guardian_email')->nullable();

            // School Bus Information
            $table->enum('bus_required', ['yes', 'no'])->default('no');
            $table->string('bus_pickup_point')->nullable();
            $table->string('bus_guardian_name')->nullable();
            $table->string('bus_address')->nullable();
            $table->string('bus_phone')->nullable();

            // Sibling Information
            $table->enum('has_sibling', ['yes', 'no'])->default('no');
            $table->string('sibling1_name')->nullable();
            $table->string('sibling1_class')->nullable();
            $table->string('sibling2_name')->nullable();
            $table->string('sibling2_class')->nullable();
            $table->string('sibling3_name')->nullable();
            $table->string('sibling3_class')->nullable();

            // Required Documents Upload
            $table->string('student_photo')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('last_report_card')->nullable();
            $table->string('transfer_certificate')->nullable();
            $table->string('character_certificate')->nullable();

            // Declaration confirmation
            $table->boolean('declaration_confirmed')->default(false);

            $table->string('declaration_relations')->nullable(); //new
            $table->string('declaration_sign')->nullable();
            $table->string('declaration_date')->nullable();

            //agrement new
            $table->string('agreement_name')->nullable();
            $table->string('agreement_relations')->nullable();
            $table->string('agreement_date')->nullable();
            $table->string('agreement_sign')->nullable();




            $table->string('priority')->nullable();
            $table->string('note')->nullable();
            $table->text('status')->nullable();

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
