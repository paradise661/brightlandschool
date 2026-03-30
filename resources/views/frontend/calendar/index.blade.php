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
            <div class="w-1/3 overflow-y-auto bg-gray-100 p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Upcoming Events</h3>

                <!-- Static event items -->
                <div class="space-y-3">
                    @forelse($upcoming_events as $event)
                        <div class="bg-blue-500 text-white p-3 rounded-lg shadow cursor-pointer">
                            <strong>{{ $event->name }}</strong><br>
                            {{ $event->start_date }}
                            @if (!empty($event->end_date) && $event->end_date != $event->start_date)
                                to {{ $event->end_date }}
                            @endif
                        </div>
                    @empty
                        <div class="bg-gray-300 text-gray-700 p-3 rounded-lg shadow">
                            No events available
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
@endsection
