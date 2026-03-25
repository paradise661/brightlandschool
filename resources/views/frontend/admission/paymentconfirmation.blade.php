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
    @php
        $isSuccess = session('success') ? true : false;
    @endphp

    <section class="min-h-[70vh] flex items-center justify-center bg-gray-100 px-4 py-6">
        <div class="bg-white shadow-lg rounded-xl p-6 md:p-8 max-w-md w-full text-center">

            <!-- Icon -->
            <div
                class="flex items-center justify-center w-14 h-14 mx-auto mb-4 rounded-full
            {{ $isSuccess ? 'bg-green-100' : 'bg-red-100' }}">

                @if ($isSuccess)
                    <!-- Success Icon -->
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="3"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                @else
                    <!-- Failed Icon -->
                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" stroke-width="3"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                @endif
            </div>

            <!-- Title -->
            <h2 class="text-xl md:text-2xl font-bold mb-2
            {{ $isSuccess ? 'text-green-600' : 'text-red-600' }}">

                {{ $isSuccess ? 'Payment Successful!' : 'Payment Failed!' }}
            </h2>

            <!-- Message -->
            <p class="text-gray-600 mb-4">
                {{ $isSuccess
                    ? 'Your payment has been successfully processed.'
                    : 'Your payment could not be processed. Please try again.' }}
            </p>

            <!-- Alert Message -->
            @if (session('success'))
                <div class="mb-4 text-green-600 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 text-red-600 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-2 justify-center">
                <a class="{{ $isSuccess ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700' }} text-white px-5 py-2 rounded-lg transition"
                    href="/">
                    Go Home
                </a>

            </div>

        </div>
    </section>
@endsection
