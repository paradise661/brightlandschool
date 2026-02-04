@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-primary/60 to-blue-600/50 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/88ea40e48f-8d0182e2f55282f6b671.png"
            alt="students reading books in modern library" />

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

    {{-- <section class="py-12 md:py-16 bg-white" id="admission-process">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Simple Process</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Admission Process</h2>
                    <p class="text-lg text-gray-600">Follow these simple steps to complete your admission</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="text-center" id="step-1">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl md:text-3xl font-bold text-primary">1</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Fill Form</h3>
                        <p class="text-sm text-gray-600">Complete the online admission form with accurate details</p>
                    </div>

                    <div class="text-center" id="step-2">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl md:text-3xl font-bold text-primary">2</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Submit Documents</h3>
                        <p class="text-sm text-gray-600">Upload required documents and photographs</p>
                    </div>

                    <div class="text-center" id="step-3">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl md:text-3xl font-bold text-primary">3</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Assessment</h3>
                        <p class="text-sm text-gray-600">Attend entrance test and interview</p>
                    </div>

                    <div class="text-center" id="step-4">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl md:text-3xl font-bold text-primary">4</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Confirmation</h3>
                        <p class="text-sm text-gray-600">Receive admission confirmation and complete enrollment</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="admission-form-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <div class="bg-gradient-to-r from-primary to-blue-600 text-white p-6 md:p-8">
                        <h2 class="text-2xl md:text-3xl font-heading font-bold mb-2">Student Admission Application</h2>
                        <p class="text-blue-100">Please fill all required fields marked with <span
                                class="text-red-500">*</span></p>
                    </div>

                    <form class="p-6 md:p-8 lg:p-12" id="admission-form"action="{{ route('frontend.admission.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-10" id="student-information">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-user text-primary"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Student Information
                                </h3>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        First Name <span class="text-red-500">*</span>
                                    </label>

                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg
                                        focus:border-primary focus:outline-none transition"
                                        id="first_name" data-field="first_name" name="first_name" type="text"
                                        placeholder="Enter first name">

                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-first_name"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name <span
                                            class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="last_name" type="text" name="last_name"
                                        placeholder="Enter last name">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-last_name"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth <span
                                            class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="date_of_birth" type="date" name="date_of_birth">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-date_of_birth"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Gender <span
                                            class="text-red-500">*</span></label>
                                    <select
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="gender" name="gender">
                                        <option value="">Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-gender"></p>
                                    </select>

                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Blood Group</label>
                                    <select
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        name="blood_group">
                                        <option value="">Select blood group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nationality <span
                                            class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="nationality" type="text" placeholder="Enter nationality"
                                        name="nationality">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-nationality"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Religion</label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        type="text" placeholder="Enter religion" name="religion">
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Mother Tongue</label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        type="text" placeholder="Enter mother tongue" name="mother_tongue">
                                </div>
                            </div>

                            <div class="mt-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Student Photo <span class="text-red-500">*</span>
                                </label>

                                <div class="upload-box border-2 border-dashed border-gray-300 rounded-lg p-6
                                         text-center hover:border-primary transition cursor-pointer"
                                    data-upload="student_photo">

                                    <i class="fa-solid fa-cloud-arrow-up text-4xl text-gray-400 mb-3"></i>
                                    <p class="text-gray-600 mb-2">Click to upload or drag and drop</p>
                                    <p class="text-sm text-gray-500">PNG, JPG (MAX. 2MB)</p>
                                    <p class="mt-2 text-sm text-green-600 hidden" data-filename></p>
                                    <input class="hidden" data-field="student_photo" type="file" name="student_photo"
                                        accept="image/*">

                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-student_photo"></p>
                                </div>
                            </div>

                        </div>

                        <div class="mb-10" id="admission-details">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-green-600/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-graduation-cap text-green-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Admission Details</h3>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Applying for Grade
                                        <span class="text-red-500">*</span></label>
                                    <select
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="applying_grade" name="applying_grade">
                                        <option value="">Select grade</option>
                                        <option value="nursery">Nursery</option>
                                        <option value="lkg">LKG</option>
                                        <option value="ukg">UKG</option>
                                        <option value="1">Grade 1</option>
                                        <option value="2">Grade 2</option>
                                        <option value="3">Grade 3</option>
                                        <option value="4">Grade 4</option>
                                        <option value="5">Grade 5</option>
                                        <option value="6">Grade 6</option>
                                        <option value="7">Grade 7</option>
                                        <option value="8">Grade 8</option>
                                        <option value="9">Grade 9</option>
                                        <option value="10">Grade 10</option>
                                        <option value="11">Grade 11</option>
                                        <option value="12">Grade 12</option>
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-applying_grade"></p>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Academic Year <span
                                            class="text-red-500">*</span></label>
                                    <select
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="academic_year" name="academic_year">
                                        <option value="">Select academic year</option>
                                        <option value="2024-2025">2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-academic_year"></p>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Previous School
                                        Name</label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        type="text" placeholder="Enter previous school name"
                                        name="previous_school_name">
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Previous
                                        Grade/Class</label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        type="text" placeholder="Enter previous grade" name="previous_grade">
                                </div>
                            </div>
                        </div>

                        <div class="mb-10" id="parent-information">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-purple-600/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-users text-purple-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Parent/Guardian
                                    Information</h3>
                            </div>

                            <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4">Father's Details</h4>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Father's Name
                                            <span class="text-red-500">*</span></label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            data-field="father_name" type="text" name="father_name"
                                            placeholder="Enter father's name">
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-father_name"></p>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Occupation</label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="text" name="father_occupation" placeholder="Enter occupation">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number
                                            <span class="text-red-500">*</span></label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            data-field="father_phone" type="tel"
                                            name="father_phone"placeholder="+1 (234) 567-890">
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-father_phone"></p>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address
                                            <span class="text-red-500">*</span></label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            data-field="father_email" type="email" name="father_email"
                                            placeholder="father@example.com">
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-father_email"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-pink-50 rounded-2xl p-6 mb-6">
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4">Mother's Details</h4>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Mother's Name
                                            <span class="text-red-500"></span>*</span></label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            data-field="mother_name" type="text" name="mother_name"
                                            placeholder="Enter mother's name">
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-mother_name"></p>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Occupation</label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="text" name="mother_occupation" placeholder="Enter occupation">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number
                                            <span class="text-red-500">*</span></label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            data-field="mother_phone" type="tel" name="mother_phone"
                                            placeholder="+1 (234) 567-890">
                                        <p class="mt-1 text-sm text-red-500 hidden" id="error-mother_phone"></p>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address
                                        </label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="email" name="mother_email" placeholder="mother@example.com">
                                    </div>
                                </div>
                            </div>

                            <div class="bg-green-50 rounded-2xl p-6">
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4">Guardian Details (if
                                    applicable)</h4>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Guardian's
                                            Name</label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="text" name="guardian_name" placeholder="Enter guardian's name">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Relationship</label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="text" name="guardian_relationship" placeholder="Enter relationship">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="tel" name="guardian_phone" placeholder="+1 (234) 567-890">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                                        <input
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition bg-white"
                                            type="email" name="guardian_email" placeholder="guardian@example.com">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-10" id="address-information">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-orange-600/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-location-dot text-orange-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Address Information
                                </h3>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Current Address <span
                                            class="text-red-500">*</span></label>
                                    <textarea
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="current_address" rows="3" name="current_address" placeholder="Enter complete address"></textarea>
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-current_address"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">City <span
                                            class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="city" type="text" name="city" placeholder="Enter city">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-city"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">State/Province <span
                                            class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="state" type="text" name="state"
                                        placeholder="Enter state/province">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-state"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">ZIP/Postal Code</label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        type="text" name="postal_code" placeholder="Enter ZIP code">
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Country <span
                                            class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="country" type="text" name="country" placeholder="Enter country">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-country"></p>
                                </div>
                            </div>

                        </div>

                        <div class="mb-10" id="medical-information">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-red-600/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-heart-pulse text-red-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Medical Information
                                </h3>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Any Medical Conditions or
                                        Allergies?</label>
                                    <textarea
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        rows="3" name="medical_conditions"
                                        placeholder="Please mention any medical conditions, allergies, or special needs"></textarea>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Emergency Contact Name
                                        <span class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="emergency_contact_name" type="text" name="emergency_contact_name"
                                        placeholder="Enter emergency contact name">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-emergency_contact_name"></p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Emergency Contact Number
                                        <span class="text-red-500">*</span></label>
                                    <input
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        data-field="emergency_contact_number" type="tel"
                                        name="emergency_contact_number" placeholder="+1 (234) 567-890">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-emergency_contact_number"></p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-10" id="document-upload">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-teal-600/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-file-arrow-up text-teal-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Document Upload</h3>
                            </div>

                            <div class="space-y-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Birth Certificate
                                    <span class="text-red-500">*</span></label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition cursor-pointer"
                                    data-upload>
                                    <i class="fa-solid fa-file-pdf text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-gray-600 text-sm">Click to upload birth certificate (PDF, JPG, PNG -
                                        MAX. 5MB)</p>
                                    <p class="mt-2 text-sm text-green-600 hidden" data-filename></p>
                                    <input class="hidden" data-field="birth_certificate" type="file"
                                        name="birth_certificate" accept=".pdf,.jpg,.jpeg,.png">
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-birth_certificate"></p>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Previous School Transfer
                                    Certificate</label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition cursor-pointer"
                                    data-upload>
                                    <i class="fa-solid fa-file-pdf text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-gray-600 text-sm">Click to upload transfer certificate (PDF, JPG,
                                        PNG - MAX. 5MB)</p>
                                    <p class="mt-2 text-sm text-green-600 hidden" data-filename></p>
                                    <input class="hidden" type="file" name="transfer_certificate"
                                        accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Previous Academic
                                    Records/Report Card</label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition cursor-pointer"
                                    data-upload>
                                    <i class="fa-solid fa-file-pdf text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-gray-600 text-sm">Click to upload academic records (PDF, JPG, PNG -
                                        MAX. 5MB)</p>
                                    <p class="mt-2 text-sm text-green-600 hidden" data-filename></p>
                                    <input class="hidden" type="file" name="academic_records"
                                        accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Passport Size Photos (2
                                    copies) <span class="text-red-500">*</span></label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition cursor-pointer"
                                    data-upload>
                                    <i class="fa-solid fa-images text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-gray-600 text-sm">Click to upload photos (JPG, PNG - MAX. 2MB each)
                                    </p>
                                    <p class="mt-2 text-sm text-green-600 hidden" data-filename></p>
                                    <input class="hidden" data-field="passport_photos" type="file"
                                        name="passport_photos[]" accept="image/*" multiple>
                                    <p class="mt-1 text-sm text-red-500 hidden" id="error-passport_photos"></p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-10" id="additional-information">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-indigo-600/10 rounded-full flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-circle-info text-indigo-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Additional Information
                                </h3>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">How did you hear about
                                        our school? <span class="text-red-500">*</span></label>
                                    <select
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        name="heard_about_school">
                                        <option value="">Select an option</option>
                                        <option value="website">School Website</option>
                                        <option value="social-media">Social Media</option>
                                        <option value="friend">Friend/Relative</option>
                                        <option value="newspaper">Newspaper/Magazine</option>
                                        <option value="event">School Event</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Why do you want to join
                                        Excellence Academy?</label>
                                    <textarea
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        name="why_join_school" rows="4" placeholder="Tell us why you're interested in our school..."></textarea>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Student's Hobbies and
                                        Interests</label>
                                    <textarea
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition"
                                        rows="3" name="student_hobbies" placeholder="Please mention any hobbies, interests, or special talents"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button
                                class="px-8 py-4 bg-gradient-to-r from-primary to-blue-600 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 transition font-semibold text-lg shadow-lg"
                                type="submit">
                                <i class="fa-solid fa-paper-plane mr-2"></i> Submit Application
                            </button>
                        </div>

                        <p class="text-center text-sm text-gray-600 mt-6">
                            Need help? Contact our admissions office at <a class="text-primary hover:underline"
                                href="tel:+1234567890">+1 (234) 567-890</a> or <a class="text-primary hover:underline"
                                href="mailto:admissions@school.edu">admissions@school.edu</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white" id="admission-requirements">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Requirements</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Documents Required</h2>
                    <p class="text-lg text-gray-600">Please keep these documents ready before filling the form</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-6 border-2 border-blue-100"
                        id="req-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-id-card text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Birth Certificate</h3>
                        <p class="text-sm text-gray-600">Original birth certificate or government-issued proof of age</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-white rounded-xl p-6 border-2 border-green-100"
                        id="req-2">
                        <div class="w-12 h-12 bg-green-600/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-certificate text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Transfer Certificate</h3>
                        <p class="text-sm text-gray-600">TC from previous school (if applicable)</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 border-2 border-purple-100"
                        id="req-3">
                        <div class="w-12 h-12 bg-purple-600/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-file-lines text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Academic Records</h3>
                        <p class="text-sm text-gray-600">Previous year's report card or mark sheet</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-white rounded-xl p-6 border-2 border-orange-100"
                        id="req-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-image text-accent text-xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Photographs</h3>
                        <p class="text-sm text-gray-600">Recent passport-size photographs (2 copies)</p>
                    </div>

                    <div class="bg-gradient-to-br from-red-50 to-white rounded-xl p-6 border-2 border-red-100"
                        id="req-5">
                        <div class="w-12 h-12 bg-red-600/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-location-dot text-red-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Address Proof</h3>
                        <p class="text-sm text-gray-600">Utility bill, rental agreement, or similar document</p>
                    </div>

                    <div class="bg-gradient-to-br from-teal-50 to-white rounded-xl p-6 border-2 border-teal-100"
                        id="req-6">
                        <div class="w-12 h-12 bg-teal-600/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-notes-medical text-teal-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Medical Records</h3>
                        <p class="text-sm text-gray-600">Immunization records and health certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="admission-faq">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Have Questions?</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Frequently Asked
                        Questions</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden" id="faq-1">
                        <button
                            class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-heading font-bold text-gray-900 text-lg">When does the admission process
                                start?</span>
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </button>
                        <div class="px-6 pb-5 text-gray-600">
                            <p>The admission process typically starts in January for the upcoming academic year. However, we
                                accept applications throughout the year subject to seat availability.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden" id="faq-2">
                        <button
                            class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-heading font-bold text-gray-900 text-lg">Is there an entrance exam?</span>
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </button>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden" id="faq-3">
                        <button
                            class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-heading font-bold text-gray-900 text-lg">What is the age criteria for
                                admission?</span>
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </button>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden" id="faq-4">
                        <button
                            class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-heading font-bold text-gray-900 text-lg">How long does the admission process
                                take?</span>
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </button>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden" id="faq-5">
                        <button
                            class="w-full px-6 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-heading font-bold text-gray-900 text-lg">Can I visit the campus before
                                applying?</span>
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gradient-to-r from-primary to-blue-600 text-white" id="contact-cta">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <div class="max-w-3xl mx-auto">
                <div
                    class="w-16 h-16 md:w-20 md:h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-headset text-white text-2xl md:text-3xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-heading font-bold mb-4">Need Assistance?</h2>
                <p class="text-lg md:text-xl text-blue-100 mb-8">Our admissions team is here to help you through every step
                    of the process</p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a class="w-full sm:w-auto bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-100 transition font-semibold text-lg inline-flex items-center justify-center"
                        href="tel:+1234567890">
                        <i class="fa-solid fa-phone mr-2"></i> Call Us Now
                    </a>
                    <a class="w-full sm:w-auto bg-transparent border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-primary transition font-semibold text-lg inline-flex items-center justify-center"
                        href="mailto:admissions@school.edu">
                        <i class="fa-solid fa-envelope mr-2"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
@section('scripts')
    <script>
        /* ======================================================
                                   CLICK UPLOAD BOX → OPEN FILE PICKER + SHOW FILE NAME
                                   ====================================================== */
        document.querySelectorAll('[data-upload]').forEach(box => {
            const input = box.querySelector('input[type="file"]');
            const fileNameBox = box.querySelector('[data-filename]');

            if (!input) return;

            // Click anywhere on box opens file picker
            box.addEventListener('click', () => input.click());

            // Show selected file name
            input.addEventListener('change', () => {
                if (input.files.length > 0 && fileNameBox) {
                    fileNameBox.innerText = `Selected: ${input.files[0].name}`;
                    fileNameBox.classList.remove('hidden');

                    box.classList.remove('border-red-500');
                    box.classList.add('border-green-500');
                }
            });
        });

        /* ======================================================
           CLEAR ERROR WHILE TYPING / CHANGING
           ====================================================== */
        document.querySelectorAll('[data-field]').forEach(field => {

            const clearError = () => {
                const errorBox = document.getElementById(`error-${field.name}`);
                if (errorBox) {
                    errorBox.classList.add('hidden');
                    errorBox.innerText = '';
                }

                // Normal inputs
                field.classList.remove('border-red-500');
                field.classList.add('border-gray-200');

                // File upload box
                if (field.type === 'file') {
                    const uploadBox = field.closest('[data-upload]');
                    uploadBox?.classList.remove('border-red-500');
                }
            };

            field.addEventListener('input', clearError);
            field.addEventListener('change', clearError);
        });

        /* ======================================================
           FORM SUBMIT HANDLER
           ====================================================== */
        document.getElementById('admission-form').addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('FORM SUBMIT TRIGGERED');

            const form = this;
            const formData = new FormData(form);

            // Clear old errors
            document.querySelectorAll('[id^="error-"]').forEach(el => {
                el.classList.add('hidden');
                el.innerText = '';
            });

            document.querySelectorAll('[data-field]').forEach(input => {
                input.classList.remove('border-red-500');
                input.classList.add('border-gray-200');
            });

            document.querySelectorAll('[data-upload]').forEach(box => {
                box.classList.remove('border-red-500', 'border-green-500');
            });

            fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(async res => {
                    const data = await res.json();

                    /* ---------- VALIDATION ERROR (422) ---------- */
                    if (res.status === 422) {
                        const firstField = Object.keys(data.errors)[0];
                        const firstMessage = data.errors[firstField][0];

                        // Show error text
                        const errorBox = document.getElementById(`error-${firstField}`);
                        if (errorBox) {
                            errorBox.innerText = firstMessage;
                            errorBox.classList.remove('hidden');
                        }

                        const input = document.querySelector(`[data-field="${firstField}"]`);

                        if (input) {
                            // FILE INPUT
                            if (input.type === 'file') {
                                const uploadBox = input.closest('[data-upload]');
                                if (uploadBox) {
                                    uploadBox.classList.add('border-red-500');
                                    uploadBox.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'center'
                                    });
                                }
                            }
                            // NORMAL INPUT
                            else {
                                input.classList.add('border-red-500');
                                input.focus();
                            }
                        }

                        toastr.error(firstMessage);
                        throw new Error('Validation failed');
                    }

                    if (!res.ok) {
                        throw new Error(data.message || 'Something went wrong');
                    }

                    return data;
                })
                .then(data => {
                    toastr.success(data.message);
                    form.reset();

                    // Hide file names after reset
                    document.querySelectorAll('[data-filename]').forEach(el => {
                        el.innerText = '';
                        el.classList.add('hidden');
                    });
                })
                .catch(() => {});
        });
    </script>
@endsection
