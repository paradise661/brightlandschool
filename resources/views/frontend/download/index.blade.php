@extends('layouts.frontend.master')
@section('content')
    <style>
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
        <div class="absolute inset-0 bg-gradient-to-r from-primary/60 to-blue-600/50 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/88ea40e48f-8d0182e2f55282f6b671.png"
            alt="students reading books in modern library" />

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
                        class="flex items-center justify-center space-x-2 text-sm bg-white/10 backdrop-blur-md px-4 py-2 rounded-full">
                        <li>
                            <a class="text-blue-100 hover:text-white transition" href="/">
                                Home
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            downloads
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    {{-- <section class="bg-white sticky top-[72px] z-40 shadow-md" id="tab-navigation">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-center space-x-8 md:space-x-16">
                <button class="tab-btn active py-4 px-6 text-base md:text-lg font-semibold transition" data-tab="downloads">
                    <i class="fa-solid fa-download mr-2"></i>Downloads
                </button>
                <button class="tab-btn py-4 px-6 text-base md:text-lg font-semibold text-gray-600 transition"
                    data-tab="notices">
                    <i class="fa-solid fa-bell mr-2"></i>Notices
                </button>
            </div>
        </div>
    </section> --}}

    <div class="tab-content" id="downloads-tab">
        <section class="py-8 bg-gray-50" id="download-filters">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <button
                            class="download-filter-btn px-6 py-2 bg-primary text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">All
                            Resources</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Academic</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Forms</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Syllabus</button>
                        <button
                            class="download-filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Circulars</button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input
                                class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm w-64"
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
@endsection
