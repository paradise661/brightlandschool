@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['event_seo_title'] ?? '',
        'title' => $setting['event_seo_title'] ?? '',
        'description' => $setting['event_seo_description'] ?? '',
        'keyword' => $setting['event_seo_keywords'] ?? '',
        'schema' => $setting['event_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .event-card {
            transition: all 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
    </style>
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['events_breadcrum_image'] ?? '' }}"
            alt="Events" />

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
                        <li class="text-white font-medium">
                            Event
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="upcoming-events">
        <div class="container mx-auto px-4 md:px-6">

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($events as $event)
                    <div class="event-card bg-white rounded-2xl overflow-hidden shadow-lg" id="event-1">
                        <div class="relative h-48 overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ $event->image }}"
                                alt="{{ $event->name ?? '' }}" />
                            <div
                                class="absolute top-4 left-4 bg-primary text-white px-4 py-2 rounded-full font-bold text-sm">
                                <i class="fa-solid {{ $event->icon ?? 'fa-calendar' }} mr-2"></i>
                                {{ $event->category->name ?? '' }}
                            </div>
                            <div
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-center">
                                <div class="text-2xl font-bold text-primary">
                                    {{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d') : '25' }}
                                </div>
                                <div class="text-xs text-gray-600">
                                    {{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('M') : 'JAN' }}
                                </div>
                            </div>

                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">{{ $event->name ?? '' }}</h3>

                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-gray-600 text-sm">
                                    <i class="fa-solid fa-clock text-primary mr-3 w-4"></i>
                                    <span>
                                        {{ $event->start_time ? \Carbon\Carbon::parse($event->start_time)->format('h:i A') : '--' }}
                                        -
                                        {{ $event->end_time ? \Carbon\Carbon::parse($event->end_time)->format('h:i A') : '--' }}
                                    </span>
                                </div>

                                <div class="flex items-center text-gray-600 text-sm">
                                    <i class="fa-solid fa-location-dot text-primary mr-3 w-4"></i>
                                    <span>{{ $event->location ?? 'School Auditorium' }}</span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                {{ Str::limit(strip_tags($event->description ?? ''), 135) }}</p>
                            <div class="flex items-center justify-between mt-4">
                                <a class="inline-flex items-center text-primary font-semibold hover:text-blue-700 transition"
                                    href="{{ route('frontend.events.show', ['slug' => $event->slug]) }}">
                                    <span>Learn More</span>
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class="fa-solid fa-eye mr-2"></i>
                                    <span>{{ $event->views ?? 0 }} Views</span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="past-events">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">
                        {{ $setting['events_title'] ?? '' }}</h2>

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
@section('scripts')
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            alert('Mobile menu functionality would be implemented here');
        });

        const scrollToTopBtn = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                scrollToTopBtn.classList.add('opacity-100');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                scrollToTopBtn.classList.remove('opacity-100');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('bg-primary', 'text-white');
            });
        });
    </script>
@endsection
