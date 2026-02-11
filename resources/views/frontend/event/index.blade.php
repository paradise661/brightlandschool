@extends('layouts.frontend.master')
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .event-card {
            transition: all 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
    </style>
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
                    Event
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
                            Event
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-8 bg-white sticky top-[72px] z-40 shadow-md" id="event-filters">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                    <button
                        class="filter-btn px-6 py-2 bg-primary text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">All
                        Events</button>
                    <button
                        class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Academic</button>
                    <button
                        class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Sports</button>
                    <button
                        class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Cultural</button>
                    <button
                        class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-gray-300 transition">Workshops</button>
                </div>
                <div class="flex items-center space-x-4">
                    <select
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm">
                        <option>All Months</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="upcoming-events">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Upcoming Events</h2>
                    <p class="text-gray-600 text-sm md:text-base mt-2">Don't miss these exciting upcoming activities</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                <div class="event-card bg-white rounded-2xl overflow-hidden shadow-lg" id="event-1">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/c5ed10fb5a-d25dc4bf2787bfd75d78.png"
                            alt="students participating in annual science fair exhibition with colorful project displays and experiments" />
                        <div class="absolute top-4 left-4 bg-primary text-white px-4 py-2 rounded-full font-bold text-sm">
                            <i class="fa-solid fa-flask mr-2"></i>Academic
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-center">
                            <div class="text-2xl font-bold text-primary">25</div>
                            <div class="text-xs text-gray-600">JAN</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Annual Science Fair 2024</h3>

                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600 text-sm">
                                <i class="fa-solid fa-clock text-primary mr-3 w-4"></i>
                                <span>9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <i class="fa-solid fa-location-dot text-primary mr-3 w-4"></i>
                                <span>School Auditorium</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Students showcase innovative science projects and experiments.
                            Open to all grades with special awards for outstanding presentations.</p>
                        <div class="flex items-center justify-between mt-4">
                            <a class="inline-flex items-center text-primary font-semibold hover:text-blue-700 transition"
                                href="#">
                                <span>Learn More</span>
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex items-center text-gray-500 text-sm">
                                <i class="fa-solid fa-eye mr-2"></i>
                                <span>1,245 Views</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white" id="event-calendar-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-secondary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Event Calendar</h2>
                    <p class="text-gray-600 text-sm md:text-base mt-2">View all events in calendar format</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="bg-gray-50 rounded-2xl p-6 md:p-8 shadow-lg" id="calendar-container">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-2xl font-heading font-bold text-gray-900">January 2024</h3>
                            <div class="flex space-x-2">
                                <button
                                    class="w-10 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                <button
                                    class="w-10 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="grid grid-cols-7 gap-2 mb-2">
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Sun</div>
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Mon</div>
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Tue</div>
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Wed</div>
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Thu</div>
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Fri</div>
                            <div class="text-center font-semibold text-gray-600 text-sm py-2">Sat</div>
                        </div>

                        <div class="grid grid-cols-7 gap-2">
                            <div class="aspect-square bg-white rounded-lg p-2 text-center text-gray-400">31</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                1</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                2</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                3</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                4</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                5</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                6</div>

                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                7</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                8</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                9</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                10</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                11</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                12</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                13</div>

                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                14</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                15</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                16</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                17</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                18</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                19</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                20</div>

                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                21</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                22</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                23</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                24</div>
                            <div
                                class="aspect-square bg-primary text-white rounded-lg p-2 text-center relative cursor-pointer">
                                <span>25</span>
                                <div
                                    class="w-2 h-2 bg-white rounded-full absolute bottom-1 left-1/2 transform -translate-x-1/2">
                                </div>
                            </div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                26</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                27</div>

                            <div
                                class="aspect-square bg-secondary text-white rounded-lg p-2 text-center relative cursor-pointer">
                                <span>28</span>
                                <div
                                    class="w-2 h-2 bg-white rounded-full absolute bottom-1 left-1/2 transform -translate-x-1/2">
                                </div>
                            </div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                29</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                30</div>
                            <div
                                class="aspect-square bg-white rounded-lg p-2 text-center hover:bg-primary hover:text-white transition cursor-pointer">
                                31</div>
                            <div class="aspect-square bg-white rounded-lg p-2 text-center text-gray-400">1</div>
                            <div class="aspect-square bg-white rounded-lg p-2 text-center text-gray-400">2</div>
                            <div class="aspect-square bg-white rounded-lg p-2 text-center text-gray-400">3</div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-6 text-white mb-6 shadow-lg">
                        <h3 class="text-xl font-heading font-bold mb-4">Quick Stats</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-blue-100">Total Events</span>
                                <span class="text-2xl font-bold">24</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-100">This Month</span>
                                <span class="text-2xl font-bold">8</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-100">Upcoming</span>
                                <span class="text-2xl font-bold">16</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-lg font-heading font-bold text-gray-900 mb-4">Event Categories</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-primary rounded-full mr-3"></div>
                                    <span class="text-gray-700">Academic</span>
                                </div>
                                <span class="text-gray-600 font-semibold">8</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-secondary rounded-full mr-3"></div>
                                    <span class="text-gray-700">Sports</span>
                                </div>
                                <span class="text-gray-600 font-semibold">6</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-accent rounded-full mr-3"></div>
                                    <span class="text-gray-700">Cultural</span>
                                </div>
                                <span class="text-gray-600 font-semibold">5</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-purple-600 rounded-full mr-3"></div>
                                    <span class="text-gray-700">Workshops</span>
                                </div>
                                <span class="text-gray-600 font-semibold">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50" id="past-events">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8 md:mb-10">
                <div class="w-1 h-10 md:h-12 bg-accent mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-gray-900">Past Events
                        Highlights</h2>
                    <p class="text-gray-600 text-sm md:text-base mt-2">Memorable moments from our recent events</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 md:gap-8">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition" id="past-event-1">
                    <div class="grid md:grid-cols-2">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/8db426c710-e63997c431ee5391016a.png"
                                alt="students celebrating annual day performance on stage with lights and decorations" />
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block bg-accent/10 text-accent px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                December 2023</div>
                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-3">Annual Day Celebration</h3>
                            <p class="text-gray-600 text-sm mb-4">A spectacular evening of performances, awards, and
                                celebrations marking another successful year.</p>
                            <a class="inline-flex items-center text-accent font-semibold text-sm hover:text-yellow-700 transition"
                                href="#">
                                <span>View Gallery</span>
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition" id="past-event-2">
                    <div class="grid md:grid-cols-2">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/dda9da5df3-86044a12080ebcf43b41.png"
                                alt="students winning medals at inter-school sports competition with trophy" />
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block bg-secondary/10 text-secondary px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                November 2023</div>
                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-3">Sports Day Championship</h3>
                            <p class="text-gray-600 text-sm mb-4">Students showcased exceptional athletic skills across
                                various sporting events and competitions.</p>
                            <a class="inline-flex items-center text-secondary font-semibold text-sm hover:text-red-700 transition"
                                href="#">
                                <span>View Gallery</span>
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition" id="past-event-3">
                    <div class="grid md:grid-cols-2">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/93b59b7bde-9f4c7c8a1b4dcd58b622.png"
                                alt="halloween celebration with students in creative costumes and decorations" />
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                October 2023</div>
                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-3">Halloween Carnival</h3>
                            <p class="text-gray-600 text-sm mb-4">A fun-filled day with creative costumes, games, and
                                activities celebrating Halloween traditions.</p>
                            <a class="inline-flex items-center text-purple-600 font-semibold text-sm hover:text-purple-700 transition"
                                href="#">
                                <span>View Gallery</span>
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition" id="past-event-4">
                    <div class="grid md:grid-cols-2">
                        <div class="h-64 overflow-hidden">
                            <img class="w-full h-full object-cover"
                                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/61c2687597-a406a9e06f09a3072926.png"
                                alt="environmental awareness campaign with students planting trees and cleaning" />
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                September 2023</div>
                            <h3 class="text-lg font-heading font-bold text-gray-900 mb-3">Green Earth Initiative</h3>
                            <p class="text-gray-600 text-sm mb-4">Students participated in tree plantation and
                                environmental awareness activities for a greener future.</p>
                            <a class="inline-flex items-center text-green-600 font-semibold text-sm hover:text-green-700 transition"
                                href="#">
                                <span>View Gallery</span>
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gradient-to-r from-primary to-blue-600" id="cta-section">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold mb-4 md:mb-6">Never Miss An Event</h2>
                <p class="text-base md:text-lg lg:text-xl text-blue-100 mb-6 md:mb-8">Subscribe to our newsletter to
                    receive event updates and important announcements</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center max-w-xl mx-auto">
                    <input
                        class="w-full px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-white"
                        type="email" placeholder="Enter your email address">
                    <button
                        class="w-full sm:w-auto bg-secondary text-white px-8 py-4 rounded-full font-semibold hover:bg-red-700 transition whitespace-nowrap">
                        Subscribe Now
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            alert('Mobile menu functionality would be implemented here');
        });

        const scrollToTopBtn = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                scrollToTopBtn.classList.add('opacity-100');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                scrollToTopBtn.classList.remove('opacity-100');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('bg-primary', 'text-white');
            });
        });
    </script>
@endsection
