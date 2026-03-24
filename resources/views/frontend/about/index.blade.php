@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['about_seo_title'] ?? '',
        'title' => $setting['about_seo_title'] ?? '',
        'description' => $setting['about_seo_description'] ?? '',
        'keyword' => $setting['about_seo_keywords'] ?? '',
        'schema' => $setting['about_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['about_breadcrum_image'] ?? '' }}"
            alt="About Image" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    About Us
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
                            About Us
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white" id="welcome-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        {{ $setting['aboutpage_about_title'] ?? '' }}
                    </div>
                    <h2 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        {{ $setting['aboutpage_about_title1'] ?? '' }}</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {!! $setting['aboutpage_about_description'] ?? '' !!}</p>
                    <div class="grid grid-cols-2 gap-6 mb-8 mt-3">
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['aboutpage_about_feature'] ?? '' }}
                                </h4>
                                {{-- <p class="text-sm text-gray-600">Experienced educators dedicated to excellence</p> --}}
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['aboutpage_about_feature1'] ?? '' }}
                                </h4>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['aboutpage_about_feature2'] ?? '' }}
                                </h4>

                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-0">{{ $setting['aboutpage_about_feature3'] ?? '' }}
                                </h4>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <img class="w-full h-64 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['aboutpage_about_image'] }}" alt="image" />
                            <img class="w-full h-48 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['aboutpage_about_image1'] }}" alt="image" />
                        </div>
                        <div class="space-y-4 mt-8">
                            <img class="w-full h-48 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['aboutpage_about_image2'] }}" alt="image" />
                            <img class="w-full h-64 object-cover rounded-2xl shadow-lg"
                                src="{{ $setting['aboutpage_about_image3'] }}" alt="image" />
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-yellow-400 rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold text-gray-900">{{ $setting['aboutpage_about_years'] ?? '25+' }}+
                        </div>
                        <div class="text-sm font-semibold text-gray-700">
                            {{ $setting['aboutpage_about_years_text'] ?? 'Years of Excellence' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gradient-to-br from-primary to-blue-600 text-white"
        id="vision-mission-values">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-heading font-bold mb-4">{{ $setting['mission_title'] ?? '' }}
                </h2>
                <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto">
                    {{ $setting['mission_title1'] ?? '' }}</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($vmvItems as $mission)
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/20 transition">
                        <div
                            class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                            <i class="fa-solid {{ $mission->icon ?? 'fa-eye' }} text-2xl md:text-3xl"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-3 md:mb-4">{{ $mission->name ?? '' }}</h3>
                        <p class="text-blue-100 text-sm md:text-base leading-relaxed">
                            {{ strip_tags($mission->description ?? '') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="leadership-team">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span
                    class="text-secondary font-semibold text-sm uppercase tracking-wider">{{ $setting['team_title'] ?? '' }}</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">
                    {{ $setting['team_title1'] ?? '' }}
                </h2>

            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                @foreach ($teams as $team)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ $team->image }}"
                                alt="{{ $team->name ?? '' }}" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-1">
                                {{ $team->name ?? '' }}
                            </h3>
                            <p class="text-primary font-semibold text-sm mb-3">{{ $team->position ?? '' }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 flex justify-center">
                <a class="bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-secondary transition"
                    href="{{ route('frontend.teachers') }}">
                    View More
                </a>
            </div>
        </div>
    </section>

    @php

        $colors = [
            [
                'from' => 'from-blue-50',
                'to' => 'to-white',
                'border' => 'border-blue-100',
                'bg' => 'bg-primary/10',
                'icon' => 'text-primary',
            ],
            [
                'from' => 'from-green-50',
                'to' => 'to-white',
                'border' => 'border-green-100',
                'bg' => 'bg-green-600/10',
                'icon' => 'text-green-600',
            ],
            [
                'from' => 'from-purple-50',
                'to' => 'to-white',
                'border' => 'border-purple-100',
                'bg' => 'bg-purple-600/10',
                'icon' => 'text-purple-600',
            ],
            [
                'from' => 'from-orange-50',
                'to' => 'to-white',
                'border' => 'border-orange-100',
                'bg' => 'bg-accent/10',
                'icon' => 'text-accent',
            ],
            [
                'from' => 'from-red-50',
                'to' => 'to-white',
                'border' => 'border-red-100',
                'bg' => 'bg-secondary/10',
                'icon' => 'text-secondary',
            ],
            [
                'from' => 'from-teal-50',
                'to' => 'to-white',
                'border' => 'border-teal-100',
                'bg' => 'bg-teal-600/10',
                'icon' => 'text-teal-600',
            ],
        ];
    @endphp

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="why-excellence">
        <div class="container mx-auto px-4 md:px-6">

            <div class="text-center mb-12 md:mb-16">
                <span
                    class="text-secondary font-semibold text-sm uppercase tracking-wider">{{ $setting['about_choose_title'] ?? '' }}</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">
                    {{ $setting['about_choose_title1'] ?? '' }}
                </h2>

            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                @foreach ($whyChooseUsItems as $item)
                    @php
                        $color = $colors[$loop->index % 6];
                    @endphp

                    <div
                        class="bg-gradient-to-br {{ $color['from'] }} {{ $color['to'] }} rounded-2xl p-6 md:p-8 border-2 {{ $color['border'] }} hover:border-primary hover:shadow-xl transition">
                        <div
                            class="w-14 h-14 md:w-16 md:h-16 {{ $color['bg'] }} rounded-full flex items-center justify-center mb-4 md:mb-6">
                            <i
                                class="fa-solid {{ $item->icon ?? 'fa-star' }} {{ $color['icon'] }} text-xl md:text-2xl"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">
                            {{ $item->name }}
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">
                            {{ Str::words(strip_tags($item->description ?? ''), 20) }}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
