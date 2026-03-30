<div class="nepali-calendar-wrapper" style="padding:20px; max-width:1200px; margin:auto;">
    <div class="calendar-container" style="display:flex; flex-direction:column; height:90vh;">

        <!-- Calendar Header -->
        <div class="calendar-header"
            style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
            <button id="prev"
                style="background:#007aff;color:#fff;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;">◀</button>
            <h2 id="monthYear" style="margin:0;font-size:1.8rem;"></h2>
            <button id="next"
                style="background:#007aff;color:#fff;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;">▶</button>
        </div>

        <!-- Weekdays -->
        <div id="days"
            style="display:grid; grid-template-columns:repeat(7,1fr); text-align:center; font-weight:bold; margin-bottom:5px;">
        </div>

        <!-- Dates -->
        <div id="dates" style="display:grid; grid-template-columns:repeat(7,1fr); gap:5px; flex:1; overflow:auto;">
        </div>
    </div>
</div>

<!-- Event Modal -->
<div class="event-modal" id="eventModal">
    <div class="event-modal-content">
        <span class="event-modal-close" id="closeModal">&times;</span>
        <h3 class="event-modal-title" id="modalTitle"></h3>
        <p class="event-modal-date" id="modalDate"></p>
        <div class="event-modal-description" id="modalDescription"></div>
    </div>
</div>

<style>
    /* Modal overlay */
    .event-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 9999;
        padding: 20px;
    }

    /* Modal box */
    .event-modal-content {
        background: #fff;
        padding: 25px 30px;
        border-radius: 12px;
        max-width: 450px;
        width: 100%;
        position: relative;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.25);
        font-family: 'Arial', sans-serif;
        animation: fadeIn 0.3s ease;
        max-height: 90vh;
        overflow-y: auto;
    }

    /* Close button */
    .event-modal-close {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 26px;
        cursor: pointer;
        color: #333;
        font-weight: bold;
        transition: color 0.2s;
    }

    .event-modal-close:hover {
        color: #007aff;
    }

    /* Title */
    .event-modal-title {
        margin-top: 0;
        font-size: 22px;
        font-weight: 600;
        color: #222;
    }

    /* Date */
    .event-modal-date {
        color: #555;
        margin: 8px 0 15px 0;
        font-size: 14px;
    }

    /* Description */
    .event-modal-description {
        line-height: 1.6;
        color: #333;
        font-size: 15px;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

@php
    $events = getEvents();
@endphp

<script type="module">
    import {
        NepaliDate
    } from 'https://cdn.skypack.dev/nepali-date-library';

    // Events from controller
    const events = @json($events);

    const nepaliMonths = ["बैशाख", "जेठ", "असार", "श्रावण", "भदौ", "असोज", "कार्तिक", "मंसिर", "पौष", "माघ", "फाल्गुण",
        "चैत्र"
    ];
    const days = ["आइत", "सोम", "मंगल", "बुध", "बिही", "शुक्र", "शनि"];

    // Convert numbers to Nepali numerals
    function toNepaliNumber(num) {
        const nepaliNums = ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'];
        return num.toString().split('').map(n => nepaliNums[n] || n).join('');
    }

    // Strip HTML but keep line breaks
    function htmlToPlainText(html) {
        const temp = document.createElement("div");
        temp.innerHTML = html;
        temp.querySelectorAll('p').forEach(p => {
            p.innerHTML = p.textContent + '\n';
        });
        temp.querySelectorAll('br').forEach(br => {
            br.replaceWith('\n');
        });
        return temp.textContent.trim();
    }

    const daysContainer = document.getElementById("days");
    const datesContainer = document.getElementById("dates");
    const monthYear = document.getElementById("monthYear");

    // Render weekdays
    days.forEach(d => {
        const div = document.createElement("div");
        div.innerText = d;
        div.style.fontSize = '14px';
        div.style.textAlign = 'center';
        daysContainer.appendChild(div);
    });

    // Today
    let todayNepali = new NepaliDate();
    let currentYear = todayNepali.getYear();
    let currentMonth = todayNepali.getMonth(); // 0-based

    // Modal elements
    const modal = document.getElementById('eventModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDate = document.getElementById('modalDate');
    const modalDescription = document.getElementById('modalDescription');
    const closeModal = document.getElementById('closeModal');
    closeModal.addEventListener('click', () => modal.style.display = 'none');

    // Get events for a BS date
    function getEventsForDate(bsDate) {
        return events.filter(e => {
            const [startY, startM, startD] = e.start.split('-').map(Number);
            const start = new NepaliDate(startY, startM - 1, startD).getEnglishDate();
            let end;
            if (e.end) {
                const [endY, endM, endD] = e.end.split('-').map(Number);
                end = new NepaliDate(endY, endM - 1, endD).getEnglishDate();
            } else {
                end = start;
            }
            const current = bsDate.getEnglishDate();
            return current >= start && current <= end;
        });
    }

    // Render calendar
    function renderCalendar() {
        datesContainer.innerHTML = '';
        const firstDayNepali = new NepaliDate(currentYear, currentMonth, 1);
        const startDayIndex = firstDayNepali.getDay();
        const daysCount = firstDayNepali.daysInMonth();
        monthYear.innerText = nepaliMonths[currentMonth] + ' ' + toNepaliNumber(currentYear);

        // Empty slots
        for (let i = 0; i < startDayIndex; i++) {
            const emptyDiv = document.createElement('div');
            datesContainer.appendChild(emptyDiv);
        }

        for (let d = 1; d <= daysCount; d++) {
            const bsDate = new NepaliDate(currentYear, currentMonth, d);
            const dayEvents = getEventsForDate(bsDate);

            const div = document.createElement('div');
            div.className = 'date';
            div.style.background = '#f5f5f5';
            div.style.borderRadius = '8px';
            div.style.display = 'flex';
            div.style.flexDirection = 'column';
            div.style.minHeight = '70px';
            div.style.cursor = dayEvents.length ? 'pointer' : 'default';
            div.style.alignItems = 'center';
            div.style.justifyContent = 'center';
            div.style.textAlign = 'center';
            div.style.padding = '5px';

            const dateNumber = document.createElement('div');
            dateNumber.innerText = toNepaliNumber(d);
            dateNumber.style.fontSize = '32px';
            dateNumber.style.fontWeight = 'bold';
            dateNumber.style.width = '40px';
            dateNumber.style.height = '40px';
            dateNumber.style.display = 'flex';
            dateNumber.style.alignItems = 'center';
            dateNumber.style.justifyContent = 'center';
            dateNumber.style.marginBottom = '4px';
            if (bsDate.getYear() === todayNepali.getYear() && bsDate.getMonth() === todayNepali.getMonth() && bsDate
                .getDate() === todayNepali.getDate()) {
                dateNumber.style.background = '#007aff';
                dateNumber.style.color = '#fff';
                dateNumber.style.borderRadius = '50%';
            }
            div.appendChild(dateNumber);

            dayEvents.forEach(ev => {
                const span = document.createElement('div');
                span.innerText = ev.title;
                span.style.fontSize = '10px';
                span.style.marginTop = '2px';
                span.style.background = '#ff5722';
                span.style.color = '#fff';
                span.style.padding = '1px 3px';
                span.style.borderRadius = '3px';
                span.style.width = 'max-content';
                span.style.textAlign = 'center';
                div.appendChild(span);
            });

            if (dayEvents.length) {
                div.addEventListener('click', () => {
                    modal.style.display = 'flex';
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

    // Navigation
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
