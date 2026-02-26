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
                            <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-1">{{ $team->name ?? '' }}
                            </h3>
                            <p class="text-primary font-semibold text-sm mb-3">{{ $team->position ?? '' }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
