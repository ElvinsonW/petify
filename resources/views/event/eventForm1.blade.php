<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify - Event Post Description</title>
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
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green text-white font-bold">1</div>
            </div>
            <!-- Separator -->
            <div class="flex items-center">
                <div class="w-16 border-t-2 border-dashed border-black"></div>
            </div>
            <!-- Step 2 -->
            <div id="step-2" class="flex flex-col items-center">
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-black font-bold">2</div>
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

        <!-- Container Pertanyaan -->  
        <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 mt-16">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-1 font-open_sans">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Title of Event -->
                        <div>
                            <label for="pets_info" class="block mb-2 text-lg font-semibold">Title of Event</label>
                            <input type="text" id="pets_info" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Answer here..." required />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Location -->
                            <div>
                                <label for="pets_care" class="block mb-2 text-lg font-semibold">Location</label>
                                <input type="text" id="pets_care" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Location..." required />
                            </div>
                            <!-- Ticket -->
                            <div>
                                <label for="experience" class="block mb-2 text-lg font-semibold">Ticket</label>
                                <input type="text" id="experience" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Ticket..." required />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Date and attach file -->
                <div class="grid gap-6 mb-6 sm:grid-cols-1 md:grid-cols-2 font-open_sans">
                    <div>
                        <label for="start_date" class="block mb-2 text-lg font-semibold">Start Date</label>
                        <input type="date" id="start_date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>
                    
                    <div>
                        <label for="end_date" class="block mb-2 text-lg font-semibold">End Date</label>
                        <input type="date" id="end_date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>                                     
                    <div>
                        <label for="attach" class="block mb-2 text-lg font-semibold">Attach picture of your pet here</label>
                        <input id="attach" type="file" multiple required class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none cursor-pointer">
                    </div>
                </div>

                <!-- Description Of Event -->
                <label for="article-content" class="block mb-2 text-lg font-semibold">Description of the event</label>
                <div class="w-full my-5 border-gray-300 border-2 rounded-lg bg-gray-50">
                    <!-- Buttons -->
                    <div class="flex flex-wrap items-center justify-start gap-4 px-3 py-2 border-b-2 border-gray-300">
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-face-smile"></i>
                            <span class="sr-only">Add emoji</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-bold"></i>
                            <span class="sr-only">Bold text</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-italic"></i>
                            <span class="sr-only">Italic text</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-underline"></i>
                            <span class="sr-only">Underline text</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-strikethrough"></i>
                            <span class="sr-only">Strikethrough text</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-list"></i>
                            <span class="sr-only">Add list</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-list-ol"></i>
                            <span class="sr-only">Add numbered-list</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-quote-left"></i>
                            <span class="sr-only">Add Quote</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-rotate-left"></i>
                            <span class="sr-only">Undo</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-rotate-right"></i>
                            <span class="sr-only">Redo</span>
                        </button>
                    </div>
                    <!-- Text Area -->
                    <div class="px-4 py-2 bg-white rounded-b-lg">
                        <textarea id="article-content" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:outline-none" placeholder="Write your article here..." required></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">
                    <a href="./event-form2.html">Next</a>
                </button>
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