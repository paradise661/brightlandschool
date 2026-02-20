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
                    About Us
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
                            About Us
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="about-intro">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 lg:gap-16 items-center">
                <div>
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Our Story</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4 md:mb-6">Three Decades of
                        Educational Excellence</h2>
                    <p class="text-gray-600 text-base md:text-lg mb-4 md:mb-6 leading-relaxed">Founded in 1990, Excellence
                        Academy has been a beacon of quality education, committed to nurturing young minds and preparing
                        them for a successful future. Our journey began with a simple vision: to create an institution where
                        every student could discover their potential and achieve excellence.</p>
                    <p class="text-gray-600 text-base md:text-lg mb-4 md:mb-6 leading-relaxed">Over the years, we have grown
                        from a small school with 100 students to a premier educational institution serving over 2000
                        students. Our success is built on a foundation of academic rigor, innovative teaching methods, and a
                        deep commitment to character development.</p>
                    <p class="text-gray-600 text-base md:text-lg mb-6 md:mb-8 leading-relaxed">Today, Excellence Academy
                        stands as a testament to what can be achieved when dedication meets opportunity. Our alumni have
                        gone on to become leaders in various fields, making significant contributions to society and
                        carrying forward our legacy of excellence.</p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">30+</div>
                            <div class="text-gray-600 text-xs md:text-sm">Years of Excellence</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">2000+</div>
                            <div class="text-gray-600 text-xs md:text-sm">Students Enrolled</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-primary mb-2">150+</div>
                            <div class="text-gray-600 text-xs md:text-sm">Expert Faculty</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="h-[400px] md:h-[500px] overflow-hidden rounded-2xl shadow-2xl">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/f67bf3633f-c174b363d2e00b453d32.png"
                            alt="happy diverse students in modern classroom with teacher" />
                    </div>
                    <div
                        class="absolute -bottom-6 -left-4 md:-bottom-8 md:-left-8 bg-accent text-white p-6 md:p-8 rounded-2xl shadow-xl">
                        <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
                        <div class="text-xs md:text-sm">College Acceptance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gradient-to-br from-primary to-blue-600 text-white"
        id="vision-mission-values">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-heading font-bold mb-4">Our Vision, Mission & Core Values</h2>
                <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto">Guiding principles that shape our educational
                    philosophy and commitment to excellence</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/20 transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-eye text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold mb-3 md:mb-4">Our Vision</h3>
                    <p class="text-blue-100 text-sm md:text-base leading-relaxed">To be a globally recognized institution
                        that nurtures innovative thinkers, compassionate leaders, and lifelong learners who contribute
                        positively to society and shape a better future for all.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/20 transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-bullseye text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold mb-3 md:mb-4">Our Mission</h3>
                    <p class="text-blue-100 text-sm md:text-base leading-relaxed">To provide a holistic education that
                        empowers students with knowledge, skills, and values, fostering critical thinking, creativity, and
                        character development in a supportive and inclusive learning environment.</p>
                </div>
                <div
                    class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/20 transition md:col-span-2 lg:col-span-1">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-white/20 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-heart text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold mb-3 md:mb-4">Core Values</h3>
                    <ul class="text-blue-100 text-sm md:text-base space-y-2">
                        <li class="flex items-center"><i class="fa-solid fa-check-circle mr-2"></i> Excellence & Innovation
                        </li>
                        <li class="flex items-center"><i class="fa-solid fa-check-circle mr-2"></i> Integrity & Respect</li>
                        <li class="flex items-center"><i class="fa-solid fa-check-circle mr-2"></i> Collaboration &
                            Community</li>
                        <li class="flex items-center"><i class="fa-solid fa-check-circle mr-2"></i> Growth & Development
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="leadership-team">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Leadership</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Meet Our Leadership Team
                </h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">Experienced educators and administrators
                    dedicated to student success</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg"
                            alt="Vice Principal" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-1">Dr. Sarah Williams</h3>
                        <p class="text-primary font-semibold text-sm mb-3">Vice Principal - Academics</p>

                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg"
                            alt="Dean" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-1">Mr. David Thompson</h3>
                        <p class="text-primary font-semibold text-sm mb-3">Dean of Students</p>

                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-6.jpg"
                            alt="Academic Coordinator" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-1">Ms. Emily Brown</h3>
                        <p class="text-primary font-semibold text-sm mb-3">Academic Coordinator</p>

                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-9.jpg"
                            alt="Activities Director" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-1">Ms. Jennifer Lee</h3>
                        <p class="text-primary font-semibold text-sm mb-3">Director - Extracurricular</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="why-excellence">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">What Makes Us Different
                </h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">Discover the unique advantages that set
                    Excellence Academy apart</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div
                    class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 md:p-8 border-2 border-blue-100 hover:border-primary hover:shadow-xl transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-chalkboard-user text-primary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Expert Faculty</h3>
                    <p class="text-gray-600 text-sm md:text-base">Highly qualified teachers with advanced degrees and years
                        of experience dedicated to student success.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 md:p-8 border-2 border-green-100 hover:border-green-600 hover:shadow-xl transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-green-600/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-building-columns text-green-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Modern Infrastructure</h3>
                    <p class="text-gray-600 text-sm md:text-base">State-of-the-art facilities including smart classrooms,
                        laboratories, and comprehensive sports complexes.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 md:p-8 border-2 border-purple-100 hover:border-purple-600 hover:shadow-xl transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-purple-600/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-laptop-code text-purple-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Technology Integration</h3>
                    <p class="text-gray-600 text-sm md:text-base">Cutting-edge technology integrated throughout the
                        curriculum with digital learning platforms.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 md:p-8 border-2 border-orange-100 hover:border-accent hover:shadow-xl transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-accent/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-users text-accent text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Small Class Sizes</h3>
                    <p class="text-gray-600 text-sm md:text-base">Optimal student-teacher ratio ensuring personalized
                        attention and individualized learning.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-red-50 to-white rounded-2xl p-6 md:p-8 border-2 border-red-100 hover:border-secondary hover:shadow-xl transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-secondary/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-trophy text-secondary text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Proven Track Record</h3>
                    <p class="text-gray-600 text-sm md:text-base">98% college acceptance rate with students excelling in
                        national and international competitions.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-teal-50 to-white rounded-2xl p-6 md:p-8 border-2 border-teal-100 hover:border-teal-600 hover:shadow-xl transition">
                    <div
                        class="w-14 h-14 md:w-16 md:h-16 bg-teal-600/10 rounded-full flex items-center justify-center mb-4 md:mb-6">
                        <i class="fa-solid fa-heart text-teal-600 text-xl md:text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-3">Holistic Development</h3>
                    <p class="text-gray-600 text-sm md:text-base">Focus on overall personality development through sports,
                        arts, and leadership programs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-gray-50" id="accreditations">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Recognition</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Accreditations &
                    Affiliations</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">Recognized by leading educational bodies and
                    institutions worldwide</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-certificate text-primary text-3xl md:text-4xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">International Baccalaureate
                    </h3>
                    <p class="text-gray-600 text-sm md:text-base">Authorized IB World School offering comprehensive
                        international curriculum</p>
                </div>
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-green-600/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-award text-green-600 text-3xl md:text-4xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">National Accreditation</h3>
                    <p class="text-gray-600 text-sm md:text-base">Accredited by National Education Board with highest
                        ratings</p>
                </div>
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-purple-600/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-star text-purple-600 text-3xl md:text-4xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">Quality Certification</h3>
                    <p class="text-gray-600 text-sm md:text-base">ISO 9001:2015 certified for quality management systems
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-globe text-accent text-3xl md:text-4xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">Global Education Network</h3>
                    <p class="text-gray-600 text-sm md:text-base">Member of International Schools Association and Global
                        Education Forum</p>
                </div>
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-shield-halved text-secondary text-3xl md:text-4xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">Safety Standards</h3>
                    <p class="text-gray-600 text-sm md:text-base">Certified for child safety and security management
                        protocols</p>
                </div>
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-blue-600/10 rounded-full flex items-center justify-center mx-auto mb-4 md:mb-6">
                        <i class="fa-solid fa-handshake text-blue-600 text-3xl md:text-4xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-heading font-bold text-gray-900 mb-2">University Partnerships</h3>
                    <p class="text-gray-600 text-sm md:text-base">Collaborative agreements with 25+ leading universities
                        worldwide</p>
                </div>
            </div>
        </div>
    </section>
@endsection
