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
                    Notices
                </h1>

                <!-- Breadcrumb -->
                <nav>
                    <ol
                        class="flex items-center justify-center space-x-2 text-sm bg-white/10 backdrop-blur-md px-4 py-2 rounded-full">
                        <li>
                            <a class="text-blue-100 hover:text-white transition" href="/">
                                Home
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            Notices
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <div class="tab-content " id="notices-tab">
        <section class="py-12 md:py-16 bg-white" id="important-notices">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Important Notices
                        </h2>
                        {{-- <p class="text-gray-600 text-sm md:text-base mt-2">Stay updated with latest announcements and
                            circulars</p> --}}
                    </div>
                </div>

                <div class="space-y-6">

                    <div class="notice-card bg-gradient-to-r from-blue-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-primary"
                        id="notice-2">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
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

                </div>

                <div class="mt-8 flex justify-center">
                    <button class="bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
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
                        {{-- <p class="text-gray-600 text-sm md:text-base mt-2">Browse notices by category</p> --}}
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
@endsection
