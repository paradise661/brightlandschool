<body class="bg-slate-50 min-h-screen">

    <!-- TOP BAR -->
    <div class="bg-primary text-white py-0 text-xs font-medium tracking-wide" id="top-bar">
        <div class="container mx-auto px-4 md:px-6 flex items-center justify-between h-9">

            <div class="w-full flex justify-between sm:hidden">
                <a class="flex items-center gap-1.5 hover:text-white transition-colors duration-200"
                    href="mailto:{{ $setting['site_email'] ?? '' }}">
                    <i class="fa-solid fa-envelope"></i>
                    <span>{{ $setting['site_email'] ?? '' }}</span>
                </a>
                <a class="flex items-center gap-1.5 hover:text-white transition-colors duration-200"
                    href="tel:{{ $setting['site_phone'] ?? '' }}">
                    <i class="fa-solid fa-phone"></i>
                    <span>{{ $setting['site_phone'] ?? '' }}</span>
                </a>
            </div>

            <div class="hidden sm:flex w-full justify-between items-center">
                <a class="flex items-center gap-2 hover:text-white transition-colors duration-200"
                    href="mailto:{{ $setting['site_email'] ?? '' }}">
                    <i class="fa-solid fa-envelope"></i>
                    <span>{{ $setting['site_email'] ?? '' }}</span>
                </a>
                <div class="flex items-center gap-5">
                    @foreach ($social as $socials)
                        <a class="hover:text-white hover:-translate-y-px transition-all duration-200"
                            href="{{ $socials->link ?? '#' }}"><i class="fa-brands {{ $socials->icon ?? '' }}"></i></a>
                    @endforeach

                </div>
                <a class="flex items-center gap-2 hover:text-white transition-colors duration-200"
                    href="tel:{{ $setting['site_phone'] ?? '' }}">
                    <i class="fa-solid fa-phone"></i>
                    <span>{{ $setting['site_phone'] ?? '' }}</span>
                </a>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header class="bg-white border-b border-slate-100 shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center h-[72px]">

                <!-- LOGO -->
                <a class="flex items-center" href="{{ url('/') }}">
                    <img class="h-11 md:h-[52px] w-auto object-contain"
                        src="{{ $setting['site_main_logo'] ?? asset('frontend/images/logo.jpg') }}" alt="Logo">
                </a>

                <!-- DESKTOP NAV -->
                <nav class="hidden md:flex items-center gap-1">

                    <a class="px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200"
                        href="{{ url('/') }}">
                        Home
                    </a>

                    <!-- About -->
                    <div class="relative group">
                        <button
                            class="flex items-center gap-1 px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 cursor-pointer">
                            About Us
                            <i
                                class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full mt-3 w-56 bg-white rounded-xl border border-slate-100 py-2
                                opacity-0 invisible translate-y-2
                                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                                transition-all duration-200 z-50">
                            <div
                                class="absolute -top-1.5 left-1/2 -translate-x-1/2 w-3 h-3 bg-white border-l border-t border-slate-100 rotate-45 rounded-sm">
                            </div>
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('frontend.about') }}">Introduction</a>
                            @foreach ($messageItems as $message)
                                <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                    href="{{ route('frontend.message.show', $message->slug) }}">{{ $message->name ?? '' }}</a>
                            @endforeach
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('frontend.teachers') }}">Our Teachers</a>
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('frontend.reviews') }}">Testimonial</a>
                        </div>
                    </div>

                    <!-- Academics -->
                    <div class="relative group">
                        <button
                            class="flex items-center gap-1 px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 cursor-pointer">
                            Academics
                            <i
                                class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full mt-3 w-56 bg-white rounded-xl border border-slate-100 py-2
                                opacity-0 invisible translate-y-2
                                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                                transition-all duration-200 z-50">
                            <div
                                class="absolute -top-1.5 left-1/2 -translate-x-1/2 w-3 h-3 bg-white border-l border-t border-slate-100 rotate-45 rounded-sm">
                            </div>
                            @foreach ($hacademy as $academy)
                                <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                    href="{{ route('frontend.academics', $academy->slug) }}">{{ $academy->name ?? '' }}</a>
                            @endforeach

                        </div>
                    </div>

                    <a class="px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200"
                        href="{{ route('facilities') }}">Facilities</a>
                    <a class="px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200"
                        href="{{ route('frontend.gallery') }}">Gallery</a>

                    <!-- News -->
                    <div class="relative group">
                        <button
                            class="flex items-center gap-1 px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200 cursor-pointer">
                            News &amp; Updates
                            <i
                                class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full mt-3 w-56 bg-white rounded-xl border border-slate-100 py-2
                                opacity-0 invisible translate-y-2
                                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                                transition-all duration-200 z-50">
                            <div
                                class="absolute -top-1.5 left-1/2 -translate-x-1/2 w-3 h-3 bg-white border-l border-t border-slate-100 rotate-45 rounded-sm">
                            </div>
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('notice') }}">Notices</a>
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('frontend.calendar') }}">Calendar</a>
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('blog') }}">Blogs</a>
                            <a class="flex items-center mx-1.5 px-3 py-2 rounded-lg text-sm text-slate-700 font-medium hover:bg-primary/5 hover:text-primary transition-all duration-150"
                                href="{{ route('downloads') }}">Downloads</a>
                        </div>
                    </div>

                    <a class="px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-primary hover:bg-primary/5 transition-all duration-200"
                        href="{{ route('contact') }}">Contact</a>

                    <a class="ml-2 inline-flex items-center gap-1.5 bg-primary text-white text-sm font-bold px-5 py-2.5 rounded-full shadow-md shadow-primary/30 hover:shadow-lg hover:shadow-primary/40 hover:-translate-y-px active:translate-y-0 transition-all duration-200"
                        href="{{ route('frontend.admission') }}">
                        Admissions
                    </a>
                </nav>

                <!-- MOBILE BUTTON -->
                <button
                    class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg text-slate-800 hover:bg-slate-100 transition-colors duration-200"
                    id="mobile-menu-btn">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>

                <!-- MOBILE OVERLAY -->
                <div class="md:hidden fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-40 hidden" id="mobile-overlay">
                </div>

                <!-- MOBILE DRAWER -->
                <div class="md:hidden fixed top-0 right-0 w-72 h-full bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 flex flex-col"
                    id="mobile-menu">

                    <div class="flex justify-between items-center px-5 py-4 border-b border-slate-100 shrink-0">
                        <img class="h-10 w-auto object-contain"
                            src="{{ $setting['site_main_logo'] ?? asset('frontend/images/logo.jpg') }}" alt="Logo">
                        <button
                            class="flex items-center justify-center w-9 h-9 rounded-lg text-slate-500 hover:bg-slate-100 hover:text-slate-800 transition-colors duration-200"
                            id="mobile-menu-close">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>

                    <nav class="px-3 py-4 flex flex-col gap-0.5 text-slate-700 overflow-y-auto flex-1">
                        <a class="block px-3.5 py-2.5 rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                            href="{{ route('home') }}">Home</a>

                        <div class="flex flex-col">
                            <button
                                class="flex justify-between items-center px-3.5 py-2.5 w-full rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150 mobile-dropdown-btn">
                                About Us <i
                                    class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200"></i>
                            </button>
                            <div
                                class="hidden flex-col pl-3 ml-3 border-l-2 border-primary/30 mt-0.5 mb-1 mobile-dropdown">
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('frontend.about') }}">Introduction</a>
                                @foreach ($messageItems as $message)
                                    <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                        href="{{ route('frontend.message.show', $message->slug) }}">{{ $message->name ?? '' }}</a>
                                @endforeach
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('frontend.teachers') }}">Our Teachers</a>
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('frontend.reviews') }}">Testimonial</a>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <button
                                class="flex justify-between items-center px-3.5 py-2.5 w-full rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150 mobile-dropdown-btn">
                                Academics <i
                                    class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200"></i>
                            </button>
                            <div
                                class="hidden flex-col pl-3 ml-3 border-l-2 border-primary/30 mt-0.5 mb-1 mobile-dropdown">
                                @foreach ($hacademy as $academy)
                                    <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                        href="{{ route('frontend.academics', $academy->slug) }}">{{ $academy->name ?? '' }}</a>
                                @endforeach
                            </div>
                        </div>

                        <a class="block px-3.5 py-2.5 rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                            href="{{ route('facilities') }}">Facilities</a>
                        <a class="block px-3.5 py-2.5 rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                            href="{{ route('frontend.gallery') }}">Gallery</a>

                        <div class="flex flex-col">
                            <button
                                class="flex justify-between items-center px-3.5 py-2.5 w-full rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150 mobile-dropdown-btn">
                                News &amp; Updates <i
                                    class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200"></i>
                            </button>
                            <div
                                class="hidden flex-col pl-3 ml-3 border-l-2 border-primary/30 mt-0.5 mb-1 mobile-dropdown">
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('notice') }}">Notices</a>
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('frontend.calendar') }}">Calendar</a>
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('blog') }}">Blogs</a>
                                <a class="block px-3 py-2 rounded-lg text-sm text-slate-600 font-medium hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                                    href="{{ route('downloads') }}">Downloads</a>
                            </div>
                        </div>

                        <a class="block px-3.5 py-2.5 rounded-lg text-sm font-semibold hover:bg-primary/5 hover:text-primary transition-colors duration-150"
                            href="{{ route('contact') }}">Contact</a>

                        <a class="block bg-primary text-white text-sm font-bold px-4 py-3 mt-3 rounded-xl text-center shadow-md shadow-primary/30 hover:shadow-lg hover:brightness-110 transition-all duration-200"
                            href="{{ route('frontend.admission') }}">
                            Admissions
                        </a>

                        <div class="flex justify-center gap-3 mt-5 pt-5 border-t border-slate-100">
                            @foreach ($social as $socials)
                                <a class="flex items-center justify-center w-9 h-9 rounded-full bg-slate-100 text-slate-500 text-sm hover:bg-primary hover:text-white transition-all duration-200 hover:-translate-y-px"
                                    href="{{ $socials->link ?? '#' }}"><i
                                        class="fa-brands {{ $socials->icon ?? '' }}"></i></a>
                            @endforeach

                        </div>
                    </nav>
                </div>

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
                    document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
                        btn.addEventListener('click', () => {
                            const dropdown = btn.nextElementSibling;
                            dropdown.classList.toggle('hidden');
                            const icon = btn.querySelector('i');
                            icon.classList.toggle('rotate-180');
                        });
                    });
                </script>
            </div>
        </div>
    </header>

</body>
