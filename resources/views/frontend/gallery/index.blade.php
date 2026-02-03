@extends('layouts.frontend.master')
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .gallery-item {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90vh;
            object-fit: contain;
        }
    </style>
    <section class="bg-gradient-to-r from-primary to-blue-600 py-16 md:py-20" id="page-hero">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div
                    class="w-20 h-20 md:w-24 md:h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-images text-white text-3xl md:text-4xl"></i>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-4">Photo Gallery</h1>
                <p class="text-lg md:text-xl text-blue-100 mb-6">Capturing precious moments and memorable experiences at
                    Excellence Academy</p>
                <div class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <a class="hover:text-blue-200 transition" href="#">Home</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <span>Gallery</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white" id="gallery-stats">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center" id="stat-1">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-camera text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">2,500+</h3>
                    <p class="text-gray-600">Photos</p>
                </div>
                <div class="text-center" id="stat-2">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-video text-secondary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">150+</h3>
                    <p class="text-gray-600">Videos</p>
                </div>
                <div class="text-center" id="stat-3">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-calendar text-accent text-2xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">50+</h3>
                    <p class="text-gray-600">Events</p>
                </div>
                <div class="text-center" id="stat-4">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-trophy text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">100+</h3>
                    <p class="text-gray-600">Achievements</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 bg-gray-50 sticky top-20 z-40" id="gallery-filters">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-wrap justify-center gap-3">
                <button
                    class="filter-btn active px-6 py-3 bg-primary text-white rounded-full font-semibold transition hover:bg-blue-700"
                    data-filter="all">
                    All Albums
                </button>
                <button
                    class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition hover:bg-gray-100"
                    data-filter="events">
                    Events & Celebrations
                </button>
                <button
                    class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition hover:bg-gray-100"
                    data-filter="academics">
                    Academic Activities
                </button>
                <button
                    class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition hover:bg-gray-100"
                    data-filter="sports">
                    Sports & Athletics
                </button>
                <button
                    class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition hover:bg-gray-100"
                    data-filter="cultural">
                    Cultural Programs
                </button>
                <button
                    class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition hover:bg-gray-100"
                    data-filter="achievements">
                    Achievements
                </button>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 gallery-album" id="annual-day-album" data-category="events">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-primary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Annual Day 2024</h2>
                        <p class="text-gray-600 text-sm md:text-base">A spectacular celebration of talent and achievement
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">24 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students performing on stage, colorful costumes, school auditorium, annual function, dramatic lighting"
                        alt="Annual Day Performance" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="group dance performance, synchronized movements, traditional costumes, stage lights"
                        alt="Dance Performance" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students receiving awards, trophy ceremony, proud parents, principal on stage"
                        alt="Award Ceremony" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="school choir singing, harmonious performance, music event, students in uniform"
                        alt="Choir Performance" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="drama performance, theatrical act, students in costumes, stage setting"
                        alt="Drama Performance" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="cultural dance, ethnic costumes, vibrant colors, traditional performance"
                        alt="Cultural Dance" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="audience applauding, parents watching, school event, happy faces" alt="Audience" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="stage decoration, colorful balloons, banners, festive atmosphere" alt="Stage Decoration" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white gallery-album" id="science-fair-album" data-category="academics">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-secondary mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">National Science Fair 2024
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base">Innovation and discovery in action</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">32 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students with science project, innovative robot, technology display, exhibition booth"
                        alt="Science Project" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students explaining project to judges, presentation, scientific models"
                        alt="Project Presentation" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="chemistry experiment demonstration, lab equipment, colorful reactions"
                        alt="Chemistry Demo" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="robotics competition, autonomous robots, coding challenge, students programming"
                        alt="Robotics" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="biology models, DNA structure, microscope, scientific displays" alt="Biology Display" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="physics experiments, mechanical models, energy demonstrations" alt="Physics Experiments" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="environmental science project, recycling model, sustainability display"
                        alt="Environmental Project" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students receiving medals, science fair awards, proud winners" alt="Award Winners" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 gallery-album" id="sports-day-album" data-category="sports">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-green-600 mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Sports Day 2024</h2>
                        <p class="text-gray-600 text-sm md:text-base">Athletic excellence and team spirit</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">28 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students running race, track and field, athletic competition, sports day" alt="Track Race" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="relay race, baton passing, team competition, running track" alt="Relay Race" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="high jump competition, athletic event, students jumping, sports field" alt="High Jump" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="basketball game, students playing, court action, team sport" alt="Basketball" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="football match, soccer game, students in jerseys, goal scoring" alt="Football Match" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students doing yoga, flexibility exercises, outdoor activity" alt="Yoga Session" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="tug of war competition, team effort, students pulling rope" alt="Tug of War" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="medal ceremony, sports winners, podium, champions celebrating" alt="Medal Ceremony" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white gallery-album" id="cultural-fest-album" data-category="cultural">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-accent mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Cultural Festival 2024</h2>
                        <p class="text-gray-600 text-sm md:text-base">Celebrating diversity and heritage</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">20 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="traditional dance performance, ethnic costumes, cultural program, colorful attire"
                        alt="Traditional Dance" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students in traditional dress, cultural diversity, heritage celebration"
                        alt="Cultural Attire" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="folk music performance, traditional instruments, students playing music" alt="Folk Music" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="art exhibition, student paintings, creative artwork, gallery display" alt="Art Exhibition" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="cultural food stall, traditional cuisine, festival atmosphere" alt="Food Stalls" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="rangoli decoration, colorful patterns, floor art, festival decoration" alt="Rangoli" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="drama performance, cultural play, theatrical costumes, stage act" alt="Cultural Drama" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students celebrating, happy faces, cultural unity, festive mood" alt="Celebration" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 gallery-album" id="graduation-album" data-category="achievements">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-purple-600 mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Graduation Ceremony 2024</h2>
                        <p class="text-gray-600 text-sm md:text-base">Celebrating academic success and new beginnings</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">30 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students in graduation gowns, caps thrown in air, celebration, achievement"
                        alt="Graduation" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="receiving diploma, handshake with principal, graduation ceremony" alt="Diploma Ceremony" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="group photo of graduates, happy students, graduation day, friends together"
                        alt="Graduate Group" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="proud parents with graduate, family celebration, emotional moment"
                        alt="Family Celebration" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="valedictorian speech, student speaking, graduation ceremony, audience" alt="Valedictorian" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="graduation caps in air, celebration, achievement, success" alt="Cap Toss" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students with medals, academic excellence, awards, proud achievers" alt="Medal Winners" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="graduation ceremony hall, decorated venue, formal event, celebration" alt="Ceremony Hall" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white gallery-album" id="field-trip-album" data-category="events">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-teal-600 mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Educational Field Trip 2024
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base">Learning beyond the classroom</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">18 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students at museum, educational tour, exhibits, learning experience" alt="Museum Visit" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students exploring nature, outdoor education, field study, natural environment"
                        alt="Nature Exploration" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="group photo at historical site, students together, educational trip" alt="Historical Site" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover" src="students on bus, travel, excited children, school trip"
                        alt="Bus Journey" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students taking notes, outdoor learning, observation, field study" alt="Field Study" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="picnic lunch, students eating together, outdoor meal, fun time" alt="Picnic" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students at science center, interactive exhibits, hands-on learning" alt="Science Center" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="happy students, group selfie, memorable moments, friendship" alt="Group Selfie" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 gallery-album" id="classroom-activities-album" data-category="academics">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <div class="w-1 h-10 bg-indigo-600 mr-4"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Classroom Activities</h2>
                        <p class="text-gray-600 text-sm md:text-base">Interactive learning and student engagement</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-sm md:text-base">22 Photos</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students in classroom, group discussion, collaborative learning, modern education"
                        alt="Group Discussion" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="teacher explaining on whiteboard, interactive lesson, engaged students"
                        alt="Interactive Lesson" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students using tablets, digital learning, technology in education" alt="Digital Learning" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="science lab experiment, students conducting research, practical learning"
                        alt="Lab Experiment" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="art class, students painting, creative activity, colorful artwork" alt="Art Class" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="students presenting project, classroom presentation, public speaking"
                        alt="Project Presentation" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="library reading session, students with books, quiet study" alt="Library Session" />
                </div>
                <div class="gallery-item rounded-xl overflow-hidden shadow-lg h-64" onclick="openModal(this)">
                    <img class="w-full h-full object-cover"
                        src="computer lab, students coding, programming class, technology education" alt="Computer Lab" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-100" id="video-gallery">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center mb-8">
                <div class="w-1 h-10 bg-secondary mr-4"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">Video Gallery</h2>
                    <p class="text-gray-600 text-sm md:text-base">Watch highlights from our school events</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group" id="video-1">
                    <div
                        class="relative h-48 bg-gradient-to-br from-primary to-blue-600 flex items-center justify-center cursor-pointer">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition">
                            <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Annual Day 2024 Highlights</h3>
                        <p class="text-sm text-gray-600 mb-3">Watch the best moments from our annual day celebration</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fa-solid fa-clock mr-1"></i> 5:32</span>
                            <span><i class="fa-solid fa-eye mr-1"></i> 2.4K views</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group" id="video-2">
                    <div
                        class="relative h-48 bg-gradient-to-br from-secondary to-red-600 flex items-center justify-center cursor-pointer">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition">
                            <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Sports Day Championship</h3>
                        <p class="text-sm text-gray-600 mb-3">Thrilling moments from our sports competition</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fa-solid fa-clock mr-1"></i> 4:15</span>
                            <span><i class="fa-solid fa-eye mr-1"></i> 1.8K views</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group" id="video-3">
                    <div
                        class="relative h-48 bg-gradient-to-br from-accent to-yellow-600 flex items-center justify-center cursor-pointer">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition">
                            <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Science Fair Winners</h3>
                        <p class="text-sm text-gray-600 mb-3">Meet our brilliant young scientists and their projects</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fa-solid fa-clock mr-1"></i> 6:20</span>
                            <span><i class="fa-solid fa-eye mr-1"></i> 3.1K views</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group" id="video-4">
                    <div
                        class="relative h-48 bg-gradient-to-br from-green-600 to-teal-600 flex items-center justify-center cursor-pointer">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition">
                            <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Cultural Festival Performances</h3>
                        <p class="text-sm text-gray-600 mb-3">A showcase of diverse talents and traditions</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fa-solid fa-clock mr-1"></i> 7:45</span>
                            <span><i class="fa-solid fa-eye mr-1"></i> 2.9K views</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group" id="video-5">
                    <div
                        class="relative h-48 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center cursor-pointer">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition">
                            <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Graduation Ceremony 2024</h3>
                        <p class="text-sm text-gray-600 mb-3">Celebrating our graduates' achievements</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fa-solid fa-clock mr-1"></i> 8:12</span>
                            <span><i class="fa-solid fa-eye mr-1"></i> 4.2K views</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg group" id="video-6">
                    <div
                        class="relative h-48 bg-gradient-to-br from-indigo-600 to-blue-600 flex items-center justify-center cursor-pointer">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition">
                            <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-gray-900 mb-2">School Tour 2024</h3>
                        <p class="text-sm text-gray-600 mb-3">Take a virtual tour of our campus facilities</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span><i class="fa-solid fa-clock mr-1"></i> 3:45</span>
                            <span><i class="fa-solid fa-eye mr-1"></i> 5.6K views</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" id="imageModal">
        <span class="absolute top-8 right-8 text-white text-4xl cursor-pointer hover:text-gray-300 z-10"
            onclick="closeModal()">&times;</span>
        <button
            class="absolute left-8 top-1/2 transform -translate-y-1/2 text-white text-4xl cursor-pointer hover:text-gray-300 z-10"
            onclick="previousImage()">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button
            class="absolute right-8 top-1/2 transform -translate-y-1/2 text-white text-4xl cursor-pointer hover:text-gray-300 z-10"
            onclick="nextImage()">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
        <img class="modal-content" id="modalImage">
    </div>
@endsection
@section('scripts')
    <script>
        let currentImageIndex = 0;
        let currentImages = [];

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
        const galleryAlbums = document.querySelectorAll('.gallery-album');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-primary', 'text-white');
                    b.classList.add('bg-white', 'text-gray-700');
                });

                this.classList.add('active', 'bg-primary', 'text-white');
                this.classList.remove('bg-white', 'text-gray-700');

                galleryAlbums.forEach(album => {
                    if (filter === 'all') {
                        album.style.display = 'block';
                    } else {
                        if (album.getAttribute('data-category') === filter) {
                            album.style.display = 'block';
                        } else {
                            album.style.display = 'none';
                        }
                    }
                });
            });
        });

        function openModal(element) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const imgSrc = element.querySelector('img').src;

            const parentSection = element.closest('.gallery-album');
            currentImages = Array.from(parentSection.querySelectorAll('.gallery-item img')).map(img => img.src);
            currentImageIndex = currentImages.indexOf(imgSrc);

            modal.classList.add('active');
            modalImg.src = imgSrc;
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % currentImages.length;
            document.getElementById('modalImage').src = currentImages[currentImageIndex];
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
            document.getElementById('modalImage').src = currentImages[currentImageIndex];
        }

        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('active')) {
                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowRight') nextImage();
                if (e.key === 'ArrowLeft') previousImage();
            }
        });
    </script>
@endsection
