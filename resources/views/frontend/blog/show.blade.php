@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $post->name,
        'title' => $post->seo_title ?? $post->name,
        'description' => $post->seo_description ?? '',
        'keyword' => $post->seo_description ?? '',
        'schema' => $post->seo_schema ?? '',
    ])
@endsection
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $post->banner_image }}"
            alt="{{ $post->name ?? 'Blog Post Image' }}" />

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
                        <li>
                            <a class="text-blue-100 hover:text-white transition" href="{{ route('blog') }}">
                                Blog
                            </a>
                        </li>
                        <li class="text-blue-200">›</li>
                        <li class="text-white font-medium">
                            {{ $post->name ?? '' }}
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <article class="py-12 md:py-16 lg:py-20" id="blog-article">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6 md:mb-8">

                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-gray-900 mb-6 leading-tight">
                        {{ $post->name ?? '' }}</h1>

                    <div
                        class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-gray-200">
                        <div class="flex items-center space-x-4">
                            <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold">
                                {{ $post->category->name ?? 'Uncategorized' }}
                            </span>

                        </div>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                            <span class="flex items-center">
                                <i class="fa-solid fa-calendar mr-2 text-primary"></i>
                                {{ $post->created_at->format('F d, Y') }}
                            </span>

                            <span class="flex items-center"><i class="fa-solid fa-eye mr-2 text-primary"></i>
                                {{ $post->views ?? 0 }} </span>
                        </div>
                    </div>
                </div>

                <img class="w-full rounded-2xl shadow-xl mb-8 md:mb-10" src="{{ $post->image }}"
                    alt="students participating in science fair, innovative projects, colorful displays, excited children">

                <div class="prose prose-lg max-w-none" id="article-content">
                    {!! $post->description ?? '' !!}
                </div>
            </div>
        </div>
    </article>

    <section class="py-12 md:py-16 bg-white" id="related-posts">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center mb-8 md:mb-10">
                    <div class="w-1 h-8 bg-primary mr-4"></div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Popular Blogs</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-6 md:gap-8">
                    @foreach ($popular_post as $popular_posts)
                        <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                            id="post-1">
                            <div class="h-56 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    src="{{ $popular_posts->image }}"
                                    alt="students using tablets and laptops in modern classroom, digital learning, interactive education" />
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-2 mb-3">
                                    <span
                                        class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">{{ $popular_posts->category->name ?? '' }}</span>
                                    <span class="text-gray-500 text-xs"> <i
                                            class="fa-solid fa-calendar mr-2 text-primary"></i>{{ $popular_posts->created_at->format('F d, Y') }}</span>
                                    <span class="text-gray-500 text-xs"><i
                                            class="fa-solid fa-eye mr-2 text-primary"></i>{{ $popular_posts->views ?? 0 }}
                                        Views</span>
                                </div>
                                <h3
                                    class="text-xl font-heading font-bold text-gray-900 mb-3 leading-tight group-hover:text-primary transition">
                                    {{ $popular_posts->name ?? '' }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ strip_tags($popular_posts->description ?? '') }}</p>
                                <a class="text-blue-600 font-semibold hover:text-blue-700 transition"
                                    href="{{ route('frontend.blog.show', ['slug' => $popular_posts->slug]) }}">Read
                                    More <i class="fa-solid fa-arrow-right ml-2"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
