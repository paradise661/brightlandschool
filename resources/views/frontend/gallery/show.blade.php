@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $album->name,
        'title' => $album->seo_title ?? $album->name,
        'description' => $album->seo_description ?? '',
        'keyword' => $album->seo_description ?? '',
        'schema' => $album->seo_schema ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['gallery_breadcrum_image1'] ?? '' }}"
            alt="students Gallery" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    {{ $album->name ?? '' }}
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
                        <li>
                            <a class="text-blue-100 hover:text-white transition" href="{{ route('frontend.gallery') }}">
                                Gallery
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            {{ $album->name ?? '' }}
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <section class="py-20 bg-white" id="gallery-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

                @foreach ($album->galleries as $photo)
                    <div class="h-64 overflow-hidden rounded-xl shadow-lg">
                        <a class="block group" data-fancybox="album-{{ $album->slug }}"
                            data-caption="{{ $photo->name ?? $album->name }}" href="{{ $photo->image }}">
                            <img class="w-full h-full object-cover transform group-hover:scale-105 transition duration-300"
                                src="{{ $photo->image }}" alt="{{ $photo->name ?? '' }}">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
