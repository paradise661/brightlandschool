<footer class="bg-gray-900 text-white pt-12 md:pt-16 pb-8" id="footer">
    <div class="container mx-auto px-4 md:px-6">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 mb-8 md:mb-12">
            <div>
                <div class="flex items-center space-x-3 mb-4 md:mb-6">
                    <!-- LOGO -->
                    <a class="flex items-center" href="{{ url('/') }}">
                        <img class="h-12 md:h-14 w-auto object-contain" src="{{ asset('frontend/images/logo.jpg') }}"
                            alt="Logo">
                    </a>
                </div>
                <p class="text-gray-400 text-sm md:text-base mb-4 md:mb-6">Nurturing tomorrow's leaders through
                    excellence in education since 1990.</p>
                <div class="flex space-x-4">
                    <a class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition"
                        href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition"
                        href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition"
                        href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition"
                        href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition"
                        href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Quick Links</h3>
                <ul class="space-y-2 md:space-y-3 text-sm md:text-base">
                    <li><a class="text-gray-400 hover:text-white transition" href="#">About Us</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Academics</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Admissions</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Facilities</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Gallery</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Resources</h3>
                <ul class="space-y-2 md:space-y-3 text-sm md:text-base">
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Academic Calendar</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Examination Schedule</a>
                    </li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Downloads</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">e-Library</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">Career</a></li>
                    <li><a class="text-gray-400 hover:text-white transition" href="#">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Contact Info</h3>
                <ul class="space-y-3 text-sm md:text-base">
                    <li class="flex items-start">
                        <i class="fa-solid fa-location-dot text-primary mt-1 mr-3"></i>
                        <span class="text-gray-400">Nepalganj, Nepal</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-phone text-primary mr-3"></i>
                        <a class="text-gray-400 hover:text-white transition" href="tel:+021-1234567">021-1234567</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-envelope text-primary mr-3"></i>
                        <a class="text-gray-400 hover:text-white transition"
                            href="mailto:info@brightland.edu.np">info@brightland.edu.np</a>
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
