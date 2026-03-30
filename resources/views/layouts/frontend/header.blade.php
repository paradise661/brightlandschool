<div class="bg-primary text-white py-2 text-sm" id="top-bar">
    <div class="container mx-auto px-4 md:px-6 flex items-center justify-between">
        <div class="w-full flex justify-between sm:hidden">
            <a class="flex items-center hover:text-gray-200 transition" href="mailto:info@brightland.edu.np">
                <i class="fa-solid fa-envelope mr-2"></i>
                <span>{{ $setting['site_email'] ?? '' }}</span>
            </a>
            <a class="flex items-center hover:text-gray-200 transition" href="tel:+021-1234567">
                <i class="fa-solid fa-phone mr-2"></i>
                <span>{{ $setting['site_phone'] ?? '' }}</span>
            </a>
        </div>

        <!-- Desktop view: email left, phone right, social center -->
        <div class="hidden sm:flex w-full justify-between items-center">

            <!-- Email left -->
            <a class="flex items-center hover:text-gray-200 transition" href="mailto:info@brightland.edu.np">
                <i class="fa-solid fa-envelope mr-2"></i>
                <span>{{ $setting['site_email'] ?? '' }}</span>
            </a>

            <!-- Social icons center -->
            <div class="flex space-x-4">
                @foreach ($social as $socials)
                    <a class="hover:text-gray-200 transition" href="{{ $socials->link ?? '#' }}"><i
                            class="fa-brands {{ $socials->icon ?? '' }}"></i></a>
                @endforeach
            </div>

            <!-- Phone right -->
            <a class="flex items-center hover:text-gray-200 transition" href="tel:+021-1234567">
                <i class="fa-solid fa-phone mr-2"></i>
                <span>{{ $setting['site_phone'] ?? '' }}</span>
            </a>

        </div>
    </div>
</div>

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex justify-between items-center min-h-[80px]">

            <!-- LOGO -->
            <a class="flex items-center" href="{{ url('/') }}">
                <img class="h-12 md:h-14 w-auto object-contain" src="{{ asset('frontend/images/logo.jpg') }}"
                    alt="Logo">
            </a>

            <!-- DESKTOP NAV -->
            <nav class="hidden md:flex items-center gap-6 lg:gap-8">
                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('home') }}">
                    Home
                </a>

                <!-- About -->
                <div class="relative group">
                    <button
                        class="h-10 flex items-center gap-1 text-gray-700 hover:text-primary transition font-medium">
                        About Us
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-3 w-56 bg-white shadow-lg rounded-lg py-2
                        opacity-0 invisible
                        group-hover:opacity-100 group-hover:visible
                        transition-all duration-300 delay-150">

                        <a class="block px-4 py-2 hover:bg-gray-100"
                            href="{{ route('frontend.about') }}">Introduction</a>
                        @foreach ($messageItems as $message)
                            <a class="block px-4 py-2 hover:bg-gray-100"
                                href="{{ route('frontend.message.show', $message->slug) }}">
                                {{ $message->name ?? '' }}
                            </a>
                        @endforeach
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('frontend.teachers') }}">Our
                            Teachers</a>
                        <a class="block px-4 py-2 hover:bg-gray-100"
                            href="{{ route('frontend.reviews') }}">Testimonial</a>
                    </div>
                </div>

                <!-- Academics -->
                <div class="relative group">
                    <button
                        class="h-10 flex items-center gap-1 text-gray-700 hover:text-primary transition font-medium">
                        Academics
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-3 w-56 bg-white shadow-lg rounded-lg py-2
                        opacity-0 invisible
                        group-hover:opacity-100 group-hover:visible
                        transition-all duration-300 delay-150">
                        @foreach ($hacademy as $academy)
                            <a class="block px-4 py-2 hover:bg-gray-100"
                                href="{{ route('frontend.academics', $academy->slug) }}">{{ $academy->name ?? '' }}</a>
                        @endforeach
                    </div>
                </div>

                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('facilities') }}">
                    Facilities
                </a>

                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('frontend.gallery') }}">
                    Gallery
                </a>

                <!-- News -->
                <div class="relative group">
                    <button
                        class="h-10 flex items-center gap-1 text-gray-700 hover:text-primary transition font-medium">
                        News & Updates
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-3 w-56 bg-white shadow-lg rounded-lg py-2
                            opacity-0 invisible
                            group-hover:opacity-100 group-hover:visible
                            transition-all duration-300 delay-150">

                        {{-- <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('notice') }}">Notices</a> --}}
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('frontend.events') }}">Events</a>
                        <a class="block px-4 py-2 hover:bg-gray-100"
                            href="{{ route('frontend.calendar') }}">Calendar</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('blog') }}">Blogs</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('downloads') }}">Downloads</a>
                    </div>
                </div>

                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('contact') }}">
                    Contact
                </a>

                <a class="bg-primary text-white px-6 py-2 rounded-full hover:bg-blue-700 transition font-semibold"
                    href="{{ route('frontend.admission') }}">
                    Admissions
                </a>
            </nav>

            <!-- MOBILE MENU BUTTON -->
            <button class="md:hidden text-gray-900" id="mobile-menu-btn">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
            <!-- MOBILE NAVIGATION -->
            <div class="md:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="mobile-overlay"></div>

            <div class="md:hidden fixed top-0 right-0 w-64 h-full bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300"
                id="mobile-menu">
                <div class="flex justify-between items-center px-4 py-4 border-b">
                    <a href="{{ url('/') }}">
                        <img class="h-12 w-auto object-contain" src="{{ asset('frontend/images/logo.jpg') }}"
                            alt="Logo">
                    </a>
                    <button class="text-gray-700" id="mobile-menu-close">
                        <i class="fa-solid fa-xmark text-2xl"></i>
                    </button>
                </div>

                <nav class="px-4 py-6 flex flex-col space-y-2 text-gray-700">
                    <a class="block py-2 hover:text-primary font-medium" href="{{ route('home') }}">Home</a>

                    <!-- About dropdown -->
                    <div class="flex flex-col">
                        <button
                            class="flex justify-between items-center py-2 w-full hover:text-primary font-medium mobile-dropdown-btn">
                            About Us <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div class="hidden flex-col pl-4 mobile-dropdown">
                            <a class="block py-2 hover:text-primary"
                                href="{{ route('frontend.about') }}">Introduction</a>
                            @foreach ($messageItems as $message)
                                <a class="block py-2 hover:text-primary"
                                    href="{{ route('frontend.message.show', $message->slug) }}">
                                    {{ $message->name ?? '' }}
                                </a>
                            @endforeach
                            <a class="block py-2 hover:text-primary" href="{{ route('frontend.teachers') }}">Our
                                Teachers</a>
                            <a class="block py-2 hover:text-primary"
                                href="{{ route('frontend.reviews') }}">Testimonial</a>
                        </div>
                    </div>

                    <!-- Academics dropdown -->
                    <div class="flex flex-col">
                        <button
                            class="flex justify-between items-center py-2 w-full hover:text-primary font-medium mobile-dropdown-btn">
                            Academics <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div class="hidden flex-col pl-4 mobile-dropdown">
                            @foreach ($hacademy as $academy)
                                <a class="block py-2 hover:text-primary"
                                    href="{{ route('frontend.academics', $academy->slug) }}">{{ $academy->name ?? '' }}</a>
                            @endforeach
                        </div>
                    </div>

                    <a class="block py-2 hover:text-primary font-medium"
                        href="{{ route('facilities') }}">Facilities</a>
                    <a class="block py-2 hover:text-primary font-medium"
                        href="{{ route('frontend.gallery') }}">Gallery</a>

                    <!-- News dropdown -->
                    <div class="flex flex-col">
                        <button
                            class="flex justify-between items-center py-2 w-full hover:text-primary font-medium mobile-dropdown-btn">
                            News & Updates <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div class="hidden flex-col pl-4 mobile-dropdown">
                            <a class="block py-2 hover:text-primary" href="{{ route('notice') }}">Notices</a>
                            <a class="block py-2 hover:text-primary" href="{{ route('frontend.events') }}">Events</a>
                            <a class="block py-2 hover:text-primary" href="{{ route('blog') }}">Blogs</a>
                            <a class="block py-2 hover:text-primary" href="{{ route('downloads') }}">Downloads</a>
                        </div>
                    </div>

                    <a class="block py-2 hover:text-primary font-medium" href="{{ route('contact') }}">Contact</a>

                    <a class="block bg-primary text-white px-4 py-2 mt-2 rounded-full text-center hover:bg-red-700 font-semibold"
                        href="{{ route('frontend.admission') }}">Admissions</a>
                    <!-- Social icons at the bottom -->
                    <div class="flex justify-center space-x-4 mt-6 px-4">
                        @foreach ($social as $socials)
                            <a class="text-gray-700 hover:text-primary transition"
                                href="{{ $socials->link ?? '#' }}">
                                <i class="fa-brands {{ $socials->icon ?? '' }}"></i>
                            </a>
                        @endforeach

                    </div>
                </nav>
            </div>

            <!-- SCRIPT TO TOGGLE MOBILE MENU -->
            <script>
                const menuBtn = document.getElementById('mobile-menu-btn');
                const mobileMenu = document.getElementById('mobile-menu');
                const overlay = document.getElementById('mobile-overlay');
                const closeBtn = document.getElementById('mobile-menu-close');

                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.remove('translate-x-full');
                    overlay.classList.remove('hidden');
                });

                closeBtn.addEventListener('click', () => {
                    mobileMenu.classList.add('translate-x-full');
                    overlay.classList.add('hidden');
                });

                overlay.addEventListener('click', () => {
                    mobileMenu.classList.add('translate-x-full');
                    overlay.classList.add('hidden');
                });

                // Dropdown toggles
                document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                        const dropdown = btn.nextElementSibling;
                        dropdown.classList.toggle('hidden');
                    });
                });
            </script>
        </div>
    </div>
</header>
