@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['team_seo_title'] ?? '',
        'title' => $setting['team_seo_title'] ?? '',
        'description' => $setting['team_seo_description'] ?? '',
        'keyword' => $setting['team_seo_keywords'] ?? '',
        'schema' => $setting['team_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['teacher_breadcrum_image'] ?? '' }}"
            alt="Teacher Image" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Teachers
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
                            Teachers
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="leadership-team">
        <div class="container mx-auto px-4 md:px-6">

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
                            <p class="text-primary font-semibold text-sm mb-3">
                                {{ $team->position ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{--  Group Photo Section --}}
            @if (!empty($setting['teacher_group_photo']))
                <div class="mt-12 md:mt-16 text-center">

                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900 mb-6">
                        {{ $setting['teacher_group_title'] ?? 'Our Team Together' }}
                    </h2>

                    <div class="mx-auto rounded-2xl overflow-hidden shadow-xl">
                        <img class="w-full h-auto object-cover" src="{{ $setting['teacher_group_photo'] }}"
                            alt="{{ $setting['teacher_group_title'] ?? 'Team Group Photo' }}">
                    </div>

                </div>
            @endif
        </div>
    </section>
@endsection
