@extends('layouts.frontend.master')
@section('content')
    <section class="bg-gradient-to-r from-primary to-blue-600 py-16 md:py-20" id="page-hero">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div
                    class="w-20 h-20 md:w-24 md:h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-book-open text-white text-3xl md:text-4xl"></i>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4">Curriculum & Examination</h1>
                <p class="text-lg md:text-xl text-blue-100 mb-6">Comprehensive academic programs designed for excellence and
                    holistic development</p>
                <div class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <a class="hover:text-blue-200 transition" href="#">Home</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <a class="hover:text-blue-200 transition" href="#">Academics</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <span>Curriculum & Examination</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white sticky top-[72px] z-40 shadow-md" id="tab-navigation">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-center space-x-8 md:space-x-16">
                <button class="tab-btn active py-4 px-6 text-base md:text-lg font-semibold transition"
                    data-tab="curriculum">
                    <i class="fa-solid fa-book mr-2"></i>Curriculum & Syllabus
                </button>
                <button class="tab-btn py-4 px-6 text-base md:text-lg font-semibold text-gray-600 transition"
                    data-tab="examination">
                    <i class="fa-solid fa-clipboard-list mr-2"></i>Examination & Results
                </button>
            </div>
        </div>
    </section>

    <div class="tab-content" id="curriculum-tab">
        <section class="py-12 md:py-16 bg-white" id="curriculum-overview">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Our Curriculum
                            Framework</h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">A comprehensive educational approach fostering
                            academic excellence and character development</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="curriculum-card bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 shadow-lg border border-blue-100"
                        id="curriculum-feature-1">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-brain text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Holistic Development</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Our curriculum balances academic rigor with
                            creative expression, physical education, and character building to develop well-rounded
                            individuals.</p>
                    </div>

                    <div class="curriculum-card bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 md:p-8 shadow-lg border border-purple-100"
                        id="curriculum-feature-2">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-microscope text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Experiential Learning</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Hands-on learning experiences, laboratory work,
                            field trips, and project-based assignments enhance understanding and retention.</p>
                    </div>

                    <div class="curriculum-card bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 md:p-8 shadow-lg border border-green-100"
                        id="curriculum-feature-3">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-globe text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Global Perspective</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">International curriculum standards integrated with
                            local context to prepare students for global opportunities and challenges.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-gray-50" id="grade-wise-curriculum">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Grade-Wise
                            Curriculum</h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Detailed syllabus and subject information for
                            each grade level</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-3 mb-8">
                    <button class="grade-tab active px-6 py-3 rounded-full font-semibold text-sm shadow-md"
                        data-grade="1">Grade 1-2</button>
                    <button
                        class="grade-tab bg-white px-6 py-3 rounded-full font-semibold text-sm text-gray-700 shadow-md hover:shadow-lg"
                        data-grade="3">Grade 3-5</button>
                    <button
                        class="grade-tab bg-white px-6 py-3 rounded-full font-semibold text-sm text-gray-700 shadow-md hover:shadow-lg"
                        data-grade="6">Grade 6-8</button>
                    <button
                        class="grade-tab bg-white px-6 py-3 rounded-full font-semibold text-sm text-gray-700 shadow-md hover:shadow-lg"
                        data-grade="9">Grade 9-10</button>
                    <button
                        class="grade-tab bg-white px-6 py-3 rounded-full font-semibold text-sm text-gray-700 shadow-md hover:shadow-lg"
                        data-grade="11">Grade 11-12</button>
                </div>

                <div class="grade-content" id="grade-1-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 mb-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-heading font-bold text-gray-900">Primary Level (Grade 1-2)</h3>
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                                <i class="fa-solid fa-download mr-2"></i>Download Syllabus
                            </button>
                        </div>
                        <p class="text-gray-600 mb-6">Foundation years focusing on basic literacy, numeracy, and social
                            skills development through play-based and activity-oriented learning.</p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div id="primary-subjects">
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-book-open text-primary mr-3"></i>Core Subjects
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">English Language</h5>
                                                <p class="text-sm text-gray-600 mt-1">Reading, Writing, Speaking & Listening
                                                </p>
                                            </div>
                                            <span
                                                class="bg-blue-100 text-primary px-3 py-1 rounded-full text-xs font-semibold">5
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Mathematics</h5>
                                                <p class="text-sm text-gray-600 mt-1">Numbers, Shapes, Patterns &
                                                    Measurement</p>
                                            </div>
                                            <span
                                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">5
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Environmental Studies</h5>
                                                <p class="text-sm text-gray-600 mt-1">My Family, School, Community & Nature
                                                </p>
                                            </div>
                                            <span
                                                class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">4
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Hindi/Regional Language</h5>
                                                <p class="text-sm text-gray-600 mt-1">Basic Reading & Writing Skills</p>
                                            </div>
                                            <span
                                                class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="primary-activities">
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-palette text-secondary mr-3"></i>Co-Curricular Activities
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Art & Craft</h5>
                                                <p class="text-sm text-gray-600 mt-1">Drawing, Coloring, Clay Modeling</p>
                                            </div>
                                            <span
                                                class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Music & Dance</h5>
                                                <p class="text-sm text-gray-600 mt-1">Rhymes, Songs & Movement Activities
                                                </p>
                                            </div>
                                            <span
                                                class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Physical Education</h5>
                                                <p class="text-sm text-gray-600 mt-1">Games, Sports & Yoga</p>
                                            </div>
                                            <span
                                                class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Computer Basics</h5>
                                                <p class="text-sm text-gray-600 mt-1">Introduction to Technology</p>
                                            </div>
                                            <span
                                                class="bg-cyan-100 text-cyan-600 px-3 py-1 rounded-full text-xs font-semibold">1
                                                hr/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grade-content hidden" id="grade-3-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 mb-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-heading font-bold text-gray-900">Middle Primary (Grade 3-5)</h3>
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                                <i class="fa-solid fa-download mr-2"></i>Download Syllabus
                            </button>
                        </div>
                        <p class="text-gray-600 mb-6">Building on foundational skills with introduction to specialized
                            subjects and enhanced focus on critical thinking and problem-solving.</p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-book-open text-primary mr-3"></i>Core Subjects
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">English Language & Literature</h5>
                                                <p class="text-sm text-gray-600 mt-1">Grammar, Comprehension & Creative
                                                    Writing</p>
                                            </div>
                                            <span
                                                class="bg-blue-100 text-primary px-3 py-1 rounded-full text-xs font-semibold">6
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Mathematics</h5>
                                                <p class="text-sm text-gray-600 mt-1">Arithmetic, Geometry & Data Handling
                                                </p>
                                            </div>
                                            <span
                                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">6
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">Physics, Chemistry, Biology &
                                                    Experiments</p>
                                            </div>
                                            <span
                                                class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">5
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Social Studies</h5>
                                                <p class="text-sm text-gray-600 mt-1">History, Geography & Civics</p>
                                            </div>
                                            <span
                                                class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold">5
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Hindi/Regional Language</h5>
                                                <p class="text-sm text-gray-600 mt-1">Advanced Reading, Writing &
                                                    Literature</p>
                                            </div>
                                            <span
                                                class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-semibold">4
                                                hrs/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-palette text-secondary mr-3"></i>Additional Subjects
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Computer Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">MS Office, Internet & Coding Basics
                                                </p>
                                            </div>
                                            <span
                                                class="bg-cyan-100 text-cyan-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Art & Craft</h5>
                                                <p class="text-sm text-gray-600 mt-1">Advanced Techniques & Projects</p>
                                            </div>
                                            <span
                                                class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Music</h5>
                                                <p class="text-sm text-gray-600 mt-1">Vocal & Instrumental Training</p>
                                            </div>
                                            <span
                                                class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Physical Education</h5>
                                                <p class="text-sm text-gray-600 mt-1">Sports Skills & Fitness Training</p>
                                            </div>
                                            <span
                                                class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Value Education</h5>
                                                <p class="text-sm text-gray-600 mt-1">Moral Science & Life Skills</p>
                                            </div>
                                            <span
                                                class="bg-teal-100 text-teal-600 px-3 py-1 rounded-full text-xs font-semibold">1
                                                hr/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grade-content hidden" id="grade-6-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 mb-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-heading font-bold text-gray-900">Secondary Level (Grade 6-8)</h3>
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                                <i class="fa-solid fa-download mr-2"></i>Download Syllabus
                            </button>
                        </div>
                        <p class="text-gray-600 mb-6">Advanced curriculum preparing students for higher secondary education
                            with emphasis on analytical thinking and independent learning.</p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-book-open text-primary mr-3"></i>Core Subjects
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">English</h5>
                                                <p class="text-sm text-gray-600 mt-1">Literature, Grammar & Communication
                                                    Skills</p>
                                            </div>
                                            <span
                                                class="bg-blue-100 text-primary px-3 py-1 rounded-full text-xs font-semibold">6
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Mathematics</h5>
                                                <p class="text-sm text-gray-600 mt-1">Algebra, Geometry & Statistics</p>
                                            </div>
                                            <span
                                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">6
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">Physics, Chemistry, Biology &
                                                    Practicals</p>
                                            </div>
                                            <span
                                                class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">6
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Social Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">History, Geography, Civics &
                                                    Economics</p>
                                            </div>
                                            <span
                                                class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold">5
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Hindi/Sanskrit</h5>
                                                <p class="text-sm text-gray-600 mt-1">Language, Literature & Grammar</p>
                                            </div>
                                            <span
                                                class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-semibold">4
                                                hrs/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-laptop-code text-secondary mr-3"></i>Skill Development
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Computer Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">Programming, Web Design & AI Basics
                                                </p>
                                            </div>
                                            <span
                                                class="bg-cyan-100 text-cyan-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Art & Design</h5>
                                                <p class="text-sm text-gray-600 mt-1">Fine Arts & Digital Design</p>
                                            </div>
                                            <span
                                                class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Physical Education</h5>
                                                <p class="text-sm text-gray-600 mt-1">Sports, Yoga & Health Education</p>
                                            </div>
                                            <span
                                                class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Life Skills</h5>
                                                <p class="text-sm text-gray-600 mt-1">Critical Thinking & Communication</p>
                                            </div>
                                            <span
                                                class="bg-teal-100 text-teal-600 px-3 py-1 rounded-full text-xs font-semibold">2
                                                hrs/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grade-content hidden" id="grade-9-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 mb-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-heading font-bold text-gray-900">Higher Secondary (Grade 9-10)</h3>
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                                <i class="fa-solid fa-download mr-2"></i>Download Syllabus
                            </button>
                        </div>
                        <p class="text-gray-600 mb-6">Board examination preparation with comprehensive coverage of
                            CBSE/ICSE curriculum and competitive exam readiness.</p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-book-open text-primary mr-3"></i>Compulsory Subjects
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">English Language & Literature</h5>
                                                <p class="text-sm text-gray-600 mt-1">Board Exam Preparation - 100 Marks
                                                </p>
                                            </div>
                                            <span
                                                class="bg-blue-100 text-primary px-3 py-1 rounded-full text-xs font-semibold">7
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Mathematics</h5>
                                                <p class="text-sm text-gray-600 mt-1">Algebra, Trigonometry, Coordinate
                                                    Geometry - 100 Marks</p>
                                            </div>
                                            <span
                                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">7
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">Physics, Chemistry, Biology - 100
                                                    Marks</p>
                                            </div>
                                            <span
                                                class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">7
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Social Science</h5>
                                                <p class="text-sm text-gray-600 mt-1">History, Geography, Political
                                                    Science, Economics - 100 Marks</p>
                                            </div>
                                            <span
                                                class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold">6
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Hindi/Sanskrit</h5>
                                                <p class="text-sm text-gray-600 mt-1">Second Language - 100 Marks</p>
                                            </div>
                                            <span
                                                class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-semibold">5
                                                hrs/week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                    <i class="fa-solid fa-certificate text-secondary mr-3"></i>Additional Subjects
                                </h4>
                                <div class="space-y-3">
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Information Technology</h5>
                                                <p class="text-sm text-gray-600 mt-1">Coding, Database & Web Development
                                                </p>
                                            </div>
                                            <span
                                                class="bg-cyan-100 text-cyan-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Physical Education</h5>
                                                <p class="text-sm text-gray-600 mt-1">Sports Training & Theory</p>
                                            </div>
                                            <span
                                                class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">3
                                                hrs/week</span>
                                        </div>
                                    </div>
                                    <div class="subject-item bg-gray-50 rounded-lg p-4 border border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h5 class="font-semibold text-gray-900">Career Counseling</h5>
                                                <p class="text-sm text-gray-600 mt-1">Stream Selection & Guidance</p>
                                            </div>
                                            <span
                                                class="bg-teal-100 text-teal-600 px-3 py-1 rounded-full text-xs font-semibold">1
                                                hr/week</span>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="mt-6 bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6 border border-blue-200">
                                    <h5 class="font-bold text-gray-900 mb-3 flex items-center">
                                        <i class="fa-solid fa-trophy text-primary mr-2"></i>Board Exam Highlights
                                    </h5>
                                    <ul class="space-y-2 text-sm text-gray-700">
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1"></i>
                                            <span>Total Marks: 500 (Theory + Practicals)</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1"></i>
                                            <span>Internal Assessment: 20% weightage</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1"></i>
                                            <span>Mock Tests & Pre-Board Examinations</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1"></i>
                                            <span>Revision Classes & Doubt Clearing Sessions</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grade-content hidden" id="grade-11-content">
                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 mb-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-heading font-bold text-gray-900">Senior Secondary (Grade 11-12)</h3>
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                                <i class="fa-solid fa-download mr-2"></i>Download Syllabus
                            </button>
                        </div>
                        <p class="text-gray-600 mb-6">Stream-based specialized education preparing students for competitive
                            exams and higher education opportunities.</p>

                        <div class="grid lg:grid-cols-3 gap-6 mb-8">
                            <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-6 border-2 border-blue-200">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fa-solid fa-flask text-white text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-heading font-bold text-gray-900 mb-2">Science Stream</h4>
                                <p class="text-sm text-gray-600 mb-4">Physics, Chemistry, Mathematics/Biology with focus on
                                    JEE/NEET preparation</p>
                                <button class="text-primary font-semibold text-sm hover:underline">View Details →</button>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl p-6 border-2 border-green-200">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fa-solid fa-calculator text-white text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-heading font-bold text-gray-900 mb-2">Commerce Stream</h4>
                                <p class="text-sm text-gray-600 mb-4">Accountancy, Business Studies, Economics with CA/CS
                                    foundation</p>
                                <button class="text-green-600 font-semibold text-sm hover:underline">View Details
                                    →</button>
                            </div>

                            <div
                                class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 border-2 border-purple-200">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fa-solid fa-book text-white text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-heading font-bold text-gray-900 mb-2">Humanities Stream</h4>
                                <p class="text-sm text-gray-600 mb-4">History, Political Science, Psychology, Sociology for
                                    diverse careers</p>
                                <button class="text-purple-600 font-semibold text-sm hover:underline">View Details
                                    →</button>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-orange-50 to-yellow-50 rounded-xl p-6 border border-orange-200">
                            <h4 class="text-lg font-heading font-bold text-gray-900 mb-4 flex items-center">
                                <i class="fa-solid fa-star text-accent mr-3"></i>Special Features
                            </h4>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <i class="fa-solid fa-graduation-cap text-primary text-lg mt-1"></i>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Competitive Exam Coaching</h5>
                                        <p class="text-sm text-gray-600">Integrated JEE, NEET, CLAT preparation</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fa-solid fa-users text-green-600 text-lg mt-1"></i>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Expert Faculty</h5>
                                        <p class="text-sm text-gray-600">Subject specialists with proven track record</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fa-solid fa-laptop text-purple-600 text-lg mt-1"></i>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Digital Learning</h5>
                                        <p class="text-sm text-gray-600">Smart classrooms and online resources</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fa-solid fa-chart-line text-secondary text-lg mt-1"></i>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Performance Tracking</h5>
                                        <p class="text-sm text-gray-600">Regular assessments and progress reports</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-white" id="teaching-methodology">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Teaching
                            Methodology</h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Innovative approaches to enhance learning
                            outcomes</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 shadow-lg border border-blue-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-chalkboard-user text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Interactive Learning</h3>
                        <p class="text-gray-600 text-sm">Student-centered approach with collaborative activities and
                            discussions</p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 shadow-lg border border-green-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-vial text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Practical Application</h3>
                        <p class="text-gray-600 text-sm">Hands-on experiments and real-world problem solving</p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 shadow-lg border border-purple-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-desktop text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Technology Integration</h3>
                        <p class="text-gray-600 text-sm">Smart boards, digital content and online assessments</p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 shadow-lg border border-orange-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-accent to-orange-600 rounded-xl flex items-center justify-center mb-4">
                            <i class="fa-solid fa-user-check text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">Personalized Attention</h3>
                        <p class="text-gray-600 text-sm">Small class sizes and individual mentoring programs</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="tab-content hidden" id="examination-tab">
        <section class="py-12 md:py-16 bg-white" id="examination-system">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Examination
                            System</h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Comprehensive assessment framework ensuring
                            academic excellence</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div
                        class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 shadow-lg border border-blue-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-file-pen text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Continuous Assessment</h3>
                        <p class="text-gray-600 text-sm mb-4">Regular class tests, assignments, and project work throughout
                            the academic year</p>
                        <div class="bg-blue-100 rounded-lg p-3">
                            <p class="text-primary font-semibold text-sm">Weightage: 20%</p>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 md:p-8 shadow-lg border border-green-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-calendar-check text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Term Examinations</h3>
                        <p class="text-gray-600 text-sm mb-4">Mid-term and final examinations conducted bi-annually with
                            comprehensive syllabus</p>
                        <div class="bg-green-100 rounded-lg p-3">
                            <p class="text-green-600 font-semibold text-sm">Weightage: 80%</p>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 md:p-8 shadow-lg border border-purple-100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-trophy text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Board Examinations</h3>
                        <p class="text-gray-600 text-sm mb-4">CBSE/ICSE board exams for Grade 10 and 12 with comprehensive
                            preparation</p>
                        <div class="bg-purple-100 rounded-lg p-3">
                            <p class="text-purple-600 font-semibold text-sm">Grade 10 & 12</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-orange-50 to-yellow-50 rounded-2xl p-6 md:p-8 border border-orange-200">
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fa-solid fa-calendar-days text-accent mr-3"></i>Academic Calendar 2024
                    </h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-white rounded-xl p-4 shadow-sm">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-book-open text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-600">Term 1 Begins</p>
                                    <p class="font-bold text-gray-900">April 1, 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-sm">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-clipboard-list text-green-600"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-600">Mid-Term Exam</p>
                                    <p class="font-bold text-gray-900">July 15-30, 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-sm">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-umbrella-beach text-purple-600"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-600">Winter Break</p>
                                    <p class="font-bold text-gray-900">Dec 20-31, 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-sm">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-graduation-cap text-secondary"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-600">Final Exam</p>
                                    <p class="font-bold text-gray-900">Mar 1-20, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-gray-50" id="result-announcements">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Recent Results
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Latest examination results and announcements</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="result-card bg-gradient-to-r from-blue-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-primary"
                        id="result-1">
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-4 flex-1">
                                <div
                                    class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-trophy text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Grade 10 Board Results
                                            2024</h3>
                                        <span
                                            class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">100%
                                            Pass Rate</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-4">Outstanding performance with 45 students scoring
                                        above 90% marks. School average: 87.5%</p>
                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-calendar text-primary mr-2"></i>
                                            <span class="text-gray-600">Published: May 15, 2024</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-users text-green-600 mr-2"></i>
                                            <span class="text-gray-600">Total Students: 180</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-star text-accent mr-2"></i>
                                            <span class="text-gray-600">Top Score: 98.2%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm whitespace-nowrap ml-4">
                                <i class="fa-solid fa-download mr-2"></i>View Results
                            </button>
                        </div>
                    </div>

                    <div class="result-card bg-gradient-to-r from-green-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-green-600"
                        id="result-2">
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-4 flex-1">
                                <div
                                    class="w-14 h-14 bg-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-medal text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Grade 12 Board Results
                                            2024</h3>
                                        <span
                                            class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">98%
                                            Pass Rate</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-4">Exceptional achievement with 38 students scoring
                                        above 90% across all streams. Multiple subject toppers.</p>
                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-calendar text-green-600 mr-2"></i>
                                            <span class="text-gray-600">Published: May 20, 2024</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-users text-primary mr-2"></i>
                                            <span class="text-gray-600">Total Students: 150</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-star text-accent mr-2"></i>
                                            <span class="text-gray-600">Top Score: 97.8%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition text-sm whitespace-nowrap ml-4">
                                <i class="fa-solid fa-download mr-2"></i>View Results
                            </button>
                        </div>
                    </div>

                    <div class="result-card bg-gradient-to-r from-purple-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-purple-600"
                        id="result-3">
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-4 flex-1">
                                <div
                                    class="w-14 h-14 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-clipboard-check text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Mid-Term Examination
                                            Results - All Grades</h3>
                                        <span
                                            class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold">December
                                            2023</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-4">Mid-term assessment results for grades 1-12 are
                                        now available on the student portal. Individual performance reports sent to parents.
                                    </p>
                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-calendar text-purple-600 mr-2"></i>
                                            <span class="text-gray-600">Published: December 20, 2023</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-chart-line text-primary mr-2"></i>
                                            <span class="text-gray-600">Overall Performance: Excellent</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="bg-purple-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-purple-700 transition text-sm whitespace-nowrap ml-4">
                                <i class="fa-solid fa-eye mr-2"></i>Check Result
                            </button>
                        </div>
                    </div>

                    <div class="result-card bg-gradient-to-r from-orange-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-accent"
                        id="result-4">
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-4 flex-1">
                                <div class="w-14 h-14 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-bell text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">Final Exam Schedule
                                            Released</h3>
                                        <span
                                            class="bg-orange-100 text-accent px-3 py-1 rounded-full text-xs font-semibold">UPCOMING</span>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-4">Annual examination schedule for academic year
                                        2024-25 has been released. Exams will commence from March 1, 2025.</p>
                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-calendar text-accent mr-2"></i>
                                            <span class="text-gray-600">Exam Dates: March 1-20, 2025</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-clock text-primary mr-2"></i>
                                            <span class="text-gray-600">Duration: 3 weeks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="bg-accent text-white px-6 py-2 rounded-lg font-semibold hover:bg-yellow-600 transition text-sm whitespace-nowrap ml-4">
                                <i class="fa-solid fa-download mr-2"></i>Download Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-white" id="result-portal">
            <div class="container mx-auto px-4 md:px-6">
                <div class="max-w-4xl mx-auto">
                    <div
                        class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-8 md:p-12 text-white text-center shadow-2xl">
                        <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fa-solid fa-laptop text-white text-3xl"></i>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold mb-4">Student Result Portal</h2>
                        <p class="text-lg text-blue-100 mb-8">Access your examination results, report cards, and
                            performance analytics online</p>

                        <div class="bg-white rounded-xl p-6 md:p-8 text-left max-w-md mx-auto">
                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-4">Login to View Results</h3>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Student ID / Roll
                                        Number</label>
                                    <input
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-gray-900"
                                        type="text" placeholder="Enter your student ID">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth</label>
                                    <input
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-gray-900"
                                        type="date">
                                </div>
                                <button
                                    class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
                                    type="submit">
                                    <i class="fa-solid fa-sign-in-alt mr-2"></i>View My Results
                                </button>
                            </form>
                            <p class="text-xs text-gray-600 text-center mt-4">
                                <i class="fa-solid fa-lock mr-1"></i>Secure and confidential
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-gray-50" id="toppers-section">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-accent mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Our Toppers</h2>
                        <p class="text-gray-600 text-sm md:text-base mt-2">Celebrating excellence and outstanding
                            achievements</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg border-t-4 border-accent">
                        <div class="text-center mb-4">
                            <div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden border-4 border-accent">
                                <img class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg"
                                    alt="Topper">
                            </div>
                            <div
                                class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto -mt-10 mb-4 border-4 border-white">
                                <span class="text-white font-bold text-lg">1</span>
                            </div>
                            <h3 class="text-xl font-heading font-bold text-gray-900">Priya Sharma</h3>
                            <p class="text-gray-600 text-sm">Grade 12 - Science Stream</p>
                        </div>
                        <div class="bg-yellow-50 rounded-xl p-4 mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-600">Percentage</span>
                                <span class="text-2xl font-bold text-accent">97.8%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Rank</span>
                                <span class="font-bold text-gray-900">School Topper</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 text-center italic">"Dedication and consistent effort are the keys
                            to success"</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg border-t-4 border-gray-400">
                        <div class="text-center mb-4">
                            <div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden border-4 border-gray-400">
                                <img class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg"
                                    alt="Topper">
                            </div>
                            <div
                                class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center mx-auto -mt-10 mb-4 border-4 border-white">
                                <span class="text-white font-bold text-lg">2</span>
                            </div>
                            <h3 class="text-xl font-heading font-bold text-gray-900">Rahul Kumar</h3>
                            <p class="text-gray-600 text-sm">Grade 10 - CBSE Board</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-600">Percentage</span>
                                <span class="text-2xl font-bold text-gray-700">96.4%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Rank</span>
                                <span class="font-bold text-gray-900">2nd Position</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 text-center italic">"Hard work and perseverance lead to excellence"
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg border-t-4 border-orange-600">
                        <div class="text-center mb-4">
                            <div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden border-4 border-orange-600">
                                <img class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-6.jpg"
                                    alt="Topper">
                            </div>
                            <div
                                class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center mx-auto -mt-10 mb-4 border-4 border-white">
                                <span class="text-white font-bold text-lg">3</span>
                            </div>
                            <h3 class="text-xl font-heading font-bold text-gray-900">Ananya Patel</h3>
                            <p class="text-gray-600 text-sm">Grade 12 - Commerce Stream</p>
                        </div>
                        <div class="bg-orange-50 rounded-xl p-4 mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-gray-600">Percentage</span>
                                <span class="text-2xl font-bold text-orange-600">95.6%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Rank</span>
                                <span class="font-bold text-gray-900">3rd Position</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 text-center italic">"Believe in yourself and achieve your dreams"
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-12 md:py-16 bg-gradient-to-r from-primary to-blue-600" id="cta-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold mb-4 md:mb-6">Need Academic Assistance?
                </h2>
                <p class="text-base md:text-lg lg:text-xl text-blue-100 mb-6 md:mb-8">Our academic counselors are here to
                    help you with curriculum queries and examination guidance</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button
                        class="w-full sm:w-auto bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition">
                        <i class="fa-solid fa-phone mr-2"></i>Contact Academic Office
                    </button>
                    <button
                        class="w-full sm:w-auto bg-secondary text-white px-8 py-4 rounded-full font-semibold hover:bg-red-700 transition">
                        <i class="fa-solid fa-download mr-2"></i>Download Curriculum Guide
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
