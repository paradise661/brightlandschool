@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['testimonial_seo_title'] ?? '',
        'title' => $setting['testimonial_seo_title'] ?? '',
        'description' => $setting['testimonial_seo_description'] ?? '',
        'keyword' => $setting['testimonial_seo_keywords'] ?? '',
        'schema' => $setting['testimonial_seo_schema'] ?? '',
    ])
@endsection
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
                    Reviews
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
                            Reviews
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50" id="testimonials-section">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach ($reviews as $review)
                    <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
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
                        <p class="text-gray-700 leading-relaxed italic">{!! $review->description ?? '' !!} </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
