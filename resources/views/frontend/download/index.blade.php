@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['download_seo_title'] ?? '',
        'title' => $setting['download_seo_title'] ?? '',
        'description' => $setting['download_seo_description'] ?? '',
        'keyword' => $setting['download_seo_keywords'] ?? '',
        'schema' => $setting['download_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <style>
        .swiper-slide {
            width: auto;
            /* allow button to define width */
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .resource-card {
            transition: all 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .notice-card {
            transition: all 0.3s ease;
        }

        .notice-card:hover {
            transform: translateX(5px);
        }

        .tab-btn.active {
            border-bottom: 3px solid #1e40af;
            color: #1e40af;
        }
    </style>
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['downloads_breadcrum_image'] ?? '' }}"
            alt="Downloads" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Downloads
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
                            Downloads
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <div class="tab-content" id="downloads-tab">
        <section class="py-8 bg-gray-50" id="download-filters">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">

                    @php
                        $useSwiper = $categories->count() > 7;
                    @endphp
                    <div class="w-full md:w-auto">
                        <div
                            class="{{ $useSwiper ? 'swiper mySwiper' : 'flex flex-wrap gap-3 justify-center md:justify-start' }}">
                            <div class="{{ $useSwiper ? 'swiper-wrapper' : 'flex flex-wrap gap-3' }}">
                                <div class="{{ $useSwiper ? 'swiper-slide' : '' }}">
                                    <button
                                        class="download-filter-btn px-6 py-2 bg-primary text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">
                                        All Resources
                                    </button>
                                </div>

                                @foreach ($categories as $category)
                                    <div class="{{ $useSwiper ? 'swiper-slide' : '' }}">
                                        <button
                                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">
                                            {{ $category->name }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>

                            @if ($useSwiper)
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            @endif
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 w-full md:w-auto">
                        <div class="relative w-full md:w-64">
                            <input
                                class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm w-full"
                                type="text" placeholder="Search resources...">
                            <i
                                class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-white" id="download-resources">
            <div class="container mx-auto px-4 md:px-6">

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @forelse ($downloads as $download)
                        <div
                            class="resource-card bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 shadow-lg border border-blue-100">

                            <div class="flex items-start justify-between mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-file-pdf text-white text-2xl"></i>
                                </div>
                                <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-semibold">
                                    PDF
                                </span>
                            </div>

                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">
                                {{ $download->name }}
                            </h3>

                            <p class="text-gray-600 text-sm mb-4">
                                {{ Str::limit(strip_tags($download->description), 120) }}
                            </p>

                            <div class="flex flex-wrap items-center justify-between text-sm text-gray-500 mb-4 gap-2">
                                <span>
                                    <i class="fa-solid fa-calendar mr-2"></i>
                                    {{ $download->created_at->format('M d, Y') }}
                                </span>

                                <span>
                                    <i class="fa-solid fa-file-arrow-down mr-2"></i>
                                    {{ $download->file_size_formatted }}
                                </span>

                                <span class="text-gray-500 text-xs">
                                    <i class="fa-solid fa-download mr-2 text-primary"></i>
                                    {{ number_format($download->views) }} Downloads
                                </span>
                            </div>

                            <a class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center"
                                href="{{ route('downloads.file', $download->slug) }}">
                                <i class="fa-solid fa-download mr-2"></i>Download
                            </a>

                        </div>
                    @empty
                        <p class="text-gray-500">No downloads available.</p>
                    @endforelse

                </div>

            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($useSwiper)
                new Swiper('.mySwiper', {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    freeMode: true,
                    grabCursor: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            @endif
        });
    </script>
@endsection
