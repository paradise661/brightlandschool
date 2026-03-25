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
    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Message --}}
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <section class="min-h-[70vh] flex items-center justify-center bg-gray-100 px-4 py-6">
        <div class="bg-white shadow-lg rounded-xl p-6 md:p-8 max-w-md w-full text-center">

            <!-- Success Icon -->
            <div class="flex items-center justify-center w-14 h-14 mx-auto mb-4 rounded-full bg-green-100">
                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <!-- Title -->
            <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">
                Payment Successful!
            </h2>

            <!-- Message -->
            <p class="text-gray-600 mb-3">
                Your payment has been successfully processed.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-2 justify-center">
                <a class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg transition" href="/">
                    Home
                </a>

            </div>

        </div>
    </section>
@endsection
