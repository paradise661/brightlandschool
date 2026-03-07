@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $event->name,
        'title' => $event->seo_title ?? $event->name,
        'description' => $event->seo_description ?? '',
        'keyword' => $event->seo_description ?? '',
        'schema' => $event->seo_schema ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $event->banner_image }}"
            alt="{{ $event->name ?? 'Event Banner Image' }}" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Event
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
                            <a class="text-blue-100 hover:text-white transition" href="{{ route('frontend.events') }}">
                                Event
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            {{ $event->name ?? '' }}
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <article class="py-12 md:py-16 lg:py-20" id="blog-article">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6 md:mb-8">

                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-gray-900 mb-6 leading-tight">
                        {{ $event->name ?? '' }}</h1>

                    <div
                        class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-gray-200">
                        <div class="flex items-center space-x-4">
                            <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold">
                                {{ $event->category->name ?? 'Uncategorized' }}
                            </span>

                        </div>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                            <span class="flex items-center">
                                <i class="fa-solid fa-calendar mr-2 text-primary"></i>
                                {{ $event->created_at->format('F d, Y') }}
                            </span>

                            <span class="flex items-center"><i class="fa-solid fa-eye mr-2 text-primary"></i>
                                {{ $event->views ?? 0 }} </span>
                        </div>
                    </div>
                </div>

                <img class="w-full rounded-2xl shadow-xl mb-8 md:mb-10" src="{{ $event->image }}"
                    alt="students participating in science fair, innovative projects, colorful displays, excited children">

                <div class="prose prose-lg max-w-none" id="article-content">
                    {!! $event->description ?? '' !!}
                </div>
            </div>
        </div>
    </article>

    <section class="py-12 md:py-16 bg-gray-50" id="past-events">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Past Events
                        Highlights</h2>
                    {{-- <p class="text-gray-600 text-sm md:text-base mt-2">Memorable moments from our recent events</p> --}}
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 md:gap-8">

                @foreach ($popular_events as $popular_event)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition"
                        id="past-event-1">
                        <div class="grid md:grid-cols-2">
                            <div class="h-64 overflow-hidden">
                                <img class="w-full h-full object-cover" src="{{ $popular_event->image }}"
                                    alt="{{ $popular_event->name ?? 'Event Image' }}" />
                            </div>
                            <div class="p-6">

                                <!-- Date + Views -->
                                <div class="flex items-center justify-between mb-3">
                                    <div
                                        class="inline-block bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ $popular_event->event_date ? \Carbon\Carbon::parse($popular_event->event_date)->format('M d, Y') : 'Jan 25, 2024' }}
                                    </div>

                                    <div class="flex items-center text-gray-500 text-xs">
                                        <i class="fa-solid fa-eye mr-1"></i>
                                        <span>{{ $popular_event->views ?? 120 }}</span>
                                    </div>
                                </div>

                                <h3 class="text-lg font-heading font-bold text-gray-900 mb-3">
                                    {{ $popular_event->name ?? 'Annual Day Celebration' }}
                                </h3>

                                <p class="text-gray-600 text-sm mb-4 ">
                                    {{ Str::limit(strip_tags($popular_event->description ?? ''), 135) }}
                                </p>

                                <a class="inline-flex items-center text-primary font-semibold text-sm hover:text-red-600 transition duration-200"
                                    href="{{ route('frontend.events.show', ['slug' => $popular_event->slug]) }}">
                                    <span>View Events</span>
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
