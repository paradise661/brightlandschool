@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $item->name,
        'title' => $item->seo_title ?? $item->name,
        'description' => $item->seo_description ?? '',
        'keyword' => $item->seo_description ?? '',
        'schema' => $item->seo_schema ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $item->banner_image }}" alt="{{ $item->name }}" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    {{ $item->name ?? '' }}
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
                            <a class="text-blue-100 hover:text-white transition" href="/">
                                Message
                            </a>
                        </li>

                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            {{ $item->name ?? '' }}
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 lg:py-24 bg-gray-50" id="chairman-full-message">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-6xl mx-auto">

                <div class="grid lg:grid-cols-5 gap-8 lg:gap-12 mb-12">
                    <div class="lg:col-span-2 order-2 lg:order-1">
                        <div class="sticky top-24">
                            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-3xl overflow-hidden shadow-2xl">
                                <div class="h-80 md:h-96 overflow-hidden">
                                    <img class="w-full h-full object-cover" src="{{ $item->image }}"
                                        alt="{{ $item->message_name ?? '' }}" />
                                </div>
                                <div class="p-8 text-white">
                                    <h3 class="text-2xl md:text-3xl font-heading font-bold mb-2">
                                        {{ $item->message_name ?? '' }}</h3>
                                    <p class="text-gray-300 font-semibold mb-4 text-lg">{{ $item->message_post ?? '' }}</p>
                                    <div class="space-y-3 text-sm">
                                        @if (!empty($item->bullet_points))
                                            @foreach ($item->bullet_points as $point)
                                                <div class="flex items-center">
                                                    <i
                                                        class="fa-solid {{ $point['icon'] ?? 'fa-circle' }} mr-3 text-lg"></i>
                                                    <span>{{ $point['point'] ?? '' }}</span>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-3 order-1 lg:order-2">

                        <div class="prose prose-lg max-w-none text-justify">
                            {!! $item->description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
