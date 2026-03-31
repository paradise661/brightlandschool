<div class="max-w-6xl mx-auto mt-5">
    <div class="bg-white rounded-3xl shadow-lg border p-4 md:p-6">

        <!-- Calendar Header -->
        <div class="flex items-center justify-between mb-4 md:mb-6">
            <button class="px-3 py-1 bg-gray-100 hover:bg-blue-500 hover:text-white rounded-lg transition duration-300"
                id="prev">◀</button>

            <h2 class="text-base md:text-xl lg:text-2xl font-bold text-gray-800 text-center" id="monthYear"></h2>

            <button class="px-3 py-1 bg-gray-100 hover:bg-blue-500 hover:text-white rounded-lg transition duration-300"
                id="next">▶</button>
        </div>

        <!-- Weekdays -->
        <div class="grid grid-cols-7 text-center text-xs md:text-sm font-semibold text-gray-600 mb-2 md:mb-3"
            id="days"></div>

        <!-- Dates -->
        <div class="grid grid-cols-7 gap-1 md:gap-2 lg:gap-3" id="dates"></div>

    </div>
</div>

<!-- Responsive Modal -->
<div class="fixed inset-0 z-50 hidden bg-black/50 p-2 sm:p-3 md:p-4" id="eventModal">

    <div
        class="bg-white rounded-t-3xl md:rounded-2xl shadow-xl w-full max-w-md p-4 sm:p-5 md:p-6 relative flex flex-col max-h-[90vh] mx-auto overflow-y-auto animate-slideUp">

        <!-- Close Button -->
        <button class="absolute top-3 right-4 text-gray-500 hover:text-blue-600 text-lg md:text-xl" id="closeModal">
            ✕
        </button>

        <!-- Modal Title -->
        <h3 class="text-base sm:text-sm md:text-lg font-bold text-gray-800 mb-2 truncate" id="modalTitle"></h3>

        <!-- Modal Date -->
        <p class="text-xs sm:text-sm md:text-sm text-gray-500 mb-3 md:mb-4" id="modalDate"></p>

        <!-- Modal Description -->
        <div class="text-xs sm:text-sm md:text-sm text-gray-700 leading-relaxed whitespace-pre-line overflow-y-auto flex-1 p-1"
            id="modalDescription"></div>

    </div>
</div>

@php
    $events = getEvents();
@endphp

<script type="module">
    import {
        NepaliDate
    } from 'https://cdn.skypack.dev/nepali-date-library';

    const events = @json($events);

    const nepaliMonths = ["बैशाख", "जेठ", "असार", "श्रावण", "भदौ", "असोज", "कार्तिक", "मंसिर", "पौष", "माघ", "फाल्गुण",
        "चैत्र"
    ];
    const days = ["आइत", "सोम", "मंगल", "बुध", "बिही", "शुक्र", "शनि"];

    function toNepaliNumber(num) {
        const n = ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'];
        return num.toString().split('').map(x => n[x] || x).join('');
    }

    function htmlToPlainText(html) {
        const temp = document.createElement("div");
        temp.innerHTML = html;
        return temp.textContent.trim();
    }

    const daysContainer = document.getElementById("days");
    const datesContainer = document.getElementById("dates");
    const monthYear = document.getElementById("monthYear");

    // Render weekdays
    days.forEach(d => {
        const div = document.createElement("div");
        div.innerText = d;
        daysContainer.appendChild(div);
    });

    let todayNepali = new NepaliDate();
    let currentYear = todayNepali.getYear();
    let currentMonth = todayNepali.getMonth();

    const modal = document.getElementById('eventModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDate = document.getElementById('modalDate');
    const modalDescription = document.getElementById('modalDescription');

    document.getElementById('closeModal').addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

    // Get events for a date
    function getEventsForDate(bsDate) {
        return events.filter(e => {
            const [y, m, d] = e.start.split('-').map(Number);
            const start = new NepaliDate(y, m - 1, d).getEnglishDate();
            let end = start;
            if (e.end) {
                const [ey, em, ed] = e.end.split('-').map(Number);
                end = new NepaliDate(ey, em - 1, ed).getEnglishDate();
            }
            const current = bsDate.getEnglishDate();
            return current >= start && current <= end;
        });
    }

    // Render calendar
    function renderCalendar() {
        datesContainer.innerHTML = '';
        const firstDay = new NepaliDate(currentYear, currentMonth, 1);
        const startDay = firstDay.getDay();
        const daysCount = firstDay.daysInMonth();

        monthYear.innerText = nepaliMonths[currentMonth] + ' ' + toNepaliNumber(currentYear);

        for (let i = 0; i < startDay; i++) {
            datesContainer.appendChild(document.createElement('div'));
        }

        for (let d = 1; d <= daysCount; d++) {
            const bsDate = new NepaliDate(currentYear, currentMonth, d);
            const dayEvents = getEventsForDate(bsDate);

            const div = document.createElement('div');
            div.className =
                `bg-gray-50 border border-gray-200 rounded-xl p-1 md:p-2 flex flex-col items-center justify-start min-h-[70px] md:min-h-[90px] transition hover:shadow-md ${dayEvents.length?'cursor-pointer hover:border-blue-400':''}`;

            const dateNumber = document.createElement('div');
            dateNumber.className = "text-sm md:text-lg font-bold text-gray-800";
            dateNumber.innerText = toNepaliNumber(d);

            if (bsDate.getYear() === todayNepali.getYear() && bsDate.getMonth() === todayNepali.getMonth() && bsDate
                .getDate() === todayNepali.getDate()) {
                dateNumber.classList.add("bg-blue-500", "text-white", "rounded-full", "w-7", "h-7", "flex",
                    "items-center", "justify-center");
            }

            div.appendChild(dateNumber);

            dayEvents.forEach(ev => {
                const span = document.createElement('div');
                span.innerText = ev.title;
                span.className =
                    "text-[9px] md:text-[10px] bg-blue-500 text-white px-1.5 py-0.5 rounded-full mt-1 truncate max-w-full";
                div.appendChild(span);
            });

            if (dayEvents.length) {
                div.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex', 'items-end', 'md:items-center');

                    modalTitle.innerText = dayEvents.map(e => e.title).join(', ');
                    modalDate.innerText =
                        `BS: ${toNepaliNumber(bsDate.getYear())}-${toNepaliNumber(bsDate.getMonth()+1)}-${toNepaliNumber(bsDate.getDate())}`;
                    modalDescription.innerText = dayEvents.map(e => htmlToPlainText(e.description || '')).join(
                        '\n\n');
                });
            }

            datesContainer.appendChild(div);
        }
    }

    // Navigation buttons
    document.getElementById('prev').addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar();
    });
    document.getElementById('next').addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar();
    });

    renderCalendar();
</script>
