<x-layout>
    @if (session('loginSuccess'))
        <div class="alert absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('loginSuccess') }}
            </div>
            <button class="close-button ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @elseif (session('userError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('userError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

    @endif
    
    <!-- Page Content Start -->
    <div class="bg-no-repeat bg-center bg-cover" style="background-image: url({{ asset('images/homepage-bg.png') }}">
        <!-- Main Section Start -->
        <div class="mt-0 p-0 flex flex-row">
            <div class="mx-[4vw] mt-[4vw] w-[50vw]">
                <h1 class="font-bold text-greenpetify font-montserrat_alt text-[6.2vw] tracking-wide mb-0 leading-none">Things</h1>
                <h1 class="font-bold text-greenpetify font-montserrat_alt text-[6.2vw] tracking-wide mb-[1vw] mt-0">About Pet!</h1>
                <p class="text-greentua font-open_sans tracking-wide text-[1.4vw] mb-[1.5vw]">Find your perfect new companion, learn the best ways to care for them, and join a community dedicated to promoting animal welfare.</p>
                <p class="text-greentua font-open_sans tracking-wide text-[1.4vw] mb-[1.5vw]">Ready to Find your Destined Companion?</p>
                <a href="/adoptions">
                    <!-- <button type="button" class="text-white bg-gradient-to-r from-oren via-orange-600 to-orange-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-orange-200 rounded-xl text-xl px-5 py-2.5 text-center me-2 mb-2 font-overpass font-semibold">Explore More</button> -->
                    <button class="text-white bg-oren rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-800 transition duration-300 ease-in-out text-[1.4vw] font-semibold px-[1.25vw] py-[0.75vw] font-overpass">Explore More</button>
                </a>
            </div>
            
            <img src="{{ asset('images/homepage-dog.svg') }}" alt="Homepage Picture" class="hidden md:block md:w-[50vw]">
        </div>
        <!-- Main Section End -->
    
        <!-- Services Section Start -->
        <div class="m-[1.5vw] md:m-[3.5vw]">
            <!-- Section Header -->
            <div class="mb-[2.5vw]">
                <h4 class="font-montserrat_alt font-bold text-[2vw] text-greenpetify mb-[0.5vw]">Our Services</h4>
                <p class="font-open_sans text-greentua">Here are some of the services on this website</p>
            </div>
    
            <!-- Services Container -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <i class="fa-solid fa-paw fa-5x" style="color: #166b68;"></i>
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greenpetify my-[1vw]">Adopt your Pet!</h4>
                    <p class="font-open_sans tracking-wide w-[25vw]">Each animal will have a special profile that contains detailed information about the animal and allows users to initiate the adoption process by filling out an adoption application form.</p>
                    <!-- <p class="font-open_sans tracking-wide text-oren font-bold mt-4 mb-10 hover:text-merah hover:font-extrabold"><a href="../pages/adopt.html">See More</a></p> -->
                    <p class="font-open_sans tracking-wide text-oren font-bold mt-[1vw] mb-[2.5vw] relative">
                        <a href="/adoptions" class="hover:text-merah before:absolute before:w-0 before:h-0.5 before:bg-merah before:bottom-0 before:left-0 before:transition-all before:duration-300 hover:before:w-1/5">
                            See More
                        </a>
                    </p>                                                                         
                </div>
    
                <div>
                    <i class="fa-solid fa-book fa-5x" style="color: #166b68;"></i>
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greenpetify my-[1vw]">Article</h4>
                    <p class="font-open_sans tracking-wide w-[25vw]">This education section provides articles about animal care, adoption tips, food, and other information related to animals.</p>
                    <!-- <p class="font-open_sans tracking-wide text-oren font-bold mt-4 mb-10 hover:text-merah hover:font-extrabold"><a href="../pages/adopt.html">See More</a></p> -->
                    <p class="font-open_sans tracking-wide text-oren font-bold mt-[1vw] mb-[2.5vw] relative">
                        <a href="/articles" class="hover:text-merah before:absolute before:w-0 before:h-0.5 before:bg-merah before:bottom-0 before:left-0 before:transition-all before:duration-300 hover:before:w-1/5">
                            See More
                        </a>
                    </p>                
                </div>
    
                <div>
                    <i class="fa-solid fa-calendar-day fa-5x" style="color: #166b68;"></i>
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greenpetify my-[1vw]">Event</h4>
                    <p class="font-open_sans tracking-wide">A feature that showcases information about animal-related events, such as adoption campaigns, pet exhibitions, and community meetups, to raise awareness and foster interaction within the animal adoption community.</p>
                    <!-- <p class="font-open_sans tracking-wide text-oren font-bold mt-4 mb-10 hover:text-merah hover:font-extrabold"><a href="../pages/adopt.html">See More</a></p> -->
                    <p class="font-open_sans tracking-wide text-oren font-bold mt-[1vw] mb-[2.5vw] relative">
                        <a href="/events" class="hover:text-merah before:absolute before:w-0 before:h-0.5 before:bg-merah before:bottom-0 before:left-0 before:transition-all before:duration-300 hover:before:w-1/5">
                            See More
                        </a>
                    </p>                
                </div>
    
                <div>
                    <!-- <i class="fa-solid fa-dog fa-5x" style="color: #166b68;"></i> -->
                    <img src="{{ asset('images/Find.svg') }}" alt="Find My Pet">
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greenpetify my-[1vw]">Find My Pet!</h4>
                    <p class="font-open_sans tracking-wide w-[25vw]">Users can upload/post information about their missing pets, including the pet's characteristics (color, breed, last known location).</p>
                    <!-- <p class="font-open_sans tracking-wide text-oren font-bold mt-4 mb-10 hover:text-merah hover:font-extrabold"><a href="../pages/adopt.html">See More</a></p> -->
                    <p class="font-open_sans tracking-wide text-oren font-bold mt-[1vw] mb-[2.5vw] relative">
                        <a href="/find-my-pets" class="hover:text-merah before:absolute before:w-0 before:h-0.5 before:bg-merah before:bottom-0 before:left-0 before:transition-all before:duration-300 hover:before:w-1/5">
                            See More
                        </a>
                    </p>                
                </div>
    
                <div>
                    <i class="fa-brands fa-gratipay fa-5x" style="color: #166b68;"></i>
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greenpetify my-[1vw]">Life After Adoption</h4>
                    <p class="font-open_sans tracking-wide w-[25vw]">Users can create posts sharing the life journey of their pets after adoption.</p>
                    <!-- <p class="font-open_sans tracking-wide text-oren font-bold mt-4 mb-10 hover:text-merah hover:font-extrabold"><a href="../pages/adopt.html">See More</a></p> -->
                    <p class="font-open_sans tracking-wide text-oren font-bold mt-[1vw] mb-[2.5vw] relative">
                        <a href="/life-after-adoption" class="hover:text-merah before:absolute before:w-0 before:h-0.5 before:bg-merah before:bottom-0 before:left-0 before:transition-all before:duration-300 hover:before:w-1/5">
                            See More
                        </a>
                    </p>                
                </div>
            </div>
        </div>
        <!-- Services Section End -->
        
        <!-- About Section Start -->
        <div class="rounded-[1.25vw] w-[75vw] bg-greenabout mx-auto m-[3.5vw] p-[4vw] bg-no-repeat bg-center bg-cover" style="background-image: url({{ asset('images/about-bg.svg') }})">
            <h4 class="text-[2vw] text-greenpetify font-montserrat_alt text-center font-bold m-[1vw] tracking-wide">What's Petify?</h4>
            <p class="font-open_sans text-greentua text-center tracking-wide text-[1.2vw] m-[1vw]">Petify is a website established by Dodoidoy Company in 2024, with the aim of becoming a comprehensive source of information about pets. We believe that every animal deserves proper care and a loving home. Petify not only provides information on how to care for pets but also serves as a shelter for abandoned animals. 
                Our main mission is to give a second chance to animals in need by providing them with a safe and comfortable new home. Through our platform, we hope to raise public awareness about the importance of pet care, as well as create a supportive community where people can share their experiences in caring for animals. 
                With the support of our users, we are committed to helping more animals find loving families and enrich their lives.</p>
        </div>
        <!-- About Section End -->
    
        <!-- Our Partner Section Start -->
        <div class="m-[1.5vw] md:m-[3.5vw]">
            <!-- Section Header -->
            <div class="mb-[2.5vw]">
                <h4 class="font-montserrat_alt font-bold text-[2vw] text-greenpetify mb-[0.5vw]">Our Shelter Partner</h4>
                <p class="font-open_sans text-greentua">Here are the partners who support and assists us</p>
            </div>
    
            <!-- Partner Cards Container -->
            <div class="flex flex-col justify-self-center md:flex-row md:w-full md:justify-evenly">
                <div class="shadow-2xl rounded-[1.25vw] w-[22vw] p-[1vw] justify-items-center">
                    <img src="{{ asset('images/partner1.svg') }}" alt="House of Pet" class="m-[1.5vw]">
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greentipis">House of Pet</h4>
                    <p class="font-open_sans text-center tracking-wide m-[1vw]">House of Pet is a shelter located in the Java island with various branches spread across the island of Java.</p>
                    <p class="font-open_sans tracking-wide"><i class="fa-brands fa-instagram"></i>: @HouseOfPet</p>
                    <p class="font-open_sans tracking-wide mb-[1vw]"><i class="fa-solid fa-envelope"></i>: HOP@gmail.com</p>
                </div>
    
                <div class="shadow-2xl rounded-[1.25vw] w-[22vw] p-[1vw] justify-items-center">
                    <img src="{{ asset('images/partner2.svg') }}" alt="Animal Shelter" class="[1.5vw]">
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greentipis">Animal Shelter</h4>
                    <p class="font-open_sans text-center tracking-wide m-[1vw]">Animal Shelter is a shelter located on the island of Borneo with various branches spread around Pontianak, Balikpapan, Samarinda, and the surrounding areas</p>
                    <p class="font-open_sans tracking-wide"><i class="fa-brands fa-instagram"></i>: @AnimalShelter</p>
                    <p class="font-open_sans tracking-wide mb-[1vw]"><i class="fa-solid fa-envelope"></i>: AnimalShelter@gmail.com</p>
                </div>
    
                <div class="shadow-2xl rounded-[1.25vw] w-[22vw] p-[1vw] justify-items-center">
                    <img src="{{ asset('images/partner3.svg') }}" alt="Garda Rescue" class="m-[1.5vw]">
                    <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greentipis">Garda Rescue</h4>
                    <p class="font-open_sans text-center tracking-wide m-[1vw]">Garda Rescue is a shelter located on the island of Sulawesi with various branches spread around Makasar, Bitung, Manado and the surrounding areas</p>
                    <p class="font-open_sans tracking-wide"><i class="fa-brands fa-instagram"></i>: @GardaRescue</p>
                    <p class="font-open_sans tracking-wide mb-[1vw]"><i class="fa-solid fa-envelope"></i>: GardaRescue@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- Our Partner Section End -->
    
        <!-- Feedback Section Start -->
        <div class="m-[1.5vw] md:m-[3.5vw]">
            <!-- Section Header -->
            <div class="mb-[2.5vw]">
                <h4 class="font-montserrat_alt font-bold text-[2vw] text-greenpetify mb-[0.5vw]">Feedback</h4>
                <p class="font-open_sans text-greentua">Response from previous users</p>
            </div>
    
            <!-- Swiper Carousel -->
            <div class="swiper default-carousel swiper-container">
                <div class="swiper-wrapper mb-[3vw]">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex justify-items-center">
                        <div class="rounded-[1.25vw] w-[60vw] p-[1vw] flex flex-col justify-center items-center bg-white h-fit">
                            <img src="{{ asset('images/alfheim.svg') }}" alt="Feedback from Alfheim" class="m-[1.5vw]">
                            <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greentipis">Alfheim Elves</h4>
                            <p class="font-open_sans text-center tracking-wide m-[1vw]">Petify ini merupakan website yang sangat membantu ya, ternyata. Saya jadi bisa mengetahui lebih banyak lagi mengenai hewan peliharaan saya. Saya juga jadi bisa menolong hewan peliharaan yang terlantar untuk mendapatkan tempat tinggal.</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide flex justify-items-center">
                        <div class="rounded-[1.25vw] w-[60vw] p-[1vw] flex flex-col justify-items items-center bg-white h-fit">
                            <img src="{{ asset('images/alfheim.svg') }}" alt="Feedback from Alfheim" class="m-[1.5vw]">
                            <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greentipis">Gajah 18</h4>
                            <p class="font-open_sans text-center tracking-wide m-[1vw]">Website yang sangat luar biasa. Saya merasa puas dengan informasi dan bantuan yang diberikan. Sangat direkomendasikan untuk semua pecinta hewan.</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide flex justify-items-center">
                        <div class="rounded-[1.25vw] w-[60vw] p-[1vw] flex flex-col justify-center items-center bg-white h-fit">
                            <img src="{{ asset('images/alfheim.svg') }}" alt="Feedback from Alfheim" class="m-[1.5vw]">
                            <h4 class="font-montserrat_alt text-[1.6vw] font-semibold text-greentipis">PPTI 18</h4>
                            <p class="font-open_sans text-center tracking-wide m-[1vw]">Sangat membantu untuk menemukan tempat penampungan terbaik bagi hewan peliharaan saya. Timnya sangat ramah dan responsif.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Navigation Buttons -->
                <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-greenpetify !w-12 !h-12 transition-all duration-500 rounded-full !top-1/2 !-translate-y-1/2 !left-5 hover:bg-greentua" data-carousel-prev>
                    <svg class="h-5 w-5 text-greentua group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-greenpetify !w-12 !h-12 transition-all duration-500 rounded-full !top-1/2 !-translate-y-1/2 !right-5 hover:bg-greentua" data-carousel-next>
                    <svg class="h-5 w-5 text-greentua group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Feedback Section End -->
    
        <!-- Join Us Section Start -->
        <div class="font-montserrat_alt text-center flex justify-between h-fit bg-white py-[4vw] mt-0 mb-0">
            <img src="{{ asset('images/blob-join-us1.svg') }}" alt="Blob Join Us" class="w-40 md:w-56 hidden md:block">
            
            <div class="flex-col">
                <!-- Divider Lines and Paw Icon -->
                <div class="flex items-center justify-center space-x-4">
                    <hr class="w-1/2 border-2 border-greenpetify">
                    <img src="{{ asset('images/Vector.svg') }}" alt="Paw" class="h-8 w-8">
                    <hr class="w-1/2 border-2 border-greenpetify">
                </div>
    
                <!-- Text Content -->
                <div class="mt-[2vw]">
                    <h2 class="font-bold text-greenpetify text-[3.2vw] mb-[1vw]">JOIN US!</h2>
                    <h4 class="font-semibold text-[1.2vw] text-slate-700 max-w-2xl mx-auto w-2/3">
                        Together we build a community that cares for and supports the well-being of animals
                    </h4>
                </div>
            </div>
            
    
            <img src="{{ asset('images/blob-join-us2.svg') }}" alt="Blob Join Us" class="w-40 md:w-56 hidden md:block">
        </div>
        <!-- Join Us Section End -->
    </div>
    <!-- Page Content End -->
</x-layout>

<script>
    // Script untuk inisialisasi Swiper.js
    const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });

</script>
