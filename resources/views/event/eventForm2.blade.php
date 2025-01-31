<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify - Event Post Schedule</title>
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

    <!-- Event Container Start -->
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain px-4" style="background-image: url(../src/images/form-bg.png)">
        <!-- Judul Page -->
        <div class="text-center mb-8">
            <p class="text-3xl sm:text-4xl lg:text-6xl font-montserrat_alt font-bold text-green">Event Post</p>
        </div>
        <!-- Steps -->
        <div id="steps" class="flex justify-center items-center gap-4 font-open_sans">
            <!-- Step 1 -->
            <div id="step-1" class="flex flex-col items-center">
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-black font-bold ">1</div>
            </div>
            <!-- Separator -->
            <div class="flex items-center">
                <div class="w-16 border-t-2 border-dashed border-black"></div>
            </div>
            <!-- Step 2 -->
            <div id="step-2" class="flex flex-col items-center">
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green text-white font-bold">2</div>
            </div>
        </div>
        <!-- Descriptions and schedule -->
        <div class="flex justify-center items-center gap-10 font-open_sans mt-2">
            <div class="flex flex-col items-center">
                <p class="text-black font-bold">Description</p>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-black font-bold">Schedule</p>
            </div>
        </div>

        <!-- Container schedule -->  
        <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 mt-16">
            <form>
                <div class="flex flex-col lg:flex-row gap-10">
                    <!-- Schedule Day -->
                    <div class="w-full lg:w-1/3 p-4 bg-gray-50 shadow rounded-xl flex flex-col items-center">
                        <!-- Header Section -->
                        <div class="flex flex-col md:flex-row gap-2 mb-4 w-full">
                            <!-- Gambar -->
                            <img src="../src/images/uim_calendar.svg" alt="Calendar" class="w-16 h-16">
                            <!-- Text dan Input Date -->
                            <div class="flex flex-col w-full">
                                <p class="text-lg font-semibold font-montserrat_alt">Day 1</p>
                                <input 
                                    type="date" 
                                    class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1  focus:ring-green" 
                                    placeholder="Input date here...">
                            </div>
                        </div>                    
                        <button 
                            type="button" 
                            class="mt-4 bg-kuning text-black rounded-lg px-4 py-2 hover:bg-kuninggelap transition font-montserrat_alt text-base font-semibold self-center">
                            + New
                        </button>
                    </div>
                    <!-- Schedule Details -->
                    <div class="w-full lg:w-2/3 p-4 bg-gray-50 shadow rounded-xl flex flex-col">
                        <!-- Time Input -->
                        <div class="flex items-center gap-4 mb-4">
                            <!-- Icon -->
                            <div class="w-7 h-7 bg-green-500 text-white flex items-center justify-center rounded-full bg-green">
                                <i class="fas fa-clock"></i>
                            </div>
                            <!-- Input Time -->
                            <input 
                                type="time" 
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                                placeholder="Time input here...">
                        </div>
                        <div class="flex flex-col gap-4">
                            <!-- Title -->
                            <input 
                                type="text" 
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1  focus:ring-green" 
                                placeholder="Session Title">
                            <!-- description -->
                            <textarea 
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1  focus:ring-green" 
                                rows="3" placeholder="Description here..."></textarea>
                            <button 
                                type="button" 
                                class="mt-4 bg-kuning text-black rounded-lg px-4 py-2 hover:bg-kuninggelap transition font-montserrat_alt text-base font-semibold self-center">
                                + New
                            </button>
                        </div>
                    </div>
                </div>

                <!-- button -->
                <div class="gap-6 flex flex-row mt-8">
                    <button type="submit" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">
                        <a href="./event-form1.html">Previous</a>
                    </button>
                    <button type="submit" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">
                        <a href="./event.html">Submit</a>
                    </button>
                </div>
            </form>
        </div>  
    </div>
    <!-- Event Container End -->


    
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