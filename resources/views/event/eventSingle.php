<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify - Event Details</title>
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
    <div class="container mx-auto px-4 py-8">
        <!-- title -->
        <h1 class="font-bold text-4xl md:text-5xl lg:text-6xl text-green font-montserrat_alt py-8 w-full md:w-3/4 my-8 text-center mx-auto">
            Perkin Jaya All Breed Dog Show 2025
        </h1>

        <!-- event details -->
        <div class="flex flex-col lg:flex-row items-center lg:space-x-10 text-lg md:text-xl tracking-wide text-black font-open_sans text-justify">
            <img src="../src/images/event detail photo.svg" alt="Event Image" class="w-full lg:w-1/2 h-auto shadow-lg">
            <div class="details mt-6 lg:mt-0">
                <!-- details -->
                <div class="mb-8 font-semibold space-y-4">
                    <div class="flex items-center space-x-4 md:space-x-6">
                        <img src="../src/images/location event.svg" alt="Location icon" class="w-6 h-6">
                        <span>Jeep Station Indonesia (JSI) Resort, Bogor</span>
                    </div>
                    <div class="flex items-center space-x-4 md:space-x-6">
                        <img src="../src/images/uim_calendar.svg" alt="Calendar icon" class="w-6 h-6">
                        <span>16 - 18 January 2025</span>
                    </div>
                    <div class="flex items-center space-x-4 md:space-x-6">
                        <img src="../src/images/ticket event.svg" alt="Ticket icon" class="w-6 h-6">
                        <span>Free</span>
                    </div>
                </div>
                <!-- content -->
                <div class="content leading-7 md:leading-8">
                    <p>We invite you to join the spectacular event "Perkin Jaya All Breed Dog Show 2025", an event that combines beauty and agility in the world of dogs. In this competition, participants will show the charm and extraordinary abilities of their furry friends!</p>
                    <p class="mt-8">
                        The event will feature two main categories:
                        <ul class="list-disc ml-5 space-y-3 mt-2">
                            <li>Dog Beauty Contest – A place for dogs of various breeds to show off their elegance, uniqueness, and physical appeal in front of professional judges.</li>
                            <li>Dog Agility Contest – A show of speed, agility, and obedience of dogs through a series of specially designed challenging obstacles.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <!-- additional info -->
        <div class="font-open_sans text-justify text-lg md:text-xl text-black mt-10 leading-7 md:leading-8">
            <p class="mb-8">
                Not only that, this event will also be enlivened by a pet bazaar, free health clinic for dogs, and various interesting games.
            </p>
            <p>
                Come and witness the extraordinary talents of the dog participants with their owners. Prepare to be amazed by the unique collaboration between humans and dogs full of love, dedication, and competitive spirit!
            </p>
        </div>

        <!-- schedule section -->
        <div class="mt-28">
            <div class="flex md:flex-row justify-center items-center mb-12">
                <div class="w-1/4 hidden md:block border-t-2 border-black"></div>
                <h2 class="text-3xl md:text-4xl font-bold font-montserrat_alt leading-snug text-center mx-8">
                    Schedule Of The Event
                </h2>
                <div class="w-1/4 hidden md:block border-t-2 border-black"></div>
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-6">
                <!-- Days -->
                <div class="w-full lg:w-3/4 space-y-10">
                    <div class="p-4 rounded-lg bg-gray-100 flex items-center">
                        <img src="../src/images/uim_calendar.svg" alt="">
                        <div class="text-lg md:text-xl font-montserrat_alt font-semibold leading-snug ml-5">
                            <p class="text-gray-400">Day 1</p>
                            <p class="text-black">16 January 2025</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-lg bg-green flex items-center">
                        <img src="../src/images/uim_calendar white.svg" alt="">
                        <div class="text-lg md:text-xl font-montserrat_alt font-semibold leading-snug ml-5">
                            <p class="text-white">Day 2</p>
                            <p class="text-white">17 January 2025</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-lg bg-gray-100 flex items-center">
                        <img src="../src/images/uim_calendar.svg" alt="">
                        <div class="text-lg md:text-xl font-montserrat_alt font-semibold leading-snug ml-5">
                            <p class="text-gray-400">Day 3</p>
                            <p class="text-black">18 January 2025</p>
                        </div>
                    </div>
                </div>

                <!-- Schedule Details -->
                <div class="flex-grow space-y-10 px-4 lg:px-10 mt-10 lg:mt-0 mb-20 overflow-y-auto scrollbar-thin max-h-screen scrollbar-track-gray-200 scrollbar-thumb-gray-400">
                    <div class="p-6 rounded-lg bg-gray-100">
                        <div class="inline-block rounded-full px-4 py-2 bg-greenabout border mb-3">
                            <p class="text-base font-semibold text-greentua font-montserrat_alt">10 : 00 AM - 11 : 00 AM</p>
                        </div>
                        <h3 class="text-black text-lg md:text-2xl font-montserrat_alt leading-snug font-semibold">Registration and Preparation for the competition participants</h3>
                        <p class="text-gray-500 mt-2 text-xl font-open_sans font-normal text-justify leading-6 md:leading-7">
                            Registration will be opened starting at 10 am for the participants of the competition. After that, it will be continued with their preparation in participating in the competition. <strong>For the audience, there is no need to register</strong>.
                        </p>
                    </div>
                    <!-- Repeat schedule details as needed -->
                    <div class="p-6 rounded-lg bg-gray-100">
                        <div class="inline-block rounded-full px-4 py-2 bg-greenabout border mb-3">
                            <p class="text-base font-semibold text-greentua font-montserrat_alt">10 : 00 AM - 11 : 00 AM</p>
                        </div>
                        <h3 class="text-black text-lg md:text-2xl font-montserrat_alt leading-snug font-semibold">Registration and Preparation for the competition participants</h3>
                        <p class="text-gray-500 mt-2 text-xl font-open_sans font-normal text-justify leading-6 md:leading-7">
                            Registration will be opened starting at 10 am for the participants of the competition. After that, it will be continued with their preparation in participating in the competition. <strong>For the audience, there is no need to register</strong>.
                        </p>
                    </div>
                    <div class="p-6 rounded-lg bg-gray-100">
                        <div class="inline-block rounded-full px-4 py-2 bg-greenabout border mb-3">
                            <p class="text-base font-semibold text-greentua font-montserrat_alt">10 : 00 AM - 11 : 00 AM</p>
                        </div>
                        <h3 class="text-black text-lg md:text-2xl font-montserrat_alt leading-snug font-semibold">Registration and Preparation for the competition participants</h3>
                        <p class="text-gray-500 mt-2 text-xl font-open_sans font-normal text-justify leading-6 md:leading-7">
                            Registration will be opened starting at 10 am for the participants of the competition. After that, it will be continued with their preparation in participating in the competition. <strong>For the audience, there is no need to register</strong>.
                        </p>
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
    </script>  
</body>
</html>