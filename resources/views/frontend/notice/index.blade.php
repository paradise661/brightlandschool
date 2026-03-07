@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['notice_seo_title'] ?? '',
        'title' => $setting['notice_seo_title'] ?? '',
        'description' => $setting['notice_seo_description'] ?? '',
        'keyword' => $setting['notice_seo_keywords'] ?? '',
        'schema' => $setting['notice_seo_schema'] ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['notices_breadcrum_image'] ?? '' }}"
            alt="students Notices" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Notices
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
                            Notices
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <div class="tab-content " id="notices-tab">
        <section class="py-12 md:py-16 bg-white" id="important-notices">
            <div class="container mx-auto px-4 md:px-6">

                <div class="space-y-6">
                    @foreach ($notices as $notice)
                        @php
                            $plainText = strip_tags($notice->description ?? '');
                            $isLong = strlen($plainText) > 190;
                        @endphp

                        <div class="notice-card bg-gradient-to-r from-blue-50 to-white rounded-2xl p-6 shadow-lg border-l-4 border-primary"
                            id="notice-{{ $notice->id }}" data-notice-id="{{ $notice->id }}"
                            data-full-text="{{ e($plainText) }}" data-short-text="{{ e(Str::limit($plainText, 190)) }}">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid {{ $notice->icon ?? 'fa-bell' }} text-white text-xl"></i>
                                    </div>

                                    <div class="flex-1">
                                        <div class="flex items-center space-x-3 mb-2">
                                            <h3 class="text-xl font-heading font-bold text-gray-900">
                                                {{ $notice->name ?? '' }}
                                            </h3>
                                            <span
                                                class="bg-primary text-white px-3 py-1 rounded-full text-xs font-semibold">
                                                {{ $notice->category->name ?? '' }}
                                            </span>
                                        </div>

                                        <p class="text-gray-600 text-sm mb-2 notice-text">
                                            {{ Str::limit($plainText, 320) }}
                                        </p>

                                        @if ($isLong)
                                            <button class="read-more-btn text-primary text-sm font-semibold"
                                                data-expanded="false">
                                                Read more
                                            </button>
                                        @endif

                                        <div class="flex items-center space-x-6 text-sm text-gray-500 mt-3">
                                            <span>
                                                <i class="fa-solid fa-calendar mr-2"></i>
                                                {{ $notice->created_at->format('M d, Y') }}
                                            </span>

                                            <span class="view-count">
                                                <i class="fa-solid fa-eye mr-2"></i>
                                                {{ $notice->views ?? 0 }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                {{-- <button class="text-primary hover:text-blue-700 transition">
                                    <i class="fa-solid fa-bookmark text-xl"></i>
                                </button> --}}
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="mt-8 flex justify-center">
                    <button class="bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                        Load More Notices
                    </button>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-gray-50" id="notice-categories">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">
                            {{ $setting['notices_title'] ?? '' }}
                        </h2>
                        {{-- <p class="text-gray-600 text-sm md:text-base mt-2">Browse notices by category</p> --}}
                    </div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($category as $categories)
                        @php
                            $catText = strip_tags($categories->description ?? 'No description available');
                            $isLong = strlen($catText) > 53;
                        @endphp

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition cursor-pointer category-card"
                            data-full-text="{{ e($catText) }}" data-short-text="{{ e(Str::limit($catText, 53)) }}">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center mb-4">
                                <i class="fa-solid {{ $categories->icon ?? 'fa-graduation-cap' }} text-white text-2xl"></i>
                            </div>

                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-2">
                                {{ $categories->name }}
                            </h3>

                            <p class="text-gray-600 text-sm mb-2 category-text">
                                {{ Str::limit($catText, 53) }}
                            </p>

                            @if ($isLong)
                                <button class="category-read-more text-primary text-sm font-semibold">
                                    View more
                                </button>
                            @endif

                            <div class="flex items-center justify-between mt-3">
                                <span class="text-primary font-bold text-2xl">
                                    {{ $categories->notices_count }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /* ============================
               NOTICE: Read more / less
               + View count
            ============================ */
            document.querySelectorAll('.read-more-btn').forEach(btn => {
                btn.addEventListener('click', function() {

                    const card = this.closest('.notice-card');
                    const textEl = card.querySelector('.notice-text');
                    const noticeId = card.dataset.noticeId;

                    const isExpanded = this.dataset.expanded === "true";

                    if (!isExpanded) {
                        textEl.textContent = card.dataset.fullText;
                        this.textContent = "Read less";
                        this.dataset.expanded = "true";

                        if (!card.dataset.viewed) {
                            incrementNoticeView(noticeId, card);
                            card.dataset.viewed = "true";
                        }

                    } else {
                        // Collapse notice
                        textEl.textContent = card.dataset.shortText;
                        this.textContent = "Read more";
                        this.dataset.expanded = "false";
                    }
                });
            });

            function incrementNoticeView(noticeId, card) {
                fetch(`/notice/${noticeId}/view`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.views !== undefined) {
                            card.querySelector('.view-count').innerHTML =
                                `<i class="fa-solid fa-eye mr-2"></i>${data.views}`;
                        }
                    })
                    .catch(err => console.error(err));
            }


            /* ============================
               CATEGORY: View more / less

            ============================ */
            document.querySelectorAll('.category-read-more').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();

                    const card = this.closest('.category-card');
                    const textEl = card.querySelector('.category-text');

                    const isExpanded = this.dataset.expanded === "true";

                    if (!isExpanded) {
                        textEl.textContent = card.dataset.fullText;
                        this.textContent = "View less";
                        this.dataset.expanded = "true";
                    } else {
                        textEl.textContent = card.dataset.shortText;
                        this.textContent = "View more";
                        this.dataset.expanded = "false";
                    }
                });
            });

        });
    </script>
@endsection
