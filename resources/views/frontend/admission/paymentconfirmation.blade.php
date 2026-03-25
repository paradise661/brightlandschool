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

    <h2>Payment Confirmation</h2>
    <p>Check your payment status above.</p>
@endsection
