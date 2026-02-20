@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] overflow-hidden" id="messages-hero">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/7c13df7a6a-bc5f72234a06e12659ca.png"
            alt="professional leadership team in modern school office, bright and inspiring" />
        <div class="relative z-20 container mx-auto px-4 md:px-6 h-full flex items-center">
            <div class="max-w-3xl text-white">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-4 md:mb-6 leading-tight">Leadership
                    Messages</h1>
                <p class="text-lg md:text-xl text-gray-200">Words of wisdom and vision from our esteemed leaders</p>
            </div>
        </div>
    </section>



    <section class="py-16 md:py-20 lg:py-24 bg-gray-50" id="chairman-full-message">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-5 gap-8 lg:gap-12 mb-12">
                    <div class="lg:col-span-2 order-2 lg:order-1">
                        <div class="sticky top-24">
                            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-3xl overflow-hidden shadow-2xl">
                                <div class="h-80 md:h-96 overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        src="https://storage.googleapis.com/uxpilot-auth.appspot.com/b6fada0172-b75f2340b45ba7c9b5aa.png"
                                        alt="professional male chairman in business suit, distinguished and confident, portrait without background" />
                                </div>
                                <div class="p-8 text-white">
                                    <h3 class="text-2xl md:text-3xl font-heading font-bold mb-2">Mr. Robert Mitchell</h3>
                                    <p class="text-gray-300 font-semibold mb-4 text-lg">Chairman, Board of Directors</p>
                                    <div class="space-y-3 text-sm">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-graduation-cap mr-3 text-lg"></i>
                                            <span>Ph.D. in Educational Leadership</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-briefcase mr-3 text-lg"></i>
                                            <span>35+ Years in Education Sector</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-medal mr-3 text-lg"></i>
                                            <span>Educational Leadership Award</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-envelope mr-3 text-lg"></i>
                                            <span>chairman@school.edu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-3 order-1 lg:order-2">
                        <div class="mb-8">
                            <span class="text-secondary font-semibold text-sm uppercase tracking-wider">From the
                                Chairman</span>
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-6">Building a
                                Legacy of Excellence</h2>
                        </div>
                        <div class="prose prose-lg max-w-none">
                            <div class="bg-gray-100 border-l-4 border-gray-800 p-6 rounded-r-2xl mb-8">
                                <p class="text-xl md:text-2xl font-heading text-gray-800 italic leading-relaxed">"The
                                    foundation of every state is the education of its youth. We are proud to be building
                                    that foundation, one student at a time."</p>
                            </div>

                            <div class="space-y-6 text-gray-700 text-base md:text-lg leading-relaxed">
                                <p>Dear Members of the Excellence Academy Family,</p>

                                <p>It fills me with immense pride and gratitude to address you as the Chairman of Excellence
                                    Academy, an institution that has been my life's passion and purpose for over three
                                    decades. When we founded this school in 1990, we had a simple yet profound vision: to
                                    create an educational institution that would not just impart knowledge, but shape
                                    character, inspire innovation, and nurture future leaders.</p>

                                <p>Today, as I reflect on our journey, I am humbled by how far we have come. From a modest
                                    beginning with 100 students and a handful of dedicated teachers, we have grown into a
                                    comprehensive educational institution serving over 2,000 students with a team of 150+
                                    expert educators. But more than the numbers, what truly matters is the impact we have
                                    made on countless young lives and the contributions our alumni are making to society.
                                </p>

                                <div class="bg-white rounded-2xl p-8 my-8 shadow-lg border border-gray-200">
                                    <h3 class="text-2xl font-heading font-bold text-gray-900 mb-6">Our Journey: Three
                                        Decades of Impact</h3>
                                    <div class="space-y-6">
                                        <div class="flex items-start">
                                            <div
                                                class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                                <i class="fa-solid fa-flag text-primary text-2xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl mb-2 text-gray-900">The Beginning (1990-2000)
                                                </h4>
                                                <p class="text-gray-600">Started with a vision to provide quality education
                                                    accessible to all. Established core values and teaching methodologies
                                                    that continue to guide us today.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div
                                                class="w-16 h-16 bg-green-600/10 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                                <i class="fa-solid fa-chart-line text-green-600 text-2xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl mb-2 text-gray-900">Growth & Expansion
                                                    (2000-2010)</h4>
                                                <p class="text-gray-600">Expanded infrastructure, introduced advanced
                                                    programs, and achieved national recognition for academic excellence and
                                                    innovative teaching methods.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div
                                                class="w-16 h-16 bg-purple-600/10 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                                <i class="fa-solid fa-globe text-purple-600 text-2xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl mb-2 text-gray-900">Global Recognition
                                                    (2010-2020)</h4>
                                                <p class="text-gray-600">Achieved international accreditations, established
                                                    global partnerships, and positioned ourselves as a leading educational
                                                    institution.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div
                                                class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                                                <i class="fa-solid fa-rocket text-accent text-2xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl mb-2 text-gray-900">Innovation Era
                                                    (2020-Present)</h4>
                                                <p class="text-gray-600">Leading the way in educational technology,
                                                    sustainable practices, and preparing students for the challenges of
                                                    tomorrow's world.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>The world of education has transformed dramatically over these years. The challenges and
                                    opportunities that today's students face are vastly different from those of previous
                                    generations. The rapid pace of technological advancement, globalization, and evolving
                                    social dynamics demand that we continuously adapt and innovate our approach to
                                    education.</p>

                                <p>At Excellence Academy, we have always been at the forefront of educational innovation. We
                                    were among the first schools in our region to integrate technology into the classroom,
                                    to emphasize holistic development alongside academic excellence, and to create
                                    partnerships with international institutions. Our commitment to staying ahead of the
                                    curve ensures that our students are always prepared for the future, whatever it may
                                    hold.</p>

                                <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl p-8 my-8">
                                    <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">Our Commitment to
                                        Excellence</h3>
                                    <ul class="space-y-3 text-gray-700">
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-3 mt-1 flex-shrink-0"></i>
                                            <span><strong>Quality Education:</strong> Maintaining the highest standards in
                                                curriculum, teaching, and learning outcomes.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-3 mt-1 flex-shrink-0"></i>
                                            <span><strong>Infrastructure Development:</strong> Continuous investment in
                                                modern facilities, technology, and learning resources.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-3 mt-1 flex-shrink-0"></i>
                                            <span><strong>Faculty Excellence:</strong> Recruiting and retaining the best
                                                educators and providing them with ongoing professional development.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-3 mt-1 flex-shrink-0"></i>
                                            <span><strong>Student Welfare:</strong> Ensuring a safe, supportive, and
                                                nurturing environment for all students.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fa-solid fa-check-circle text-primary mr-3 mt-1 flex-shrink-0"></i>
                                            <span><strong>Community Engagement:</strong> Building strong partnerships with
                                                parents and contributing positively to society.</span>
                                        </li>
                                    </ul>
                                </div>

                                <p>One of our proudest achievements has been creating an inclusive and diverse learning
                                    community. We believe that education should be accessible to talented students
                                    regardless of their economic background. Through our scholarship programs, we have
                                    supported hundreds of deserving students, many of whom have gone on to achieve
                                    remarkable success in their fields.</p>

                                <p>Our focus on holistic development means that we celebrate not just academic achievements
                                    but also excellence in sports, arts, leadership, and community service. We are proud of
                                    our students who have represented our school and country in various national and
                                    international competitions, bringing home numerous accolades and making us proud.</p>

                                <p>Looking ahead, we are committed to continuing our tradition of excellence while embracing
                                    the changes and challenges of the future. We are investing in cutting-edge facilities,
                                    including advanced science and technology labs, innovation centers, and sustainable
                                    infrastructure. We are also expanding our international partnerships to provide our
                                    students with global exposure and opportunities.</p>

                                <div
                                    class="bg-gradient-to-br from-primary/5 to-transparent rounded-2xl p-8 my-8 border-2 border-primary/20">
                                    <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">A Message to Our
                                        Stakeholders</h3>
                                    <div class="space-y-4 text-gray-700">
                                        <p><strong>To Our Students:</strong> You are the reason we exist. Your success,
                                            happiness, and growth are our ultimate goals. Make the most of every
                                            opportunity, challenge yourself, dream big, and never stop learning.</p>
                                        <p><strong>To Our Parents:</strong> Thank you for entrusting us with your most
                                            precious treasure. Your partnership, support, and feedback are invaluable in our
                                            journey of continuous improvement.</p>
                                        <p><strong>To Our Faculty and Staff:</strong> Your dedication, passion, and hard
                                            work are the backbone of our institution. You inspire our students every day and
                                            shape their futures in ways that extend far beyond the classroom.</p>
                                    </div>
                                </div>

                                <p>As we celebrate our achievements and look forward to the future, I am filled with
                                    optimism and excitement. The world needs more educated, thoughtful, and compassionate
                                    individuals who can tackle complex challenges and create positive change. At Excellence
                                    Academy, we are committed to developing such individuals.</p>

                                <p>I invite you to join us in this noble mission. Whether you are a prospective parent, a
                                    student, an educator, or a well-wisher, there is a place for you in the Excellence
                                    Academy family. Together, we can continue to build on our legacy and create an even
                                    brighter future for generations to come.</p>

                                <div class="mt-8 pt-8 border-t border-gray-300">
                                    <p class="font-semibold text-xl text-gray-900">With best wishes,</p>
                                    <p class="text-2xl font-heading font-bold text-gray-900 mt-2">Mr. Robert Mitchell</p>
                                    <p class="text-gray-600">Chairman, Board of Directors</p>
                                    <p class="text-gray-600">Excellence Academy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-white" id="leadership-achievements">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Leadership Excellence</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-4 mb-4">Awards & Recognition</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">Celebrating the achievements and
                    contributions of our leadership team</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div
                    class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 border-2 border-blue-100 hover:border-primary hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-trophy text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">National Excellence Award</h3>
                    <p class="text-gray-600 mb-2">Dr. James Anderson</p>
                    <p class="text-sm text-gray-500">Awarded for outstanding contribution to educational leadership and
                        innovation (2022)</p>
                </div>
                <div
                    class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 border-2 border-green-100 hover:border-green-600 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-green-600/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-medal text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Educational Leadership Award</h3>
                    <p class="text-gray-600 mb-2">Mr. Robert Mitchell</p>
                    <p class="text-sm text-gray-500">Recognized for 35 years of exceptional service and vision in education
                        sector (2020)</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 border-2 border-purple-100 hover:border-purple-600 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-purple-600/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-star text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Best School Management</h3>
                    <p class="text-gray-600 mb-2">Excellence Academy</p>
                    <p class="text-sm text-gray-500">Awarded for exemplary school management and administrative excellence
                        (2023)</p>
                </div>
                <div
                    class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-8 border-2 border-orange-100 hover:border-accent hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-lightbulb text-accent text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Innovation in Education</h3>
                    <p class="text-gray-600 mb-2">Leadership Team</p>
                    <p class="text-sm text-gray-500">Recognition for pioneering technology integration and modern teaching
                        methods (2021)</p>
                </div>
                <div
                    class="bg-gradient-to-br from-red-50 to-white rounded-2xl p-8 border-2 border-red-100 hover:border-secondary hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-heart text-secondary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Community Service Award</h3>
                    <p class="text-gray-600 mb-2">Excellence Academy</p>
                    <p class="text-sm text-gray-500">Honored for outstanding community engagement and social responsibility
                        initiatives (2022)</p>
                </div>
                <div
                    class="bg-gradient-to-br from-teal-50 to-white rounded-2xl p-8 border-2 border-teal-100 hover:border-teal-600 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-teal-600/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-globe text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">International Accreditation</h3>
                    <p class="text-gray-600 mb-2">Excellence Academy</p>
                    <p class="text-sm text-gray-500">Achieved prestigious international education standards certification
                        (2019)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gradient-to-r from-primary to-blue-600 text-white" id="cta-section">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4 md:mb-6">Experience Excellence in
                Education</h2>
            <p class="text-lg md:text-xl text-blue-100 mb-8 md:mb-10 max-w-3xl mx-auto">Join a community led by visionary
                leaders dedicated to your child's success</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a class="w-full sm:w-auto bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-100 transition font-semibold text-lg inline-flex items-center justify-center"
                    href="#">
                    Schedule a Meeting <i class="fa-solid fa-calendar ml-2"></i>
                </a>
                <a class="w-full sm:w-auto bg-secondary text-white px-8 py-4 rounded-full hover:bg-red-700 transition font-semibold text-lg inline-flex items-center justify-center"
                    href="#">
                    Apply for Admission <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
