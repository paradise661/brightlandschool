@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['admission_seo_title'] ?? '',
        'title' => $setting['admission_seo_title'] ?? '',
        'description' => $setting['admission_seo_description'] ?? '',
        'keyword' => $setting['admission_seo_keywords'] ?? '',
        'schema' => $setting['admission_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <style>
        .form-section-header {
            background-color: #1e40af;
        }

        .form-input {
            border: 2px solid #1e40af;
        }

        .form-input:focus {
            outline: none;
            border-color: #1e40af;
            box-shadow: 0 0 0 3px rgba(168, 53, 53, 0.1);
        }
    </style>
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['admission_breadcrum_image'] ?? '' }}"
            alt="Admission Image" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Admission
                </h1>

                <!-- Breadcrumb -->
                <nav class="mt-4">
                    <ol
                        class="inline-flex items-center space-x-2 text-sm
                        bg-white/15 backdrop-blur-md
                        px-5 py-2 rounded-full
                        border border-white/20
                        shadow-lg">
                        <li>
                            <a class="text-blue-100 hover:text-white transition" href="/">
                                Home
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            Admission
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <div class="max-w-6xl mx-auto p-6">

        <!-- Main Form -->
        <form class="space-y-6" id="admissionForm" action="{{ route('frontend.admission.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Header Section -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-8">

                    <!-- Academic Year -->
                    <div class="text-center mb-6">
                        <h1 class="text-blue-700 font-semibold text-lg">
                            Admission Form
                        </h1>
                    </div>

                    <!-- Form Row: Year + Class + Photo -->
                    <div class="flex flex-wrap gap-6 items-center">

                        <!-- Left Section: Admission Year + Class (still 8/12) -->
                        <div class="flex gap-6 w-full md:w-8/12 items-center">

                            <!-- Admission Year (4/12) -->
                            <div class="w-1/3 flex flex-col">
                                <label class="font-semibold text-gray-700 mb-1">Admission Year</label>
                                <input class="border border-gray-300 rounded px-3 py-2 w-full bg-gray-100 text-center"
                                    type="text" value="2026" readonly>
                            </div>

                            <!-- Class Dropdown (4/12) -->
                            <div class="w-1/3 flex flex-col">
                                <label class="font-semibold text-gray-700 mb-1">Class</label>

                                <select class="border border-gray-300 rounded px-3 py-2 w-full bg-white"
                                    name="student_class">
                                    <option value="">Select Class</option>

                                    <option value="grade1"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade1' ? 'selected' : '' }}>
                                        Grade 1</option>
                                    <option value="grade2"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade2' ? 'selected' : '' }}>
                                        Grade 2</option>
                                    <option value="grade3"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade3' ? 'selected' : '' }}>
                                        Grade 3</option>
                                    <option value="grade4"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade4' ? 'selected' : '' }}>
                                        Grade 4</option>
                                    <option value="grade5"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade5' ? 'selected' : '' }}>
                                        Grade 5</option>
                                    <option value="grade6"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade6' ? 'selected' : '' }}>
                                        Grade 6</option>
                                    <option value="grade7"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade7' ? 'selected' : '' }}>
                                        Grade 7</option>
                                    <option value="grade8"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade8' ? 'selected' : '' }}>
                                        Grade 8</option>
                                    <option value="grade9"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade9' ? 'selected' : '' }}>
                                        Grade 9</option>
                                    <option value="grade10"
                                        {{ old('student_class', $student->student_class ?? '') == 'grade10' ? 'selected' : '' }}>
                                        Grade 10</option>

                                </select>
                            </div>
                        </div>

                        <!-- Right Section: Smaller PP Photo (now smaller width) -->
                        <div class="w-full md:w-3/12 border-2 border-dashed border-gray-400 bg-gray-100 py-4 px-3 text-center rounded cursor-pointer hover:bg-gray-200 transition flex-shrink-0"
                            id="photoUpload">

                            <!-- Preview Image -->
                            <img class="mx-auto mb-2 hidden w-20 h-24 object-cover rounded" id="photoPreview" />

                            <!-- Placeholder Icon -->
                            <div class="flex justify-center mb-2 text-gray-500" id="photoIcon">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 7h4l2-2h6l2 2h4v12H3V7z" />
                                    <circle cx="12" cy="13" r="3.5" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </div>

                            <!-- Text -->
                            <p class="font-semibold text-gray-700 text-sm">PP Size Photo</p>
                            <p class="text-gray-500 text-xs">Upload Student Photograph</p>

                            <!-- Hidden File Input -->
                            <input class="hidden" id="studentPhoto" type="file" name="student_photo" accept="image/*">
                            <span class="text-red-500 text-xs error-text" id="error-student_photo"></span>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Student's Detail Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">1</span>
                    <h3 class="text-xl font-bold">
                        PERSONAL DETAILS
                    </h3>
                </div>
                <div class="p-6 space-y-6">
                    <!-- Student's Name -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Student's Name <span
                                class="text-red-500">*</span></label>
                        <input class="form-input w-full px-4 py-3 rounded" name="name" type="text"
                            placeholder="Enter student's name">
                        <span class="text-red-500 text-sm error-text" id="error-name"></span>
                    </div>

                    <!-- Date of Birth & Age -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth (AD): <span
                                    class="text-red-500">*</span></label>
                            <input class="form-input w-full px-4 py-3 rounded" id="datepicker-english" type="text"
                                name="dob_ad" placeholder="YYYY-MM-DD" autocomplete="off">
                            <span class="text-red-500 text-sm error-text" id="error-dob_ad"></span>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth (BS):</label>
                            <input class="form-input w-full px-4 py-3 rounded" id="datepicker-nepali" type="text"
                                name="dob_bs" placeholder="YYYY-MM-DD" autocomplete="off">
                        </div>

                    </div>

                    <!-- Gender -->
                    <div class="flex items-center gap-6">
                        <!-- Label -->
                        <label class="text-gray-700 font-semibold">
                            Gender <span class="text-red-500">*</span>
                        </label>

                        <!-- Radio Buttons -->
                        <div class="flex gap-6">
                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="gender" value="male">
                                <span class="text-gray-700">Male</span>
                            </label>

                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="gender" value="female">
                                <span class="text-gray-700">Female</span>
                            </label>
                        </div>
                    </div>

                    <span class="text-red-500 text-sm error-text" id="error-gender"></span>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">E-mail Address:</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="email" type="email"
                                placeholder="Email">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nationality :</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="nationality" type="tel"
                                placeholder="Phone">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Home Address ( Permanent / Temporary
                            )</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="address" type="text"
                            placeholder="Residential address">
                    </div>
                </div>
            </section>

            <!-- Child's Parental Information Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Child's Parental Information</h3>
                </div>
                <div class="p-6 space-y-6">
                    <!-- Father's Information -->
                    <div class="border-b pb-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-4">Father's Information</h4>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Father's Name (CAPITAL
                                        LETTER)<span class="text-red-500">*</span></label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_name" type="text"
                                        divholder="Full name in capitals">
                                    <span class="text-red-500 text-sm error-text" id="error-father_name"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_phone" type="tel"
                                        placeholder="Phone">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Educational
                                        Qualification:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_ethnicity"
                                        type="text" placeholder="Qualification">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Occupation (Profession):</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_occupation"
                                        type="text" placeholder="Job title">
                                </div>

                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Currently Involved Institution /
                                        office</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_religion"
                                        type="text" placeholder="Office">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_email" type="text"
                                        placeholder="Email">
                                </div>

                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Home Address ( Permanent / Temporary
                                    )</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="father_address" type="text"
                                    placeholder="Residential address">
                            </div>

                        </div>
                    </div>

                    <!-- Mother's Information -->
                    <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-4">Mother's Information</h4>
                        <div class="space-y-4">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Mother's Name (CAPITAL
                                        LETTER)<span class="text-red-500">*</span></label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_name" type="text"
                                        placeholder="Full name in capitals">
                                    <span class="text-red-500 text-sm error-text" id="error-mother_name"></span>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_phone" type="tel"
                                        placeholder="Phone">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Educational Qualification
                                    </label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_ethnicity"
                                        type="text" placeholder="Qualification">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Occupation</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_occupation"
                                        type="text" placeholder="Job title">
                                </div>

                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Currently Involved Institution /
                                        office</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_religion"
                                        type="text" placeholder="Office">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_email" type="text"
                                        placeholder="Email">
                                </div>

                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Home Address ( Permanent / Temporary
                                    )</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="mother_address" type="text"
                                    placeholder="Residential address">
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Guardian's Information Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Guardian's Information</h3>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2"> Name </label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_name" type="text"
                                placeholder="Full name ">

                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_phone" type="tel"
                                placeholder="Phone">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Educational
                                Qualification:</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_qualifaction"
                                type="text" placeholder="Qualification">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Occupation (Profession):</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_occupation" type="text"
                                placeholder="Job title">
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Currently Involved Institution /
                                office</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_office" type="text"
                                placeholder="Office">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_email" type="text"
                                placeholder="Email">
                        </div>

                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Home Address ( Permanent / Temporary
                            )</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="guardian_address" type="text"
                            placeholder="Residential address">
                    </div>
                </div>
            </section>

            <!-- Medical Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">2</span>
                    <h3 class="text-xl font-bold">
                        MEDICAL INFORMATION
                    </h3>
                </div>
                <div class="p-6 space-y-6">

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Give Detail of Child's Illness (if
                            any):</label>
                        <textarea class="form-input w-full px-4 py-3 rounded" name="medical_history"
                            placeholder="Medical history or allergies" rows="4"></textarea>
                    </div>
                </div>
            </section>

            <!-- INFORMATION OF THE PREVIOUS SCHOOL ( Not applicable for Nursery ) Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">3</span>
                    <h3 class="text-xl font-bold">
                        INFORMATION OF THE PREVIOUS SCHOOL ( Not applicable for Nursery )
                    </h3>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Name of the School</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="school_name" type="text"
                            placeholder="Previous school name and address">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Address</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="school_name_address" type="text"
                                placeholder="e.g., Grade 5">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Class passed</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="last_class_attended" type="text"
                                placeholder="e.g., 3.5">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Year of passed</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="school_passed" type="text"
                                placeholder="e.g., 2082">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">GPA / Percentage
                            </label>
                            <input class="form-input w-full px-4 py-3 rounded" name="result" type="text"
                                placeholder="e.g., 3.5">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Reason to discontinue the previous
                            school</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="school_reason" type="text"
                            placeholder="Reason">
                    </div>
                </div>
            </section>

            <!-- Sibling Information Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Does the child have any brother/sister studying in this school?</h3>
                </div>
                <div class="p-6 space-y-6">
                    <div class="flex gap-6 mb-6">
                        <label class="flex items-center">
                            <input class="mr-2" id="sibling_yes" type="radio" name="has_sibling" value="yes">
                            <span class="text-gray-700">Yes</span>
                        </label>
                        <label class="flex items-center">
                            <input class="mr-2" id="sibling_no" type="radio" name="has_sibling" value="no">
                            <span class="text-gray-700">No</span>
                        </label>
                    </div>
                    <div class="hidden space-y-4" id="sibling_details">
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Sibling 1 - Name:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="sibling1_name"
                                        type="text" placeholder="Full name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Class:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="sibling1_class"
                                        type="text" placeholder="Class">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Sibling 2 - Name:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="sibling2_name"
                                        type="text" placeholder="Full name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Class:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="sibling2_class"
                                        type="text" placeholder="Class">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Sibling 3 - Name:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="sibling3_name"
                                        type="text" placeholder="Full name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Class:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="sibling3_class"
                                        type="text" placeholder="Class">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Know us Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">How did you know about us?</h3>
                </div>

                <div class="p-6 space-y-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-3">Please Pick one</label>

                        <div class="flex gap-6 mb-4 flex-wrap">

                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="know_us_required" value="social"
                                    {{ old('know_us_required', $student->know_us_required ?? '') == 'social' ? 'checked' : '' }}>
                                <span class="text-gray-700">Social Media</span>
                            </label>

                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="know_us_required" value="television"
                                    {{ old('know_us_required', $student->know_us_required ?? '') == 'television' ? 'checked' : '' }}>
                                <span class="text-gray-700">Television</span>
                            </label>

                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="know_us_required" value="word_of_mouth"
                                    {{ old('know_us_required', $student->know_us_required ?? '') == 'word_of_mouth' ? 'checked' : '' }}>
                                <span class="text-gray-700">Word of Mouth (people talk about)</span>
                            </label>

                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="know_us_required" value="google"
                                    {{ old('know_us_required', $student->know_us_required ?? '') == 'google' ? 'checked' : '' }}>
                                <span class="text-gray-700">Search Engine / Google</span>
                            </label>

                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="know_us_required" value="other"
                                    {{ old('know_us_required', $student->know_us_required ?? '') == 'other' ? 'checked' : '' }}>
                                <span class="text-gray-700">Other</span>
                            </label>

                        </div>
                    </div>
                </div>
            </section>

            <!-- DISCIPLINARY RULES Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">4</span>
                    <h3 class="text-xl font-bold">
                        DISCIPLINARY RULES
                    </h3>
                </div>

                <div class="p-6 space-y-6">

                    <!-- Disciplinary Section -->
                    <div class="bg-red-50 p-4 rounded border-l-4 border-red-600">
                        <h4 class="text-lg font-semibold text-red-700 mb-3">
                            Disciplinary Action against Misconducts
                        </h4>

                        <p class="text-gray-700 mb-3 text-sm">
                            If a student violates the Disciplinary Codes of Conduct of the school under any of the following
                            categories,
                            he/she will be subjected to disciplinary action as per school policy. The student will be given
                            an opportunity
                            to explain his/her statement before any action is taken.
                        </p>

                        <p class="text-gray-700 text-sm mb-2 font-medium">
                            Step 1: Immediate Suspension
                        </p>
                        <p class="text-gray-700 text-sm mb-3">
                            (Investigation, arranging compensation, settlement of outstanding dues, etc.)
                            The student will be suspended for a specified period (maximum one week).
                        </p>

                        <p class="text-gray-700 text-sm mb-2 font-medium">
                            Step 2: Expulsion
                        </p>

                        <ol class="list-decimal list-inside text-gray-700 text-sm space-y-1 ml-2">
                            <li>Smoking (caught red-handed) in uniform</li>
                            <li>Physical / verbal assault on school staff or students</li>
                            <li>Possession of harmful weapons or tools</li>
                            <li>Use of tobacco, smoking, alcohol, drugs, or gambling</li>
                            <li>Instigating fights or harmful actions against school community</li>
                            DIS <li>Deliberate destruction of school property</li>
                        </ol>
                    </div>

                </div>
            </section>

            <!-- School Bus Section -->
            <secchn class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">5</span>
                    <h3 class="text-xl font-bold">
                        OTHER FACILITIES
                    </h3>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-3">Do you require school bus facility?</label>
                        <div class="flex gap-6 mb-4">
                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="bus_required" value="yes">
                                <span class="text-gray-700">Yes</span>
                            </label>
                            <label class="flex items-center">
                                <input class="mr-2" type="radio" name="bus_required" value="no">
                                <span class="text-gray-700">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="hidden space-y-4" id="bus_details">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Pick-up Point:</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="bus_pickup_point" type="text"
                                    placeholder="Location with map">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Guardian's Name for Bus:</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="bus_guardian_name"
                                    type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="bus_address" type="text"
                                    placeholder="Address">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="bus_phone" type="tel"
                                    placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
            </secchn>

            <!-- AGREEMENT  Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">

                <!-- Header -->
                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">6</span>
                    <h3 class="text-xl font-bold">
                        AGREEMENT OF PARENT / GUARDIAN AND THE APPLICANT
                    </h3>
                </div>

                <!-- Body -->
                <div class="p-6 space-y-4 text-gray-700 text-sm">

                    <!-- Paragraph -->
                    <p class="leading-relaxed">
                        I, Mr./Mrs./Ms.
                        <input class="border-b border-gray-400 focus:outline-none px-1 mx-1 w-40" type="text"
                            name="agreement_name">

                        <label class="ml-2">
                            <input type="radio" name="agreement_relations" value="father">
                            Father
                        </label> /
                        <label>
                            <input type="radio" name="agreement_relations" value="mother">
                            Mother
                        </label> /
                        <label>
                            <input type="radio" name="agreement_relations" value="guardian">
                            Guardian
                        </label>

                        of <span class="uppercase font-medium mx-1" id="std-name"></span>
                        do hereby declare that I understood the Disciplinary Codes...
                    </p>

                    <!-- Bottom Row -->
                    <div class="grid md:grid-cols-2 gap-4 items-center">

                        <!-- Date -->
                        <div class="flex items-center gap-3">
                            <label class="whitespace-nowrap font-medium">Date:</label>
                            <input class="border-b border-gray-400 focus:outline-none w-full" type="date"
                                name="agreement_date"
                                value="{{ old('agreement_date', $student->agreement_date ?? '') }}">
                        </div>

                        <!-- Signature -->
                        <div class="flex items-center gap-3 md:justify-end">
                            <label class="whitespace-nowrap font-medium">Parent’s Signature:</label>

                            <label
                                class="relative flex items-center justify-center h-20 w-44 border-b-2 border-dotted border-blue-500 text-xs text-gray-600 cursor-pointer bg-white">

                                <input class="absolute inset-0 opacity-0 cursor-pointer" type="file"
                                    name="agreement_sign" accept="image/*">

                                <span>(Click here)</span>
                            </label>
                        </div>

                    </div>

                </div>
            </section>

            <section class="bg-white rounded-lg shadow-md overflow-hidden">

                <div class="form-section-header text-white p-4 flex items-center gap-3">
                    <span class="bg-white text-blue-700 text-sm font-bold px-3 py-1 rounded-full">6</span>
                    <h3 class="text-xl font-bold">
                        DOCUMENTS TO BE SUBMITTED WITH THIS FORM
                    </h3>
                </div>

                <div class="p-6 grid md:grid-cols-2 gap-6">

                    <!-- Birth Certificate -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Birth Certificate
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" name="birth_certificate" type="file"
                            accept=".pdf,.jpg,.jpeg,.png">

                    </div>

                    <!-- Report Card -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Progress Report
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" name="last_report_card" type="file"
                            accept=".pdf,.jpg,.jpeg,.png">
                    </div>

                    <!-- Transfer Certificate -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Transfer Certificate
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" name="transfer_certificate" type="file"
                            accept=".pdf,.jpg,.jpeg,.png">
                    </div>

                    <!-- Character Certificate -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            PP size photo
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" name="character_certificate" type="file"
                            accept=".pdf,.jpg,.jpeg,.png">

                    </div>

                </div>

            </section>

            <!-- Declaration Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">

                <!-- Header -->
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Declaration</h3>
                </div>

                <!-- Body -->
                <div class="p-6 text-gray-700 text-sm space-y-6">

                    <!-- Text -->
                    <p class="leading-relaxed">
                        All the information provided in this application form is correct, complete and true to the best
                        of my knowledge. I,

                        <label class="ml-2">
                            <input type="radio" name="declaration_relations" value="father">
                            Father
                        </label>
                        /
                        <label>
                            <input type="radio" name="declaration_relations" value="mother">
                            Mother
                        </label>
                        /
                        <label>
                            <input type="radio" name="declaration_relations" value="guardian">
                            Guardian
                        </label>

                        (above mentioned) shall comply with the rules and regulations of the school.
                    </p>

                    <!-- Bottom Row -->
                    <div class="flex items-center justify-between mt-6">

                        <!-- Signature Upload -->
                        <div class="flex items-center gap-3">
                            <label class="whitespace-nowrap font-medium">Authorised Signature:</label>

                            <label
                                class="relative flex items-center justify-center h-20 w-44 border-b-2 border-dotted border-gray-500 text-xs text-gray-600 cursor-pointer bg-white">

                                <input class="absolute inset-0 opacity-0 cursor-pointer" type="file"
                                    name="declaration_sign" accept="image/*">

                                <span>(Upload)</span>
                            </label>
                        </div>

                        <!-- Date -->
                        <div class="flex items-center gap-2">
                            <label class="whitespace-nowrap font-medium">Date :</label>

                            <input class="border-b border-gray-500 focus:outline-none w-36" type="date"
                                name="declaration_date"
                                value="{{ old('declaration_date', $student->declaration_date ?? '') }}">
                        </div>

                    </div>

                </div>
            </section>

            <!-- Submit Button -->
            <div class="flex gap-4 mb-8">
                <button class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded transition"
                    type="submit">
                    Submit Application
                </button>
                <button class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-3 px-8 rounded transition"
                    type="reset">
                    Clear Form
                </button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        var form = {
            count: 1,
            englisthDateSetting: {
                format: 'yyyy-mm-dd',
                autoHide: true,
                endDate: '2026-03-25'
            },
            nepaliDateSetting: {
                ndpEnglishInput: 'datepicker-english',
                npYear: true, // enable year dropdown
                npMonth: true, // enable month dropdown
                npMinYear: 1970, // start BS year
                npMaxYear: 2100, // end BS year
                npYearCount: 100 // number of years in dropdown
            },
            addNewBroSisInfo: function(count) {
                return `<ul class="row default-more-row-component" id="bsr-${count}">
            <li class="col-md-4 col-sm-4">
                <label for="" class="req-label">Full Name</label>
                <input type="text" name="relative[${count}][name]" class="input-true" required>
            </li>
            <li class="col-md-4 col-sm-4">
                <label for="" class="req-label">Grade</label>
                <input type="text" name="relative[${count}][grade]" class="input-true" required>
            </li>
            <li class="col-md-4 col-sm-4">
                <label for="" class="req-label">School</label>
                <input type="text" name="relative[${count}][school]" class="input-true" required>
            </li>
        </ul>`;
            },
            createNewInputRow: function() {
                var self = this;
                self.count++;
                if (self.count < 5) {
                    $(".name-other-bro-sis").find(".new-row").append(self.addNewBroSisInfo(self.count));
                } else {
                    console.log("Limit to 5 row");
                }
            },
            convertToNepaliDate: function(from, to) {
                $(to).val(AD2BS($(from).val()));
            },
            convertToEnglishDate: function(from, to) {
                $(to).val(BS2AD($(from).val()));
            },
            calculateAge: function(birthDateString) {
                const birthDate = new Date(birthDateString);
                const now = new Date();
                return parseInt((now - birthDate) / (1000 * 60 * 60 * 24 * 365));
            }
        };

        var englishDatePicker = $('#datepicker-english'),
            nepaliDatePicker = $('#datepicker-nepali'),
            signedDatePicker = $('#datepicker-signed');

        // Initialize English datepickers
        signedDatePicker.datepicker(form.englisthDateSetting);
        englishDatePicker.datepicker(form.englisthDateSetting);

        // Initialize Nepali datepicker
        nepaliDatePicker.nepaliDatePicker(form.nepaliDateSetting);

        // AD → BS conversion
        englishDatePicker.on("change keyup", function(e) {
            if ($(this).val()) {
                form.convertToNepaliDate(e.target, nepaliDatePicker);
            } else {
                nepaliDatePicker.val('').trigger('change');
            }

            // calculate age and set to age field
            const studentAge = form.calculateAge($(this).val());
            $("#student_age").val(studentAge);
        });

        // BS → AD conversion
        nepaliDatePicker.on('change keyup', function() {
            if ($(this).val()) {
                form.convertToEnglishDate(this, englishDatePicker);
            } else {
                englishDatePicker.val('').trigger('change');
            }
        });
    </script>
    <script>
        // Toggle sibling details
        document.getElementById('sibling_yes')?.addEventListener('change', function() {
            document.getElementById('sibling_details').classList.remove('hidden');
        });

        document.getElementById('sibling_no')?.addEventListener('change', function() {
            document.getElementById('sibling_details').classList.add('hidden');
        });


        // Toggle bus details
        document.querySelectorAll('input[name="bus_required"]').forEach(radio => {
            radio.addEventListener('change', function() {

                if (this.value === 'yes') {
                    document.getElementById('bus_details').classList.remove('hidden');
                } else {
                    document.getElementById('bus_details').classList.add('hidden');
                }

            });
        });

        //for student photo upload
        const photoUploadDiv = document.getElementById('photoUpload');
        const studentPhotoInput = document.getElementById('studentPhoto');
        const photoPreview = document.getElementById('photoPreview');
        const photoIcon = document.getElementById('photoIcon');

        photoUploadDiv.addEventListener('click', () => {
            studentPhotoInput.click();
        });

        studentPhotoInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.classList.remove('hidden');
                    photoIcon.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        //Ajax form submit
        document.getElementById('admissionForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = e.target;
            let formData = new FormData(form);

            // Clear old errors
            document.querySelectorAll('.error-text').forEach(el => el.textContent = '');

            fetch(form.action, {
                    method: "POST",
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Accept': 'application/json'
                    }
                })
                .then(async response => {
                    const data = await response.json();

                    if (response.status === 422) {
                        // Get the first validation error
                        const firstField = Object.keys(data.errors)[0];
                        const firstError = data.errors[firstField][0];

                        // Show in Toastr
                        toastr.error(firstError, "Validation Error", {
                            positionClass: 'toast-top-right',
                            timeOut: 5000
                        });

                        // Display inline errors
                        for (let field in data.errors) {
                            const errorEl = document.getElementById(`error-${field}`);
                            if (errorEl) {
                                errorEl.textContent = data.errors[field][0];
                            }
                        }

                        // Scroll to first error
                        const firstErrorEl = document.getElementById(`error-${firstField}`);
                        if (firstErrorEl) {
                            firstErrorEl.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                        }

                    } else if (response.ok) {
                        toastr.success("Redirecting to esewa");


                        // esewa payment
                        const paymentData = data.data;

                        const esewaForm = document.createElement("form");
                        esewaForm.method = "POST";
                        esewaForm.action = "https://rc-epay.esewa.com.np/api/epay/main/v2/form";

                        Object.keys(paymentData).forEach(key => {
                            const input = document.createElement("input");
                            input.type = "hidden";
                            input.name = key;
                            input.value = paymentData[key];
                            esewaForm.appendChild(input);
                        });

                        document.body.appendChild(esewaForm);

                        esewaForm.submit();

                    } else {
                        toastr.error(data.message || "Something went wrong.", "Error");
                    }
                })
                .catch(() => {
                    toastr.error("Network error. Please try again.", "Error");
                });
        });
    </script>
@endsection
