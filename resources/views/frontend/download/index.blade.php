@extends('layouts.frontend.master')
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .resource-card {
            transition: all 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .notice-card {
            transition: all 0.3s ease;
        }

        .notice-card:hover {
            transform: translateX(5px);
        }

        .tab-btn.active {
            border-bottom: 3px solid #1e40af;
            color: #1e40af;
        }
    </style>
    <section class="bg-gradient-to-r from-primary to-blue-600 py-16 md:py-20" id="page-hero">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div
                    class="w-20 h-20 md:w-24 md:h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-download text-white text-3xl md:text-4xl"></i>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4">Downloads & Notices</h1>
                <p class="text-lg md:text-xl text-blue-100 mb-6">Access important documents, resources, and stay updated with
                    latest notices</p>
                <div class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <a class="hover:text-blue-200 transition" href="#">Home</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <span>Downloads & Notices</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white sticky top-[72px] z-40 shadow-md" id="tab-navigation">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-center space-x-8 md:space-x-16">
                <button class="tab-btn active py-4 px-6 text-base md:text-lg font-semibold transition" data-tab="downloads">
                    <i class="fa-solid fa-download mr-2"></i>Downloads
                </button>
                <button class="tab-btn py-4 px-6 text-base md:text-lg font-semibold text-gray-600 transition"
                    data-tab="notices">
                    <i class="fa-solid fa-bell mr-2"></i>Notices
                </button>
            </div>
        </div>
    </section>

    <div class="tab-content" id="downloads-tab">
        <section class="py-8 bg-gray-50" id="download-filters">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <button
                            class="download-filter-btn px-6 py-2 bg-primary text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">All
                            Resources</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Academic</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Forms</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Syllabus</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Circulars</button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input
                                class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm w-64"
                                type="text" placeholder="Search resources...">
                            <i
                                class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-white" id="download-resources">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Academic Resources
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Download study materials, syllabus, and academic
                            documents</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="resource-card bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 shadow-lg border border-blue-100"
                        id="resource-1">
                        <div class="flex items-start justify-between mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-file-pdf text-white text-2xl"></i>
                            </div>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Academic Calendar 2024</h3>
                        <p class="text-gray-600 text-sm mb-4">Complete academic calendar for the year 2024 including all
                            important dates and holidays.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fa-solid fa-calendar mr-2"></i>Jan 15, 2024</span>
                            <span><i class="fa-solid fa-file-arrow-down mr-2"></i>2.4 MB</span>
                        </div>
                        <button
                            class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center">
                            <i class="fa-solid fa-download mr-2"></i>Download
                        </button>
                    </div>

                    <div class="resource-card bg-gradient-to-br from-red-50 to-white rounded-2xl p-6 shadow-lg border border-red-100"
                        id="resource-2">
                        <div class="flex items-start justify-between mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-secondary to-red-600 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-file-pdf text-white text-2xl"></i>
                            </div>
                            <span
                                class="bg-secondary/10 text-secondary px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Admission Form 2024-25</h3>
                        <p class="text-gray-600 text-sm mb-4">Official admission form for the academic year 2024-25. Fill
                            and submit with required documents.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fa-solid fa-calendar mr-2"></i>Jan 10, 2024</span>
                            <span><i class="fa-solid fa-file-arrow-down mr-2"></i>1.8 MB</span>
                        </div>
                        <button
                            class="w-full bg-secondary text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center">
                            <i class="fa-solid fa-download mr-2"></i>Download
                        </button>
                    </div>

                    <div class="resource-card bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 shadow-lg border border-green-100"
                        id="resource-3">
                        <div class="flex items-start justify-between mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-file-pdf text-white text-2xl"></i>
                            </div>
                            <span
                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Fee Structure 2024</h3>
                        <p class="text-gray-600 text-sm mb-4">Detailed fee structure for all grades including tuition,
                            transport, and other charges.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fa-solid fa-calendar mr-2"></i>Jan 08, 2024</span>
                            <span><i class="fa-solid fa-file-arrow-down mr-2"></i>1.2 MB</span>
                        </div>
                        <button
                            class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition flex items-center justify-center">
                            <i class="fa-solid fa-download mr-2"></i>Download
                        </button>
                    </div>

                    <div class="resource-card bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 shadow-lg border border-purple-100"
                        id="resource-4">
                        <div class="flex items-start justify-between mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-file-pdf text-white text-2xl"></i>
                            </div>
                            <span
                                class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Grade 10 Syllabus</h3>
                        <p class="text-gray-600 text-sm mb-4">Complete syllabus for Grade 10 covering all subjects with
                            detailed chapter breakdown.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fa-solid fa-calendar mr-2"></i>Dec 28, 2023</span>
                            <span><i class="fa-solid fa-file-arrow-down mr-2"></i>3.6 MB</span>
                        </div>
                        <button
                            class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition flex items-center justify-center">
                            <i class="fa-solid fa-download mr-2"></i>Download
                        </button>
                    </div>

                    <div class="resource-card bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 shadow-lg border border-orange-100"
                        id="resource-5">
                        <div class="flex items-start justify-between mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-accent to-orange-600 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-file-word text-white text-2xl"></i>
                            </div>
                            <span
                                class="bg-orange-100 text-accent px-3 py-1 rounded-full text-xs font-semibold">DOCX</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Leave Application Form</h3>
                        <p class="text-gray-600 text-sm mb-4">Standard leave application form for students. Download and
                            submit to class teacher.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fa-solid fa-calendar mr-2"></i>Dec 20, 2023</span>
                            <span><i class="fa-solid fa-file-arrow-down mr-2"></i>850 KB</span>
                        </div>
                        <button
                            class="w-full bg-accent text-white py-3 rounded-lg font-semibold hover:bg-yellow-600 transition flex items-center justify-center">
                            <i class="fa-solid fa-download mr-2"></i>Download
                        </button>
                    </div>

                    <div class="resource-card bg-gradient-to-br from-indigo-50 to-white rounded-2xl p-6 shadow-lg border border-indigo-100"
                        id="resource-6">
                        <div class="flex items-start justify-between mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-file-pdf text-white text-2xl"></i>
                            </div>
                            <span
                                class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Examination Schedule</h3>
                        <p class="text-gray-600 text-sm mb-4">Mid-term examination schedule for all grades with date, time,
                            and subject details.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fa-solid fa-calendar mr-2"></i>Dec 15, 2023</span>
                            <span><i class="fa-solid fa-file-arrow-down mr-2"></i>1.5 MB</span>
                        </div>
                        <button
                            class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition flex items-center justify-center">
                            <i class="fa-solid fa-download mr-2"></i>Download
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-gray-50" id="study-materials">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Study Materials
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Additional learning resources and reference
                            materials</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="resource-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100" id="material-1">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-book text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="text-lg font-heading font-bold text-gray-900">Science Lab Manual Grade 9
                                    </h3>
                                    <span
                                        class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                                </div>
                                <p class="text-gray-600 text-sm mb-3">Comprehensive lab manual with experiments,
                                    observations, and practical guidelines.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-1"></i>Dec 10, 2023</span>
                                        <span><i class="fa-solid fa-file-arrow-down mr-1"></i>4.2 MB</span>
                                    </div>
                                    <button
                                        class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                                        <i class="fa-solid fa-download mr-2"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="resource-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100" id="material-2">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-calculator text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="text-lg font-heading font-bold text-gray-900">Mathematics Practice Problems
                                    </h3>
                                    <span
                                        class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                                </div>
                                <p class="text-gray-600 text-sm mb-3">500+ practice problems with solutions for Grade 8
                                    mathematics curriculum.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-1"></i>Dec 05, 2023</span>
                                        <span><i class="fa-solid fa-file-arrow-down mr-1"></i>2.8 MB</span>
                                    </div>
                                    <button
                                        class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition text-sm">
                                        <i class="fa-solid fa-download mr-2"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="resource-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100" id="material-3">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-language text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="text-lg font-heading font-bold text-gray-900">English Grammar Workbook</h3>
                                    <span
                                        class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                                </div>
                                <p class="text-gray-600 text-sm mb-3">Complete grammar workbook with exercises and answer
                                    key for all grades.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-1"></i>Nov 28, 2023</span>
                                        <span><i class="fa-solid fa-file-arrow-down mr-1"></i>3.5 MB</span>
                                    </div>
                                    <button
                                        class="bg-purple-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-purple-700 transition text-sm">
                                        <i class="fa-solid fa-download mr-2"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="resource-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100" id="material-4">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-globe text-white text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="text-lg font-heading font-bold text-gray-900">Social Studies Atlas</h3>
                                    <span
                                        class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold">PDF</span>
                                </div>
                                <p class="text-gray-600 text-sm mb-3">Detailed atlas with maps, geographical data, and
                                    historical information.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-1"></i>Nov 20, 2023</span>
                                        <span><i class="fa-solid fa-file-arrow-down mr-1"></i>5.6 MB</span>
                                    </div>
                                    <button
                                        class="bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-orange-700 transition text-sm">
                                        <i class="fa-solid fa-download mr-2"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="tab-content hidden" id="notices-tab">
        <section class="py-12 md:py-16 bg-white" id="important-notices">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Important Notices
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Stay updated with latest announcements and
                            circulars</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="notice-card bg-gradient-to-r from-red-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-secondary"
                        id="notice-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-exclamation text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">School Closure Notice</h3>
                                        <span
                                            class="bg-secondary text-white px-3 py-1 rounded-full text-xs font-semibold">URGENT</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-3">The school will remain closed on January 26,
                                        2024, due to Republic Day. Classes will resume on January 27, 2024.</p>
                                    <div class="flex items-center space-x-6 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-2"></i>Posted: Jan 20, 2024</span>
                                        <span><i class="fa-solid fa-user mr-2"></i>Administration</span>
                                    </div>
                                </div>
                            </div>
                            <button class="text-secondary hover:text-red-700 transition">
                                <i class="fa-solid fa-bookmark text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <div class="notice-card bg-gradient-to-r from-blue-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-primary"
                        id="notice-2">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-clipboard-list text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Mid-Term Examination
                                            Schedule Released</h3>
                                        <span
                                            class="bg-primary text-white px-3 py-1 rounded-full text-xs font-semibold">ACADEMIC</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-3">The mid-term examination schedule for all grades
                                        has been published. Students are requested to check the schedule and prepare
                                        accordingly. Exams will begin from February 5, 2024.</p>
                                    <div class="flex items-center space-x-6 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-2"></i>Posted: Jan 18, 2024</span>
                                        <span><i class="fa-solid fa-user mr-2"></i>Academic Department</span>
                                    </div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-blue-700 transition">
                                <i class="fa-solid fa-bookmark text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <div class="notice-card bg-gradient-to-r from-green-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-green-600"
                        id="notice-3">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-money-bill-wave text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Fee Payment Reminder</h3>
                                        <span
                                            class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">FEES</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-3">This is to remind all parents that the last date
                                        for payment of second term fees is January 31, 2024. Late fee charges will be
                                        applicable after the due date. Please make payments through online portal or school
                                        office.</p>
                                    <div class="flex items-center space-x-6 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-2"></i>Posted: Jan 15, 2024</span>
                                        <span><i class="fa-solid fa-user mr-2"></i>Accounts Department</span>
                                    </div>
                                </div>
                            </div>
                            <button class="text-green-600 hover:text-green-700 transition">
                                <i class="fa-solid fa-bookmark text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <div class="notice-card bg-gradient-to-r from-purple-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-purple-600"
                        id="notice-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-users text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Parent-Teacher Meeting
                                            Scheduled</h3>
                                        <span
                                            class="bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold">MEETING</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-3">Parent-Teacher meeting is scheduled for February
                                        12, 2024, from 8:00 AM to 5:00 PM. Parents are requested to pre-register for time
                                        slots through the parent portal. Discussion on student progress and development.</p>
                                    <div class="flex items-center space-x-6 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-2"></i>Posted: Jan 12, 2024</span>
                                        <span><i class="fa-solid fa-user mr-2"></i>Administration</span>
                                    </div>
                                </div>
                            </div>
                            <button class="text-purple-600 hover:text-purple-700 transition">
                                <i class="fa-solid fa-bookmark text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <div class="notice-card bg-gradient-to-r from-orange-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-accent"
                        id="notice-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-calendar-days text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Annual Day Celebration
                                            2024</h3>
                                        <span
                                            class="bg-accent text-white px-3 py-1 rounded-full text-xs font-semibold">EVENT</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-3">The school's Annual Day celebration will be held
                                        on March 15, 2024. Students participating in cultural performances should attend
                                        rehearsals. Parents are invited to join us for this grand celebration.</p>
                                    <div class="flex items-center space-x-6 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-2"></i>Posted: Jan 10, 2024</span>
                                        <span><i class="fa-solid fa-user mr-2"></i>Cultural Committee</span>
                                    </div>
                                </div>
                            </div>
                            <button class="text-accent hover:text-yellow-700 transition">
                                <i class="fa-solid fa-bookmark text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <div class="notice-card bg-gradient-to-r from-indigo-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-indigo-600"
                        id="notice-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-bus text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Transport Route Change
                                            Notice</h3>
                                        <span
                                            class="bg-indigo-600 text-white px-3 py-1 rounded-full text-xs font-semibold">TRANSPORT</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-3">Due to road construction work, Route 5 and Route
                                        8 will have temporary changes from January 22, 2024. Updated routes and timings have
                                        been sent via SMS. Contact transport office for queries.</p>
                                    <div class="flex items-center space-x-6 text-sm text-gray-500">
                                        <span><i class="fa-solid fa-calendar mr-2"></i>Posted: Jan 08, 2024</span>
                                        <span><i class="fa-solid fa-user mr-2"></i>Transport Department</span>
                                    </div>
                                </div>
                            </div>
                            <button class="text-indigo-600 hover:text-indigo-700 transition">
                                <i class="fa-solid fa-bookmark text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-center">
                    <button
                        class="bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                        Load More Notices
                    </button>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-gray-50" id="notice-categories">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Notice Categories
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Browse notices by category</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-graduation-cap text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Academic</h3>
                        <p class="text-gray-600 text-sm mb-3">Examination, syllabus, and academic updates</p>
                        <div class="flex items-center justify-between">
                            <span class="text-primary font-bold text-2xl">24</span>
                            <span class="text-gray-500 text-sm">Notices</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-secondary to-red-600 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-calendar-days text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Events</h3>
                        <p class="text-gray-600 text-sm mb-3">School events, celebrations, and activities</p>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary font-bold text-2xl">18</span>
                            <span class="text-gray-500 text-sm">Notices</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-money-bill-wave text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Fees & Payments</h3>
                        <p class="text-gray-600 text-sm mb-3">Fee structure, payment reminders, and deadlines</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-2xl">12</span>
                            <span class="text-gray-500 text-sm">Notices</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-bullhorn text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">General</h3>
                        <p class="text-gray-600 text-sm mb-3">General announcements and circulars</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 font-bold text-2xl">16</span>
                            <span class="text-gray-500 text-sm">Notices</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-12 md:py-16 bg-gradient-to-r from-primary to-blue-600" id="cta-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold mb-4 md:mb-6">Stay Connected</h2>
                <p class="text-base md:text-lg lg:text-xl text-blue-100 mb-6 md:mb-8">Subscribe to receive instant
                    notifications about new notices and resources</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center max-w-xl mx-auto">
                    <input
                        class="w-full px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-white"
                        type="email" placeholder="Enter your email address">
                    <button
                        class="w-full sm:w-auto bg-secondary text-white px-8 py-4 rounded-full font-semibold hover:bg-red-700 transition whitespace-nowrap">
                        Subscribe Now
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            alert('Mobile menu functionality would be implemented here');
        });

        const scrollToTopBtn = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                scrollToTopBtn.classList.add('opacity-100');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                scrollToTopBtn.classList.remove('opacity-100');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        const downloadFilterBtns = document.querySelectorAll('.download-filter-btn');
        downloadFilterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                downloadFilterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('bg-primary', 'text-white');
            });
        });

        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const tabName = this.getAttribute('data-tab');

                tabBtns.forEach(b => {
                    b.classList.remove('active', 'text-primary');
                    b.classList.add('text-gray-600');
                });

                this.classList.add('active', 'text-primary');
                this.classList.remove('text-gray-600');

                tabContents.forEach(content => {
                    if (content.id === tabName + '-tab') {
                        content.classList.remove('hidden');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            });
        });
    </script>
@endsection
