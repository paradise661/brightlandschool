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
    <section class="relative h-80 overflow-hidden" id="blog-hero">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/85 to-blue-800/60 z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['admission_breadcrum_image'] ?? '' }}"
            alt="Admission">

        <div class="relative z-20 h-full flex flex-col items-center justify-center gap-4 px-6 text-center">
            <span
                class="inline-flex items-center gap-2 bg-white/15 backdrop-blur border border-white/25
                     text-white text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                    <path d="M6 12v5c3 3 9 3 12 0v-5" />
                </svg>
                Enrollment 2083
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">
                Student Admission Form
            </h1>
            <nav class="flex items-center gap-2 text-sm text-white/75">
                <a class="hover:text-white transition-colors" href="/">Home</a>
                <span class="text-white/40">›</span>
                <span class="text-white font-medium">Admission</span>
            </nav>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 py-12 space-y-6">
        <form id="admissionForm" action="{{ route('frontend.admission.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                {{-- Card Header --}}
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <svg class="w-5 h-5 text-white/70 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                    </svg>
                    <h2 class="text-white font-bold text-base tracking-wide">
                        Admission Application — Academic Year 2083
                    </h2>
                </div>

                {{-- Card Body --}}
                <div class="p-6 sm:p-8">
                    <div class="flex flex-wrap gap-6 items-end">

                        {{-- Year + Class --}}
                        <div class="flex-1 min-w-[220px] grid grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">Admission Year</label>
                                <input
                                    class="w-full bg-slate-100 border border-slate-200 rounded-lg px-4 py-2.5
                                  text-sm font-semibold text-slate-500 text-center cursor-default"
                                    type="text" value="2083" readonly>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">Class <span
                                        class="text-red-500">*</span></label>
                                <select
                                    class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition cursor-pointer"
                                    id="studentClass" name="student_class">
                                    <option value="">Select Class</option>
                                    @foreach ([
            'nursery' => 'Nursery',
            'lkg' => 'LKG',
            'ukg' => 'UKG',
            'grade1' => 'Grade 1',
            'grade2' => 'Grade 2',
            'grade3' => 'Grade 3',
            'grade4' => 'Grade 4',
            'grade5' => 'Grade 5',
            'grade6' => 'Grade 6',
            'grade7' => 'Grade 7',
            'grade8' => 'Grade 8',
        ] as $val => $lbl)
                                        <option value="{{ $val }}"
                                            {{ old('student_class', $student->student_class ?? '') == $val ? 'selected' : '' }}>
                                            {{ $lbl }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Photo Upload --}}
                        <div class="flex flex-col items-center gap-2">
                            <label class="text-sm font-semibold text-slate-700">Student Photo <span
                                    class="text-red-500">*</span></label>
                            <div class="relative w-32 h-36 border-2 border-dashed border-slate-300 rounded-xl
                            bg-slate-50 flex flex-col items-center justify-center gap-1 cursor-pointer
                            hover:border-blue-500 hover:bg-blue-50 transition-all overflow-hidden"
                                id="photoUpload">
                                <img class="absolute inset-0 w-full h-full object-cover rounded-xl hidden" id="photoPreview"
                                    alt="Preview">
                                <span class="flex flex-col items-center gap-1 text-slate-400" id="photoIcon">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                                        <circle cx="12" cy="13" r="4" />
                                    </svg>
                                    <span class="text-xs font-semibold text-slate-600">PP Size Photo</span>
                                    <span class="text-[11px] text-slate-400">Click to upload</span>
                                </span>
                                <input class="hidden" id="studentPhoto" type="file" name="student_photo"
                                    accept="image/*">
                            </div>
                            <span class="text-red-500 text-xs error-text" id="error-student_photo"></span>
                        </div>

                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 1 — Personal Details
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">1</span>
                    <h2 class="text-white font-bold text-base tracking-wide">Personal Details</h2>
                </div>

                <div class="p-6 sm:p-8 space-y-5">

                    {{-- Name --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-semibold text-slate-700">
                            Student's Full Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                          bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                          focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                            name="name" type="text" placeholder="Enter student's full name">
                        <span class="text-red-500 text-xs error-text" id="error-name"></span>
                    </div>

                    {{-- DOB --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Date of Birth (AD) <span class="text-red-500">*</span>
                                <span class="text-slate-400 font-normal text-xs ml-1">YYYY-MM-DD</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                id="datepicker-english" type="text" name="dob_ad" placeholder="YYYY-MM-DD"
                                autocomplete="off">
                            <span class="text-red-500 text-xs error-text" id="error-dob_ad"></span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Date of Birth (BS)
                                <span class="text-slate-400 font-normal text-xs ml-1">optional</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                id="datepicker-nepali" type="text" name="dob_bs" placeholder="YYYY-MM-DD"
                                autocomplete="off">
                        </div>
                    </div>

                    {{-- Gender --}}
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-slate-700">
                            Gender <span class="text-red-500">*</span>
                        </label>
                        <div class="flex flex-wrap gap-3">
                            <label
                                class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                <input class="accent-blue-700" type="radio" name="gender" value="male"> Male
                            </label>
                            <label
                                class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                <input class="accent-blue-700" type="radio" name="gender" value="female"> Female
                            </label>
                        </div>
                        <span class="text-red-500 text-xs error-text" id="error-gender"></span>
                    </div>

                    {{-- Email + Nationality --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="email" type="email" placeholder="example@mail.com" autocomplete="off">
                            <span class="text-red-500 text-xs error-text" id="error-email"></span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Nationality <span class="text-red-500">*</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="nationality" type="text" placeholder="e.g., Nepali">
                            <span class="text-red-500 text-xs error-text" id="error-nationality"></span>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-semibold text-slate-700">
                            Home Address <span class="text-red-500">*</span>
                            <span class="text-slate-400 font-normal text-xs ml-1">(Permanent / Temporary)</span>
                        </label>
                        <input
                            class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                          bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                          focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                            name="address" type="text" placeholder="Full residential address">
                        <span class="text-red-500 text-xs error-text" id="error-address"></span>
                    </div>

                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 2 — Parental Information
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">2</span>
                    <h2 class="text-white font-bold text-base tracking-wide">Child's Parental Information</h2>
                </div>

                <div class="p-6 sm:p-8 space-y-8">

                    {{-- ── Father ── --}}
                    <div class="space-y-5">
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-blue-700 uppercase tracking-widest whitespace-nowrap">
                                Father's Information
                            </span>
                            <div class="flex-1 h-px bg-slate-200"></div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Father's Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="father_name" type="text" placeholder="Enter Father's name">
                                <span class="text-red-500 text-xs error-text" id="error-father_name"></span>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Phone Number <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="father_phone" type="tel" placeholder="98XXXXXXXX">
                                <span class="text-red-500 text-xs error-text" id="error-father_phone"></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Educational Qualification <span class="text-red-500">*</span>
                                </label>
                                <select
                                    class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition"
                                    name="father_ethnicity">
                                    <option value="">Select Qualification</option>
                                    <option value="School Level">School Level</option>
                                    <option value="SLC Passed">SLC Passed</option>
                                    <option value="+2">+2</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Masters">Masters</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="text-red-500 text-xs error-text" id="error-father_ethnicity"></span>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Occupation <span class="text-red-500">*</span>
                                </label>
                                <select
                                    class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition"
                                    name="father_occupation">
                                    <option value="">Select Occupation</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Government Employee">Government Employee</option>
                                    <option value="Private Employee">Private Employee</option>
                                    <option value="Business Owner">Business Owner</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="text-red-500 text-xs error-text" id="error-father_occupation"></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Institution / Office
                                    <span class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="father_religion" type="text" placeholder="Current workplace">
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Email
                                    <span class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="father_email" type="text" placeholder="father@email.com">
                            </div>
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Home Address
                                <span class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="father_address" type="text" placeholder="Residential address">
                        </div>
                    </div>

                    {{-- divider --}}
                    <div class="border-t border-slate-100"></div>

                    {{-- ── Mother ── --}}
                    <div class="space-y-5">
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-blue-700 uppercase tracking-widest whitespace-nowrap">
                                Mother's Information
                            </span>
                            <div class="flex-1 h-px bg-slate-200"></div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Mother's Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="mother_name" type="text" placeholder="Enter Mother's name">
                                <span class="text-red-500 text-xs error-text" id="error-mother_name"></span>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Phone Number <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="mother_phone" type="tel" placeholder="98XXXXXXXX">
                                <span class="text-red-500 text-xs error-text" id="error-mother_phone"></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Educational Qualification <span class="text-red-500">*</span>
                                </label>
                                <select
                                    class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition"
                                    name="mother_ethnicity">
                                    <option value="">Select Qualification</option>
                                    <option value="School Level">School Level</option>
                                    <option value="SLC Passed">SLC Passed</option>
                                    <option value="+2">+2</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Masters">Masters</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="text-red-500 text-xs error-text" id="error-mother_ethnicity"></span>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Occupation <span class="text-red-500">*</span>
                                </label>
                                <select
                                    class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition"
                                    name="mother_occupation">
                                    <option value="">Select Occupation</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Government Employee">Government Employee</option>
                                    <option value="Private Employee">Private Employee</option>
                                    <option value="Business Owner">Business Owner</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="text-red-500 text-xs error-text" id="error-mother_occupation"></span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Institution / Office
                                    <span class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="mother_religion" type="text" placeholder="Current workplace">
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">
                                    Email
                                    <span class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                                </label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="mother_email" type="text" placeholder="mother@email.com">
                            </div>
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Home Address
                                <span class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="mother_address" type="text" placeholder="Residential address">
                        </div>
                    </div>

                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     GUARDIAN
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                {{-- ↓↓↓ CHANGED: added "Same as Father" & "Same as Mother" buttons in the header --}}
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3 flex-wrap">
                    <svg class="w-5 h-5 text-white/70 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <h2 class="text-white font-bold text-base tracking-wide">
                        Guardian's Information
                        <span class="text-white/60 font-normal text-sm ml-1">(if different from parents)</span>
                    </h2>
                    <div class="ml-auto flex items-center gap-2 flex-wrap">
                        <button
                            class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-white/20 border border-white/40
                                   text-white hover:bg-white/35 active:bg-white/10 transition-all whitespace-nowrap"
                            id="sameAsFather" type="button">
                            Same as Father
                        </button>
                        <button
                            class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-white/20 border border-white/40
                                   text-white hover:bg-white/35 active:bg-white/10 transition-all whitespace-nowrap"
                            id="sameAsMother" type="button">
                            Same as Mother
                        </button>
                    </div>
                </div>
                {{-- ↑↑↑ END CHANGE --}}

                <div class="p-6 sm:p-8 space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Guardian's Name <span
                                    class="text-red-500">*</span></label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="guardian_name" type="text" placeholder="Enter Gardian's full name">
                            <span class="text-red-500 text-xs error-text" id="error-guardian_name"></span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Phone Number <span
                                    class="text-red-500">*</span></label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="guardian_phone" type="tel" placeholder="98XXXXXXXX">
                            <span class="text-red-500 text-xs error-text" id="error-guardian_phone"></span>

                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Educational Qualification <span
                                    class="text-red-500">*</span></label>
                            <select
                                class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition"
                                name="guardian_qualifaction">
                                <option value="">Select Qualification</option>
                                <option value="School Level">School Level</option>
                                <option value="SLC Passed">SLC Passed</option>
                                <option value="+2">+2</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Masters">Masters</option>
                                <option value="PhD">PhD</option>
                                <option value="Others">Others</option>
                            </select>
                            <span class="text-red-500 text-xs error-text" id="error-guardian_qualifaction"></span>

                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Occupation <span
                                    class="text-red-500">*</span></label>
                            <select
                                class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5
                                   text-sm text-slate-700 focus:outline-none focus:ring-2
                                   focus:ring-blue-500 focus:border-blue-500 transition"
                                name="guardian_occupation">
                                <option value="">Select Occupation</option>
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="Government Employee">Government Employee</option>
                                <option value="Private Employee">Private Employee</option>
                                <option value="Business Owner">Business Owner</option>
                                <option value="Self-Employed">Self-Employed</option>
                                <option value="Freelancer">Freelancer</option>
                                <option value="Unemployed">Unemployed</option>
                                <option value="Retired">Retired</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Others">Others</option>
                            </select>
                            <span class="text-red-500 text-xs error-text" id="error-guardian_occupation"></span>

                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Institution / Office <span
                                    class="text-slate-400 font-normal text-xs">(optional)</span></label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="guardian_office" type="text" placeholder="Current workplace">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Email <span
                                    class="text-slate-400 font-normal text-xs">(optional)</span></label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="guardian_email" type="text" placeholder="guardian@email.com">
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-semibold text-slate-700">Home Address <span
                                class="text-slate-400 font-normal text-xs">(optional)</span></label>
                        <input
                            class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                          bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                          focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                            name="guardian_address" type="text" placeholder="Residential address">
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 3 — Medical Information
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">3</span>
                    <h2 class="text-white font-bold text-base tracking-wide">Medical Information</h2>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-semibold text-slate-700">
                            Child's Illness / Allergies
                            <span class="text-slate-400 font-normal text-xs ml-1">(if any)</span>
                        </label>
                        <textarea
                            class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                             bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                             focus:border-blue-500 focus:bg-white transition placeholder-slate-300
                             resize-y min-h-[110px] leading-relaxed"
                            name="medical_history" placeholder="Describe any known medical conditions, allergies, or special needs…"></textarea>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 4 — Previous School
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden"
                id="previousSchoolSection">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">4</span>
                    <h2 class="text-white font-bold text-base tracking-wide">
                        Previous School Information
                    </h2>
                </div>

                <div class="p-6 sm:p-8 space-y-5">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-semibold text-slate-700">
                            Name of Previous School <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                          bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                          focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                            name="school_name" type="text" placeholder="School name">
                        <span class="text-red-500 text-xs error-text" id="error-school_name"></span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                School Address <span class="text-red-500">*</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="school_name_address" type="text" placeholder="City / District">
                            <span class="text-red-500 text-xs error-text" id="error-school_name_address"></span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Class Passed <span class="text-red-500">*</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="last_class_attended" type="text" placeholder="e.g., Grade 5">
                            <span class="text-red-500 text-xs error-text" id="error-last_class_attended"></span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                Year of Passing <span class="text-red-500">*</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="school_passed" type="text" placeholder="e.g., 2082">
                            <span class="text-red-500 text-xs error-text" id="error-school_passed"></span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">
                                GPA / Percentage <span class="text-red-500">*</span>
                            </label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                name="result" type="text" placeholder="e.g., 3.80 GPA or 85%">
                            <span class="text-red-500 text-xs error-text" id="error-result"></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-semibold text-slate-700">
                            Reason for Leaving <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                          bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                          focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                            name="school_reason" type="text" placeholder="Reason for discontinuing">
                        <span class="text-red-500 text-xs error-text" id="error-school_reason"></span>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SIBLING
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <svg class="w-5 h-5 text-white/70 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                    </svg>
                    <h2 class="text-white font-bold text-base tracking-wide">Sibling Information</h2>
                </div>

                <div class="p-6 sm:p-8 space-y-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-slate-700">
                            Does the child have any sibling studying in this school?
                        </label>
                        <div class="flex flex-wrap gap-3">
                            <label
                                class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                <input class="accent-blue-700" id="sibling_yes" type="radio" name="has_sibling"
                                    value="yes"> Yes
                            </label>
                            <label
                                class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                <input class="accent-blue-700" id="sibling_no" type="radio" name="has_sibling"
                                    value="no" checked> No
                            </label>
                        </div>
                    </div>

                    <div class="hidden space-y-4 pt-2 border-t border-slate-100" id="sibling_details">
                        @foreach ([['sibling1_name', 'sibling1_class', 'Sibling 1'], ['sibling2_name', 'sibling2_class', 'Sibling 2'], ['sibling3_name', 'sibling3_class', 'Sibling 3']] as $sib)
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-2">
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-sm font-semibold text-slate-700">{{ $sib[2] }} — Name</label>
                                    <input
                                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                        name="{{ $sib[0] }}" type="text" placeholder="Full name">
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-sm font-semibold text-slate-700">Class</label>
                                    <input
                                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                        name="{{ $sib[1] }}" type="text" placeholder="Class">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     HOW DID YOU KNOW US
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <svg class="w-5 h-5 text-white/70 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                    <h2 class="text-white font-bold text-base tracking-wide">How Did You Know About Us?</h2>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-slate-700">Please select one</label>
                        <div class="flex flex-wrap gap-3 mt-1">
                            @foreach (['social' => 'Social Media', 'television' => 'Television', 'word_of_mouth' => 'Word of Mouth', 'google' => 'Search Engine / Google', 'other' => 'Others'] as $val => $lbl)
                                <label
                                    class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                    <input class="accent-blue-700" id="ku_{{ $val }}" type="radio"
                                        name="know_us_required" value="{{ $val }}"
                                        {{ old('know_us_required', $student->know_us_required ?? ($val === 'other' ? 'other' : '')) == $val ? 'checked' : '' }}>
                                    {{ $lbl }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 5 — Disciplinary Rules
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">5</span>
                    <h2 class="text-white font-bold text-base tracking-wide">Disciplinary Rules & Code of Conduct</h2>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="bg-red-50 border border-red-200 border-l-4 border-l-red-500 rounded-xl p-5">
                        <h4 class="text-sm font-bold text-red-700 mb-3 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                                <line x1="12" y1="9" x2="12" y2="13" />
                                <line x1="12" y1="17" x2="12.01" y2="17" />
                            </svg>
                            Disciplinary Action against Misconduct
                        </h4>
                        <p class="text-slate-600 text-sm mb-4 leading-relaxed">
                            If a student violates the Disciplinary Codes of Conduct under any of the following categories,
                            he/she will be subjected to disciplinary action as per school policy.
                            The student will be given an opportunity to explain his/her statement before any action is
                            taken.
                        </p>
                        <p class="text-xs font-bold text-red-600 uppercase tracking-widest mb-1">Step 1 — Immediate
                            Suspension</p>
                        <p class="text-slate-600 text-sm mb-4">
                            Investigation, arranging compensation, settlement of outstanding dues, etc.
                            The student will be suspended for a specified period (maximum one week).
                        </p>
                        <p class="text-xs font-bold text-red-600 uppercase tracking-widest mb-2">Step 2 — Expulsion</p>
                        <ol class="list-decimal list-inside text-slate-600 text-sm space-y-1 ml-1">
                            <li>Smoking (caught red-handed) in uniform</li>
                            <li>Physical / verbal assault on school staff or students</li>
                            <li>Possession of harmful weapons or tools</li>
                            <li>Use of tobacco, smoking, alcohol, drugs, or gambling</li>
                            <li>Instigating fights or harmful actions against school community</li>
                            <li>Deliberate destruction of school property</li>
                        </ol>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 6 — Other Facilities (Bus)
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">6</span>
                    <h2 class="text-white font-bold text-base tracking-wide">Other Facilities</h2>
                </div>

                <div class="p-6 sm:p-8 space-y-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-slate-700">
                            Do you require school bus facility?
                        </label>
                        <div class="flex flex-wrap gap-3">
                            <label
                                class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                <input class="accent-blue-700" type="radio" name="bus_required" value="yes"> Yes
                            </label>
                            <label
                                class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300
                              bg-white cursor-pointer text-sm font-medium text-slate-600
                              hover:border-blue-400 hover:bg-blue-50 transition-all
                              has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:text-blue-700">
                                <input class="accent-blue-700" type="radio" name="bus_required" value="no"
                                    checked> No
                            </label>
                        </div>
                    </div>

                    <div class="hidden space-y-5 pt-2 border-t border-slate-100" id="bus_details">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">Pick-up Point</label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="bus_pickup_point" type="text" placeholder="Location / landmark">
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">Guardian's Name for Bus</label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="bus_guardian_name" type="text" placeholder="Full name">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">Address</label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="bus_address" type="text" placeholder="Address">
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-slate-700">Phone Number</label>
                                <input
                                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                                  bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500 focus:bg-white transition placeholder-slate-300"
                                    name="bus_phone" type="tel" placeholder="98XXXXXXXX">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     AGREEMENT
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <svg class="w-5 h-5 text-white/70 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M9 11l3 3L22 4" />
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                    </svg>
                    <h2 class="text-white font-bold text-base tracking-wide">Agreement of Parent / Guardian</h2>
                </div>

                <div class="p-6 sm:p-8 space-y-5">
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 text-sm text-slate-700 leading-8">
                        I, Mr./Mrs./Ms.&nbsp;
                        <input
                            class="inline border-b-2 border-blue-500 bg-transparent px-2 py-0.5 text-sm
                          focus:outline-none w-44 focus:border-blue-700"
                            type="text" name="agreement_name" placeholder="Full name">
                        &nbsp;
                        <label class="inline-flex items-center gap-1.5 cursor-pointer font-medium text-slate-700 mx-1">
                            <input class="accent-blue-700" type="radio" name="agreement_relations" value="father"
                                {{ old('agreement_relations', $student->agreement_relations ?? 'father') == 'father' ? 'checked' : '' }}>
                            Father
                        </label>

                        <label class="inline-flex items-center gap-1.5 cursor-pointer font-medium text-slate-700 mx-1">
                            <input class="accent-blue-700" type="radio" name="agreement_relations" value="mother"
                                {{ old('agreement_relations', $student->agreement_relations ?? '') == 'mother' ? 'checked' : '' }}>
                            Mother
                        </label>

                        <label class="inline-flex items-center gap-1.5 cursor-pointer font-medium text-slate-700 mx-1">
                            <input class="accent-blue-700" type="radio" name="agreement_relations" value="guardian"
                                {{ old('agreement_relations', $student->agreement_relations ?? '') == 'guardian' ? 'checked' : '' }}>
                            Guardian
                        </label>
                        &nbsp;of&nbsp;<strong class="text-blue-700 uppercase" id="std-name">[Student Name]</strong>,
                        do hereby declare that I have read, understood and agree to abide by the Disciplinary Codes of
                        Conduct
                        and all rules and regulations of the school.
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Date</label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition"
                                type="date" name="agreement_date"
                                value="{{ old('agreement_date', isset($student->agreement_date) ? \Carbon\Carbon::parse($student->agreement_date)->format('Y-m-d') : now()->format('Y-m-d')) }}">
                        </div>
                        {{-- <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Parent's Signature</label>
                            <label
                                class="relative flex items-center justify-center h-16 w-48 border-b-2 border-dotted
                              border-blue-500 bg-slate-50 rounded-t-lg text-xs text-slate-400
                              cursor-pointer hover:bg-blue-50 transition overflow-hidden">
                                <input class="absolute inset-0 opacity-0 cursor-pointer" type="file"
                                    name="agreement_sign" accept="image/*">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                        <polyline points="17 8 12 3 7 8" />
                                        <line x1="12" y1="3" x2="12" y2="15" />
                                    </svg>
                                    Click to upload
                                </span>
                            </label>
                        </div> --}}
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SECTION 7 — Documents
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <span
                        class="w-7 h-7 rounded-full bg-white/20 border border-white/40
                     flex items-center justify-center text-white text-xs font-bold shrink-0">7</span>
                    <h2 class="text-white font-bold text-base tracking-wide">Documents to be Submitted</h2>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        @php
                            $fields = [
                                ['label' => 'Birth Certificate', 'name' => 'birth_certificate'],
                                ['label' => 'Progress Report', 'name' => 'last_report_card'],
                                ['label' => 'Transfer Certificate', 'name' => 'transfer_certificate'],
                                ['label' => 'PP Size Photo', 'name' => 'character_certificate'],
                            ];
                        @endphp

                        @foreach ($fields as $field)
                            <div class="flex flex-col gap-2 upload-wrapper">
                                <label class="text-sm font-semibold text-slate-700">
                                    {{ $field['label'] }} <span
                                        class="text-slate-400 font-normal text-xs ml-1">(optional)</span>
                                </label>
                                <label
                                    class="upload-box flex flex-col items-center justify-center w-full h-32
                              border-2 border-dashed border-slate-300 rounded-xl cursor-pointer
                              bg-slate-50 hover:bg-blue-50 hover:border-blue-400 transition-all gap-1.5">
                                    <svg class="w-7 h-7 text-slate-400 upload-placeholder" fill="none"
                                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                        <polyline points="17 8 12 3 7 8" />
                                        <line x1="12" y1="3" x2="12" y2="15" />
                                    </svg>
                                    <span class="text-sm text-slate-500 upload-placeholder">
                                        <span class="text-blue-600 font-semibold">Click to upload</span> or drag & drop
                                    </span>
                                    <span class="text-xs text-slate-400 upload-placeholder">PDF, JPG, PNG</span>
                                    <input class="hidden file-input" name="{{ $field['name'] }}" type="file"
                                        accept=".pdf,.jpg,.jpeg,.png">
                                </label>

                                <div
                                    class="preview-container hidden border border-slate-200 rounded-xl p-3 bg-slate-50 relative">
                                    <button
                                        class="remove-file absolute top-2 right-2 bg-red-100 text-red-500 text-xs
                                   font-bold px-2.5 py-1 rounded-lg hover:bg-red-200 transition"
                                        type="button">✕ Remove</button>
                                    <img class="preview-image hidden max-h-36 rounded-lg mx-auto object-contain">
                                    <iframe class="preview-pdf hidden w-full h-36 rounded-lg"
                                        style="border:none;"></iframe>
                                    <p class="file-name text-xs text-slate-500 text-center mt-2"></p>
                                </div>
                                <span class="text-red-500 text-xs error-text" id="error-{{ $field['name'] }}"></span>
                            </div>
                        @endforeach
                    </div>

                    <div class="bg-slate-50 border border-slate-200 rounded-xl mt-4 p-5 text-sm text-slate-700 leading-8">
                        <b>Note:</b>
                        Please bring all required documents to the school during admission for verification and completion
                        of the process.
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     DECLARATION
     ═══════════════════════════════════════════ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center gap-3">
                    <svg class="w-5 h-5 text-white/70 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                    <h2 class="text-white font-bold text-base tracking-wide">Declaration</h2>
                </div>

                <div class="p-6 sm:p-8 space-y-5">
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 text-sm text-slate-700 leading-8">

                        <!-- Combined Declaration & Agreement Checkbox -->
                        <label class="flex items-start gap-3 cursor-pointer leading-6">
                            <input class="mt-1 accent-blue-700 w-4 h-4" type="checkbox" name="agree_terms"
                                value="1" {{ old('agree_terms') ? 'checked' : '' }} required>
                            <span class="block text-justify">
                                I, &nbsp;
                                <!-- Father -->
                                <label
                                    class="inline-flex items-center gap-1.5 cursor-pointer font-medium text-slate-700 mx-1">
                                    <input class="accent-blue-700" type="radio" name="declaration_relations"
                                        value="father"
                                        {{ old('declaration_relations', $student->declaration_relations ?? 'father') == 'father' ? 'checked' : '' }}>
                                    Father
                                </label>

                                <!-- Mother -->
                                <label
                                    class="inline-flex items-center gap-1.5 cursor-pointer font-medium text-slate-700 mx-1">
                                    <input class="accent-blue-700" type="radio" name="declaration_relations"
                                        value="mother"
                                        {{ old('declaration_relations', $student->declaration_relations ?? '') == 'mother' ? 'checked' : '' }}>
                                    Mother
                                </label>

                                <!-- Guardian -->
                                <label
                                    class="inline-flex items-center gap-1.5 cursor-pointer font-medium text-slate-700 mx-1">
                                    <input class="accent-blue-700" type="radio" name="declaration_relations"
                                        value="guardian"
                                        {{ old('declaration_relations', $student->declaration_relations ?? '') == 'guardian' ? 'checked' : '' }}>
                                    Guardian
                                </label>
                                hereby confirm that all the information provided in this application form is correct,
                                complete, and true to the best of my knowledge. I have read, understood, and agree
                                to abide by the
                                <b>Disciplinary Rules & Code of Conduct</b> of the school. I also agree to all terms,
                                conditions, and
                                policies related to the admission process. I understand that while submission of all
                                required documents
                                is encouraged during the online application, I will provide any pending documents at the
                                school during
                                the admission process.
                            </span>
                        </label>

                        <!-- Validation Error -->
                        @error('agree_terms')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-end">

                        <div class="flex flex-col gap-1.5" id="declSigArea">
                            <label class="text-sm font-semibold text-slate-700">Authorised Signature</label>

                            <div class="hidden" id="declSigPreview">
                                <div class="relative inline-block">
                                    <img class="max-h-16 border border-slate-200 rounded-lg bg-white p-1" id="declSigImg"
                                        alt="signature">
                                    <button
                                        class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-red-500 text-white text-xs font-bold flex items-center justify-center hover:bg-red-600 transition"
                                        type="button" onclick="clearSig()">✕</button>
                                </div>
                                <p class="text-xs text-green-600 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3"
                                        viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                    Signature captured
                                </p>
                            </div>

                            <button
                                class="inline-flex items-center justify-center gap-2 w-48 h-11 border-2 border-dashed
               border-slate-300 rounded-xl bg-slate-50 text-slate-500 text-sm font-medium
               hover:border-blue-500 hover:text-blue-600 hover:bg-blue-50 transition-all"
                                id="declSigBtn" type="button" onclick="openPad()">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                                Sign here
                            </button>

                            <input class="hidden" id="declSigHidden" type="file" name="declaration_sign"
                                accept="image/png">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-slate-700">Date</label>
                            <input
                                class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800
                              bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500
                              focus:border-blue-500 focus:bg-white transition"
                                type="date" name="declaration_date"
                                value="{{ old('declaration_date', isset($student->declaration_date) ? \Carbon\Carbon::parse($student->declaration_date)->format('Y-m-d') : now()->format('Y-m-d')) }}">
                        </div>
                    </div>
                </div>
            </div>

            {{-- ═══════════════════════════════════════════
     SUBMIT ROW
     ═══════════════════════════════════════════ --}}
            <div class="flex flex-wrap gap-3 pb-4 mt-2">
                <button
                    class="inline-flex items-center gap-2 bg-blue-900 hover:bg-blue-800 active:bg-blue-950
                   text-white font-bold text-sm px-8 py-3.5 rounded-xl shadow-md
                   hover:shadow-lg transition-all duration-200"
                    type="submit">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <line x1="22" y1="2" x2="11" y2="13" />
                        <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                    Submit Application
                </button>
                <button
                    class="inline-flex items-center gap-2 bg-slate-100 hover:bg-slate-200 active:bg-slate-300
                   text-slate-600 font-semibold text-sm px-8 py-3.5 rounded-xl border border-slate-300
                   transition-all duration-200"
                    type="reset">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <polyline points="1 4 1 10 7 10" />
                        <path d="M3.51 15a9 9 0 1 0 .49-3.53" />
                    </svg>
                    Clear Form
                </button>
            </div>

        </form>
    </div>{{-- .max-w-4xl --}}

    {{-- ═══ SIGNATURE PAD MODAL ═══ --}}
    @include('frontend.admission.signature-pad-modal')
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
                npYear: true,
                npMonth: true,
                npMinYear: 1970,
                npMaxYear: 2100,
                npYearCount: 100
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

        signedDatePicker.datepicker(form.englisthDateSetting);
        englishDatePicker.datepicker(form.englisthDateSetting);
        nepaliDatePicker.nepaliDatePicker(form.nepaliDateSetting);

        englishDatePicker.on("change keyup", function(e) {
            if ($(this).val()) {
                form.convertToNepaliDate(e.target, nepaliDatePicker);
            } else {
                nepaliDatePicker.val('').trigger('change');
            }
            const studentAge = form.calculateAge($(this).val());
            $("#student_age").val(studentAge);
        });

        nepaliDatePicker.on('change keyup', function() {
            if ($(this).val()) {
                form.convertToEnglishDate(this, englishDatePicker);
            } else {
                englishDatePicker.val('').trigger('change');
            }
        });
    </script>
    <script>
        // ── Sibling toggle ──
        document.getElementById('sibling_yes')?.addEventListener('change', function() {
            document.getElementById('sibling_details').classList.remove('hidden');
        });
        document.getElementById('sibling_no')?.addEventListener('change', function() {
            document.getElementById('sibling_details').classList.add('hidden');
        });

        // ── Bus toggle ──
        document.querySelectorAll('input[name="bus_required"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const el = document.getElementById('bus_details');
                this.value === 'yes' ? el.classList.remove('hidden') : el.classList.add('hidden');
            });
        });

        // ── Photo upload ──
        const photoUploadDiv = document.getElementById('photoUpload');
        const studentPhotoInput = document.getElementById('studentPhoto');
        const photoPreview = document.getElementById('photoPreview');
        const photoIcon = document.getElementById('photoIcon');

        photoUploadDiv.addEventListener('click', () => studentPhotoInput.click());

        studentPhotoInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.classList.remove('hidden');
                    photoIcon.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        // ── Live student name mirror in Agreement ──
        const nameInput = document.querySelector('input[name="name"]');
        const stdNameEl = document.getElementById('std-name');
        if (nameInput && stdNameEl) {
            nameInput.addEventListener('input', function() {
                stdNameEl.textContent = this.value.trim() || '[Student Name]';
            });
        }

        // ── AJAX form submit ──
        document.getElementById('admissionForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let form = e.target;
            let formData = new FormData(form);

            document.querySelectorAll('.error-text').forEach(el => el.textContent = '');

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Accept': 'application/json'
                    }
                })
                .then(async response => {
                    const data = await response.json();

                    if (response.status === 422) {
                        const firstField = Object.keys(data.errors)[0];
                        const firstError = data.errors[firstField][0];
                        // toastr.error(firstError, 'Validation Error', {
                        //     positionClass: 'toast-top-right',
                        //     timeOut: 5000
                        // });
                        for (let field in data.errors) {
                            const el = document.getElementById(`error-${field}`);
                            if (el) el.textContent = data.errors[field][0];
                        }
                        const firstErrorEl = document.getElementById(`error-${firstField}`);
                        if (firstErrorEl) firstErrorEl.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });

                    } else if (response.ok) {
                        // Validation passed, start loading state
                        const submitBtn = form.querySelector('button[type="submit"]');
                        const originalBtnText = submitBtn.innerHTML;

                        submitBtn.disabled = true;
                        submitBtn.innerHTML = `
                <svg class="w-4 h-4 animate-spin mr-2" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-opacity="0.25" />
                    <path d="M12 2a10 10 0 0 1 0 20" />
                </svg>
                Submitting...
            `;

                        toastr.success('Redirecting to eSewa…');
                        const paymentData = data.data;
                        const esewaForm = document.createElement('form');
                        esewaForm.method = 'POST';
                        esewaForm.action = 'https://epay.esewa.com.np/api/epay/main/v2/form';
                        Object.keys(paymentData).forEach(key => {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = key;
                            input.value = paymentData[key];
                            esewaForm.appendChild(input);
                        });
                        document.body.appendChild(esewaForm);
                        esewaForm.submit();

                    } else {
                        toastr.error(data.message || 'Something went wrong.', 'Error');
                    }
                })
                .catch(() => toastr.error('Network error. Please try again.', 'Error'));
        });
    </script>
    <script>
        // ── Previous school section toggle (hide for Nursery) ──
        const studentClass = document.getElementById('studentClass');
        const previousSchoolSection = document.getElementById('previousSchoolSection');

        function togglePreviousSchool() {
            previousSchoolSection.style.display = studentClass.value === 'nursery' ? 'none' : 'block';
        }
        togglePreviousSchool();
        studentClass.addEventListener('change', togglePreviousSchool);
    </script>
    <script>
        // ── Document upload previews ──
        document.querySelectorAll('.file-input').forEach(input => {
            input.addEventListener('change', function() {
                const file = this.files[0];
                if (!file) return;
                const wrapper = this.closest('.upload-wrapper');
                const previewBox = wrapper.querySelector('.preview-container');
                const imgPreview = wrapper.querySelector('.preview-image');
                const pdfPreview = wrapper.querySelector('.preview-pdf');
                const fileName = wrapper.querySelector('.file-name');
                const placeholders = wrapper.querySelectorAll('.upload-placeholder');
                const fileURL = URL.createObjectURL(file);

                previewBox.classList.remove('hidden');
                placeholders.forEach(el => el.style.display = 'none');
                fileName.textContent = file.name;
                imgPreview.classList.add('hidden');
                pdfPreview.classList.add('hidden');

                if (file.type.includes('image')) {
                    imgPreview.src = fileURL;
                    imgPreview.classList.remove('hidden');
                } else if (file.type === 'application/pdf') {
                    pdfPreview.src = fileURL;
                    pdfPreview.classList.remove('hidden');
                }
            });
        });

        document.querySelectorAll('.remove-file').forEach(btn => {
            btn.addEventListener('click', function() {
                const wrapper = this.closest('.upload-wrapper');
                wrapper.querySelector('.file-input').value = '';
                wrapper.querySelector('.preview-container').classList.add('hidden');
                wrapper.querySelectorAll('.upload-placeholder').forEach(el => el.style.display = '');
            });
        });
    </script>

    {{-- ↓↓↓ NEW: Guardian auto-fill from Father / Mother ──────────────────── --}}
    <script>
        (function() {

            function fillGuardian(source) {
                // Helper: get element by name attribute
                const byName = name => document.querySelector(`[name="${name}"]`);

                // Simple text/tel → text copies
                const directMap = [
                    ['guardian_name', `${source}_name`],
                    ['guardian_phone', `${source}_phone`],
                    ['guardian_office', `${source}_religion`],
                    ['guardian_email', `${source}_email`],
                    ['guardian_address', `${source}_address`],
                ];

                directMap.forEach(([guardianField, sourceField]) => {
                    const src = byName(sourceField);
                    const dest = byName(guardianField);
                    if (src && dest) dest.value = src.value;
                });

                // Qualification: both are <select>, copy value directly
                const qualSrc = byName(`${source}_ethnicity`);
                const qualDest = byName('guardian_qualifaction');
                if (qualSrc && qualDest) qualDest.value = qualSrc.value;

                // Occupation: both are <select>, copy value directly
                const occSrc = byName(`${source}_occupation`);
                const occDest = byName('guardian_occupation');
                if (occSrc && occDest) occDest.value = occSrc.value;
            }

            document.getElementById('sameAsFather')?.addEventListener('click', () => fillGuardian('father'));
            document.getElementById('sameAsMother')?.addEventListener('click', () => fillGuardian('mother'));
        })();
    </script>
    {{-- ↑↑↑ END NEW ────────────────────────────────────────────────────────── --}}

    {{-- Signature pad ──────────────────── --}}
    <script>
        (function() {
            let isDrawing = false,
                lastX = 0,
                lastY = 0,
                hasDrawn = false;
            window.sigPenW = 2;
            let sigPenColor = '#1e293b';

            const modal = document.getElementById('sigModal');
            const canvas = document.getElementById('sigCanvas');
            const ctx = canvas.getContext('2d');
            const hint = document.getElementById('canvasHint');

            function initCanvas() {
                const dpr = window.devicePixelRatio || 1;
                const rect = canvas.getBoundingClientRect();
                canvas.width = rect.width * dpr;
                canvas.height = rect.height * dpr;
                ctx.scale(dpr, dpr);
                ctx.fillStyle = '#fff';
                ctx.fillRect(0, 0, rect.width, rect.height);
                ctx.lineCap = 'round';
                ctx.lineJoin = 'round';
                hasDrawn = false;
                hint.style.opacity = '1';
            }

            function getPos(e) {
                const rect = canvas.getBoundingClientRect();
                const src = e.touches ? e.touches[0] : e;
                return {
                    x: src.clientX - rect.left,
                    y: src.clientY - rect.top
                };
            }

            function draw(pos) {
                if (!hasDrawn) {
                    hasDrawn = true;
                    hint.style.opacity = '0';
                }
                ctx.beginPath();
                ctx.strokeStyle = sigPenColor;
                ctx.lineWidth = window.sigPenW;
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(pos.x, pos.y);
                ctx.stroke();
                [lastX, lastY] = [pos.x, pos.y];
            }

            canvas.addEventListener('mousedown', e => {
                isDrawing = true;
                const p = getPos(e);
                [lastX, lastY] = [p.x, p.y];
            });
            canvas.addEventListener('mousemove', e => {
                if (!isDrawing) return;
                draw(getPos(e));
            });
            canvas.addEventListener('mouseup', () => isDrawing = false);
            canvas.addEventListener('mouseleave', () => isDrawing = false);
            canvas.addEventListener('touchstart', e => {
                e.preventDefault();
                isDrawing = true;
                const p = getPos(e);
                [lastX, lastY] = [p.x, p.y];
            }, {
                passive: false
            });
            canvas.addEventListener('touchmove', e => {
                e.preventDefault();
                if (!isDrawing) return;
                draw(getPos(e));
            }, {
                passive: false
            });
            canvas.addEventListener('touchend', () => isDrawing = false);

            window.setColor = function(c, el) {
                sigPenColor = c;
                document.querySelectorAll('.sig-swatch').forEach(s => s.classList.remove('ring-2', 'ring-blue-500',
                    'ring-offset-1'));
                el.classList.add('ring-2', 'ring-blue-500', 'ring-offset-1');
            };

            window.clearSigCanvas = function() {
                const rect = canvas.getBoundingClientRect();
                ctx.fillStyle = '#fff';
                ctx.fillRect(0, 0, rect.width, rect.height);
                hasDrawn = false;
                hint.style.opacity = '1';
            };

            window.openPad = function() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(initCanvas, 50);
            };

            window.closePad = function() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            };

            window.saveSig = function() {
                if (!hasDrawn) {
                    alert('Please draw your signature before saving.');
                    return;
                }

                canvas.toBlob(function(blob) {
                    const file = new File([blob], 'declaration_sign.png', {
                        type: 'image/png'
                    });

                    const dt = new DataTransfer();
                    dt.items.add(file);

                    // Swap hidden input for a real file input
                    const existingInput = document.getElementById('declSigHidden');
                    existingInput.type = 'file';
                    existingInput.files = dt.files;

                    // Show preview
                    document.getElementById('declSigImg').src = URL.createObjectURL(blob);
                    document.getElementById('declSigPreview').classList.remove('hidden');
                    document.getElementById('declSigBtn').classList.add('hidden');

                    closePad();
                }, 'image/png');
            };

            window.clearSig = function() {
                document.getElementById('declSigImg').src = '';
                document.getElementById('declSigHidden').value = '';
                document.getElementById('declSigPreview').classList.add('hidden');
                document.getElementById('declSigBtn').classList.remove('hidden');
            };

            modal.addEventListener('click', e => {
                if (e.target === modal) closePad();
            });
        })();
    </script>
@endsection
