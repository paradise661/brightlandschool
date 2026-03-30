@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['team_seo_title'] ?? '',
        'title' => $setting['team_seo_title'] ?? '',
        'description' => $setting['team_seo_description'] ?? '',
        'keyword' => $setting['team_seo_keywords'] ?? '',
        'schema' => $setting['team_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['teacher_breadcrum_image'] ?? '' }}"
            alt="Teacher Image" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Teachers
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
                            Teachers
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-14 md:py-20 bg-[#F8F5EF]" id="leadership-team">

        <style>
            .team-card {
                background: #ffffff;
                border: 1px solid rgba(184, 151, 90, 0.15);
                border-radius: 12px;
                overflow: hidden;
                position: relative;
                transition: all 0.35s cubic-bezier(.16, 1, .3, 1);
            }

            .team-card:hover {
                transform: translateY(-6px);
                box-shadow:
                    0 20px 45px rgba(0, 0, 0, 0.06),
                    0 6px 18px rgba(184, 151, 90, 0.10);
                border-color: rgba(184, 151, 90, 0.35);
            }

            /* Top Accent Line */
            .team-card-bar {
                position: absolute;
                top: 0;
                left: 0;
                height: 3px;
                width: 100%;
                background: linear-gradient(90deg, #B8975A, #D4B483);
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.4s ease;
            }

            .team-card:hover .team-card-bar {
                transform: scaleX(1);
            }

            /* Image */
            .team-card-img {
                height: 260px;
                background: linear-gradient(180deg, #F1ECE4, #E7E1D6);
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 18px;
            }

            .team-card-img img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain;
                transition: transform 0.5s ease, filter 0.3s ease;
                filter: grayscale(8%);
            }

            .team-card:hover .team-card-img img {
                transform: scale(1.04);
                filter: grayscale(0%);
            }

            /* Content */
            .team-card-body {
                padding: 22px 20px 24px;
                text-align: center;
                position: relative;
            }

            .team-card-name {
                font-family: 'Cormorant Garamond', serif;
                font-size: 1.3rem;
                font-weight: 600;
                color: #1C1C1E;
                margin-bottom: 4px;
            }

            .team-card-position {
                font-family: 'DM Sans', sans-serif;
                font-size: 11px;
                letter-spacing: 0.14em;
                text-transform: uppercase;
                color: #B8975A;
            }

            /* Number */
            .team-card-index {
                position: absolute;
                bottom: 14px;
                right: 16px;
                font-family: 'Cormorant Garamond', serif;
                font-size: 1.6rem;
                color: rgba(184, 151, 90, 0.12);
                transition: 0.3s;
            }

            .team-card:hover .team-card-index {
                color: rgba(184, 151, 90, 0.22);
            }

            /* Animation */
            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .team-card {
                opacity: 0;
                animation: fadeUp 0.6s ease forwards;
            }

            .team-card:nth-child(1) {
                animation-delay: .05s;
            }

            .team-card:nth-child(2) {
                animation-delay: .1s;
            }

            .team-card:nth-child(3) {
                animation-delay: .15s;
            }

            .team-card:nth-child(4) {
                animation-delay: .2s;
            }

            .team-card:nth-child(5) {
                animation-delay: .25s;
            }

            .team-card:nth-child(6) {
                animation-delay: .3s;
            }

            .team-card:nth-child(7) {
                animation-delay: .35s;
            }

            .team-card:nth-child(8) {
                animation-delay: .4s;
            }

            @media (max-width: 640px) {
                .team-card-img {
                    height: 220px;
                }
            }
        </style>

        <div class="max-w-7xl mx-auto px-4 md:px-6">

            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-900">
                    Our Leadership Team
                </h2>
                <p class="text-gray-500 text-sm mt-2">
                    Experienced educators shaping the future of our students
                </p>
            </div>

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($teams as $team)
                    <div class="team-card">
                        <div class="team-card-bar"></div>

                        <div class="team-card-img">
                            <img src="{{ $team->image }}" alt="{{ $team->name ?? '' }}">
                        </div>

                        <div class="team-card-body">
                            <h3 class="team-card-name">{{ $team->name ?? '' }}</h3>
                            <p class="team-card-position">{{ $team->position ?? '' }}</p>
                            <span class="team-card-index">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
