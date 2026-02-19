@extends('layouts.frontend.master')
@section('content')
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
                    Facilities
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
                            Facilities
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="academic-facilities">
        <div class="container mx-auto px-4 md:px-6">

            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 mb-8 md:mb-12">
                @foreach ($facilitiesItems as $facilities)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition"
                        id="smart-classrooms">
                        <div class="h-64 md:h-80 overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ $facilities->image }}"
                                alt="modern smart classroom with interactive whiteboard, students using tablets, bright and spacious, contemporary design" />
                        </div>
                        <div class="p-6 md:p-8">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                    <i class="fa-solid {{ $facilities->icon ?? '' }} text-primary text-xl md:text-2xl"></i>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                                    {{ $facilities->name ?? '' }}</h3>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm md:text-base"> {!! \Illuminate\Support\Str::words($facilities->description, 130, '...') !!}</p>
                            <ul class="space-y-2 text-gray-700 text-sm md:text-base mt-3">
                                @if ($facilities->points)
                                    @foreach ($facilities->points as $point)
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
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

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="sports-facilities">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Physical Excellence</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Sports & Recreation
                    Facilities
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($sportFacilitiesItems as $sports)
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 border-2 border-blue-100 hover:border-primary hover:shadow-xl transition"
                        id="sports-playground">
                        <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-full object-cover" src="{{ $sports->image }}"
                                alt="school outdoor playground with running track, green field, students playing sports, sunny day" />
                        </div>
                        <div
                            class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i
                                class="fa-solid {{ $sports->icon ?? 'fa-person-running' }} text-primary text-xl md:text-2xl"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">{{ $sports->name ?? '' }}
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base"> {!! \Illuminate\Support\Str::words(strip_tags($sports->description), 130, '...') !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="support-facilities">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Student Support</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Support & Wellness
                    Facilities</h2>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($supportFacilitiesItems as $support)
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 border-2 border-blue-100 hover:border-primary hover:shadow-xl transition"
                        id="support-transport">
                        <div
                            class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid {{ $support->icon ?? 'fa-bus' }} text-primary text-xl md:text-2xl"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">
                            {{ $support->name ?? 'Transport Facility' }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base"> {!! \Illuminate\Support\Str::words(strip_tags($support->description), 110, '...') !!}</p>
                        <ul class="space-y-2 text-gray-700 text-sm">
                            @if ($support->points)
                                @foreach ($support->points as $point)
                                    <li class="flex items-start">
                                        <i class="fa-solid fa-check text-primary mr-2 mt-1 flex-shrink-0"></i>
                                        <span>{{ $point }}</span>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
