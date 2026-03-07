@extends('layouts.frontend.master')
@section('content')
    <section class="flex items-center justify-center bg-gray-100 px-6 py-16">
        <div class="text-center max-w-lg">

            <!-- 404 Number -->
            <h1 class="text-6xl md:text-7xl font-extrabold text-blue-600 mb-4">
                404
            </h1>

            <!-- Title -->
            <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">
                Oops! Page Not Found
            </h2>

            <!-- Description -->
            <p class="text-gray-500 mb-6">
                The page you are looking for might have been removed,
                had its name changed, or is temporarily unavailable.
            </p>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 flex-wrap">

                <a class="bg-blue-600 text-white px-5 py-2.5 rounded-lg font-semibold hover:bg-blue-700 transition"
                    href="/">
                    Go Back Home
                </a>

                <a class="border border-gray-300 px-5 py-2.5 rounded-lg font-semibold text-gray-700 hover:bg-gray-200 transition"
                    href="javascript:history.back()">
                    Go Back
                </a>

            </div>

        </div>
    </section>
@endsection
