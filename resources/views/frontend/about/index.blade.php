@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden" id="about-hero">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/7f8819edd0-96e4a22c0038392548a9.png"
            alt="modern school building exterior with beautiful architecture" />
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center">
            <div class="max-w-3xl text-white">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4 md:mb-6 leading-tight">About
                    Excellence Academy</h1>
                <p class="text-lg md:text-xl text-gray-200">Discover our journey of educational excellence, our values, and
                    our commitment to shaping future leaders</p>
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
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden" id="principal-message">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/1111ee1c54-5e5d629f0f01e82416b4.png"
                            alt="professional male school principal in formal attire" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4">
                                <img class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-8.jpg"
                                    alt="Principal">
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Dr. James Anderson</h3>
                                <p class="text-primary font-semibold text-sm md:text-base">Principal</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4">"Education is not just about
                            imparting knowledge; it's about igniting curiosity, fostering creativity, and building
                            character. At Excellence Academy, we are committed to providing an environment where every
                            student can discover their unique talents and develop the skills needed to thrive in an
                            ever-changing world."</p>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">"Our dedicated faculty and staff work
                            tirelessly to ensure that each student receives personalized attention and support, enabling
                            them to reach their full potential both academically and personally."</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden" id="chairman-message">
                    <div class="h-64 md:h-80 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/18fa2ef698-d0ae3f1f507862e2a52f.png"
                            alt="professional male chairman in business suit" />
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden mr-4">
                                <img class="w-full h-full object-cover"
                                    src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-4.jpg"
                                    alt="Chairman">
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-900">Mr. Robert Mitchell
                                </h3>
                                <p class="text-primary font-semibold text-sm md:text-base">Chairman</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4">"As we navigate the complexities
                            of the 21st century, our commitment to educational excellence remains unwavering. Excellence
                            Academy has always been at the forefront of innovation, adapting our curriculum and facilities
                            to meet the evolving needs of our students and society."</p>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">"I am proud of our achievements and
                            grateful to our community of educators, parents, and students who make this institution truly
                            exceptional. Together, we continue to build a legacy of excellence that will inspire generations
                            to come."</p>
                    </div>
                </div>
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
                        <p class="text-gray-600 text-sm">Leading academic excellence with 20+ years of experience in
                            curriculum development and educational leadership.</p>
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
                        <p class="text-gray-600 text-sm">Dedicated to student welfare and holistic development, fostering a
                            supportive and inclusive school community.</p>
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
                        <p class="text-gray-600 text-sm">Coordinating academic programs and ensuring quality education
                            delivery across all grade levels.</p>
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
                        <p class="text-gray-600 text-sm">Managing sports, clubs, and activities to ensure comprehensive
                            student development beyond academics.</p>
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

    <section class="py-12 md:py-16 lg:py-20 bg-gradient-to-br from-gray-900 to-gray-800 text-white" id="milestones">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Our Journey</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold mt-4 mb-4">Key Milestones & Achievements</h2>
                <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">Celebrating three decades of educational
                    excellence and innovation</p>
            </div>
            <div class="space-y-6 md:space-y-8">
                <div
                    class="flex flex-col md:flex-row items-start md:items-center bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/10 transition">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-accent rounded-full flex items-center justify-center mr-0 md:mr-8 mb-4 md:mb-0 flex-shrink-0">
                        <span class="text-2xl md:text-3xl font-bold">1990</span>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-2">Foundation Year</h3>
                        <p class="text-gray-300 text-sm md:text-base">Excellence Academy was established with a vision to
                            provide quality education, starting with just 100 students and 15 dedicated teachers.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start md:items-center bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/10 transition">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-primary rounded-full flex items-center justify-center mr-0 md:mr-8 mb-4 md:mb-0 flex-shrink-0">
                        <span class="text-2xl md:text-3xl font-bold">2000</span>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-2">Campus Expansion</h3>
                        <p class="text-gray-300 text-sm md:text-base">Major infrastructure development including new
                            academic buildings, science laboratories, and sports facilities to accommodate growing student
                            population.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start md:items-center bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/10 transition">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-secondary rounded-full flex items-center justify-center mr-0 md:mr-8 mb-4 md:mb-0 flex-shrink-0">
                        <span class="text-2xl md:text-3xl font-bold">2010</span>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-2">International Recognition</h3>
                        <p class="text-gray-300 text-sm md:text-base">Received international accreditation and established
                            partnerships with leading educational institutions worldwide for student exchange programs.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start md:items-center bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/10 transition">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-green-600 rounded-full flex items-center justify-center mr-0 md:mr-8 mb-4 md:mb-0 flex-shrink-0">
                        <span class="text-2xl md:text-3xl font-bold">2015</span>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-2">Technology Integration</h3>
                        <p class="text-gray-300 text-sm md:text-base">Launched comprehensive digital learning initiative
                            with smart classrooms, tablets for all students, and advanced e-learning platforms.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start md:items-center bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/10 transition">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-purple-600 rounded-full flex items-center justify-center mr-0 md:mr-8 mb-4 md:mb-0 flex-shrink-0">
                        <span class="text-2xl md:text-3xl font-bold">2020</span>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-2">Excellence Award</h3>
                        <p class="text-gray-300 text-sm md:text-base">Honored with the National Excellence in Education
                            Award for outstanding contribution to academic and extracurricular achievements.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start md:items-center bg-white/5 backdrop-blur-sm rounded-2xl p-6 md:p-8 hover:bg-white/10 transition">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-accent rounded-full flex items-center justify-center mr-0 md:mr-8 mb-4 md:mb-0 flex-shrink-0">
                        <span class="text-2xl md:text-3xl font-bold">2024</span>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-heading font-bold mb-2">Innovation Center Launch</h3>
                        <p class="text-gray-300 text-sm md:text-base">Opened state-of-the-art Innovation and Research
                            Center equipped with robotics lab, maker space, and AI learning facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 lg:py-20 bg-white" id="community-impact">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Making a Difference</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Our Community Impact</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">Contributing to society through education,
                    service, and social responsibility</p>
            </div>
            <div class="grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 items-center mb-12">
                <div class="h-[400px] md:h-[500px] overflow-hidden rounded-2xl shadow-2xl">
                    <img class="w-full h-full object-cover"
                        src="https://storage.googleapis.com/uxpilot-auth.appspot.com/69df6f9f47-662a19d85393785630d3.png"
                        alt="students participating in community service activities" />
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900 mb-4 md:mb-6">Social
                        Responsibility Initiatives</h3>
                    <div class="space-y-4 md:space-y-6">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-primary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-hands-helping text-primary text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg md:text-xl text-gray-900 mb-2">Community Service Programs</h4>
                                <p class="text-gray-600 text-sm md:text-base">Students actively participate in local
                                    community service projects, contributing over 5,000 volunteer hours annually to various
                                    social causes.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-green-600/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-leaf text-green-600 text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg md:text-xl text-gray-900 mb-2">Environmental Sustainability
                                </h4>
                                <p class="text-gray-600 text-sm md:text-base">Leading green initiatives including solar
                                    power, waste management programs, and environmental awareness campaigns in the local
                                    community.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-accent/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fa-solid fa-graduation-cap text-accent text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg md:text-xl text-gray-900 mb-2">Scholarship Programs</h4>
                                <p class="text-gray-600 text-sm md:text-base">Providing educational opportunities to
                                    deserving students through merit and need-based scholarships, supporting over 200
                                    students annually.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 text-center border-2 border-blue-100">
                    <div class="text-3xl md:text-4xl font-bold text-primary mb-2">5000+</div>
                    <p class="text-gray-600 text-sm md:text-base">Volunteer Hours</p>
                </div>
                <div
                    class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 text-center border-2 border-green-100">
                    <div class="text-3xl md:text-4xl font-bold text-green-600 mb-2">200+</div>
                    <p class="text-gray-600 text-sm md:text-base">Scholarship Recipients</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 text-center border-2 border-purple-100">
                    <div class="text-3xl md:text-4xl font-bold text-purple-600 mb-2">50+</div>
                    <p class="text-gray-600 text-sm md:text-base">Community Projects</p>
                </div>
                <div
                    class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-6 text-center border-2 border-orange-100">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">100%</div>
                    <p class="text-gray-600 text-sm md:text-base">Green Campus</p>
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

    <section class="py-12 md:py-16 lg:py-20 bg-gradient-to-r from-primary to-blue-600 text-white" id="cta-section">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4 md:mb-6">Join Our Excellence Community
            </h2>
            <p class="text-lg md:text-xl text-blue-100 mb-8 md:mb-10 max-w-3xl mx-auto">Experience the difference of
                quality education. Schedule a campus tour or apply for admissions today.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a class="w-full sm:w-auto bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-100 transition font-semibold text-lg inline-flex items-center justify-center"
                    href="#">
                    Schedule a Tour <i class="fa-solid fa-calendar ml-2"></i>
                </a>
                <a class="w-full sm:w-auto bg-secondary text-white px-8 py-4 rounded-full hover:bg-red-700 transition font-semibold text-lg inline-flex items-center justify-center"
                    href="#">
                    Apply Now <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white pt-12 md:pt-16 pb-8" id="footer">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 mb-8 md:mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4 md:mb-6">
                        <div
                            class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-primary to-blue-600 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-white text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl font-heading font-bold">Excellence Academy</h3>
                        </div>
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
                        <li><a class="text-gray-400 hover:text-white transition" href="#">Career</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Resources</h3>
                    <ul class="space-y-2 md:space-y-3 text-sm md:text-base">
                        <li><a class="text-gray-400 hover:text-white transition" href="#">e-Library</a></li>
                        <li><a class="text-gray-400 hover:text-white transition" href="#">Downloads</a></li>
                        <li><a class="text-gray-400 hover:text-white transition" href="#">Academic Calendar</a></li>
                        <li><a class="text-gray-400 hover:text-white transition" href="#">Fee Structure</a></li>
                        <li><a class="text-gray-400 hover:text-white transition" href="#">FAQs</a></li>
                        <li><a class="text-gray-400 hover:text-white transition" href="#">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-base md:text-lg font-heading font-bold mb-4 md:mb-6">Newsletter</h3>
                    <p class="text-gray-400 text-sm md:text-base mb-4">Subscribe to get updates on school events and news.
                    </p>
                    <form class="space-y-3">
                        <input
                            class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:border-primary focus:outline-none text-sm md:text-base"
                            type="email" placeholder="Your email address">
                        <button
                            class="w-full bg-primary text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold text-sm md:text-base"
                            type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 md:pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400 text-xs md:text-sm text-center md:text-left">&copy; 2024 Excellence Academy.
                        All rights reserved.</p>
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
@endsection
