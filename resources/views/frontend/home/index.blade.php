@extends('layouts.frontend.master')
@section('content')

    {{-- Popup Section --}}
    @if (isset($popups) && $popups->count() > 0)
        <section id="popupSection">

            @foreach ($popups as $popup)
                <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
                    x-data="{ open: true }" x-show="open" x-transition.opacity>

                    <!-- Center Wrapper -->
                    <div class="relative w-full flex items-center justify-center">

                        <!-- Image + Button Wrapper (Important: inline-block) -->
                        <div class="relative inline-block">

                            <!-- Close Button -->
                            <button
                                class="absolute
                               -top-4 -right-4
                               md:-top-6 md:-right-6
                               bg-white/95 backdrop-blur-md
                               text-gray-800
                               w-9 h-9 md:w-10 md:h-10
                               rounded-full shadow-xl
                               flex items-center justify-center
                               hover:bg-red-500 hover:text-white
                               transition-all duration-300 z-20"
                                @click="open = false">
                                ✕
                            </button>

                            <!-- Full Image (No Crop) -->
                            @if ($popup->image)
                                <a class="block" href="{{ $popup->button_link ?? '#' }}">
                                    <img class="max-h-[90vh] max-w-full object-contain rounded-xl shadow-2xl"
                                        src="{{ asset($popup->image) }}" alt="Popup Image">
                                </a>
                            @endif

                        </div>

                    </div>

                </div>
            @endforeach

        </section>
    @endif
    <section class="relative h-[400px] sm:h-[500px] md:h-[700px] overflow-hidden" id="hero-slider">

        @foreach ($sliders as $index => $slider)
            <div
                class="hero-slide absolute inset-0 transition-opacity duration-1000
            {{ $index === 0 ? 'opacity-100 z-20' : 'opacity-0 z-10' }}">

                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

                <img class="absolute inset-0 w-full h-full object-cover" src="{{ $slider->image }}"
                    alt="{{ $slider->name ?? '' }}" />

                <div class="relative z-20 container mx-auto px-6 h-full flex items-center">
                    <div class="max-w-full sm:max-w-xl md:max-w-3xl text-white">
                        <h1
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4 leading-snug sm:leading-tight">
                            {{ $slider->name ?? '' }}
                        </h1>

                        <p class="text-base sm:text-lg md:text-xl mb-6 text-gray-200">
                            {{ strip_tags($slider->description ?? '') }}
                        </p>

                        <div class="flex space-x-2 sm:space-x-4 flex-wrap">
                            <a class="bg-primary text-white px-4 sm:px-8 py-3 sm:py-4 rounded-full hover:bg-red-700 transition font-semibold text-sm sm:text-lg inline-flex items-center"
                                href="{{ route('frontend.admission') }}">
                                Apply Now
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
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
                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-snug sm:leading-tight">
                        {{ $setting['homepage_about_title1'] ?? '' }}
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {!! $setting['homepage_about_description'] ?? '' !!}</p>
                    <div class="grid grid-cols-2 gap-6 mb-8 mt-3">
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
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">
                        {{ $setting['homepage_notices_title'] ?? '' }}
                    </h2>

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
                    {{ $setting['homepage_mission_title'] ?? '' }}
                </div>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-snug sm:leading-tight">
                    {{ $setting['homepage_mission_title1'] ?? '' }}
                </h2>

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
                            <div class="border-t border-gray-200 pt-6 mt-3">
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
                    {{ $setting['homepage_message_title'] ?? '' }}
                </div>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-2 sm:mb-1 leading-snug sm:leading-tight">
                    {{ $setting['homepage_message_title1'] ?? '' }}
                </h2>

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                @foreach ($chairmanItems as $index => $item)
                    @php
                        $isFirst = $index == 0;
                        $gradient = $isFirst ? 'from-blue-50 to-indigo-50' : 'from-purple-50 to-pink-50';

                        $titleColor = $isFirst ? 'text-blue-600' : 'text-purple-600';
                        $quoteColor = $isFirst ? 'text-blue-600' : 'text-purple-600';
                    @endphp

                    <div class="bg-gradient-to-br {{ $gradient }} rounded-2xl shadow-xl overflow-hidden">
                        <div class="p-8">

                            {{-- Profile Section --}}
                            <div class="flex items-center space-x-6 mb-6">
                                <img class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg"
                                    src="{{ $item->image }}" alt="{{ $item->message_name }}">

                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900">
                                        {{ $item->message_name ?? '' }}
                                    </h3>

                                    <p class="{{ $titleColor }} font-semibold">
                                        {{ $item->message_post ?? 'School Authority' }}
                                    </p>

                                    @if ($item->extra_info)
                                        <div class="flex items-center mt-2 space-x-2">
                                            <i class="fa-solid fa-award text-yellow-500"></i>
                                            <span class="text-sm text-gray-600">
                                                {{ $item->extra_info }}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Message --}}
                            <div class="bg-white rounded-xl p-6 shadow-md">
                                <div class="flex mb-4">
                                    <i class="fa-solid fa-quote-left {{ $quoteColor }} text-3xl opacity-50"></i>
                                </div>

                                <p class="text-gray-700 leading-relaxed">
                                    {!! $item->short_description !!}
                                </p>

                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <div
                                        class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">

                                        <!-- Read Full Message -->
                                        <a class="{{ $titleColor }} font-semibold hover:opacity-80 transition flex items-center justify-center sm:justify-start"
                                            href="{{ route('frontend.message.show', $item->slug) }}">
                                            Read Full Message
                                            <i class="fa-solid fa-arrow-right ml-2"></i>
                                        </a>

                                        @php
                                            $email = null;

                                            if (!empty($item->bullet_points)) {
                                                foreach ($item->bullet_points as $bp) {
                                                    if (($bp['icon'] ?? '') === 'fa-envelope') {
                                                        $email = $bp['point'];
                                                        break;
                                                    }
                                                }
                                            }
                                        @endphp

                                        @if ($email)
                                            <div
                                                class="flex items-center justify-center sm:justify-end space-x-2 text-gray-500">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span class="text-sm">{{ $email }}</span>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50" id="academics-section">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <div class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    {{ $setting['homepage_academics_title'] ?? '' }}
                </div>

                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-snug sm:leading-tight">
                    {{ $setting['homepage_academics_title1'] ?? '' }}
                </h2>

            </div>

            @php
                $colors = [
                    [
                        'border' => 'border-blue-600',
                        'bg' => 'bg-blue-100',
                        'text' => 'text-blue-600',
                    ],
                    [
                        'border' => 'border-green-600',
                        'bg' => 'bg-green-100',
                        'text' => 'text-green-600',
                    ],
                    [
                        'border' => 'border-yellow-500',
                        'bg' => 'bg-yellow-100',
                        'text' => 'text-yellow-600',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

                @foreach ($academy as $acd)
                    @php
                        $color = $colors[$loop->index % 3];
                        $points = $acd->points ?? [];
                    @endphp

                    <div class="bg-white rounded-2xl shadow-xl p-8 card-hover border-t-4 {{ $color['border'] }}">

                        <div class="{{ $color['bg'] }} w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <i class="fa-solid {{ $acd->icon ?? 'fa-school' }} {{ $color['text'] }} text-3xl"></i>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            {{ $acd->name }}
                        </h3>

                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ \Illuminate\Support\Str::limit(strip_tags($acd->description), 120) }}
                        </p>

                        <ul class="space-y-3 mb-6">
                            @foreach ($points as $point)
                                <li class="flex items-center text-gray-700">
                                    <i class="fa-solid fa-check-circle {{ $color['text'] }} mr-3"></i>
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a class="{{ $color['text'] }} font-semibold hover:opacity-80 transition inline-flex items-center"
                            href="{{ route('frontend.academics', $acd->slug) }}">
                            Learn More
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section class="py-20 bg-white" id="why-choose-us">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <div class="inline-block bg-yellow-100 text-yellow-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    {{ $setting['homepage_whychoose_title'] ?? '' }}
                </div>

                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-snug sm:leading-tight">
                    {{ $setting['homepage_whychoose_title1'] ?? '' }}
                </h2>

            </div>

            @php
                $colors = [
                    ['from' => 'from-blue-500', 'to' => 'to-blue-600'],
                    ['from' => 'from-green-500', 'to' => 'to-green-600'],
                    ['from' => 'from-purple-500', 'to' => 'to-purple-600'],
                    ['from' => 'from-orange-500', 'to' => 'to-orange-600'],
                    ['from' => 'from-red-500', 'to' => 'to-red-600'],
                    ['from' => 'from-teal-500', 'to' => 'to-teal-600'],
                    ['from' => 'from-pink-500', 'to' => 'to-pink-600'],
                    ['from' => 'from-indigo-500', 'to' => 'to-indigo-600'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                @foreach ($whyChooseUsItems as $item)
                    @php
                        $color = $colors[$loop->index % 8];
                    @endphp

                    <div class="text-center card-hover">

                        <div
                            class="bg-gradient-to-br {{ $color['from'] }} {{ $color['to'] }} w-24 h-24 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                            <i class="fa-solid {{ $item->icon ?? 'fa-star' }} text-white text-4xl"></i>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            {{ $item->name }}
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            {{ Str::words(strip_tags($item->description), 18) }}
                        </p>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50" id="facilities-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-primary text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    {{ $setting['homepage_facilities_title'] ?? '' }}
                </div>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-snug sm:leading-tight">
                    {{ $setting['homepage_facilities_title1'] ?? '' }}</h2>

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($facilitiesItems as $facilities)
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ $facilities->image }}"
                                alt="{{ $facilities->name ?? 'Facility Image' }}" />
                        </div>
                        <div class="p-8">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid {{ $facilities->icon ?? 'fa-flask' }} text-blue-600 text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">{{ $facilities->name ?? 'Facility Name' }}
                                </h3>
                            </div>
                            <p class="text-gray-600 mb-4 leading-relaxed"> {!! \Illuminate\Support\Str::words(strip_tags($facilities->description), 130, '...') !!}</p>
                            <ul class="space-y-2">
                                @if ($facilities->points)
                                    @foreach ($facilities->points as $point)
                                        <li class="flex items-center text-gray-700">
                                            <i class="fa-solid fa-check text-blue-600 mr-3"></i>
                                            <span>{{ $point }}</span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-white" id="news-events">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <div class="inline-block bg-blue-100 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        {{ $setting['homepage_blog_title'] ?? '' }}
                    </div>
                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-snug sm:leading-tight">
                        {{ $setting['homepage_blog_title1'] ?? '' }}</h2>
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
                    {{ $setting['homepage_testimonials_title'] ?? '' }}
                </div>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-snug sm:leading-tight mb-4">
                    {{ $setting['homepage_testimonials_title1'] ?? '' }}
                </h2>
            </div>

            @if ($reviews->count() > 3)
                <!-- Swiper Slider -->
                <div class="swiper reviewSwiper">
                    <div class="swiper-wrapper">

                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover h-full">

                                    <div class="flex items-center space-x-4 mb-6">
                                        <img class="w-16 h-16 rounded-full object-cover border-4 border-purple-100"
                                            src="{{ $review->image }}" alt="{{ $review->name ?? '' }}" />
                                        <div>
                                            <h4 class="font-bold text-gray-900">{{ $review->name ?? '' }}</h4>
                                            <p class="text-sm text-gray-600">{{ $review->position ?? '' }}</p>
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

                                    <p class="text-gray-700 leading-relaxed italic">
                                        {!! $review->description ?? '' !!}
                                    </p>

                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- dots -->
                    <div class="swiper-pagination mt-10"></div>
                </div>
            @else
                <!-- Grid when 3 or fewer -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($reviews as $review)
                        <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                            {!! $review->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>

    <section class="py-20 bg-white" id="gallery-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block bg-blue-100 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    {{ $setting['homepage_gallery_title'] ?? '' }}
                </div>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-snug sm:leading-tight mb-4">
                    {{ $setting['homepage_gallery_title1'] ?? '' }}</h2>

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
                        {{ $setting['homepage_contact_title'] ?? '' }}
                    </div>
                    <h2 class="text-5xl font-bold text-white mb-6 leading-tight">
                        {{ $setting['homepage_contact_title1'] ?? '' }}</h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                        {{ $setting['homepage_contact_description'] ?? '' }}</p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center space-x-4">
                            <div
                                class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-check text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">
                                    {{ $setting['homepage_contact_features'] ?? '' }}</div>

                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-check text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">
                                    {{ $setting['homepage_contact_features1'] ?? '' }}</div>

                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-check text-white text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">
                                    {{ $setting['homepage_contact_features2'] ?? '' }}</div>

                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button
                            class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-50 transition shadow-xl">
                            <i class="fa-solid fa-file-alt mr-2"></i>Apply Now
                        </button>
                        {{-- <button
                            class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition">
                            <i class="fa-solid fa-download mr-2"></i>Download Brochure
                        </button> --}}
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

        //swiper for reviews
        document.addEventListener("DOMContentLoaded", function() {

            if (document.querySelector('.reviewSwiper')) {

                new Swiper(".reviewSwiper", {
                    loop: true,
                    spaceBetween: 30,
                    speed: 450, // slide animation speed

                    autoplay: {
                        delay: 2000, // time between slides
                        disableOnInteraction: false,
                    },

                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },

                    breakpoints: {
                        0: {
                            slidesPerView: 1
                        },
                        640: {
                            slidesPerView: 1
                        },
                        768: {
                            slidesPerView: 2
                        },
                        1024: {
                            slidesPerView: 3
                        }
                    }
                });

            }
        });
    </script>
@endsection
