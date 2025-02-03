<x-layout>

    <!-- container -->
    <div class="container mx-auto py-8 my-8 px-4 overflow-hidden bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <!-- Left Section (Judul, Search, Filter, and Event List) -->
            <div class="w-full lg:w-3/5 space-y-4">
                <!-- judul -->
                <header class="mb-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-green font-montserrat_alt">Event</h1>
                </header>
                <!-- Search and Filter -->
                <div class="flex flex-col">
                    <!-- search -->
                    <form>
                        <div class="relative mb-8">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input
                                type="search"
                                id="default-search"
                                class="block w-full p-4 ps-10 font-semibold text-black rounded-lg bg-abuevent "
                                placeholder="Search Here..."
                                required
                            />
                            <button
                                type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua transition duration-300 rounded-lg px-2 py-2"
                            >
                                Search
                            </button>
                        </div>
                    </form>
                    <!-- Filter Dropdowns -->
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row items-center md:space-x-4 mb-8">
                        <div class="flex flex-wrap gap-5 items-center">
                            <p class="text-xl font-open_sans font-semibold text-black tracking-widest w-full md:w-auto">Filter By:</p>
                            <select class="text-sm font-open_sans font-semibold tracking-wide text-black bg-abuevent px-3 py-1 rounded-lg focus:ring-2 focus:ring-black w-auto">
                                <option>Pet Category</option>
                            </select>
                            <select class="text-sm font-open_sans font-semibold tracking-wide text-black bg-abuevent px-3 py-1 rounded-lg focus:ring-2 focus:ring-black w-auto">
                                <option>Time</option>
                            </select>
                            <select class="text-sm font-open_sans font-semibold tracking-wide text-black bg-abuevent px-3 py-1 rounded-lg focus:ring-2 focus:ring-black w-auto">
                                <option>Category</option>
                            </select>
                        </div>
                        <!-- Button -->
                        <a
                            href="../pages/event-form1.html"
                            class="bg-orenmuda text-white px-4 py-2 rounded-lg shadow-sm hover:bg-orange-400 transition duration-300 inline-block text-center font-montserrat_alt tracking-wide text-base font-semibold w-full md:w-auto"
                            style="margin-left: auto;"
                        >
                            + Event Post
                        </a>
                    </div>

                </div>

                <!-- Event Card -->
                <div class="event card overflow-y-auto scrollbar-thin max-h-screen scrollbar-track-gray-200 scrollbar-thumb-gray-400 mb-10">
                    <a href="../pages/event-single.html" class="hover:bg-gray-100 transition duration-300 block p-4 rounded-lg mb-5">
                        <div class="flex flex-col md:flex-row items-start space-x-0 md:space-x-6">
                            <img
                                src="../src/images/articlepict.svg"
                                alt="Event Image"
                                class="w-full md:w-36 h-36 rounded-2xl object-cover"
                            />
                            <div>
                                <h2 class="text-2xl font-semibold font-montserrat_alt text-black leading-snug">
                                    Sendawar Beauty Cat Show 2025
                                </h2>
                                <p class="mt-2 text-sm font-open_sans leading-snug text-black font-normal">
                                    The contest was attended by 71 cats. Some of the categories competed were long tail,
                                    fashion show, health and adult to children’s breed cats and also domestic cats.
                                </p>
                                <div class="flex flex-col text-xs text-black font-open_sans font-semibold mt-3 leading-snug space-y-2">
                                    <!-- Lokasi -->
                                    <span class="flex items-center space-x-2">
                                        <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                        <span>
                                            Lamin Tonyoi, Sendawar Cultural Park, Barong Tongkok District, West Kutai Regency
                                        </span>
                                    </span>
                                    <!-- Tanggal -->
                                    <span class="flex items-center space-x-2">
                                        <img src="../src/images/uim_calendar.svg" alt="Calendar Icon" class="w-4 h-4">
                                        <span>28 October 2024</span>
                                    </span>
                                </div>
                            </div>                    
                        </div>
                    </a>
                    <!-- Repeat Event Card -->
                    <div class="event card">
                        <a href="../pages/event-single.html" class="hover:bg-gray-100 transition duration-300 block p-4 rounded-lg mb-5">
                            <div class="flex flex-col md:flex-row items-start space-x-0 md:space-x-6">
                                <img
                                    src="../src/images/articlepict.svg"
                                    alt="Event Image"
                                    class="w-full md:w-36 h-36 rounded-2xl object-cover"
                                />
                                <div>
                                    <h2 class="text-2xl font-semibold font-montserrat_alt text-black leading-snug">
                                        Sendawar Beauty Cat Show 2025
                                    </h2>
                                    <p class="mt-2 text-sm font-open_sans leading-snug text-black font-normal">
                                        The contest was attended by 71 cats. Some of the categories competed were long tail,
                                        fashion show, health and adult to children’s breed cats and also domestic cats.
                                    </p>
                                    <div class="flex flex-col text-xs text-black font-open_sans font-semibold mt-3 leading-snug space-y-2">
                                        <!-- Lokasi -->
                                        <span class="flex items-center space-x-2">
                                            <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                            <span>
                                                Lamin Tonyoi, Sendawar Cultural Park, Barong Tongkok District, West Kutai Regency
                                            </span>
                                        </span>
                                        <!-- Tanggal -->
                                        <span class="flex items-center space-x-2">
                                            <img src="../src/images/uim_calendar.svg" alt="Calendar Icon" class="w-4 h-4">
                                            <span>28 October 2024</span>
                                        </span>
                                    </div>
                                </div>                    
                            </div>
                        </a>
                        <!-- Repeat for additional cards -->
                        <a href="../pages/event-single.html" class="hover:bg-gray-100 transition duration-300 block p-4 rounded-lg mb-5">
                            <div class="flex flex-col md:flex-row items-start space-x-0 md:space-x-6">
                                <img
                                    src="../src/images/articlepict.svg"
                                    alt="Event Image"
                                    class="w-full md:w-36 h-36 rounded-2xl object-cover"
                                />
                                <div>
                                    <h2 class="text-2xl font-semibold font-montserrat_alt text-black leading-snug">
                                        Sendawar Beauty Cat Show 2025
                                    </h2>
                                    <p class="mt-2 text-sm font-open_sans leading-snug text-black font-normal">
                                        The contest was attended by 71 cats. Some of the categories competed were long tail,
                                        fashion show, health and adult to children’s breed cats and also domestic cats.
                                    </p>
                                    <div class="flex flex-col text-xs text-black font-open_sans font-semibold mt-3 leading-snug space-y-2">
                                        <!-- Lokasi -->
                                        <span class="flex items-center space-x-2">
                                            <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                            <span>
                                                Lamin Tonyoi, Sendawar Cultural Park, Barong Tongkok District, West Kutai Regency
                                            </span>
                                        </span>
                                        <!-- Tanggal -->
                                        <span class="flex items-center space-x-2">
                                            <img src="../src/images/uim_calendar.svg" alt="Calendar Icon" class="w-4 h-4">
                                            <span>28 October 2024</span>
                                        </span>
                                    </div>
                                </div>                    
                            </div>
                        </a>
                        <a href="../pages/event-single.html" class="hover:bg-gray-100 transition duration-300 block p-4 rounded-lg mb-5">
                            <div class="flex flex-col md:flex-row items-start space-x-0 md:space-x-6">
                                <img
                                    src="../src/images/articlepict.svg"
                                    alt="Event Image"
                                    class="w-full md:w-36 h-36 rounded-2xl object-cover"
                                />
                                <div>
                                    <h2 class="text-2xl font-semibold font-montserrat_alt text-black leading-snug">
                                        Sendawar Beauty Cat Show 2025
                                    </h2>
                                    <p class="mt-2 text-sm font-open_sans leading-snug text-black font-normal">
                                        The contest was attended by 71 cats. Some of the categories competed were long tail,
                                        fashion show, health and adult to children’s breed cats and also domestic cats.
                                    </p>
                                    <div class="flex flex-col text-xs text-black font-open_sans font-semibold mt-3 leading-snug space-y-2">
                                        <!-- Lokasi -->
                                        <span class="flex items-center space-x-2">
                                            <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                            <span>
                                                Lamin Tonyoi, Sendawar Cultural Park, Barong Tongkok District, West Kutai Regency
                                            </span>
                                        </span>
                                        <!-- Tanggal -->
                                        <span class="flex items-center space-x-2">
                                            <img src="../src/images/uim_calendar.svg" alt="Calendar Icon" class="w-4 h-4">
                                            <span>28 October 2024</span>
                                        </span>
                                    </div>
                                </div>                    
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Section (Calendar and Upcoming Events) -->
            <div class="w-full lg:w-2/5 space-y-6 mt-8 lg:mt-0">
                <div class="bg-abuevent p-10 rounded-xl">
                    <!-- Calendar -->
                    <div class="flex justify-between items-center mb-4">
                        <button id="prev" class="text-green hover:bg-gray-300 px-3 py-1 font-bold transition duration-300">&lt;</button>
                        <h3 id="month-year" class="text-xl font-bold font-open_sans text-green">January 2025</h3>
                        <button id="next" class="text-green hover:bg-gray-300 px-3 py-1 font-bold transition duration-300">&gt;</button>
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
                    
                    <!-- Upcoming Events -->
                    <h3 class="text-xl font-bold font-open_sans leading-snug text-green mb-4 mt-16">Upcoming Event</h3>
                    <div class="bg-white p-3 rounded-2xl hover:shadow-lg transition duration-300 mb-5">
                        <a href="../pages/event-single.html">
                            <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4">
                                <img
                                    src="../src/images/petpict.svg"
                                    alt="Upcoming Event"
                                    class="w-full md:w-24 h-24 rounded-2xl object-cover"
                                />
                                <div>
                                    <h4 class="mb-2 text-lg font-semibold text-black font-montserrat_alt leading-snug">Perkin Jaya All Breed Dog Show 2025</h4>
                                    <!-- location -->
                                    <span class="mb-1 flex items-center space-x-2">
                                        <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                        <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                            Jeep Station Indonesia (JSI) Resort, Bogor
                                        </span>
                                    </span>
                                    <!-- date -->
                                    <span class="flex items-center space-x-2">
                                        <img src="../src/images/uim_calendar.svg" alt="Location Icon" class="w-4 h-4">
                                        <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                            16 - 18 January 2025
                                        </span>
                                    </span>                                
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat for other events -->
                    <div class="bg-white p-3 rounded-2xl hover:shadow-lg transition duration-300 mb-5">
                        <a href="../pages/event-single.html">
                            <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4">
                                <img
                                    src="../src/images/petpict.svg"
                                    alt="Upcoming Event"
                                    class="w-full md:w-24 h-24 rounded-2xl object-cover"
                                />
                                <div>
                                    <h4 class="mb-2 text-lg font-semibold text-black font-montserrat_alt leading-snug">Perkin Jaya All Breed Dog Show 2025</h4>
                                    <!-- location -->
                                    <span class="mb-1 flex items-center space-x-2">
                                        <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                        <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                            Jeep Station Indonesia (JSI) Resort, Bogor
                                        </span>
                                    </span>
                                    <!-- date -->
                                    <span class="flex items-center space-x-2">
                                        <img src="../src/images/uim_calendar.svg" alt="Location Icon" class="w-4 h-4">
                                        <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                            16 - 18 January 2025
                                        </span>
                                    </span>                                
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white p-3 rounded-2xl hover:shadow-lg transition duration-300 mb-5">
                        <a href="../pages/event-single.html">
                            <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4">
                                <img
                                    src="../src/images/petpict.svg"
                                    alt="Upcoming Event"
                                    class="w-full md:w-24 h-24 rounded-2xl object-cover"
                                />
                                <div>
                                    <h4 class="mb-2 text-lg font-semibold text-black font-montserrat_alt leading-snug">Perkin Jaya All Breed Dog Show 2025</h4>
                                    <!-- location -->
                                    <span class="mb-1 flex items-center space-x-2">
                                        <img src="../src/images/location event.svg" alt="Location Icon" class="w-4 h-4">
                                        <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                            Jeep Station Indonesia (JSI) Resort, Bogor
                                        </span>
                                    </span>
                                    <!-- date -->
                                    <span class="flex items-center space-x-2">
                                        <img src="../src/images/uim_calendar.svg" alt="Location Icon" class="w-4 h-4">
                                        <span class="text-xs font-open_sans leading-snug font-normal text-black">
                                            16 - 18 January 2025
                                        </span>
                                    </span>                                
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

