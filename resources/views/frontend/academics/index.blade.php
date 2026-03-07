@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $academy->name,
        'title' => $academy->seo_title ?? $academy->name,
        'description' => $academy->seo_description ?? '',
        'keyword' => $academy->seo_description ?? '',
        'schema' => $academy->seo_schema ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $academy->banner_image }}"
            alt="{{ $academy->name ?? '' }}" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    {{ $academy->name ?? '' }}
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
                            <a class="text-blue-100 hover:text-white transition" href="#">
                                Academics
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            {{ $academy->name ?? '' }}
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 md:px-6">

            <div class="grid lg:grid-cols-3 gap-10">

                <!-- LEFT CONTENT -->
                <div class="lg:col-span-2">

                    <!-- Featured Image -->
                    <div class="mb-8">
                        <img class="w-full h-[350px] object-cover rounded-2xl shadow-xl" src="{{ $academy->image }}"
                            alt="{{ $academy->name ?? '' }}">
                    </div>

                    <!-- Content -->
                    <div class="prose max-w-none text-gray-700 leading-relaxed">
                        {!! $academy->description ?? '' !!}

                    </div>

                </div>

                <!-- RIGHT SIDEBAR -->
                <aside class="lg:col-span-1">

                    <div class="sticky top-24 space-y-8">

                        <!-- Recent Pages -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6 border-b pb-3">
                                More Academic
                            </h3>

                            <div class="space-y-5">
                                @foreach ($popular_academy as $popular)
                                    <a class="flex items-center gap-4 group"
                                        href="{{ route('frontend.academics', $popular->slug) }}">
                                        <img class="w-16 h-16 object-cover rounded-lg shadow-md group-hover:scale-105 transition"
                                            src="{{ $popular->image }}" alt="{{ $popular->name ?? '' }}">
                                        <div>
                                            <h4
                                                class="text-sm font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                                {{ $popular->name ?? '' }}
                                            </h4>

                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>

                        <!-- Call To Action -->
                        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl p-6 shadow-xl">
                            <h4 class="text-lg font-semibold mb-2">
                                Want More Academic Details?
                            </h4>
                            <p class="text-sm mb-4 opacity-90">
                                Contact our academic department for detailed information.
                            </p>
                            <a class="inline-block bg-white text-blue-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-100 transition"
                                href="{{ route('contact') }}">
                                Contact Now →
                            </a>
                        </div>

                    </div>

                </aside>

            </div>

        </div>
    </section>
@endsection
