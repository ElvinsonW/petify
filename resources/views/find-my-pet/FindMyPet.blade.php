<x-layout>
    <!-- COntainer Start -->
    <!-- Page Content Start  -->
    <div id="sidebarLeft" class="flex min-h-screen h-auto bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div id="sidebarLeft" class="w-[22vw] min-h-screen h-auto shadow-lg pl-[3vw] pt-[3vw] transition-all duration-300">
            <!-- Judul Page -->
            <div class="text-left ">
                <h4 class="text-[3.2vw] font-montserrat_alt font-bold text-greenpetify">Find Your</h4>
                <h2 class="text-[2.4vw] font-montserrat_alt font-bold text-greenpetify">Pet</h2>
            </div>
            
            <!-- Search Bar -->
            <form class="max-w-md w-[16vw] mt-[1vw]">
                <label for="default-search" class="mb-[0.5vw] text-[0.9vw] text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-[0.75vw] pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-[1vw] ps-[3vw] !font-overpass font-semibold text-slate-400 border-1/2 border-gray-400 rounded-[0.5vw] bg-white shadow-md" placeholder="Search Here..." required>
                    <button type="submit" class="text-white absolute end-[0.75vw] bottom-[0.55vw] bg-greentipis hover:bg-greentua rounded-[0.5vw] px-[0.5vw] py-[0.5vw] !font-overpass">Search</button>
                </div>
            </form>

            <!-- Filter & Missing Buttons -->
            <div class="flex gap-4 w-[16vw] mt-[1vw] relative justify-between">
                <!-- Filter Button -->
                <button id="filterButton" class=" text-white bg-greenpetify rounded-[1vw] shadow-lg transform hover:bg-greentua transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[1.25vw] py-[0.5vw] font-overpass flex items-center">
                    <i class="fa-solid fa-sliders mr-[0.5vw]"></i> Filter
                </button>

                <!-- Missing Button -->
                <a href="{{ route('find-my-pet-form') }}">
                    <button class="text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[1vw] py-[0.5vw] font-overpass flex items-center">
                        <i class="fa-solid fa-plus mr-[0.5vw]"></i> Missing
                    </button>
                </a>

                <!-- Dropdown Filter -->
                <div id="filterDropdown" class="absolute mt-[3.3vw] bg-greenpetify text-white rounded-[1vw] shadow-lg opacity-0 scale-95 transition-all transform origin-top-left hidden font-overpass">
                    <div class="p-[1vw] space-y-[1vw]">
                        <label class="block">
                            <span class="text-[1vw] font-semibold">Gender</span>
                            <select class="w-full mt-[0.25vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Any</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="text-base font-semibold">Collar & Tag</span>
                            <select class="w-full mt-[0.25vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]">
                                <option>Yes</option>
                                <option>No</option>
                                <option>Any</option>
                            </select>
                        </label>
                        <button class="w-full py-[0.25vw] mt-[1vw] bg-white text-greenpetify text-[1.2vw] rounded-[0.5vw] font-semibold hover:bg-gray-200 hover:scale-105 transition-all duration-300 ease-in-out font-montserrat_alt">Apply</button>
                    </div>
                </div>
            </div>

            <!-- Container Pet Category -->
            <div id="petCategoryContainer" class="mt-[1vw] w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt">
                <div class="pl-[0.5vw]">
                    <h4 class="text-[1.4vw] font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-[0.5vw]">
                </div>
                
                <!-- ALL CATEGORY -->
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-orenmuda">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                    <hr class="border-orenmuda border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>    
                
                <!-- nyalain komen di bawah ini kalo lagi di category all -->
                <!-- <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-orenmuda">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">All Category</p>
                    <hr class="border-1/2 my[0.5vw] w-full border-white">
                </button>           -->
                
                <!-- DOG CATEGORY -->
                <!-- <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-kuning">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">Dog</p>
                    <hr class="border-kuning border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>                              -->
                
                <!-- nyalain komen di bawah ini kalo lagi di category dog -->
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-kuning">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">Dog</p>
                    <hr class="border-1/2 my-[0.5vw] w-full border-white">
                </button>                                     

                <!-- CAT CATEGORY -->
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-greencat">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">Cat</p>
                    <hr class="border-greencat border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>    
                
                <!-- nyalain komen di bawah ini kalo lagi di category cat -->
                <!-- <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-greencat">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">Cat</p>
                    <hr class="border-1/2 my-[0.5vw] w-full border-white">
                </button>      -->
                
                <!-- REPTILE CATEGORY -->
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-bluereptile">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">Reptile</p>
                    <hr class="border-bluereptile border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>     
                
                <!-- nyalain komen di bawah ini kalo lagi di category reptile -->
                <!-- <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-bluereptile">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">Reptile</p>
                    <hr class="border-1/2 my-[0.5vw] w-full border-white">
                </button>      -->
                
                <!-- OTHER PET CATEGORY -->
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-oren">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">Other Pet</p>
                    <hr class="border-oren border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>  

                <!-- nyalain komen di bawah ini kalo lagi di category other pet -->
                <!-- <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-oren">
                    <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">Other Pet</p>
                    <hr class="border-1/2 my-[0.5vw] w-full border-white">
                </button> -->
            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->
        
        <!-- bagian right section -->
        <div class="flex pt-[3vw] w-3/4">
            <!-- Scrollable Pet Card Container -->
            <div class="max-h-screen h-auto overflow-y-auto space-y-[3vw] px-[5vw] pb-[7.5vw] pt-[2vw] ml-auto">
                <!-- pet card -->
                <div class="bg-white shadow-lg rounded-[0.75vw] p-[2.5vw] relative">
                    <!-- Share Button -->
                    <div class="absolute top-[1vw] right-[1.5vw]">
                        <i class="fa-solid fa-share-nodes text-black cursor-pointer hover:text-greenpetify"></i>
                    </div>
            
                    <!-- Image & Details -->
                    <div class="flex flex-col md:flex-row gap-[1.5vw]">
                        <!-- Pet Image -->
                        <img src="../src/find your pet photo dog.svg" alt="Missing Dog" />
                        
                        <!-- Pet Details -->
                        <div class="flex-1 pt-[0.5vw]">
                            <span class="bg-kuning text-white text-[1vw]  font-semibold font-montserrat_alt px-[1vw]  py-[0.5vw]  rounded-[0.8vw] ">Dog</span>
                            <div class="text-black tab text-[1vw] !font-semibold !font-open_sans !tracking-wide gap-x-[1vw] mt-[1vw] grid grid-cols-2 space-y-[0.2vw]">
                                <p>Name</p>         <p>: Nersi</p>
                                <p>Breed</p>        <p>: Golden Retriever</p>
                                <p>Color</p>        <p>: Brown</p>
                                <p>Last Seen</p>    <p>: Tangerang, Poris Indah</p>
                                <p>Collar & Tag</p> <p>: No</p>
                                <p>Size</p>         <p>: Medium</p>
                                <p>Date Lost</p>    <p>: 30 January 2025</p>
                                <p>Gender</p>       <p>: Male</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-[1.2vw] font-open_sans text-justify text-sm text-black tracking-wide leading-snug">
                        <p>
                            If you see this dog, please let me know immediately. I love this dog so much and have been taking care of her since she was a puppy. She is not just a pet but a part of my family, and I am deeply worried about her safety. Your help in finding her would mean the world to me. Please contact me if you have any information. Thank you so much for your kindness and support!
                        </p>
                    </div>
                    
                    <!-- Owner Info -->
                    <div class=" mt-[1.2vw] flex items-center">
                        <!-- logo profile -->
                        <div class="w-9 h-9 bg-white border-[0.1vw] border-greentua rounded-full flex justify-center items-center">
                            <img  class="w-7 h-7" src="../src/images/after login.svg" alt="Profile logo">
                        </div>
                        <p class="ml-[0.75vw] text-greenpetify font-semibold font-overpass text-[1.1vw] tracking-wider">Dodoidoy</p>
                        <!-- phone -->
                        <div class="flex items-center text-black text-[0.85vw] font-medium font-overpass ml-auto">
                            <img class="mr-[0.5vw]" src="../src/images/telephone-minus-fill.svg" alt="Telephone Logo">
                            <span>0812 - 1234 - 5678</span>
                        </div>
                    </div>
                </div>           

                <!-- Duplicate Pet Cards -->
                <div class="bg-white shadow-lg rounded-[0.75vw] p-[2.5vw] relative">
                    <!-- Share Button -->
                    <div class="absolute top-[1vw] right-[1.5vw]">
                        <i class="fa-solid fa-share-nodes text-black cursor-pointer hover:text-greenpetify"></i>
                    </div>
            
                    <!-- Image & Details -->
                    <div class="flex flex-col md:flex-row gap-[1.5vw]">
                        <!-- Pet Image -->
                        <img src="../src/images/find your pet photo dog.svg" alt="Missing Dog" />
                        
                        <!-- Pet Details -->
                        <div class="flex-1 pt-[0.5vw]">
                            <span class="bg-kuning text-white text-[1vw]  font-semibold font-montserrat_alt px-[1vw]  py-[0.5vw]  rounded-[0.8vw] ">Dog</span>
                            <div class="text-black tab text-[1vw] !font-semibold !font-open_sans !tracking-wide gap-x-[1vw] mt-[1vw] grid grid-cols-2 space-y-[0.2vw]">
                                <p>Name</p>         <p>: Nersi</p>
                                <p>Breed</p>        <p>: Golden Retriever</p>
                                <p>Color</p>        <p>: Brown</p>
                                <p>Last Seen</p>    <p>: Tangerang, Poris Indah</p>
                                <p>Collar & Tag</p> <p>: No</p>
                                <p>Size</p>         <p>: Medium</p>
                                <p>Date Lost</p>    <p>: 30 January 2025</p>
                                <p>Gender</p>       <p>: Male</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-[1.2vw] font-open_sans text-justify text-sm text-black tracking-wide leading-snug">
                        <p>
                            If you see this dog, please let me know immediately. I love this dog so much and have been taking care of her since she was a puppy. She is not just a pet but a part of my family, and I am deeply worried about her safety. Your help in finding her would mean the world to me. Please contact me if you have any information. Thank you so much for your kindness and support!
                        </p>
                    </div>
                    
                    <!-- Owner Info -->
                    <div class=" mt-[1.2vw] flex items-center">
                        <!-- logo profile -->
                        <div class="w-9 h-9 bg-white border-[0.1vw] border-greentua rounded-full flex justify-center items-center">
                            <img  class="w-7 h-7" src="../src/images/after login.svg" alt="Profile logo">
                        </div>
                        <p class="ml-[0.75vw] text-greenpetify font-semibold font-overpass text-[1.1vw] tracking-wider">Dodoidoy</p>
                        <!-- phone -->
                        <div class="flex items-center text-black text-[0.85vw] font-medium font-overpass ml-auto">
                            <img class="mr-[0.5vw]" src="../src/images/telephone-minus-fill.svg" alt="Telephone Logo">
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

    <script>
        const filterButton = document.getElementById("filterButton");
        const filterDropdown = document.getElementById("filterDropdown");
        const petCategoryContainer = document.getElementById("petCategoryContainer");
        const sidebarLeft = document.getElementById("sidebarLeft"); // Ambil sidebar kiri

        filterButton.addEventListener("click", () => {
            const isHidden = filterDropdown.classList.contains("hidden");

            if (isHidden) {
                // Menampilkan dropdown filter
                filterDropdown.classList.remove("hidden");
                filterDropdown.classList.add("opacity-100", "scale-100");

                // Menambah margin bawah kategori agar turun
                petCategoryContainer.classList.add("mt-64");

                // Menambah tinggi sidebar agar tidak terpotong oleh footer
                sidebarLeft.classList.add("h-auto");
                sidebarLeft.style.minHeight = "calc(100vh + 200px)"; // Tinggi sidebar lebih panjang
            } else {
                // Menyembunyikan dropdown filter
                filterDropdown.classList.add("hidden");
                filterDropdown.classList.remove("opacity-100", "scale-100");

                // Mengembalikan margin dan tinggi sidebar ke semula
                petCategoryContainer.classList.remove("mt-64");

                // Kembalikan tinggi sidebar agar kembali normal
                sidebarLeft.style.minHeight = "100vh";
            }
        });

        // Menutup dropdown jika klik di luar
        document.addEventListener("click", (event) => {
            if (!filterButton.contains(event.target) && !filterDropdown.contains(event.target)) {
                filterDropdown.classList.add("hidden");
                filterDropdown.classList.remove("opacity-100", "scale-100");
                petCategoryContainer.classList.remove("mt-64");
                sidebarLeft.style.minHeight = "100vh"; // Kembali ke tinggi normal
            }
        });
    </script>
</x-layout>