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

                    <!-- Title -->
                    <div class="form-section-header text-white p-4 rounded mb-4 text-center">
                        <h2 class="text-2xl font-bold">Admission Form</h2>
                    </div>

                    <!-- Academic Year -->
                    <div class="text-center mb-6">
                        <p class="text-blue-700 font-semibold text-lg">
                            Academic Year: 2026
                        </p>
                    </div>

                    <!-- Photograph Box -->
                    <div class="border-2 border-dashed border-gray-400 bg-gray-100 py-10 text-center rounded cursor-pointer hover:bg-gray-200 transition"
                        id="photoUpload">

                        <!-- Preview Image -->
                        <img class="mx-auto mb-3 hidden w-24 h-24 object-cover rounded" id="photoPreview" />

                        <!-- Placeholder Icon -->
                        <div class="flex justify-center mb-3 text-gray-500" id="photoIcon">
                            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 7h4l2-2h6l2 2h4v12H3V7z" />
                                <circle cx="12" cy="13" r="3.5" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </div>

                        <!-- Text -->
                        <p class="font-semibold text-gray-700">PP Size Photo</p>
                        <p class="text-gray-500 text-sm">Upload Student Photograph</p>

                        <!-- Hidden File Input -->
                        <input class="hidden" id="studentPhoto" type="file" name="student_photo" accept="image/*">
                        <span class="text-red-500 text-sm error-text" id="error-student_photo"></span>
                    </div>

                </div>
            </div>
            <!-- Student's Detail Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Student's Detail</h3>
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
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth (AD):</label>
                            <input class="form-input w-full px-4 py-3 rounded" id="dob_ad" name="dob_ad" type="date">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth (BS):</label>
                            <input class="form-input w-full px-4 py-3 rounded" id="dob_bs" name="dob_bs" type="text"
                                placeholder="YYYY-MM-DD">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Age<span
                                    class="text-red-500">*</span></label>
                            <input class="form-input w-full px-4 py-3 rounded" name="age" type="number"
                                placeholder="Age">
                            <span class="text-red-500 text-sm error-text" id="error-age"></span>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Gender <span class="text-red-500">*</span>
                        </label>

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

                        <span class="text-red-500 text-sm error-text" id="error-gender"></span>
                    </div>
                </div>
            </section>

            <!-- Student's Educational Information Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Student's Educational Information</h3>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Class Last Attended:</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="last_class_attended" type="text"
                                placeholder="e.g., Grade 5">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Result (GPA/%):</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="result" type="text"
                                placeholder="e.g., 3.5">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Name and Address of the School:</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="school_name_address" type="text"
                            placeholder="Previous school name and address">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Give Detail of Child's Illness (if
                            any):</label>
                        <textarea class="form-input w-full px-4 py-3 rounded" name="medical_history"
                            placeholder="Medical history or allergies" rows="4"></textarea>
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
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Father's Name (CAPITAL
                                    LETTER)<span class="text-red-500">*</span></label>
                                <input class="form-input w-full px-4 py-3 rounded" name="father_name" type="text"
                                    placeholder="Full name in capitals">
                                <span class="text-red-500 text-sm error-text" id="error-father_name"></span>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="father_address" type="text"
                                    placeholder="Residential address">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Occupation (Profession):</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_occupation"
                                        type="text" placeholder="Job title">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Religion:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_religion"
                                        type="text" placeholder="Religion">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Ethnicity:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_ethnicity"
                                        type="text" placeholder="Ethnicity">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_phone" type="tel"
                                        placeholder="Phone">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">E-mail Address:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="father_email" type="email"
                                        placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mother's Information -->
                    <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-4">Mother's Information</h4>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Mother's Name (CAPITAL
                                    LETTER)<span class="text-red-500">*</span></label>
                                <input class="form-input w-full px-4 py-3 rounded" name="mother_name" type="text"
                                    placeholder="Full name in capitals">
                                <span class="text-red-500 text-sm error-text" id="error-mother_name"></span>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                                <input class="form-input w-full px-4 py-3 rounded" name="mother_address" type="text"
                                    placeholder="Residential address">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Occupation (Profession):</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_occupation"
                                        type="text" placeholder="Job title">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Religion:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_religion"
                                        type="text" placeholder="Religion">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Ethnicity:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_ethnicity"
                                        type="text" placeholder="Ethnicity">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_phone" type="tel"
                                        placeholder="Phone">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">E-mail Address:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" name="mother_email" type="email"
                                        placeholder="Email">
                                </div>
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
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Guardian's Name:</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="guardian_name" type="text"
                            placeholder="Guardian's full name">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                        <input class="form-input w-full px-4 py-3 rounded" name="guardian_address" type="text"
                            placeholder="Guardian's address">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Relationship with the Child:</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_relationship"
                                type="text" placeholder="e.g., Aunt, Uncle, Grandfather">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                            <input class="form-input w-full px-4 py-3 rounded" name="guardian_phone" type="tel"
                                placeholder="Phone">
                        </div>
                    </div>
                </div>
            </section>

            <!-- School Bus Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Whether school bus requires?</h3>
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

            <section class="bg-white rounded-lg shadow-md overflow-hidden">

                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Required Documents Upload</h3>
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
                            Last Report Card
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
                            Character Certificate
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" name="character_certificate" type="file"
                            accept=".pdf,.jpg,.jpeg,.png">
                        <p class="text-xs text-gray-500 mt-1">Required for Class 6 and above</p>
                    </div>

                </div>

            </section>

            <!-- Declaration Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Declaration</h3>
                </div>

                <div class="p-6 space-y-4">

                    <div class="bg-amber-50 p-4 rounded border-l-4 border-blue-700">

                        <p class="text-gray-700 mb-3">
                            All the information provided in this application form is correct, complete and true to the best
                            of my knowledge.
                        </p>

                        <p class="text-gray-700 mb-3">
                            I, father/mother/guardian (above mentioned), agree to comply with the rules and regulations
                            of the school.
                        </p>

                        <p class="text-sm text-gray-600 italic">
                            The form must be attached with the following documents and submitted to the school office
                            within three days.
                        </p>

                        <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-1 ml-2">
                            <li>Recent passport size photograph of the child</li>
                            <li>Photocopy of birth certificate</li>
                            <li>Original report card of last attended class</li>
                            <li>Transfer certificate</li>
                            <li>Character certificate (Class 6 onwards)</li>
                        </ol>

                        <p class="text-sm text-gray-600 italic mt-2">
                            (Further information will be given at the time of form submission)
                        </p>

                        <!-- Important Checkbox -->
                        <div class="mt-5 flex items-start gap-2">
                            <input class="mt-1 h-4 w-4 text-red-600 border-gray-300 rounded focus:ring-red-500"
                                type="checkbox" name="declaration_confirmed" value="1">

                            <span class="text-red-500 text-sm error-text" id="error-declaration_confirmed"></span>

                            <label class="text-gray-700 text-sm">
                                I confirm that the above information is true and I agree to follow the rules and
                                regulations of the school.
                            </label>
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
        document.addEventListener('DOMContentLoaded', function() {
            const uploadBox = document.getElementById('photoUpload');
            const fileInput = document.getElementById('studentPhoto');
            const preview = document.getElementById('photoPreview');
            const icon = document.getElementById('photoIcon');

            // Click on div triggers file input
            uploadBox.addEventListener('click', () => {
                fileInput.click();
            });

            // Show preview when file is selected
            fileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        icon.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });
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
                        toastr.success(data.message, "Success");
                        form.reset();
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
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
