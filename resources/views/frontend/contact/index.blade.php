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
    <section class="bg-gradient-to-r from-primary to-blue-600 py-16 md:py-20" id="page-hero">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div
                    class="w-20 h-20 md:w-24 md:h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-envelope text-white text-3xl md:text-4xl"></i>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4">Get In Touch</h1>
                <p class="text-lg md:text-xl text-blue-100 mb-6">We'd love to hear from you. Send us a message and we'll
                    respond as soon as possible.</p>
                <div class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <a class="hover:text-blue-200 transition" href="#">Home</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <span>Contact Us</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white" id="contact-info-cards">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <div class="contact-card bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-6 md:p-8 text-white shadow-xl"
                    id="contact-card-1">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-location-dot text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold mb-3">Visit Us</h3>
                    <p class="text-sm md:text-base text-blue-100">123 Education Street, Learning City, ED 12345, United
                        States</p>
                </div>
                <div class="contact-card bg-gradient-to-br from-secondary to-red-600 rounded-2xl p-6 md:p-8 text-white shadow-xl"
                    id="contact-card-2">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-phone text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold mb-3">Call Us</h3>
                    <p class="text-sm md:text-base text-red-100">+1 (234) 567-890<br>+1 (234) 567-891</p>
                </div>
                <div class="contact-card bg-gradient-to-br from-accent to-yellow-600 rounded-2xl p-6 md:p-8 text-white shadow-xl"
                    id="contact-card-3">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-envelope text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold mb-3">Email Us</h3>
                    <p class="text-sm md:text-base text-yellow-100">info@school.edu<br>admissions@school.edu</p>
                </div>
                <div class="contact-card bg-gradient-to-br from-green-600 to-teal-600 rounded-2xl p-6 md:p-8 text-white shadow-xl"
                    id="contact-card-4">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-clock text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold mb-3">Office Hours</h3>
                    <p class="text-sm md:text-base text-green-100">Mon - Fri: 8:00 AM - 5:00 PM<br>Sat: 9:00 AM - 1:00 PM
                    </p>
                </div>
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
                    <form class="bg-white rounded-2xl shadow-xl p-6 md:p-8 lg:p-10" id="contact-form">
                        <div class="grid sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">First Name
                                    *</label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    type="text" required placeholder="John">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Last Name
                                    *</label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    type="text" required placeholder="Doe">
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Email Address
                                    *</label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    type="email" required placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Phone Number
                                    *</label>
                                <input
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                    type="tel" required placeholder="+1 234 567 890">
                            </div>
                        </div>
                        <div class="mb-4 md:mb-6">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Subject *</label>
                            <select
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                required>
                                <option value="">Select a subject</option>
                                <option value="admission">Admission Inquiry</option>
                                <option value="general">General Inquiry</option>
                                <option value="academic">Academic Information</option>
                                <option value="facilities">Facilities & Infrastructure</option>
                                <option value="career">Career Opportunities</option>
                                <option value="feedback">Feedback & Suggestions</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm md:text-base">Message *</label>
                            <textarea
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition resize-none"
                                required rows="6" placeholder="Write your message here..."></textarea>
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
                    <div class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-6 md:p-8 text-white"
                        id="contact-social">
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-4">Connect With Us</h3>
                        <p class="text-blue-100 mb-6 text-sm md:text-base">Follow us on social media for updates, news, and
                            events</p>
                        <div class="grid grid-cols-5 gap-3 md:gap-4">
                            <a class="w-full aspect-square bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition"
                                href="#">
                                <i class="fa-brands fa-facebook-f text-xl md:text-2xl"></i>
                            </a>
                            <a class="w-full aspect-square bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition"
                                href="#">
                                <i class="fa-brands fa-twitter text-xl md:text-2xl"></i>
                            </a>
                            <a class="w-full aspect-square bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition"
                                href="#">
                                <i class="fa-brands fa-instagram text-xl md:text-2xl"></i>
                            </a>
                            <a class="w-full aspect-square bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition"
                                href="#">
                                <i class="fa-brands fa-youtube text-xl md:text-2xl"></i>
                            </a>
                            <a class="w-full aspect-square bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition"
                                href="#">
                                <i class="fa-brands fa-linkedin-in text-xl md:text-2xl"></i>
                            </a>
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

    <section class="py-12 md:py-16 bg-white" id="faq-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Frequently Asked
                        Questions</h2>
                    <p class="text-gray-600 text-sm md:text-base mt-2">Quick answers to common questions</p>
                </div>
            </div>
            <div class="max-w-4xl mx-auto space-y-4 md:space-y-6">
                <div class="bg-gray-50 rounded-xl p-5 md:p-6 hover:shadow-lg transition" id="faq-1">
                    <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">What are the admission
                        requirements?</h3>
                    <p class="text-gray-600 text-sm md:text-base">Students must submit previous academic records, birth
                        certificate, passport-sized photographs, and complete our entrance assessment.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-5 md:p-6 hover:shadow-lg transition" id="faq-2">
                    <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">What is your student-teacher
                        ratio?</h3>
                    <p class="text-gray-600 text-sm md:text-base">We maintain a low student-teacher ratio of 15:1 to ensure
                        personalized attention and quality education for every student.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-5 md:p-6 hover:shadow-lg transition" id="faq-3">
                    <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">Do you offer transportation
                        facilities?</h3>
                    <p class="text-gray-600 text-sm md:text-base">Yes, we provide safe and reliable school bus services
                        covering all major areas of the city with GPS tracking.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-5 md:p-6 hover:shadow-lg transition" id="faq-4">
                    <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">What extracurricular
                        activities are available?</h3>
                    <p class="text-gray-600 text-sm md:text-base">We offer a wide range of activities including sports,
                        music, dance, drama, debate, robotics, and various clubs.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-5 md:p-6 hover:shadow-lg transition" id="faq-5">
                    <h3 class="font-heading font-bold text-gray-900 mb-2 text-base md:text-lg">When does the admission
                        process start?</h3>
                    <p class="text-gray-600 text-sm md:text-base">Admissions typically open in January for the academic
                        year starting in June. Early registration is recommended.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gradient-to-r from-primary to-blue-600" id="cta-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold mb-4 md:mb-6">Ready to Join Excellence
                    Academy?</h2>
                <p class="text-base md:text-lg lg:text-xl text-blue-100 mb-6 md:mb-8">Take the first step towards a
                    brighter future. Apply now or schedule a campus tour.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a class="bg-white text-primary px-6 md:px-8 py-3 md:py-4 rounded-full font-semibold text-base md:text-lg hover:bg-gray-100 transition inline-flex items-center"
                        href="#">
                        <span>Apply Now</span>
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                    <a class="bg-transparent border-2 border-white text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-semibold text-base md:text-lg hover:bg-white hover:text-primary transition inline-flex items-center"
                        href="#">
                        <span>Schedule Tour</span>
                        <i class="fa-solid fa-calendar ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
