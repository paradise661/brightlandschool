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
    <div class="mb-10 px-3 md:px-6">

        <div class="flex flex-col lg:flex-row gap-6 md:gap-8">

            <!-- Calendar -->
            <div class="w-full lg:w-2/3">
                @include('frontend.calendar.calendar')
            </div>

            <!-- Upcoming Events -->
            <div class="w-full lg:w-1/3 mt-5 lg:mt-5">
                <div
                    class="bg-gray-50 p-5 rounded-3xl border shadow-lg
                        lg:sticky lg:top-6
                        max-h-[70vh] lg:max-h-[85vh] overflow-y-auto">

                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-5 flex justify-between items-center">
                        <span>Upcoming Events</span>
                        <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded-md">
                            {{ count($upcoming_events) }}
                        </span>
                    </h3>

                    <div class="space-y-4">
                        @forelse($upcoming_events as $event)
                            <a class="group block" href="{{ route('frontend.events.show', ['slug' => $event->slug]) }}">

                                <div
                                    class="flex flex-col sm:flex-row gap-3 md:gap-4 bg-white border border-gray-200 p-4 md:p-5 rounded-2xl shadow-sm
                                       hover:shadow-lg hover:border-blue-400 transition duration-300">

                                    <!-- Date Badge -->
                                    <div class="flex-none min-w-[60px] text-center bg-blue-50 text-blue-600 rounded-xl p-2">
                                        <div class="text-base md:text-lg font-bold leading-none">
                                            {{ $event->start_date ? formatBSDate($event->start_date) : 'माघ' }}
                                        </div>
                                    </div>

                                    <!-- Event Info -->
                                    <div class="flex-1 flex flex-col justify-center">
                                        <h4
                                            class="text-sm md:text-base font-semibold text-gray-900 group-hover:text-blue-600 transition truncate">
                                            {{ $event->name }}
                                        </h4>

                                        <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                            {{ formatBSDateRange($event->start_date, $event->end_date) }}
                                        </p>
                                    </div>

                                </div>
                            </a>
                        @empty
                            <div class="bg-gray-200 text-gray-600 p-4 rounded-xl text-sm text-center">
                                No events available
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
