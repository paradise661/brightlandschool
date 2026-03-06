@extends('layouts.frontend.master')
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .gallery-item {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90vh;
            object-fit: contain;
        }
    </style>
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['gallery_breadcrum_image'] ?? '' }}"
            alt="students gallery" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Gallery
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
                            Gallery
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 gallery-album" id="annual-day-album" data-category="events">
        <div class="container mx-auto px-4 md:px-6">
            @foreach ($albums as $album)
                <div class="mb-16 md:mb-20">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center">
                            <div class="w-1 h-10 bg-primary mr-4"></div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                                    {{ $album->name ?? '' }}
                                </h2>
                                <p class="text-gray-600 text-sm md:text-base">
                                    {{ Str::limit(strip_tags($album->description ?? ''), 100) }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-6">
                            <div class="flex items-center space-x-2 text-gray-600">
                                <i class="fa-solid fa-images"></i>
                                <span class="text-sm md:text-base">{{ $album->galleries_count }} Photos</span>
                            </div>

                            <a class="text-primary font-semibold text-sm md:text-base inline-flex items-center gap-1"
                                href="{{ route('frontend.gallery.show', $album->slug) }}">
                                View All
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        @foreach ($album->galleries as $gallery)
                            <div class="overflow-hidden rounded-xl shadow-lg">
                                <a class="album-card block group" data-fancybox="gallery-{{ $album->slug }}"
                                    data-caption="{{ $gallery->title ?? $album->name }}" href="{{ $gallery->image }}">
                                    <img class="w-full h-64 object-cover rounded-lg transform group-hover:scale-105 transition duration-300"
                                        src="{{ $gallery->image }}" alt="{{ $gallery->title ?? 'Gallery Image' }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
