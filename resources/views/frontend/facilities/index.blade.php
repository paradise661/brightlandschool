@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] md:h-[500px] overflow-hidden" id="facilities-hero">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/02fae44838-c1c2b8fdf0a26351c57a.png"
            alt="modern school campus with state-of-the-art facilities, aerial view, bright sunny day, professional photography" />
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center">
            <div class="max-w-3xl text-white">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4 md:mb-6 leading-tight">World-Class
                    Facilities</h1>
                <p class="text-lg md:text-xl text-gray-200">Providing state-of-the-art infrastructure for holistic
                    development and excellence in education</p>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="facilities-overview">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Excellence in
                    Infrastructure</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Facilities That Inspire
                    Learning</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">Our campus is equipped with modern facilities
                    designed to provide students with the best learning environment and opportunities for growth</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mb-12 md:mb-16">
                <div
                    class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 text-center border-2 border-blue-100 hover:border-primary hover:shadow-xl transition">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-building text-primary text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-2">50+</h3>
                    <p class="text-gray-600 font-semibold">Smart Classrooms</p>
                </div>
                <div
                    class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 md:p-8 text-center border-2 border-green-100 hover:border-green-600 hover:shadow-xl transition">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 bg-green-600/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-flask text-green-600 text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-2">12</h3>
                    <p class="text-gray-600 font-semibold">Advanced Laboratories</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 md:p-8 text-center border-2 border-purple-100 hover:border-purple-600 hover:shadow-xl transition">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 bg-purple-600/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-book text-purple-600 text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-2">50,000+</h3>
                    <p class="text-gray-600 font-semibold">Library Books</p>
                </div>
                <div
                    class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 md:p-8 text-center border-2 border-orange-100 hover:border-accent hover:shadow-xl transition">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-trophy text-accent text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-2">15+</h3>
                    <p class="text-gray-600 font-semibold">Sports Facilities</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="academic-facilities">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Academic Excellence</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Academic Facilities</h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 mb-8 md:mb-12">
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition"
                    id="smart-classrooms">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/5c8e33979f-9b36d36445beec8e0905.png"
                            alt="modern smart classroom with interactive whiteboard, students using tablets, bright and spacious, contemporary design" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-chalkboard-user text-primary text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Smart Classrooms</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Our classrooms are equipped with the latest
                            technology including interactive whiteboards, projectors, and digital learning tools to create
                            an engaging learning environment.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>Interactive digital displays and smart boards</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>High-speed internet connectivity</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>Audio-visual equipment for multimedia learning</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>Comfortable seating and optimal lighting</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition" id="science-labs">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/8cc1b99c49-d75cb07597cddedc9ab1.png"
                            alt="modern science laboratory with students conducting experiments, advanced equipment, bright and clean, professional setting" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-green-600/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-flask text-green-600 text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Science Laboratories</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">State-of-the-art laboratories for Physics,
                            Chemistry, and Biology equipped with modern instruments and safety equipment for hands-on
                            learning experiences.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Advanced scientific instruments and apparatus</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Safety equipment and protocols</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Separate labs for each science discipline</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-green-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Trained lab assistants and supervisors</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition" id="computer-labs">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/3dc12fc6c6-7e5c2bbc93ae7895a463.png"
                            alt="modern computer lab with students coding, multiple monitors, contemporary design, bright lighting" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-purple-600/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-computer text-purple-600 text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Computer Laboratories</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Fully equipped computer labs with latest hardware
                            and software to develop digital literacy and coding skills from an early age.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Latest computers with high-performance specifications</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Licensed educational software and tools</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Coding and robotics programming facilities</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Internet safety and digital citizenship training</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition" id="library">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/2594bea980-f41e1d6c1df1c7ec551b.png"
                            alt="modern school library with students reading, bookshelves, comfortable seating areas, natural lighting, spacious and inviting" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-accent/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-book text-accent text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Digital Library</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">A comprehensive library with over 50,000 books,
                            digital resources, and quiet study areas to foster a love for reading and research.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-accent mr-2 mt-1 flex-shrink-0"></i>
                                <span>Extensive collection of books and reference materials</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-accent mr-2 mt-1 flex-shrink-0"></i>
                                <span>Digital library with e-books and online journals</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-accent mr-2 mt-1 flex-shrink-0"></i>
                                <span>Quiet reading and study areas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-accent mr-2 mt-1 flex-shrink-0"></i>
                                <span>Professional librarians for research assistance</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="sports-facilities">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Physical Excellence</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Sports & Recreation
                    Facilities</h2>
                <p class="text-lg text-gray-600 max-w-3xl">Promoting physical fitness and sportsmanship through world-class
                    sports infrastructure</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 border-2 border-blue-100 hover:border-primary hover:shadow-xl transition"
                    id="sports-playground">
                    <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/2f33a9b2db-d8d397a0f21554a34f06.png"
                            alt="school outdoor playground with running track, green field, students playing sports, sunny day" />
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-person-running text-primary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Multi-Purpose Playground</h3>
                    <p class="text-gray-600 text-sm md:text-base">Spacious outdoor playground with synthetic track,
                        football field, and cricket pitch for various sports activities.</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 md:p-8 border-2 border-green-100 hover:border-green-600 hover:shadow-xl transition"
                    id="sports-basketball">
                    <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/31af85b2e3-a3f74d8cc87b95eb9e2a.png"
                            alt="indoor basketball court with students playing, modern facility, bright lighting, professional setup" />
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-green-600/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-basketball text-green-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Basketball Courts</h3>
                    <p class="text-gray-600 text-sm md:text-base">Indoor and outdoor basketball courts with professional
                        standards for training and inter-school competitions.</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 md:p-8 border-2 border-purple-100 hover:border-purple-600 hover:shadow-xl transition"
                    id="sports-swimming">
                    <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/a53dbdb405-01c2cc09548a07782ca2.png"
                            alt="school swimming pool with clear blue water, modern facility, students learning swimming, bright and clean" />
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-purple-600/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-person-swimming text-purple-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Swimming Pool</h3>
                    <p class="text-gray-600 text-sm md:text-base">Olympic-size swimming pool with trained instructors for
                        swimming classes and competitive training.</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 md:p-8 border-2 border-orange-100 hover:border-accent hover:shadow-xl transition"
                    id="sports-indoor">
                    <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/9d9a0f50fb-225f9d61dab49a16fc34.png"
                            alt="indoor sports hall with badminton courts, table tennis, students playing, modern facility" />
                    </div>
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-accent/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-table-tennis-paddle-ball text-accent text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Indoor Sports Complex</h3>
                    <p class="text-gray-600 text-sm md:text-base">Multi-purpose indoor hall for badminton, table tennis,
                        chess, and other indoor sports activities.</p>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-white rounded-2xl p-6 md:p-8 border-2 border-red-100 hover:border-secondary hover:shadow-xl transition"
                    id="sports-fitness">
                    <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/0cf001b0d0-10078b10540509648c34.png"
                            alt="modern school fitness center with exercise equipment, students working out, bright and spacious" />
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-secondary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-dumbbell text-secondary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Fitness Center</h3>
                    <p class="text-gray-600 text-sm md:text-base">Well-equipped fitness center with modern exercise
                        equipment and professional trainers for student fitness.</p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-white rounded-2xl p-6 md:p-8 border-2 border-teal-100 hover:border-teal-600 hover:shadow-xl transition"
                    id="sports-yoga">
                    <div class="h-48 md:h-56 overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/30be78d916-224d4017915917c4fba8.png"
                            alt="peaceful yoga and meditation room with students practicing, calm atmosphere, natural lighting" />
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-teal-600/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-spa text-teal-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Yoga & Meditation Hall</h3>
                    <p class="text-gray-600 text-sm md:text-base">Dedicated space for yoga and meditation sessions to
                        promote mental wellness and mindfulness among students.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="creative-facilities">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Creative Expression</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Arts & Creative Facilities
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl">Nurturing creativity and artistic talents through dedicated
                    spaces for arts, music, and performing arts</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 md:gap-12">
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition" id="creative-art">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/da0b1d2c80-2e029bd64923621adf13.png"
                            alt="school art studio with students painting, colorful artwork, creative space, bright and inspiring" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-purple-600/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-palette text-purple-600 text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Art Studio</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Spacious art studio equipped with professional
                            art supplies, easels, and workstations for painting, drawing, and sculpture.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Professional art supplies and materials</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Individual workstations and display areas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Experienced art instructors</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition"
                    id="creative-music">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/042a7f139b-9d5df84082bce9caf2e4.png"
                            alt="modern music room with students playing instruments, piano, guitars, drums, professional setup" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-music text-primary text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Music Room</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">State-of-the-art music room with various musical
                            instruments and soundproof practice rooms for individual and group sessions.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>Wide range of musical instruments</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>Soundproof practice rooms</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-primary mr-2 mt-1 flex-shrink-0"></i>
                                <span>Professional music instructors</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition"
                    id="creative-auditorium">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/ffc037c6b7-5495b8ef0436f951b1ff.png"
                            alt="modern school auditorium with stage, seating, professional lighting, students performing" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-red-600/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-masks-theater text-red-600 text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Auditorium</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Modern auditorium with 800+ seating capacity,
                            professional stage, lighting, and sound systems for events and performances.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-red-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>800+ seating capacity with comfortable seats</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-red-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Professional stage and backstage facilities</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-red-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Advanced lighting and sound systems</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition"
                    id="creative-dance">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/1dcd5b3118-ef553c96c8a6178237ef.png"
                            alt="modern dance studio with mirrors, students practicing dance, wooden floor, bright and spacious" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-pink-600/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-person-dancing text-pink-600 text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Dance Studio</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Professional dance studio with mirrors, wooden
                            flooring, and sound systems for various dance forms and performances.</p>
                        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-pink-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Wall-to-wall mirrors and ballet bars</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-pink-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Professional wooden dance floor</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check-circle text-pink-600 mr-2 mt-1 flex-shrink-0"></i>
                                <span>Trained dance instructors for multiple forms</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="support-facilities">
        <div class="container mx-auto px-4 md:px-6">
            <div class="mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Student Support</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Support & Wellness
                    Facilities</h2>
                <p class="text-lg text-gray-600 max-w-3xl">Comprehensive facilities to ensure student safety, health, and
                    overall well-being</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-gradient-to-br from-red-50 to-white rounded-2xl p-6 md:p-8 border-2 border-red-100 hover:border-red-600 hover:shadow-xl transition"
                    id="support-medical">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-red-600/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-heart-pulse text-red-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Medical Room</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">24/7 medical facility with qualified nurses and
                        tie-ups with nearby hospitals for emergency care.</p>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-red-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Qualified medical staff on campus</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-red-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>First aid and emergency care</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-red-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Hospital tie-ups for emergencies</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-white rounded-2xl p-6 md:p-8 border-2 border-teal-100 hover:border-teal-600 hover:shadow-xl transition"
                    id="support-counseling">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-teal-600/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-user-doctor text-teal-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Counseling Center</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">Professional counseling services for academic
                        guidance, career planning, and emotional support.</p>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-teal-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Professional counselors available</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-teal-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Academic and career guidance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-teal-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Emotional and psychological support</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 md:p-8 border-2 border-orange-100 hover:border-accent hover:shadow-xl transition"
                    id="support-cafeteria">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-accent/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-utensils text-accent text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Cafeteria</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">Hygienic cafeteria serving nutritious meals and
                        snacks with diverse menu options for students.</p>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-accent mr-2 mt-1 flex-shrink-0"></i>
                            <span>Hygienic food preparation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-accent mr-2 mt-1 flex-shrink-0"></i>
                            <span>Nutritious and balanced meals</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-accent mr-2 mt-1 flex-shrink-0"></i>
                            <span>Spacious seating arrangements</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 border-2 border-blue-100 hover:border-primary hover:shadow-xl transition"
                    id="support-transport">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-bus text-primary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Transport Facility</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">Safe and comfortable transportation with GPS-enabled
                        buses covering all major areas of the city.</p>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-primary mr-2 mt-1 flex-shrink-0"></i>
                            <span>GPS-enabled buses for safety</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-primary mr-2 mt-1 flex-shrink-0"></i>
                            <span>Trained drivers and attendants</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-primary mr-2 mt-1 flex-shrink-0"></i>
                            <span>Wide coverage across city</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-gray-100 to-white rounded-2xl p-6 md:p-8 border-2 border-gray-200 hover:border-gray-800 hover:shadow-xl transition"
                    id="support-security">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-gray-800/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-shield-halved text-gray-800 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Security System</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">Advanced security systems with CCTV surveillance and
                        trained security personnel for campus safety.</p>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-gray-800 mr-2 mt-1 flex-shrink-0"></i>
                            <span>24/7 CCTV surveillance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-gray-800 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Trained security personnel</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-gray-800 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Visitor management system</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 md:p-8 border-2 border-purple-100 hover:border-purple-600 hover:shadow-xl transition"
                    id="support-wifi">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-purple-600/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-wifi text-purple-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900 mb-3">Wi-Fi Campus</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">High-speed internet connectivity across entire
                        campus for seamless digital learning experience.</p>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>High-speed internet throughout</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Secure and monitored network</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-purple-600 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Digital learning resources access</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 lg:py-24 bg-gradient-to-br from-primary via-blue-600 to-blue-700"
        id="virtual-tour-cta">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div
                    class="w-20 h-20 md:w-24 md:h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8">
                    <i class="fa-solid fa-video text-white text-3xl md:text-4xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4 md:mb-6">Experience Our Campus
                    Virtually</h2>
                <p class="text-lg md:text-xl text-blue-100 mb-8 md:mb-10">Take a virtual tour of our world-class facilities
                    from the comfort of your home</p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a class="w-full sm:w-auto bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-100 transition font-semibold text-lg inline-flex items-center justify-center"
                        href="#">
                        <i class="fa-solid fa-play mr-2"></i> Watch Virtual Tour
                    </a>
                    <a class="w-full sm:w-auto bg-transparent border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-primary transition font-semibold text-lg inline-flex items-center justify-center"
                        href="#">
                        <i class="fa-solid fa-calendar mr-2"></i> Schedule Campus Visit
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="facilities-testimonials">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">What People Say</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Testimonials About Our
                    Facilities</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-6">
                        <img class="w-14 h-14 md:w-16 md:h-16 rounded-full mr-4"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg"
                            alt="Parent testimonial">
                        <div>
                            <h4 class="font-heading font-bold text-gray-900 text-lg">Sarah Johnson</h4>
                            <p class="text-sm text-gray-600">Parent</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base">"The facilities at Excellence Academy are truly
                        world-class. My daughter loves the smart classrooms and the library. The infrastructure has exceeded
                        our expectations."</p>
                </div>

                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-6">
                        <img class="w-14 h-14 md:w-16 md:h-16 rounded-full mr-4"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg"
                            alt="Student testimonial">
                        <div>
                            <h4 class="font-heading font-bold text-gray-900 text-lg">Michael Chen</h4>
                            <p class="text-sm text-gray-600">Grade 10 Student</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base">"The science labs are amazing! We get to do so many
                        experiments and the equipment is top-notch. The sports facilities are also incredible."</p>
                </div>

                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-6">
                        <img class="w-14 h-14 md:w-16 md:h-16 rounded-full mr-4"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg"
                            alt="Alumni testimonial">
                        <div>
                            <h4 class="font-heading font-bold text-gray-900 text-lg">David Martinez</h4>
                            <p class="text-sm text-gray-600">Alumni (2019)</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                        <i class="fa-solid fa-star text-accent"></i>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base">"The facilities prepared me well for university. The
                        computer labs and library resources were instrumental in my academic success."</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gradient-to-r from-primary to-blue-600 text-white" id="cta-section">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4 md:mb-6">Ready to Join Excellence
                Academy?</h2>
            <p class="text-lg md:text-xl text-blue-100 mb-8 md:mb-10 max-w-3xl mx-auto">Experience our world-class
                facilities and give your child the best education possible</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a class="w-full sm:w-auto bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-100 transition font-semibold text-lg inline-flex items-center justify-center"
                    href="#">
                    Apply for Admission <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
                <a class="w-full sm:w-auto bg-secondary text-white px-8 py-4 rounded-full hover:bg-red-700 transition font-semibold text-lg inline-flex items-center justify-center"
                    href="#">
                    Download Brochure <i class="fa-solid fa-download ml-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
