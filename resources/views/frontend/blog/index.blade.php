@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="blog-hero">
        <!-- Softer Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>

        <!-- Background image -->
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/88ea40e48f-8d0182e2f55282f6b671.png"
            alt="students reading books in modern library" />

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

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="latest-posts">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-10">
                    <div class="flex items-center">
                        <div class="w-1 h-8 bg-primary mr-4"></div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Latest Articles</h2>
                    </div>
                    <a class="hidden md:flex items-center text-primary font-semibold hover:text-blue-700 transition"
                        href="#">
                        View All <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>

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
                                    {{ strip_tags($blog->description ?? '') }}</p>
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
                    <div class="w-1 h-8 bg-secondary mr-4"></div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Most Popular</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <article class="flex gap-4 bg-gray-50 rounded-xl p-4 hover:shadow-lg transition group cursor-pointer"
                        id="popular-1">
                        <div class="flex-shrink-0 w-32 h-32 rounded-lg overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/cdb8578c91-63b570119f09c21e8d29.png"
                                alt="robotics competition, students with robots, STEM education" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-xs font-semibold">Technology</span>
                                <span class="text-gray-400 text-xs flex items-center"><i class="fa-solid fa-eye mr-1"></i>
                                    2.4k views</span>
                            </div>
                            <h3
                                class="text-lg font-heading font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary transition">
                                Robotics Team Wins Regional Championship</h3>
                            <div class="flex items-center text-xs text-gray-500">
                                <span>Nov 28, 2024</span>
                                <span class="mx-2">•</span>
                                <span>3 min read</span>
                            </div>
                        </div>
                    </article>

                    <article class="flex gap-4 bg-gray-50 rounded-xl p-4 hover:shadow-lg transition group cursor-pointer"
                        id="popular-2">
                        <div class="flex-shrink-0 w-32 h-32 rounded-lg overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/4ac5c58ad6-90c33a2ffbb69ceb2aba.png"
                                alt="debate competition, students speaking confidently, public speaking" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-semibold">Academics</span>
                                <span class="text-gray-400 text-xs flex items-center"><i class="fa-solid fa-eye mr-1"></i>
                                    2.1k views</span>
                            </div>
                            <h3
                                class="text-lg font-heading font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary transition">
                                Excellence in Debate: National Competition Success</h3>
                            <div class="flex items-center text-xs text-gray-500">
                                <span>Nov 25, 2024</span>
                                <span class="mx-2">•</span>
                                <span>4 min read</span>
                            </div>
                        </div>
                    </article>

                    <article class="flex gap-4 bg-gray-50 rounded-xl p-4 hover:shadow-lg transition group cursor-pointer"
                        id="popular-3">
                        <div class="flex-shrink-0 w-32 h-32 rounded-lg overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/a7789a84c2-b9da9909dbd433bec910.png"
                                alt="music concert performance, students playing instruments, orchestra" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded text-xs font-semibold">Arts &
                                    Culture</span>
                                <span class="text-gray-400 text-xs flex items-center"><i class="fa-solid fa-eye mr-1"></i>
                                    1.9k views</span>
                            </div>
                            <h3
                                class="text-lg font-heading font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary transition">
                                Annual Music Concert: A Symphony of Talent</h3>
                            <div class="flex items-center text-xs text-gray-500">
                                <span>Nov 22, 2024</span>
                                <span class="mx-2">•</span>
                                <span>5 min read</span>
                            </div>
                        </div>
                    </article>

                    <article class="flex gap-4 bg-gray-50 rounded-xl p-4 hover:shadow-lg transition group cursor-pointer"
                        id="popular-4">
                        <div class="flex-shrink-0 w-32 h-32 rounded-lg overflow-hidden">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/507200942b-fa99742ba3ece764ba06.png"
                                alt="community service, students volunteering, helping elderly people, social responsibility" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">Events</span>
                                <span class="text-gray-400 text-xs flex items-center"><i class="fa-solid fa-eye mr-1"></i>
                                    1.7k views</span>
                            </div>
                            <h3
                                class="text-lg font-heading font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary transition">
                                Community Outreach: Making a Difference Together</h3>
                            <div class="flex items-center text-xs text-gray-500">
                                <span>Nov 20, 2024</span>
                                <span class="mx-2">•</span>
                                <span>4 min read</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gradient-to-r from-primary to-blue-600" id="newsletter-cta">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div
                    class="w-16 h-16 md:w-20 md:h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-envelope-open-text text-white text-2xl md:text-3xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-heading font-bold mb-4">Stay Updated with Our Latest Stories</h2>
                <p class="text-lg md:text-xl text-blue-100 mb-8">Subscribe to our newsletter and get the latest articles,
                    news, and updates delivered straight to your inbox</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto">
                    <input
                        class="flex-1 px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-4 focus:ring-white/30"
                        type="email" placeholder="Enter your email address">
                    <button
                        class="px-8 py-4 bg-secondary text-white rounded-full hover:bg-red-700 transition font-semibold whitespace-nowrap"
                        type="submit">
                        Subscribe Now
                    </button>
                </form>
                <p class="text-sm text-blue-200 mt-4">Join 5,000+ parents and educators already subscribed</p>
            </div>
        </div>
    </section>
@endsection
