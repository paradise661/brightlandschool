<div class="bg-primary text-white py-2 text-sm" id="top-bar">
    <div
        class="container mx-auto px-4 md:px-6 flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0">
        <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6">
            <a class="flex items-center hover:text-gray-200 transition" href="tel:+1234567890">
                <i class="fa-solid fa-phone mr-2"></i>
                <span>+1 (234) 567-890</span>
            </a>
            <a class="flex items-center hover:text-gray-200 transition" href="mailto:info@school.edu">
                <i class="fa-solid fa-envelope mr-2"></i>
                <span>info@school.edu</span>
            </a>
        </div>
        <div class="flex items-center space-x-4">
            <a class="hover:text-gray-200 transition" href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="hover:text-gray-200 transition" href="#"><i class="fa-brands fa-twitter"></i></a>
            <a class="hover:text-gray-200 transition" href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class="hover:text-gray-200 transition" href="#"><i class="fa-brands fa-youtube"></i></a>
            <a class="hover:text-gray-200 transition" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex justify-between items-center min-h-[80px]">

            <!-- LOGO -->
            <div class="flex items-center gap-3">
                <div
                    class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-blue-600 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-graduation-cap text-white text-xl md:text-2xl"></i>
                </div>
                <div class="leading-tight">
                    <h1 class="text-lg md:text-xl font-heading font-bold text-gray-900">
                        Excellence Academy
                    </h1>
                    <p class="text-xs text-gray-600 hidden sm:block">
                        Nurturing Tomorrow's Leaders
                    </p>
                </div>
            </div>

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
                    <div class="absolute left-0 mt-3 w-56 bg-white shadow-lg rounded-lg py-2 hidden group-hover:block">
                        <a class="block px-4 py-2 hover:bg-gray-100" href="#">Vision & Mission</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('message') }}">Principal's
                            Message</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('message') }}">Chairman's
                            Message</a>
                    </div>
                </div>

                <!-- Academics -->
                <div class="relative group">
                    <button
                        class="h-10 flex items-center gap-1 text-gray-700 hover:text-primary transition font-medium">
                        Academics
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-3 w-56 bg-white shadow-lg rounded-lg py-2 hidden group-hover:block">
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('curriculum') }}">Curriculum</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="#">Academic Calendar</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('downloads') }}">Downloads</a>
                    </div>
                </div>

                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('facilities') }}">
                    Facilities
                </a>

                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('gallery') }}">
                    Gallery
                </a>

                <!-- News -->
                <div class="relative group">
                    <button
                        class="h-10 flex items-center gap-1 text-gray-700 hover:text-primary transition font-medium">
                        News & Updates
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-3 w-56 bg-white shadow-lg rounded-lg py-2 hidden group-hover:block">
                        <a class="block px-4 py-2 hover:bg-gray-100" href="#">Notices</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('blog') }}">Blogs</a>
                        <a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('downloads') }}">Downloads</a>
                    </div>
                </div>

                <a class="h-10 flex items-center text-gray-700 hover:text-primary transition font-medium"
                    href="{{ route('contact') }}">
                    Contact
                </a>

                <a class="bg-secondary text-white px-6 py-2 rounded-full hover:bg-red-700 transition font-semibold"
                    href="{{ route('frontend.admission') }}">
                    Admissions
                </a>
            </nav>

            <!-- MOBILE MENU BUTTON -->
            <button class="md:hidden text-gray-900" id="mobile-menu-btn">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>

        </div>
    </div>
</header>
