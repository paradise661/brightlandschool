<footer class="bg-gray-900 text-white pt-12 md:pt-16 pb-8" id="footer">
    <div class="container mx-auto px-4 md:px-6">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 mb-8 md:mb-12">
            <div>
                <div class="flex items-center space-x-3 mb-4 md:mb-6">
                    <!-- LOGO -->
                    <a class="flex items-center" href="{{ url('/') }}">
                        <img class="h-12 md:h-14 w-auto object-contain"
                            src="{{ $setting['site_main_logo'] ?? asset('frontend/images/logo.jpg') }}" alt="Logo">
                    </a>
                </div>
                <p class="text-gray-400 text-sm md:text-base mb-4 md:mb-6">{{ $setting['site_information'] ?? '' }}</p>
                <div class="flex space-x-4">
                    @foreach ($social as $socials)
                        <a class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition"
                            href="{{ $socials->link ?? '#' }}">
                            <i class="fa-brands {{ $socials->icon ?? '' }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            <div>
                <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Quick Links</h3>
                <ul class="space-y-2 md:space-y-3 text-sm md:text-base">
                    <li><a class="text-gray-400 hover:text-white transition" href="{{ route('frontend.about') }}">About
                            Us</a></li>
                    <li><a class="text-gray-400 hover:text-white transition"
                            href="{{ route('frontend.admission') }}">Admissions</a></li>
                    <li><a class="text-gray-400 hover:text-white transition"
                            href="{{ route('facilities') }}">Facilities</a></li>
                    <li><a class="text-gray-400 hover:text-white transition"
                            href="{{ route('frontend.gallery') }}">Gallery</a></li>
                    <li><a class="text-gray-400 hover:text-white transition"
                            href="{{ route('frontend.reviews') }}">Testimonials</a>
                    </li>
                    <li><a class="text-gray-400 hover:text-white transition" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Resources</h3>
                <ul class="space-y-2 md:space-y-3 text-sm md:text-base">

                    <li><a class="text-gray-400 hover:text-white transition" href="{{ route('notice') }}">Notices</a>
                    </li>
                    <li><a class="text-gray-400 hover:text-white transition"
                            href="{{ route('downloads') }}">Downloads</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="{{ route('blog') }}">Blogs</a></li>
                    <li><a class="text-gray-400 hover:text-white transition"
                            href="{{ route('frontend.events') }}">Events</a>
                    </li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Contact Info</h3>
                <ul class="space-y-3 text-sm md:text-base">
                    <li class="flex items-start">
                        <i class="fa-solid fa-location-dot text-primary mt-1 mr-3"></i>
                        <span class="text-gray-400">{{ $setting['site_location'] }}</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-phone text-primary mr-3"></i>
                        <a class="text-gray-400 hover:text-white transition"
                            href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-envelope text-primary mr-3"></i>
                        <a class="text-gray-400 hover:text-white transition"
                            href="mailto:{{ $setting['site_email'] ?? '' }}">{{ $setting['site_email'] ?? '' }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-6 md:pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400 text-xs md:text-sm text-center md:text-left">&copy; 2026 Brightland School. All
                    rights reserved.</p>
                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-center">
                    <a class="text-gray-400 hover:text-white text-xs md:text-sm transition" href="#">Privacy
                        Policy</a>
                    <a class="text-gray-400 hover:text-white text-xs md:text-sm transition" href="#">Terms &
                        Conditions</a>
                    <a class="text-gray-400 hover:text-white text-xs md:text-sm transition" href="#">Cookie
                        Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<button
    class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center hover:bg-blue-700 transition opacity-0 pointer-events-none z-50"
    id="scroll-to-top">
    <i class="fa-solid fa-arrow-up"></i>
</button>
