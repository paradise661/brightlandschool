@extends('layouts.frontend.master')
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .contact-card {
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
        }
    </style>
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/88ea40e48f-8d0182e2f55282f6b671.png"
            alt="students reading books in modern library" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Contact Us
                </h1>

                <!-- Breadcrumb -->
                <nav>
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
                            Contact Us
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="contact-form-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid lg:grid-cols-2 gap-8 md:gap-12">
                <div id="contact-form-container">
                    <div class="flex items-center mb-6 md:mb-8">
                        <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Send Us A
                                Message</h2>
                            <p class="text-gray-600 text-sm md:text-base mt-2">Fill out the form below and we'll get back to
                                you shortly</p>
                        </div>
                    </div>
                    <form class="bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:p-10" id="contactForm"
                        action="{{ route('contacts.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Name
                                    <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition"
                                    id="name" data-error="error-name" name="name" type="text"
                                    placeholder="Enter Your Name" required>
                                <p class="mt-1 text-sm text-red-500 hidden" id="error-name"></p>

                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Phone Number
                                    <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    id="number" data-error="error-number" type="tel" placeholder="+977 9876543210"
                                    name="number" required>
                                <p class="mt-1 text-sm text-red-500 hidden" id="error-number"></p>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Email Address
                                    <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    id="email" data-error="error-email" type="email" placeholder="john@example.com"
                                    name="email" required>
                                <p class="mt-1 text-sm text-red-500 hidden" id="error-email"></p>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Grade
                                </label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    id="course" type="text" placeholder="Grade Level (e.g., 10th)" name="course">
                            </div>
                        </div>
                        <div class="mb-4 md:mb-6">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Subject <span
                                    class="text-red-500">*</span></label>
                            <select
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                id="subject" data-error="error-subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="admission">Admission Inquiry</option>
                                <option value="general">General Inquiry</option>
                                <option value="academic">Academic Information</option>
                                <option value="facilities">Facilities & Infrastructure</option>
                                <option value="career">Career Opportunities</option>
                                <option value="feedback">Feedback & Suggestions</option>
                                <option value="other">Other</option>
                                <p class="mt-1 text-sm text-red-500 hidden" id="error-subject"></p>
                            </select>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Message </label>
                            <textarea
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition resize-none"
                                id="message" data-error="error-message" rows="6" placeholder="Write your message here..." name="message"></textarea>
                            <p class="mt-1 text-sm text-red-500 hidden" id="error-message"></p>
                        </div>
                        <button
                            class="w-full bg-primary text-white py-3 md:py-4 rounded-lg font-semibold text-base md:text-lg hover:bg-blue-700 transition flex items-center justify-center"
                            type="submit">
                            <span>Send Message</span>
                            <i class="fa-solid fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
                <div id="contact-additional-info">
                    <div class="flex items-center mb-6 md:mb-8">
                        <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Why Choose Us?
                            </h2>
                            <p class="text-gray-600 text-sm md:text-base mt-2">Excellence in education for over 30 years</p>
                        </div>
                    </div>
                    <div class="space-y-4 md:space-y-6 mb-8 md:mb-10">
                        <div class="bg-white rounded-xl p-5 md:p-6 shadow-lg flex items-start" id="why-choose-1">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-award text-primary text-xl md:text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">Award-Winning
                                    Institution</h3>
                                <p class="text-gray-600 text-sm md:text-base">Recognized nationally for academic excellence
                                    and innovation in education</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-5 md:p-6 shadow-lg flex items-start" id="why-choose-2">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-secondary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-users text-secondary text-xl md:text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">Expert Faculty
                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">Highly qualified and experienced teachers
                                    dedicated to student success</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-5 md:p-6 shadow-lg flex items-start" id="why-choose-3">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-accent/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-building text-accent text-xl md:text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">Modern
                                    Facilities</h3>
                                <p class="text-gray-600 text-sm md:text-base">State-of-the-art classrooms, labs, library,
                                    and sports infrastructure</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-5 md:p-6 shadow-lg flex items-start" id="why-choose-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-chart-line text-green-600 text-xl md:text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">Proven Track
                                    Record</h3>
                                <p class="text-gray-600 text-sm md:text-base">Consistent 100% pass rate with excellent
                                    university placements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white" id="map-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-6 md:mb-8">
                <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Find Us On Map</h2>
                    <p class="text-gray-600 text-sm md:text-base mt-2">Visit our campus and experience excellence firsthand
                    </p>
                </div>
            </div>
            <div
                class="bg-gray-200 rounded-2xl overflow-hidden shadow-xl h-96 md:h-[500px] flex items-center justify-center">
                <div class="text-center">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-map-location-dot text-primary text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">Interactive Map</h3>
                    <p class="text-gray-600 text-sm md:text-base max-w-md mx-auto px-4">Google Maps integration would be
                        embedded here showing the exact location of Excellence Academy</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="department-contacts">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Department Contacts
                    </h2>
                    <p class="text-gray-600 text-sm md:text-base mt-2">Reach out to specific departments for specialized
                        assistance</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white rounded-xl p-6 md:p-8 shadow-lg hover:shadow-xl transition" id="dept-1">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-user-graduate text-primary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Admissions Office</h3>
                    <div class="space-y-2 text-sm md:text-base">
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-phone text-primary mr-3 w-4"></i>
                            <span>+1 (234) 567-892</span>
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-envelope text-primary mr-3 w-4"></i>
                            <span>admissions@school.edu</span>
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 md:p-8 shadow-lg hover:shadow-xl transition" id="dept-2">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-secondary/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-book text-secondary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Academic Office</h3>
                    <div class="space-y-2 text-sm md:text-base">
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-phone text-secondary mr-3 w-4"></i>
                            <span>+1 (234) 567-893</span>
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-envelope text-secondary mr-3 w-4"></i>
                            <span>academics@school.edu</span>
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 md:p-8 shadow-lg hover:shadow-xl transition" id="dept-3">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-accent/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-dollar-sign text-accent text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Finance Office</h3>
                    <div class="space-y-2 text-sm md:text-base">
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-phone text-accent mr-3 w-4"></i>
                            <span>+1 (234) 567-894</span>
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-envelope text-accent mr-3 w-4"></i>
                            <span>finance@school.edu</span>
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 md:p-8 shadow-lg hover:shadow-xl transition" id="dept-4">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-futbol text-green-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Sports Department</h3>
                    <div class="space-y-2 text-sm md:text-base">
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-phone text-green-600 mr-3 w-4"></i>
                            <span>+1 (234) 567-895</span>
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-envelope text-green-600 mr-3 w-4"></i>
                            <span>sports@school.edu</span>
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 md:p-8 shadow-lg hover:shadow-xl transition" id="dept-5">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-briefcase text-purple-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">HR Department</h3>
                    <div class="space-y-2 text-sm md:text-base">
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-phone text-purple-600 mr-3 w-4"></i>
                            <span>+1 (234) 567-896</span>
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-envelope text-purple-600 mr-3 w-4"></i>
                            <span>hr@school.edu</span>
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 md:p-8 shadow-lg hover:shadow-xl transition" id="dept-6">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-headset text-indigo-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">IT Support</h3>
                    <div class="space-y-2 text-sm md:text-base">
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-phone text-indigo-600 mr-3 w-4"></i>
                            <span>+1 (234) 567-897</span>
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fa-solid fa-envelope text-indigo-600 mr-3 w-4"></i>
                            <span>itsupport@school.edu</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const form = document.getElementById('contactForm');
            if (!form) return;

            function clearErrors() {
                form.querySelectorAll('[data-error]').forEach(input => {
                    input.classList.remove('border-red-500');
                    const errorBox = document.getElementById(input.dataset.error);
                    if (errorBox) {
                        errorBox.textContent = '';
                        errorBox.classList.add('hidden');
                    }
                });
            }

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                clearErrors();
                for (const input of form.querySelectorAll('[data-error]')) {

                    if (!input.checkValidity()) {

                        let message = 'This field is required';

                        if (input.type === 'email')
                            message = 'Please enter a valid email address';

                        if (input.type === 'tel')
                            message = 'Please enter a valid phone number';

                        if (input.tagName === 'SELECT')
                            message = 'Please select a subject';

                        const errorBox = document.getElementById(input.dataset.error);

                        input.classList.add('border-red-500');
                        errorBox.textContent = message;
                        errorBox.classList.remove('hidden');

                        input.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        input.focus();

                        toastr.error(message);
                        return;
                    }
                }

                /* =============================
                   AJAX SUBMIT (FormData)
                ============================== */
                fetch("{{ route('frontend.contacts.store') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: new FormData(form)
                    })
                    .then(async response => {

                        if (response.status === 422) {

                            const result = await response.json();
                            const field = Object.keys(result.errors)[0];
                            const message = result.errors[field][0];

                            const input = form.querySelector(`[name="${field}"]`);
                            const errorBox = document.getElementById(`error-${field}`);

                            if (input && errorBox) {
                                input.classList.add('border-red-500');
                                errorBox.textContent = message;
                                errorBox.classList.remove('hidden');

                                input.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                                input.focus();
                            }

                            toastr.error(message);
                            throw new Error('Validation error');
                        }

                        return response.json();
                    })
                    .then(result => {
                        toastr.success(result.message || 'Message sent successfully!');
                        form.reset();
                    })
                    .catch(error => {
                        if (error.message !== 'Validation error') {
                            toastr.error('Unexpected error occurred. Please try again.');
                        }
                    });
            });

            /* =============================
               CLEAR ERROR ON TYPE
            ============================== */
            form.querySelectorAll('[data-error]').forEach(input => {
                input.addEventListener('input', () => {
                    input.classList.remove('border-red-500');
                    const errorBox = document.getElementById(input.dataset.error);
                    if (errorBox) {
                        errorBox.textContent = '';
                        errorBox.classList.add('hidden');
                    }
                });
            });

        });
    </script>
@endsection
