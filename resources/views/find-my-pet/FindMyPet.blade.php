<x-layout>
    <!-- COntainer Start -->
    <!-- Page Content Start  -->
    <div class="flex h-screen bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-80 h-full shadow-lg pl-10 pt-10">
            <!-- Judul Page -->
            <div class="text-left ">
                <h4 class="text-5xl font-montserrat_alt font-bold text-green">Find Your</h4>
                <h2 class="text-4xl font-montserrat_alt font-bold text-green">Pet</h2>
            </div>
            
            <!-- Search Bar -->
            <form class="max-w-md w-5/6 mt-4">
                <label for="default-search" class="mb-2 text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 !font-overpass font-semibold text-slate-400 border-1/2 border-gray-400 rounded-lg bg-white shadow-md" placeholder="Search Here..." required>
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-lg px-2 py-2 !font-overpass">Search</button>
                </div>
            </form>
            
            <!-- Button Find your pet -->
            <div class="flex gap-4 w-5/6 mt-4">
                <a href="../pages/find-my-pet-form.html">
                    <button id="Missing" class=" text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2 font-overpass">
                        <i class="fa-solid fa-plus mr-2" style="color: #ffffff;"></i>Missing
                    </button>
                </a>
    
                <button id="Filter" class="ml-auto text-white bg-green rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-lg font-semibold px-4 py-2.5 font-overpass">
                    <i class="fa-solid fa-sliders mr-2" style="color: #ffffff;"></i>Filter
                </button>
            </div>

            <!-- Container Pet Category -->
            <div class="mt-4 w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt">
                <div class="pl-2">
                    <h4 class="text-xl font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-2">
                </div>
                
                <!-- ALL CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-orenmuda">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                    <hr class="border-orenmuda border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>    
                
                <!-- nyalain komen di bawah ini kalo lagi di category all -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-orenmuda">
                    <p class="text-xl font-semibold mt-2 text-left text-white">All Category</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>           -->
                
                <!-- DOG CATEGORY -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-kuning">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Dog</p>
                    <hr class="border-kuning border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>                              -->
                
                <!-- nyalain komen di bawah ini kalo lagi di category dog -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-kuning">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Dog</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>                                     

                <!-- CAT CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-greencat">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Cat</p>
                    <hr class="border-greencat border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>    
                
                <!-- nyalain komen di bawah ini kalo lagi di category cat -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-greencat">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Cat</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>      -->
                
                <!-- REPTILE CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-bluereptile">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Reptile</p>
                    <hr class="border-bluereptile border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>     
                
                <!-- nyalain komen di bawah ini kalo lagi di category reptile -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-bluereptile">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Reptile</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>      -->
                
                <!-- OTHER PET CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-oren">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Other Pet</p>
                    <hr class="border-oren border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>  

                <!-- nyalain komen di bawah ini kalo lagi di category other pet -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-oren">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Other Pet</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>                              -->
            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->
        
        <!-- bagian right section -->
        <div class="flex pt-10 w-3/4">
            <!-- Scrollable Pet Card Container -->
            <div class="max-h-screen overflow-y-auto space-y-12 px-16 pb-14 pt-4 ml-auto">
                <!-- pet card -->
                <div class="bg-white shadow-lg rounded-xl p-8 relative">
                    <!-- Share Button -->
                    <div class="absolute top-4 right-6">
                        <i class="fa-solid fa-share-nodes text-black cursor-pointer hover:text-green"></i>
                    </div>
            
                    <!-- Image & Details -->
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Pet Image -->
                        <img src="../src/images/find your pet photo dog.svg" alt="Missing Dog" />
                        
                        <!-- Pet Details -->
                        <div class="flex-1 pt-2">
                            <span class="bg-kuning text-white text-base font-semibold font-montserrat_alt px-3.5 py-2 rounded-xl">Dog</span>
                            <div class="text-black text-base font-semibold font-overpass tracking-wide gap-x-4 mt-4">
                                <pre>Name          : Nersi</pre>
                                <pre>Breed         : Golden Retriever</pre>
                                <pre>Color         : Brown</pre>
                                <pre>Last Seen     : Tangerang, Poris Indah</pre>
                                <pre>Collar & Tag  : No</pre>
                                <pre>Size          : Medium</pre>
                                <pre>Date Lost     : 30 January 2025</pre>
                                <pre>Gender        : Male</pre>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-5 font-open_sans text-justify text-sm text-black tracking-wide leading-snug">
                        <p>
                            If you see this dog, please let me know immediately. I love this dog so much and have been taking care of her since she was a puppy. She is not just a pet but a part of my family, and I am deeply worried about her safety. Your help in finding her would mean the world to me. Please contact me if you have any information. Thank you so much for your kindness and support!
                        </p>
                    </div>
                    
                    <!-- Owner Info -->
                    <div class=" mt-5 flex items-center">
                        <!-- logo profile -->
                        <div class="w-9 h-9 bg-white border-2 border-greentua rounded-full flex justify-center items-center">
                            <img  class="w-7 h-7" src="../src/images/after login.svg" alt="Profile logo">
                        </div>
                        <p class="ml-3 text-green font-semibold font-overpass text-base tracking-wider">Dodoidoy</p>
                        <!-- phone -->
                        <div class="flex items-center text-black text-xs font-medium font-overpass ml-auto">
                            <img class="mr-2" src="../src/images/telephone-minus-fill.svg" alt="Telephone Logo">
                            <span>0812 - 1234 - 5678</span>
                        </div>
                    </div>
                </div>           

                <!-- Duplicate Pet Cards -->
                <div class="bg-white shadow-lg rounded-xl p-8 relative">
                    <!-- Share Button -->
                    <div class="absolute top-4 right-6">
                        <i class="fa-solid fa-share-nodes text-black cursor-pointer hover:text-green"></i>
                    </div>
            
                    <!-- Image & Details -->
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Pet Image -->
                        <img src="../src/images/find your pet photo dog.svg" alt="Missing Dog" />
                        
                        <!-- Pet Details -->
                        <div class="flex-1 pt-2">
                            <span class="bg-kuning text-white text-base font-semibold font-montserrat_alt px-3.5 py-2 rounded-xl">Dog</span>
                            <div class="text-black text-base font-semibold font-overpass tracking-wide gap-x-4 mt-4">
                                <pre>Name          : Nersi</pre>
                                <pre>Breed         : Golden Retriever</pre>
                                <pre>Color         : Brown</pre>
                                <pre>Last Seen     : Tangerang, Poris Indah</pre>
                                <pre>Collar & Tag  : No</pre>
                                <pre>Size          : Medium</pre>
                                <pre>Date Lost     : 30 January 2025</pre>
                                <pre>Gender        : Male</pre>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-5 font-open_sans text-justify text-sm text-black tracking-wide leading-snug">
                        <p>
                            If you see this dog, please let me know immediately. I love this dog so much and have been taking care of her since she was a puppy. She is not just a pet but a part of my family, and I am deeply worried about her safety. Your help in finding her would mean the world to me. Please contact me if you have any information. Thank you so much for your kindness and support!
                        </p>
                    </div>
                    
                    <!-- Owner Info -->
                    <div class=" mt-5 flex items-center">
                        <!-- logo profile -->
                        <div class="w-9 h-9 bg-white border-2 border-greentua rounded-full flex justify-center items-center">
                            <img  class="w-7 h-7" src="../src/images/after login.svg" alt="Profile logo">
                        </div>
                        <p class="ml-3 text-green font-semibold font-overpass text-base tracking-wider">Dodoidoy</p>
                        <!-- phone -->
                        <div class="flex items-center text-black text-xs font-medium font-overpass ml-auto">
                            <img class="mr-2" src="../src/images/telephone-minus-fill.svg" alt="Telephone Logo">
                            <span>0812 - 1234 - 5678</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Right Section End -->
    </div>
    <!-- Container end -->


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
</x-layout>