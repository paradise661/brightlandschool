@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $setting['blogs_breadcrum_image'] ?? '' }}"
            alt="Blogs Image" />

        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center justify-center">
            <div class="text-center text-white">

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4">
                    Blog
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
                            Blog
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-16 lg:py-20 bg-gray-50" id="latest-posts">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-6xl mx-auto">

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach ($blogs as $blog)
                        <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                            id="post-1">
                            <div class="h-56 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    src="{{ $blog->image }}"
                                    alt="students using tablets and laptops in modern classroom, digital learning, interactive education" />
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-2 mb-3">
                                    <span
                                        class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">{{ $blog->category->name ?? '' }}</span>
                                    <span class="text-gray-500 text-xs"> <i
                                            class="fa-solid fa-calendar mr-2 text-primary"></i>{{ $blog->created_at->format('F d, Y') }}</span>
                                    <span class="text-gray-500 text-xs"><i
                                            class="fa-solid fa-eye mr-2 text-primary"></i>{{ $blog->views ?? 0 }}
                                        Views</span>
                                </div>
                                <h3
                                    class="text-xl font-heading font-bold text-gray-900 mb-3 leading-tight group-hover:text-primary transition">
                                    {{ $blog->name ?? '' }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ Str::limit(strip_tags($blog->description ?? ''), 150) }}</p>
                                <a class="text-blue-600 font-semibold hover:text-blue-700 transition"
                                    href="{{ route('frontend.blog.show', ['slug' => $blog->slug]) }}">Read
                                    More <i class="fa-solid fa-arrow-right ml-2"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>

                {{-- <div class="text-center mt-10">
                    <button class="px-8 py-4 bg-primary text-white rounded-full hover:bg-blue-700 transition font-semibold">
                        Load More Articles
                    </button>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white" id="popular-posts">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center mb-10">
                    <div class="w-1 h-8 bg-primary mr-4"></div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">{{ $setting['blogs_title'] ?? '' }}
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach ($popular_blogs as $popular_blog)
                        <article class="relative flex gap-4 bg-gray-50 rounded-xl p-4 hover:shadow-lg transition group">

                            <!-- clickable overlay -->
                            <a class="absolute inset-0 z-10"
                                href="{{ route('frontend.blog.show', $popular_blog->slug) }}"></a>

                            <div class="flex-shrink-0 w-32 h-32 rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    src="{{ $popular_blog->image }}" alt="{{ $popular_blog->name ?? '' }}" />
                            </div>

                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-xs font-semibold">
                                        {{ $popular_blog->category->name ?? 'Technology' }}
                                    </span>

                                    <span class="text-gray-400 text-xs flex items-center">
                                        <i class="fa-solid fa-eye mr-1"></i>
                                        {{ number_format($popular_blog->views ?? 0) }} views
                                    </span>
                                </div>

                                <h3
                                    class="text-lg font-heading font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary transition">
                                    {{ $popular_blog->name }}
                                </h3>

                                <div class="flex items-center text-xs text-gray-500">
                                    <span>{{ $popular_blog->created_at->format('M d, Y') }}</span>
                                </div>
                                <a class="inline-flex items-center mt-3 text-blue-600 font-semibold hover:text-blue-700 transition"
                                    href="{{ route('frontend.blog.show', ['slug' => $popular_blog->slug]) }}">
                                    Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>

                            </div>

                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
