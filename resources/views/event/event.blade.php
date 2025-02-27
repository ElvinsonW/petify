<x-layout>
    @if (session('createSuccess'))

        <div class="alert absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('createSuccess') }}
            </div>
            <button class="close-button ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif
    <!-- container -->
<div class="container mx-auto py-8 my-8 px-[1vw] overflow-hidden bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
    <!-- Main Content -->
    <div class="flex flex-col lg:flex-row lg:space-x-12">
        <!-- Left Section (Judul, Search, Filter, and Event List) -->
        <div class="w-full lg:w-3/5 space-y-4">
            <!-- judul -->
            <header class="mb-[1.5vw]">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-greenpetify font-montserrat_alt">Event</h1>
            </header>
            <!-- Search and Filter -->
            <div class="flex flex-col">
                <!-- search -->
                <form class="mt-[1vw]">
                    @php
                        $params = ["category","time"];
                    @endphp

                    @foreach($params as $param)
                        @if(request($param))
                            <input type="hidden" name="{{ $param }}" value="{{ request($param) }}">
                        @endif
                    @endforeach

                    <div class="relative mb-8">
                        <label for="search" class="mb-[0.5vw] text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                        <div class="relative w-full border-1/2 border-gray-400 rounded-[0.5vw] bg-white shadow-md">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-[0.75vw] pointer-events-none">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="search" id="search" name="search" class="rounded-[0.5vw] block w-full max-w-[calc(100%-5.2vw)] p-[1vw] ps-10 !font-overpass font-semibold focus:outline-none" value="{{ request('search    ') }}" placeholder="Search Here..."/>
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-[0.5vw] px-[0.5vw] py-[0.4vw] !font-overpass">Search</button>
                        </div>
                    </div>
                </form>
                <!-- Filter Dropdowns -->
                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row items-center md:space-x-4 mb-8">
                    <!-- <div class="flex flex-wrap gap-5 items-center">
                        <p class="text-xl font-open_sans font-semibold text-black tracking-widest w-full md:w-auto">Filter By:</p>
                        <select class="text-sm font-open_sans font-semibold tracking-wide text-black bg-abuevent px-3 py-1 rounded-lg focus:ring-1 focus:ring-black w-auto">
                            <option value="" disabled selected>Pet Category</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="reptile">Reptile</option>
                            <option value="reptile">Other Pet</option>
                        </select>
                        <select class="text-sm font-open_sans font-semibold tracking-wide text-black bg-abuevent px-3 py-1 rounded-lg focus:ring-1 focus:ring-black w-auto">
                            <option>Time</option>
                        </select>
                    </div> -->
                    <div class="flex flex-wrap gap-[2.5vw] items-center">
                        <p class="text-[1.4vw] font-semibold text-black tracking-widest w-full md:w-auto items-center text-center">
                            Filter By:
                        </p>
                        <div class="relative">
                            <select id="categorySelected" class="appearance-none text-[1.1vw] font-medium text-white bg-greenpetify border px-[1.2vw] py-[0.35vw] pr-[2.5vw] rounded-[0.5vw] w-full">
                                <option value="" disabled selected>Pet Category</option>
                                @foreach ($categories as $category)
                                    @if (request('category') == $category->slug)
                                        <option value="{{ $category->slug }}" class="categoryFilter" selected>{{ $category->name }}</option>
                                    @else  
                                        <option value="{{ $category->slug }}" class="categoryFilter">{{ $category->name }}</option>
                                    @endif    
                                @endforeach
                            </select>
                            <svg class="absolute right-[0.8vw] top-1/2 transform -translate-y-1/2 w-[1.1vw] h-[1.1vw] text-white pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="relative">
                            <select id="timeSelected" class="appearance-none text-[1.1vw] font-medium text-white bg-greenpetify border px-[1.2vw] py-[0.35vw] rounded-[0.5vw] w-full">
                                <option value="" disabled selected>Time</option>
                                @if (request('time') == "morning")
                                    <option value="morning">Morning</option>
                                @else
                                    <option value="morning">Morning</option>
                                @endif

                                @if (request('time') == "afternoon")
                                    <option value="afternoon">Afternoon</option>
                                @else
                                    <option value="afternoon">Afternoon</option>
                                @endif

                                @if (request('time') == "night")
                                    <option value="night">Night</option>
                                @else
                                    <option value="night">Night</option>
                                @endif
                            </select>
                            <svg class="absolute right-[0.8vw] top-1/2 transform -translate-y-1/2 w-[1.1vw] h-[1.1vw] text-white pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Button -->
                    <a
                        href="/events/create"
                        class="bg-orenmuda text-white px-[1vw] py-[0.5vw] rounded-[0.5vw] shadow-sm hover:bg-orange-400 transition duration-300 inline-block text-center font-montserrat_alt tracking-wide text-base font-semibold w-full md:w-auto"
                        style="margin-left: auto;"
                    >
                        + Event Post
                    </a>
                </div>
            </div>

            <!-- Main Event (Today) -->
            @if ($upcomingEvents->isNotEmpty()) <!-- Check if there are any events -->
                @foreach ($upcomingEvents as $upcomingEvent)
                    <div class="event card overflow-y-auto scrollbar-thin max-h-screen scrollbar-track-gray-200 scrollbar-thumb-gray-400 mb-10">
                        <a href="/events/{{ $upcomingEvent->slug }}" class="hover:bg-gray-100 transition duration-300 block p-[1vw] rounded-lg mb-[1.4vw]">
                            <div class="flex flex-col md:flex-row items-start space-x-0 md:space-x-6">
                                <img
                                    src="{{ asset('storage/' . $upcomingEvent->image) }}"
                                    alt="Event Image"
                                    class="w-full md:w-36 h-36 rounded-[1vw] object-cover"
                                />
                                <div>
                                    <h2 class="text-2xl font-semibold font-montserrat_alt text-black leading-snug">
                                        {{ $upcomingEvent->title }}
                                    </h2>
                                    <p class="mt-[0.5vw] text-sm font-open_sans leading-snug text-black font-normal">
                                        {!! Str::limit($upcomingEvent->description, 100) !!}
                                    </p>
                                    <div class="flex flex-col text-xs text-black font-open_sans font-semibold mt-3 leading-snug space-y-2">
                                        <span class="flex items-center space-x-2">
                                            <img 
                                                src="{{ asset('images/location event.svg') }}" 
                                                alt="Location Icon" class="w-4 h-4">
                                            <span>{{ $upcomingEvent->location }}</span>
                                        </span>
                                        <span class="flex items-center space-x-2">
                                            <img 
                                                src="{{ asset('images/uim_calendar.svg') }}" 
                                                alt="Calendar Icon" class="w-4 h-4">
                                            <span>{{ \Carbon\Carbon::parse($upcomingEvent->start_date)->format('d F Y') }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="my-[2.5vw] text-[1.2vw">
                    {{ $upcomingEvents->links() }}
                </div>
            @else
                <p>No current events.</p>
            @endif
        </div>

        <!-- Right Section (Calendar and Upcoming Events) -->
        <div class="w-full lg:w-2/5 space-y-6 mt-8 lg:mt-0">
            <div class="bg-abuevent p-10 rounded-xl">
                <!-- Calendar -->
                <div class="flex justify-between items-center mb-4">
                    <button id="prev" class="text-greenpetify hover:bg-gray-300 px-3 py-1 font-bold transition duration-300">&lt;</button>
                    <h3 id="month-year" class="text-xl font-bold font-open_sans text-greenpetify">{{ Carbon\Carbon::now()->format('F Y') }}</h3>
                    <button id="next" class="text-greenpetify hover:bg-gray-300 px-3 py-1 font-bold transition duration-300">&gt;</button>
                </div>
                <div class="grid grid-cols-7 gap-2 text-center font-open_sans text-black">
                    <div>SUN</div>
                    <div>MON</div>
                    <div>TUE</div>
                    <div>WED</div>
                    <div>THU</div>
                    <div>FRI</div>
                    <div>SAT</div>
                </div>
                <div id="dates" class="grid grid-cols-7 gap-2 text-center mt-4 font-open_sans"></div>

                <!-- Upcoming Events (Next 2 Weeks Events) -->
                <h3 class="text-xl font-bold font-open_sans leading-snug text-greenpetify mb-4 mt-16">Today's Event</h3>
                <div class="max-h-[40vw] overflow-auto scrollbar-none" id="main-event-container">
                    @if ($mainEvent->isNotEmpty())
                        @foreach ($mainEvent as $mainEvent)
                            <div class="bg-white p-[0.75vw] rounded-[1vw] hover:shadow-lg transition duration-300 mb-[1.2vw]">
                                <a href="/events/{{ $mainEvent->slug }}">
                                    <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4">
                                        <img
                                            src="{{ asset('storage/' . $mainEvent->image) }}"
                                            alt="main Event"
                                            class="w-full md:w-24 h-24 rounded-2xl object-cover"
                                        />
                                        <div>
                                            <h4 class="mb-[0.5vw] text-lg font-semibold text-black font-montserrat_alt leading-snug">{{ $mainEvent->title }}</h4>
                                            <!-- location -->
                                            <span class="mb-1 flex items-center space-x-2">
                                                <img 
                                                src="{{ asset('images/location event.svg') }}" 
                                                alt="Location Icon" class="w-4 h-4">
                                                <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                                    {{ $mainEvent->location }}
                                                </span>
                                            </span>
                                            <!-- date -->
                                            <span class="flex items-center space-x-2">
                                                <img 
                                                src="{{ asset('images/uim_calendar.svg') }}" 
                                                alt="Location Icon" class="w-4 h-4">
                                                <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                                    {{ \Carbon\Carbon::parse($mainEvent->start_date)->format('d F Y') }}
                                                </span>
                                            </span>                                 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p>No Events Today.</p>
                    @endif
                </div>
            </div>
        </div>
    </div> <!-- Main Content -->
</div> <!-- container -->





    <script>
        const buttonToogle = document.querySelector('.buttonToogle');
        const mobileMenu = document.querySelector('.mobileMenu');
    
        buttonToogle.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
            
            const icon = buttonToogle.querySelector('.icon');
            
            // Toggle antara hamburger dan X
            if (icon.classList.contains('icon-hamburger')) {
                // ganti path
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
                icon.classList.remove('icon-hamburger');
                icon.classList.add('icon-close');
                icon.style.transform = 'rotate(90deg)'; // rotation effect
            } else {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                icon.classList.remove('icon-close');
                icon.classList.add('icon-hamburger');
                icon.style.transform = 'rotate(0deg)'; // Reset rotation
            }
        });

    const monthNames = [
    "January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"
    ];

    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    const monthYearElement = document.getElementById("month-year");
    const datesElement = document.getElementById("dates");

    function renderCalendar(month, year) {
        datesElement.innerHTML = ""; // Clear previous dates
        const firstDay = new Date(year, month, 1).getDay(); // Day of the week
        const daysInMonth = new Date(year, month + 1, 0).getDate(); // Days in the month

        // Update month and year
        monthYearElement.textContent = `${monthNames[month]} ${year}`;

        // Add blank spaces for days before the first of the month
        for (let i = 0; i < firstDay; i++) {
            const blank = document.createElement("div");
            datesElement.appendChild(blank);
        }

        let currentUrl = new URL(window.location.href);
        const currentDate = currentUrl.searchParams.get('date');


        for (let day = 1; day <= daysInMonth; day++) {
            const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const dayElement = document.createElement("div");
            dayElement.textContent = day;
            dayElement.id = dateStr;
            dayElement.className = "p-2 rounded-2xl cursor-pointer hover:bg-gray-300";

            // Highlight the current day
            if (
                day === today.getDate() &&
                month === today.getMonth() &&
                year === today.getFullYear() &&
                !currentDate
            ) {
                dayElement.classList.add("bg-gray-300", "font-bold");
            }

            if (dateStr === currentDate) {
                dayElement.classList.add("bg-gray-300", "font-bold"); 
            }

            dayElement.addEventListener('click', () => {

                const selectedDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

                if (currentDate === selectedDate) {
                    currentUrl.searchParams.delete('date');
                    dayElement.classList.remove("bg-gray-300", "font-bold"); 
                } else {
                    currentUrl.searchParams.set('date', selectedDate);
                    dayElement.classList.add("bg-gray-300", "font-bold"); 
                }

                window.location.href = currentUrl.toString();
            });

            datesElement.appendChild(dayElement);
        }

    }

    // Navigation buttons
    document.getElementById("prev").addEventListener("click", () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
        eventListElement.innerHTML = ""; // Clear event list
    });

    document.getElementById("next").addEventListener("click", () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
        eventListElement.innerHTML = ""; // Clear event list
    });

    // Initial render
    renderCalendar(currentMonth, currentYear);

    const categorySelect = document.getElementById('categorySelected');

    categorySelect.addEventListener('change', () => {
        const selectedCategory = categorySelect.value;
        if (selectedCategory) {
            let currentUrl = new URL(window.location.href);

            currentUrl.searchParams.set('category', selectedCategory);

            window.location.href = currentUrl.toString();
        }
    })

    const timeSelect = document.getElementById('timeSelected');

    timeSelect.addEventListener('change', () => {
        const selectedTime = timeSelect.value;

        if (selectedTime) {
            let currentUrl = new URL(window.location.href);

            currentUrl.searchParams.set('time', selectedTime);

            window.location.href = currentUrl.toString();
        }
    });


    </script>  
</x-layout>


