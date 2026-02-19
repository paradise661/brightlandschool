@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[700px] overflow-hidden" id="hero-slider">

        @foreach ($sliders as $index => $slider)
            <div
                class="hero-slide absolute inset-0 transition-opacity duration-1000
            {{ $index === 0 ? 'opacity-100 z-20' : 'opacity-0 z-10' }}">

                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

                <img class="absolute inset-0 w-full h-full object-cover" src="{{ $slider->image }}"
                    alt="{{ $slider->name ?? '' }}" />

                <div class="relative z-20 container mx-auto px-6 h-full flex items-center">
                    <div class="max-w-3xl text-white">
                        <h1 class="text-6xl font-heading font-bold mb-6 leading-tight">
                            {{ $slider->name ?? '' }}
                        </h1>

                        <p class="text-xl mb-8 text-gray-200">
                            {{ strip_tags($slider->description ?? '') }}
                        </p>

                        <div class="flex space-x-4">
                            <a class="bg-primary text-white px-8 py-4 rounded-full hover:bg-red-700 transition font-semibold text-lg inline-flex items-center"
                                href="{{ route('frontend.admission') }}">
                                Apply Now
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                            {{--
                            <a class="bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-100 transition font-semibold text-lg inline-flex items-center"
                                href="#">
                                Take a Tour
                                <i class="fa-solid fa-play ml-2"></i>
                            </a> --}}
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30 flex space-x-3">
            @foreach ($sliders as $index => $slider)
                <button class="slider-dot w-3 h-3 rounded-full {{ $index === 0 ? 'bg-white' : 'bg-white/50' }}"
                    data-index="{{ $index }}">
                </button>
            @endforeach
        </div>

    </section>

    <section class="py-20 bg-white" id="welcome-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        {{ $setting['homepage_about_title'] ?? '' }}
                    </div>
                    <h2 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        {{ $setting['homepage_about_title1'] ?? '' }}</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {!! $setting['homepage_about_description'] ?? '' !!}</p>
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['homepage_about_feature'] ?? '' }}
                                </h4>
                                {{-- <p class="text-sm text-gray-600">Experienced educators dedicated to excellence</p> --}}
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['homepage_about_feature1'] ?? '' }}
                                </h4>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['homepage_about_feature2'] ?? '' }}
                                </h4>

                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['homepage_about_feature3'] ?? '' }}
                                </h4>

                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-blue-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-blue-700 transition shadow-lg">
                        Discover More About Us
                    </button>
                </div>
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <img class="w-full h-64 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['homepage_about_image'] }}" alt="image" />
                            <img class="w-full h-48 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['homepage_about_image1'] }}" alt="image" />
                        </div>
                        <div class="space-y-4 mt-8">
                            <img class="w-full h-48 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['homepage_about_image2'] }}" alt="image" />
                            <img class="w-full h-64 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['homepage_about_image3'] }}" alt="image" />
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-yellow-400 rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold text-gray-900">{{ $setting['homepage_about_years'] ?? '25+' }}+
                        </div>
                        <div class="text-sm font-semibold text-gray-700">
                            {{ $setting['homepage_about_years_text'] ?? 'Years of Excellence' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="important-notices">
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
                @foreach ($notices as $notice)
                    @php
                        $plainText = strip_tags($notice->description ?? '');
                        $isLong = strlen($plainText) > 190;
                    @endphp

                    <div class="notice-card bg-gradient-to-r from-blue-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-primary"
                        id="notice-{{ $notice->id }}" data-notice-id="{{ $notice->id }}"
                        data-full-text="{{ e($plainText) }}" data-short-text="{{ e(Str::limit($plainText, 190)) }}">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid {{ $notice->icon ?? 'fa-bell' }} text-white text-xl"></i>
                                </div>

                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h3 class="text-xl font-heading font-bold text-gray-900">
                                            {{ $notice->name ?? '' }}
                                        </h3>
                                        <span class="bg-primary text-white px-3 py-1 rounded-full text-xs font-semibold">
                                            {{ $notice->category->name ?? '' }}
                                        </span>
                                    </div>

                                    <p class="text-gray-600 text-sm mb-2 notice-text">
                                        {{ Str::limit($plainText, 320) }}
                                    </p>

                                    @if ($isLong)
                                        <button class="read-more-btn text-primary text-sm font-semibold"
                                            data-expanded="false">
                                            Read more
                                        </button>
                                    @endif

                                    <div class="flex items-center space-x-6 text-sm text-gray-500 mt-3">
                                        <span>
                                            <i class="fa-solid fa-calendar mr-2"></i>
                                            {{ $notice->created_at->format('M d, Y') }}
                                        </span>

                                        <span class="view-count">
                                            <i class="fa-solid fa-eye mr-2"></i>
                                            {{ $notice->views ?? 0 }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="mt-8 flex justify-center">
                <a class="bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-secondary transition"
                    href="{{ route('notice') }}">
                    View More
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50" id="vision-mission">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-primary text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Our Foundation
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">Vision, Mission & Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">The guiding principles that shape our educational
                    philosophy and drive our commitment to excellence</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach ($vmvItems as $item)
                    <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                        <div
                            class="bg-primary from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <i class="fa-solid {{ $item->icon ?? 'fa-circle' }} text-white text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $item->name }}</h3>
                        <p class="text-gray-600 leading-relaxed mb-6 ">

                            {!! \Illuminate\Support\Str::words($item->description, 130, '...') !!}

                        </p>

                        @if ($item->points)
                            <div class="border-t border-gray-200 pt-6">
                                <ul class="space-y-3">
                                    @foreach ($item->points as $point)
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-3 mt-1"></i>
                                            <span class="text-gray-700">{{ $point }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="py-20 bg-white" id="leadership-messages">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Leadership
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">Messages from Our Leaders</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Words of wisdom and guidance from those who lead our
                    institution</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-xl overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center space-x-6 mb-6">
                            <img class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/fab574ae43-ca705b7303453d0d7b49.png"
                                alt="professional male school principal portrait in formal attire" />
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Dr. Robert Anderson</h3>
                                <p class="text-blue-600 font-semibold">Principal</p>
                                <div class="flex items-center mt-2 space-x-2">
                                    <i class="fa-solid fa-award text-yellow-500"></i>
                                    <span class="text-sm text-gray-600">Ph.D. in Education</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex mb-4">
                                <i class="fa-solid fa-quote-left text-blue-600 text-3xl opacity-50"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-4">Dear Students and Parents, it is my privilege to
                                lead Excellence Academy, an institution dedicated to academic excellence and character
                                development. Our commitment is to provide a nurturing environment where every student can
                                discover their potential and develop the skills needed for success in the 21st century.</p>
                            <p class="text-gray-700 leading-relaxed mb-4">We believe in fostering critical thinking,
                                creativity, and a love for lifelong learning. Our dedicated faculty works tirelessly to
                                ensure that each student receives personalized attention and support to achieve their
                                academic and personal goals.</p>
                            <p class="text-gray-700 leading-relaxed">Together, let us continue building a community of
                                learners who are prepared to make a positive impact on the world.</p>
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="flex items-center justify-between">
                                    <a class="text-blue-600 font-semibold hover:text-blue-700 transition"
                                        href="#">Read Full Message <i class="fa-solid fa-arrow-right ml-2"></i></a>
                                    <div class="flex items-center space-x-2 text-gray-500">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span class="text-sm">principal@school.edu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl shadow-xl overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center space-x-6 mb-6">
                            <img class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/53ba3ddcc1-11c4c8462ba89a5db4bc.png"
                                alt="professional male chairman portrait in business suit" />
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Mr. James Mitchell</h3>
                                <p class="text-purple-600 font-semibold">Chairman</p>
                                <div class="flex items-center mt-2 space-x-2">
                                    <i class="fa-solid fa-building text-yellow-500"></i>
                                    <span class="text-sm text-gray-600">Board of Directors</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex mb-4">
                                <i class="fa-solid fa-quote-left text-purple-600 text-3xl opacity-50"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-4">Welcome to Excellence Academy! As Chairman, I am
                                proud of our institution's legacy of excellence spanning over two decades. Our vision has
                                always been to create an educational environment that prepares students not just for exams,
                                but for life.</p>
                            <p class="text-gray-700 leading-relaxed mb-4">We have invested significantly in infrastructure,
                                technology, and faculty development to ensure that our students receive a world-class
                                education. Our state-of-the-art facilities and innovative teaching methods set us apart as
                                leaders in education.</p>
                            <p class="text-gray-700 leading-relaxed">I invite you to join our community and experience the
                                difference that quality education makes in shaping young minds and building successful
                                futures.</p>
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="flex items-center justify-between">
                                    <a class="text-purple-600 font-semibold hover:text-purple-700 transition"
                                        href="#">Read Full Message <i class="fa-solid fa-arrow-right ml-2"></i></a>
                                    <div class="flex items-center space-x-2 text-gray-500">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span class="text-sm">chairman@school.edu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50" id="academics-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Academics
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">World-Class Academic Programs</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive curriculum designed to nurture
                    intellectual growth and prepare students for future success</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover border-t-4 border-blue-600">
                    <div class="bg-blue-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-school text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Primary Education</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Foundation years focused on building core competencies in
                        language, mathematics, science, and social skills through interactive learning.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-blue-600 mr-3"></i>
                            <span>Grades 1-5</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-blue-600 mr-3"></i>
                            <span>Activity-based learning</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-blue-600 mr-3"></i>
                            <span>Smart classrooms</span>
                        </li>
                    </ul>
                    <button class="text-blue-600 font-semibold hover:text-blue-700 transition">Learn More <i
                            class="fa-solid fa-arrow-right ml-2"></i></button>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover border-t-4 border-green-600">
                    <div class="bg-green-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-book-open text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Secondary Education</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Advanced curriculum preparing students for higher
                        education with emphasis on critical thinking and problem-solving skills.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-green-600 mr-3"></i>
                            <span>Grades 6-10</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-green-600 mr-3"></i>
                            <span>STEM focus</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-green-600 mr-3"></i>
                            <span>Project-based learning</span>
                        </li>
                    </ul>
                    <button class="text-green-600 font-semibold hover:text-green-700 transition">Learn More <i
                            class="fa-solid fa-arrow-right ml-2"></i></button>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover border-t-4 border-purple-600">
                    <div class="bg-purple-100 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-graduation-cap text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Higher Secondary</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Specialized streams preparing students for competitive
                        exams and university admissions with comprehensive support.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-purple-600 mr-3"></i>
                            <span>Grades 11-12</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-purple-600 mr-3"></i>
                            <span>Science, Commerce, Arts</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fa-solid fa-check-circle text-purple-600 mr-3"></i>
                            <span>Career counseling</span>
                        </li>
                    </ul>
                    <button class="text-purple-600 font-semibold hover:text-purple-700 transition">Learn More <i
                            class="fa-solid fa-arrow-right ml-2"></i></button>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-white" id="why-choose-us">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-yellow-100 text-yellow-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Why Choose Us
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">Excellence in Every Aspect</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover what makes Excellence Academy the preferred
                    choice for thousands of families</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-chalkboard-teacher text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Faculty</h3>
                    <p class="text-gray-600 leading-relaxed">Highly qualified and experienced teachers committed to student
                        success</p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-laptop-code text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Smart Learning</h3>
                    <p class="text-gray-600 leading-relaxed">Technology-integrated classrooms with digital learning
                        resources</p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-medal text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Proven Results</h3>
                    <p class="text-gray-600 leading-relaxed">98% success rate in board examinations and competitive tests
                    </p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-orange-500 to-orange-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-users text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Small Class Size</h3>
                    <p class="text-gray-600 leading-relaxed">Personalized attention with optimal student-teacher ratio</p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-red-500 to-red-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-shield-alt text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Safe Environment</h3>
                    <p class="text-gray-600 leading-relaxed">24/7 security with CCTV surveillance and safety protocols</p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-teal-500 to-teal-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-futbol text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sports Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">State-of-the-art sports facilities and professional coaching
                    </p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-pink-500 to-pink-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-palette text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Arts & Culture</h3>
                    <p class="text-gray-600 leading-relaxed">Comprehensive programs in music, dance, drama, and fine arts
                    </p>
                </div>
                <div class="text-center card-hover">
                    <div
                        class="bg-gradient-to-br from-indigo-500 to-indigo-600 w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <i class="fa-solid fa-bus text-white text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Transport Facility</h3>
                    <p class="text-gray-600 leading-relaxed">GPS-enabled buses covering all major routes across the city
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50" id="facilities-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    World-Class Infrastructure
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">State-of-the-Art Facilities</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Modern infrastructure designed to provide the best
                    learning environment for our students</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/aa06d079e3-ef45dbd5010f58522f55.png"
                            alt="modern school science laboratory with advanced equipment and students" />
                    </div>
                    <div class="p-8">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-flask text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Science Laboratories</h3>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed">Fully equipped physics, chemistry, and biology labs
                            with modern instruments and safety equipment for hands-on learning experiences.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-blue-600 mr-3"></i>
                                <span>Advanced equipment & instruments</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-blue-600 mr-3"></i>
                                <span>Safety protocols & training</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-blue-600 mr-3"></i>
                                <span>Expert lab assistants</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/643cbe04f0-d437fd9fd949874885e6.png"
                            alt="modern school computer lab with latest computers and students learning" />
                    </div>
                    <div class="p-8">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-desktop text-green-600 text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Computer Labs</h3>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed">High-speed internet connectivity with latest
                            computers and software for coding, programming, and digital literacy education.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-green-600 mr-3"></i>
                                <span>Latest hardware & software</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-green-600 mr-3"></i>
                                <span>High-speed internet</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-green-600 mr-3"></i>
                                <span>Coding & robotics programs</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/552c9ef3cd-694df008507bd04421d8.png"
                            alt="spacious school library with books and students reading" />
                    </div>
                    <div class="p-8">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-book text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Digital Library</h3>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed">Extensive collection of books, journals, and digital
                            resources with comfortable reading spaces and online access.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-purple-600 mr-3"></i>
                                <span>50,000+ books & journals</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-purple-600 mr-3"></i>
                                <span>Digital resources & e-books</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-purple-600 mr-3"></i>
                                <span>Quiet study areas</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/ee74e6457e-a1383616882fb23e9d51.png"
                            alt="school sports complex with basketball court and students playing" />
                    </div>
                    <div class="p-8">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="bg-orange-100 w-12 h-12 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-dumbbell text-orange-600 text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Sports Complex</h3>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed">Multi-purpose indoor and outdoor sports facilities
                            including basketball, volleyball, cricket, and athletics tracks.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-orange-600 mr-3"></i>
                                <span>Indoor & outdoor courts</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-orange-600 mr-3"></i>
                                <span>Professional coaching</span>
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fa-solid fa-check text-orange-600 mr-3"></i>
                                <span>Swimming pool & gym</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white" id="news-events">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <div class="inline-block bg-blue-100 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        Blogs
                    </div>
                    <h2 class="text-5xl font-bold text-gray-900">Latest Blogs</h2>
                </div>
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">View
                    All</button>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                @foreach ($blogs as $blog)
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                        <div class="h-56 overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ $blog->image }}"
                                alt="{{ $blog->name ?? '' }}" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <span
                                    class="bg-blue-100 bg-primary/10 text-primary px-3 py-1 rounded-full text-sm font-semibold">{{ $blog->category->name ?? 'Uncategorized' }}
                                </span>
                                <span class="text-gray-500 text-sm"><i
                                        class="fa-solid fa-calendar mr-2 text-primary"></i>{{ $blog->created_at->format('F d, Y') }}</span>
                                <span class="text-gray-500 text-xs"><i
                                        class="fa-solid fa-eye mr-2 text-primary"></i>{{ $blog->views ?? 0 }}
                                    Views</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $blog->name ?? '' }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($blog->description ?? ''), 150) }}</p>
                            <a class="text-blue-600 font-semibold hover:text-blue-700 transition"
                                href="{{ route('frontend.blog.show', ['slug' => $blog->slug]) }}">Read More
                                <i class="fa-solid fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50" id="testimonials-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Testimonials
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">What Our Community Says</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Hear from parents, students, and alumni about their
                    experience at Excellence Academy</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <div class="flex items-center space-x-4 mb-6">
                        <img class="w-16 h-16 rounded-full object-cover border-4 border-purple-100"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg"
                            alt="Parent" />
                        <div>
                            <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                            <p class="text-sm text-gray-600">Parent</p>
                            <div class="flex mt-1">
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <i class="fa-solid fa-quote-left text-purple-600 text-3xl opacity-30"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed italic">"Excellence Academy has been a blessing for our family.
                        The teachers are incredibly dedicated, and the facilities are world-class. My daughter has grown so
                        much academically and personally. I couldn't be happier with our choice."</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <div class="flex items-center space-x-4 mb-6">
                        <img class="w-16 h-16 rounded-full object-cover border-4 border-purple-100"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg"
                            alt="Student" />
                        <div>
                            <h4 class="font-bold text-gray-900">Michael Chen</h4>
                            <p class="text-sm text-gray-600">Grade 11 Student</p>
                            <div class="flex mt-1">
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <i class="fa-solid fa-quote-left text-purple-600 text-3xl opacity-30"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed italic">"The learning environment here is amazing! Teachers
                        explain concepts clearly and are always available to help. The sports facilities are top-notch, and
                        I've had the opportunity to represent the school in national competitions."</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <div class="flex items-center space-x-4 mb-6">
                        <img class="w-16 h-16 rounded-full object-cover border-4 border-purple-100"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-8.jpg"
                            alt="Alumni" />
                        <div>
                            <h4 class="font-bold text-gray-900">David Williams</h4>
                            <p class="text-sm text-gray-600">Alumni (2018)</p>
                            <div class="flex mt-1">
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <i class="fa-solid fa-quote-left text-purple-600 text-3xl opacity-30"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed italic">"Excellence Academy prepared me well for university and
                        beyond. The foundation I received here helped me excel at MIT. The values, discipline, and critical
                        thinking skills I learned continue to guide me in my career."</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white" id="gallery-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Photo Gallery
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">Campus Life in Pictures</h2>

            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($albums as $album)
                    <div class="h-64 overflow-hidden rounded-xl shadow-lg card-hover">
                        <img class="w-full h-full object-cover" src="{{ $album->image }}" alt="{{ $album->title }}" />
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-700 transition shadow-lg"
                    href="{{ route('frontend.gallery') }}">
                    <i class="fa-solid fa-images mr-2"></i>View Complete Gallery
                </a>
            </div>

        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-700" id="admission-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="inline-block bg-white/20 backdrop-blur-sm border border-white/30 rounded-full px-4 py-2 text-white text-sm font-semibold mb-6">
                        Admissions Open 2024-25
                    </div>
                    <h2 class="text-5xl font-bold text-white mb-6 leading-tight">Join Our Community of Excellence</h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">Begin your child's journey towards academic
                        excellence and holistic development. Limited seats available for all grades.</p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center space-x-4">
                            <div
                                class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-check text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">Easy Online Application</div>
                                <div class="text-blue-200">Complete the form in minutes</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-check text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">Entrance Assessment</div>
                                <div class="text-blue-200">Simple evaluation process</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-check text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">Personal Interview</div>
                                <div class="text-blue-200">Get to know our faculty</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button
                            class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-50 transition shadow-xl">
                            <i class="fa-solid fa-file-alt mr-2"></i>Apply Now
                        </button>
                        <button
                            class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition">
                            <i class="fa-solid fa-download mr-2"></i>Download Brochure
                        </button>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Inquiry Form</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Parent's Name *</label>
                            <input
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="text" placeholder="Enter your name" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                            <input
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="email" placeholder="your@email.com" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="tel" placeholder="+1 (234) 567-890" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Grade Applying For *</label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Select Grade</option>
                                <option>Nursery</option>
                                <option>KG</option>
                                <option>Grade 1-5</option>
                                <option>Grade 6-10</option>
                                <option>Grade 11-12</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                rows="3" placeholder="Any specific questions?"></textarea>
                        </div>
                        <button
                            class="w-full bg-blue-600 text-white py-4 rounded-lg font-bold text-lg hover:bg-blue-700 transition shadow-lg"
                            type="submit">
                            <i class="fa-solid fa-paper-plane mr-2"></i>Submit Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-20 bg-gray-50" id="contact-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Get In Touch
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Have questions? We're here to help. Reach out to us
                    through any of the following channels</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-white rounded-2xl shadow-xl p-8 text-center card-hover">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-map-marker-alt text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visit Us</h3>
                    <p class="text-gray-600 leading-relaxed">123 Education Street, Knowledge City, State 12345, United
                        States</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 text-center card-hover">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-phone text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Call Us</h3>
                    <p class="text-gray-600 leading-relaxed">+1 (234) 567-890<br />+1 (234) 567-891</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-8 text-center card-hover">
                    <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-envelope text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email Us</h3>
                    <p class="text-gray-600 leading-relaxed">info@school.edu<br />admissions@school.edu</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="h-96">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2412648750455!2d-73.98823492346618!3d40.75889097138558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1710000000000!5m2!1sen!2sus"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /* ============================
               NOTICE: Read more / less
               + View count
            ============================ */
            document.querySelectorAll('.read-more-btn').forEach(btn => {
                btn.addEventListener('click', function() {

                    const card = this.closest('.notice-card');
                    const textEl = card.querySelector('.notice-text');
                    const noticeId = card.dataset.noticeId;

                    const isExpanded = this.dataset.expanded === "true";

                    if (!isExpanded) {
                        textEl.textContent = card.dataset.fullText;
                        this.textContent = "Read less";
                        this.dataset.expanded = "true";

                        if (!card.dataset.viewed) {
                            incrementNoticeView(noticeId, card);
                            card.dataset.viewed = "true";
                        }

                    } else {
                        // Collapse notice
                        textEl.textContent = card.dataset.shortText;
                        this.textContent = "Read more";
                        this.dataset.expanded = "false";
                    }
                });
            });

            function incrementNoticeView(noticeId, card) {
                fetch(`/notice/${noticeId}/view`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.views !== undefined) {
                            card.querySelector('.view-count').innerHTML =
                                `<i class="fa-solid fa-eye mr-2"></i>${data.views}`;
                        }
                    })
                    .catch(err => console.error(err));
            }
        });
    </script>
@endsection
