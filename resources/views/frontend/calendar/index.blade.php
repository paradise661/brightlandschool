@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['admission_seo_title'] ?? '',
        'title' => $setting['admission_seo_title'] ?? '',
        'description' => $setting['admission_seo_description'] ?? '',
        'keyword' => $setting['admission_seo_keywords'] ?? '',
        'schema' => $setting['admission_seo_schema'] ?? '',
    ])
@endsection

@section('content')
    <div class="mb-8">
        <div class="flex gap-6 p-6 w-full">

            <!-- Left Column: Calendar (2/3 width) -->
            <div class="w-2/3">
                @include('frontend.calendar.calendar') <!-- your existing calendar -->
            </div>

            <!-- Right Column: Static Events List (1/3 width) -->
            <div class="w-1/3 overflow-y-auto bg-gray-50 p-5 rounded-xl border">
                <h3 class="text-xl font-semibold mb-5 text-gray-800">Upcoming Events</h3>

                <div class="space-y-4">
                    @forelse($upcoming_events as $event)
                        <a class="block" href="{{ route('frontend.events.show', ['slug' => $event->slug]) }}">

                            <div
                                class="bg-white border border-gray-200 p-4 rounded-xl shadow-sm hover:shadow-md hover:border-blue-400 transition duration-200">

                                <!-- Event Name -->
                                <h4 class="text-md font-semibold text-gray-900 mb-1">
                                    {{ $event->name }}
                                </h4>

                                <!-- Date -->
                                <p class="text-sm text-gray-500">
                                    {{ $event->start_date }}
                                    @if (!empty($event->end_date) && $event->end_date != $event->start_date)
                                        <span class="mx-1">–</span> {{ $event->end_date }}
                                    @endif
                                </p>

                            </div>

                        </a>
                    @empty
                        <div class="bg-gray-200 text-gray-600 p-4 rounded-xl text-sm">
                            No events available
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
@endsection
