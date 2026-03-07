@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['contact_seo_title'] ?? '',
        'title' => $setting['contact_seo_title'] ?? '',
        'description' => $setting['contact_seo_description'] ?? '',
        'keyword' => $setting['contact_seo_keywords'] ?? '',
        'schema' => $setting['contact_seo_schema'] ?? '',
    ])
@endsection
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
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['contact_breadcrum_image'] ?? '' }}"
            alt="Contacts " />

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
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">
                                {{ $setting['contact_form_title'] ?? '' }}</h2>

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
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">
                                {{ $setting['contact_why_title'] ?? '' }}
                            </h2>

                        </div>
                    </div>
                    <div class="space-y-4 md:space-y-6 mb-8 md:mb-10">
                        @foreach ($whyChooseUsItems as $choose)
                            @php
                                // Define colors for each index
                                $colors = [
                                    ['bg' => 'bg-primary/10', 'text' => 'text-primary'],
                                    ['bg' => 'bg-secondary/10', 'text' => 'text-secondary'],
                                    ['bg' => 'bg-accent/10', 'text' => 'text-accent'],
                                    ['bg' => 'bg-green-100', 'text' => 'text-green-600'],
                                ];

                                // Use index or default to first color if more items
                                $color = $colors[$loop->index] ?? $colors[0];
                            @endphp

                            <div class="bg-white rounded-xl p-5 md:p-6 shadow-lg flex items-start">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 {{ $color['bg'] }} rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i
                                        class="fa-solid {{ $choose->icon ?? '' }} {{ $color['text'] }} text-xl md:text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">
                                        {{ $choose->name ?? '' }}
                                    </h3>
                                    <p class="text-gray-600 text-sm md:text-base">
                                        {{ strip_tags($choose->description ?? '') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white" id="map-section">
        <div class="container mx-auto px-4 md:px-6">
            <!-- Section Title -->
            <div class="flex items-center mb-6 md:mb-8">
                <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">
                        {{ $setting['contact_map_title'] ?? '' }}</h2>

                </div>
            </div>

            <!-- Map Container -->
            <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-xl h-96 md:h-[500px]">
                <iframe class="w-full h-full border-0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.6322681547326!2d81.616644!3d28.0537219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399867452d912529%3A0x7dfb4c0cd844f293!2sBrightland%20Secondary%20School!5e1!3m2!1sen!2snp!4v1772742226198!5m2!1sen!2snp"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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
