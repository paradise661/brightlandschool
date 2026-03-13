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
            background-color: #a83535;
        }

        .form-input {
            border: 2px solid #a83535;
        }

        .form-input:focus {
            outline: none;
            border-color: #8b2a2a;
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
                <div class="border-2 border-dashed border-gray-400 bg-gray-100 py-10 text-center rounded">

                    <!-- Placeholder Icon -->
                    <div class="flex justify-center mb-3 text-gray-500">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 7h4l2-2h6l2 2h4v12H3V7z" />
                            <circle cx="12" cy="13" r="3.5" stroke="currentColor" stroke-width="1.5" />
                        </svg>
                    </div>

                    <!-- Placeholder Text -->
                    <p class="font-semibold text-gray-700">PP Size Photo</p>
                    <p class="text-gray-500 text-sm">Upload Student Photograph</p>

                    {{-- <!-- Upload -->
                    <input class="mt-4 text-sm mx-auto block" type="file"> --}}

                </div>

            </div>
        </div>

        <!-- Main Form -->
        <form class="space-y-6">
            <!-- Student's Detail Section -->
            <section class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="form-section-header text-white p-4">
                    <h3 class="text-xl font-bold">Student's Detail</h3>
                </div>
                <div class="p-6 space-y-6">
                    <!-- Student's Name -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Student's Name:</label>
                        <input class="form-input w-full px-4 py-3 rounded" type="text"
                            placeholder="Enter student's name">
                    </div>

                    <!-- In Devanagari Script -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">In Devanagari Script:</label>
                        <input class="form-input w-full px-4 py-3 rounded" type="text"
                            placeholder="नेपाली नाम लेख्नुहोस्">
                    </div>

                    <!-- Date of Birth & Age -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth (AD):</label>
                            <input class="form-input w-full px-4 py-3 rounded" type="date">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth (BS):</label>
                            <input class="form-input w-full px-4 py-3 rounded" type="text" placeholder="DD/MM/YY">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Age:</label>
                            <input class="form-input w-full px-4 py-3 rounded" type="number" placeholder="Age">
                        </div>
                    </div>

                    <!-- Gender -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Gender:</label>
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
                            <input class="form-input w-full px-4 py-3 rounded" type="text" placeholder="e.g., Grade 5">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Result (GPA/%):</label>
                            <input class="form-input w-full px-4 py-3 rounded" type="text" placeholder="e.g., 3.5">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Name and Address of the School:</label>
                        <input class="form-input w-full px-4 py-3 rounded" type="text"
                            placeholder="Previous school name and address">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Give Detail of Child's Illness (if
                            any):</label>
                        <textarea class="form-input w-full px-4 py-3 rounded" placeholder="Medical history or allergies" rows="4"></textarea>
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
                                    LETTER):</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="text"
                                    placeholder="Full name in capitals">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="text"
                                    placeholder="Residential address">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Occupation (Profession):</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Job title">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Religion:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Religion">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Ethnicity:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Ethnicity">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="tel"
                                        placeholder="Phone">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">E-mail Address:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="email"
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
                                    LETTER):</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="text"
                                    placeholder="Full name in capitals">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="text"
                                    placeholder="Residential address">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Occupation (Profession):</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Job title">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Religion:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Religion">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Ethnicity:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Ethnicity">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="tel"
                                        placeholder="Phone">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">E-mail Address:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="email"
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
                        <input class="form-input w-full px-4 py-3 rounded" type="text"
                            placeholder="Guardian's full name">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                        <input class="form-input w-full px-4 py-3 rounded" type="text"
                            placeholder="Guardian's address">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Relationship with the Child:</label>
                            <input class="form-input w-full px-4 py-3 rounded" type="text"
                                placeholder="e.g., Aunt, Uncle, Grandfather">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                            <input class="form-input w-full px-4 py-3 rounded" type="tel" placeholder="Phone">
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
                                <input class="form-input w-full px-4 py-3 rounded" type="text"
                                    placeholder="Location with map">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Guardian's Name for Bus:</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Address:</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="text" placeholder="Address">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                                <input class="form-input w-full px-4 py-3 rounded" type="tel" placeholder="Phone">
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
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Full name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Class:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Class">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Sibling 2 - Name:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Full name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Class:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Class">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Sibling 3 - Name:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Full name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Class:</label>
                                    <input class="form-input w-full px-4 py-3 rounded" type="text"
                                        placeholder="Class">
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
                            Birth Certificate <span class="text-red-600">*</span>
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" type="file" accept=".pdf,.jpg,.jpeg,.png"
                            required>
                    </div>

                    <!-- Report Card -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Last Report Card <span class="text-red-600">*</span>
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" type="file" accept=".pdf,.jpg,.jpeg,.png"
                            required>
                    </div>

                    <!-- Transfer Certificate -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Transfer Certificate
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" type="file" accept=".pdf,.jpg,.jpeg,.png">
                    </div>

                    <!-- Character Certificate -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Character Certificate
                        </label>
                        <input class="w-full border rounded p-2 bg-gray-50" type="file" accept=".pdf,.jpg,.jpeg,.png">
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

                    <div class="bg-amber-50 p-4 rounded border-l-4 border-red-700">

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
                                type="checkbox" required>

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
                <button class="bg-red-700 hover:bg-red-800 text-white font-bold py-3 px-8 rounded transition"
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
    </script>
@endsection
