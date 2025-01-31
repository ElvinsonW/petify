
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify - Event</title>
    <link href="../dist/css/output.css" rel="stylesheet">
        
    <!-- Favicon Petify -->
    <link rel="icon" href="../src/images/favicon.svg" type="image/svg">

    <!-- Font Overpass, Montserrat Alternates, & Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Katibeh&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="w-full bg-white shadow-xl">
        <nav class="px-5 flex justify-between items-center w-full font-overpass font-medium text-xl tracking-wide-9">
            <!-- LOGO -->
            <div class="mt-2 w-28 lg:w-32 h-auto flex justify-center ml-3">
                <a href="./index.html">
                    <img src="../src/images/Logo.svg" alt="Logo Petify" class="w-full h-auto">
                </a>
            </div>

            <!-- Feature -->
            <ul class="text-green lg:flex gap-13 hidden align-middle text-center justify-center">
                <li class="cursor-pointer p-2 hover:text-greentua hover:font-semibold transition duration-300 ease-in-out"><a href="./adopt.html">Adoption</a></li>  
                <li class="cursor-pointer p-2 hover:text-greentua hover:font-semibold transition duration-300 ease-in-out"><a href="./article.html">Article</a></li>
                <li class="cursor-pointer p-2 font-semibold border-greentua text-greentua border rounded-3xl flex items-center justify-center shadow-md hover:shadow-lg transition-shadow duration-200">
                    <p class="text-center"><a href="./event.html">Event</a></p>
                    <img class="w-7 h-auto ml-2" src="../src/images/Vector.svg" alt="">
                </li>       
                <li class="cursor-pointer p-2 hover:text-greentua hover:font-semibold transition duration-300 ease-in-out"><a href="./find-my-pet.html">Find Your Pet</a></li>
                <li class="cursor-pointer p-2 hover:text-greentua hover:font-semibold transition duration-300 ease-in-out"><a href="./life-after-adoption.html">Life After Adoption</a></li>
            </ul>

            <!-- BEFORE LOGIN -->
            <!-- Login/signin -->
            <!-- <div class="lg:flex hidden gap-6">
                <button class="px-4 py-4rem text-white bg-green rounded-2xl border border-greentua shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out"><a href="./login.html">Login</a></button>
                <button class="px-4 py-4rem text-white bg-green rounded-2xl border border-greentua shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out"><a href="./register.html">Sign In</a></button>
            </div> -->

            <!-- AFTER LOGIN -->
            <div class="lg:flex hidden items-center justify-center space-x-3 font-semibold">
                <p class="text-green text-center">Dodoidoy</p>
                <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                    <img src="../src/images/after login.svg" alt="After Login logo">
                </div>
            </div>
            
            <!-- hamburger icon -->
            <button class="buttonToogle lg:hidden block mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon h-8 w-8 text-green icon-hamburger transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>

        <!-- phone -->
        <div class="py-[2vw] mobileMenu hidden font-overpass font-medium text-lg tracking-wide-9 text-center">
            <ul class="text-green gap-4">
                <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="./adopt.html">Adoption</a></li>  
                <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="./article.html">Article</a></li>
                <li class="cursor-pointer m-7 p-2 font-semibold border-greentua text-greentua border rounded-3xl flex items-center justify-center shadow-md hover:shadow-lg transition-shadow duration-200">
                    <p class="text-center pt-1"><a href="./event.html">Event</a></p>
                    <img class="w-7 h-auto ml-2" src="../src/images/Vector.svg" alt="">
                </li>
                <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="./find-my-pet.html">Find Your Pet</a></li>
                <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="./life-after-adoption.html">Life After Adoption</a></li>
            </ul>

            <!-- a line before button -->
            <hr class="my-2 border-t-2 border-greentua-300">

            <!-- BEFORE LOGIN -->
            <!-- <div class="flex gap-6 mt-5 m-5">
                <button class="w-full px-4 py-4rem text-white bg-green rounded-2xl border border-greentua shadow-lg hover:bg-greentua hover:scale-95 transition duration-300"><a href="./login.html">Login</a></button>
                <button class="w-full px-4 py-4rem text-white bg-green rounded-2xl border border-greentua shadow-lg hover:bg-greentua hover:scale-95 transition duration-300"><a href="./register.html">Sign In</a></button>
            </div> -->

            <!-- AFTER LOGIN -->
            <div class="flex items-center justify-center space-x-5 font-medium mr-5">
                <div class="flex items-center justify-center space-x-3 font-semibold">
                    <p class="text-green text-center">Dodoidoy</p>
                    <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                        <img src="../src/images/after login.svg" alt="After Login logo">
                    </div>
                </div>
                <button class="px-4 py-2 text-white bg-green rounded-full border border-greentua shadow-lg hover:bg-greentua hover:scale-95 transition duration-300 w-auto">
                    <a href="./index.html">Log Out</a>
                </button>
            </div>       
        </div>
    </header>
    
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


    <!-- Footer Start -->
    <footer class="bg-greentua shadow font-montserrat_alt text-white text-sm mt-0">
        <div class="w-full max-w-screen-xl mx-auto py-8">
            <div class="flex flex-col sm:flex-row justify-between sm:items-start px-4 md:px-8">
                <!-- Logo dan Deskripsi -->
                <div class="flex flex-col mb-6 mr-32 sm:mb-0 sm:w-1/3">
                    <a href="../pages/index.html" class="space-x-3 rtl:space-x-reverse">
                        <img src="../src/images/Logo-White.svg" class="w-2/5 h-auto" alt="Petify Logo"/>
                    </a>
                    <p class="ml-2 mt-4 sm:text-left">
                        Find your perfect new companion, learn the best ways to care for them, and join a community dedicated to promoting animal welfare.
                    </p>
                </div>
    
                <!-- Contact Us -->
                <div class="w-full sm:w-1/3 mb-6 sm:mb-0 sm:text-left">
                    <h2 class="font-semibold tracking-wider text-2xl mb-3">Contact Us</h2>
                    <p>Feel free to contact us!</p>
                    <p class="my-4 flex sm:justify-start">
                        <i class="fa-solid fa-phone mr-4 text-xl" style="color: #ffffff;"></i>0852 - 6350 - 6419
                    </p>
                    <p class="my-4 flex sm:justify-start">
                        <i class="fa-solid fa-envelope mr-4 text-xl" style="color: #ffffff;"></i>Dodoidoy@gmail.com
                    </p>
                    <p class="flex sm:justify-start">
                        <i class="fa-solid fa-location-dot mr-4 text-xl" style="color: #ffffff;"></i>
                        Sentul City, Jl. Pakuan no 3, Sumur Batu, Babakan Madang, Bogor Regency, West Java 16810
                    </p>
                </div>
    
                <!-- Follow Us -->
                <div class="w-full sm:w-1/3 sm:text-right">
                    <h2 class="font-semibold tracking-wider text-2xl mb-3">Follow Us</h2>
                    <p class="mb-4">Let's connect on</p>
                    <div class="flex sm:justify-end space-x-4">
                        <a href="https://www.instagram.com/pptibca.18?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                            <i class="fa-brands fa-instagram text-3xl" style="color: #ffffff;"></i>
                        </a>
                        <a href="https://www.instagram.com/pptibca.18?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                            <i class="fa-brands fa-facebook text-3xl" style="color: #ffffff;"></i>
                        </a>
                        <a href="https://www.instagram.com/pptibca.18?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                            <i class="fa-brands fa-twitter text-3xl" style="color: #ffffff;"></i>
                        </a>
                    </div>
                </div>
            </div>
    
            <!-- Separator -->
            <hr class="my-5 border-white sm:mx-auto lg:my-8" />
            
            <!-- Footer Text -->
            <span class="block tracking-wide text-center">
                © 2024 Petify | All Rights Reserved | Developed with love by Dodoidoy
            </span>
        </div>
    </footer>
    <!-- Footer End -->

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

    const events = [
        { date: "2025-01-16", title: "Perkin Jaya All Breed Dog Show 2025", location: "Jeep Station Indonesia (JSI) Resort, Bogor" },
        { date: "2025-01-17", title: "Perkin Jaya All Breed Dog Show 2025", location: "Jeep Station Indonesia (JSI) Resort, Bogor" },
        { date: "2025-01-28", title: "Perkin Jaya All Breed Dog Show 2025", location: "Jeep Station Indonesia (JSI) Resort, Bogor" }
    ];

    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    const monthYearElement = document.getElementById("month-year");
    const datesElement = document.getElementById("dates");
    const eventListElement = document.getElementById("event-list");

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

        // Add the days of the month
        for (let day = 1; day <= daysInMonth; day++) {
            const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const dayElement = document.createElement("div");
            dayElement.textContent = day;
            dayElement.className =
            "p-2 rounded-2xl cursor-pointer hover:bg-gray-300";

            // Highlight the current day
            if (
            day === today.getDate() &&
            month === today.getMonth() &&
            year === today.getFullYear()
            ) {
            dayElement.classList.add("bg-gray-200", "font-bold");
            }

            // Highlight days with events
            const event = events.find(e => e.date === dateStr);
            if (event) {
            dayElement.classList.add("bg-blue-500", "text-white", "font-bold");
            dayElement.addEventListener("click", () => showEvent(event));
            }

            datesElement.appendChild(dayElement);
        }
    }

    function showEvent(event) {
        eventListElement.innerHTML = `
            <div class="p-4 bg-gray-50 rounded-md shadow">
            <h4 class="font-semibold text-lg">${event.title}</h4>
            <p class="text-sm text-gray-600">${event.location}</p>
            <p class="text-sm text-gray-500">${event.date}</p>
            </div>
        `;
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
    </script>  
</body>
</html>


