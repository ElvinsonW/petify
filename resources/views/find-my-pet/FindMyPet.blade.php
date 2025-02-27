<x-layout>
    <!-- Container Start -->
    <div id="sidebarLeft" class="flex min-h-screen h-auto bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-[22vw] min-h-screen h-auto shadow-lg pl-[3vw] pt-[3vw] transition-all duration-300">
            <!-- Judul Page -->
            <div class="text-left">
                <h4 class="text-4xl font-montserrat_alt font-bold text-greenpetify">Find Your</h4>
                <h2 class="text-5xl font-montserrat_alt font-bold text-greenpetify">Pet</h2>
            </div>

            <!-- Search Bar -->
            <form class="max-w-md w-[16vw] mt-[1vw]" method="GET" action="{{ route('find-my-pet.index') }}">
            <label for="search" class="mb-[0.5vw] text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
            <div class="relative w-full border-1/2 border-gray-400 rounded-[0.5vw] bg-white shadow-md">
                <div class="absolute inset-y-0 start-0 flex items-center ps-[0.75vw] pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="search" id="search" name="search" class="rounded-[0.5vw] block w-full max-w-[calc(100%-5.2vw)] p-[1vw] ps-10 !font-overpass font-semibold focus:outline-none" value="{{ request('search') }}" placeholder="Search Here">
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-[0.5vw] px-[0.5vw] py-[0.4vw] !font-overpass">Search</button>
            </div>
        </form>


            <!-- Filter & Missing Buttons -->
            <div class="flex gap-4 w-[16vw] mt-[1vw] relative justify-between">
                <button id="filterButton" class="text-white bg-greenpetify rounded-[1vw] shadow-lg transform hover:bg-greentua transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[1.25vw] py-[0.5vw] font-overpass flex items-center">
                    <i class="fa-solid fa-sliders mr-[0.5vw]"></i> Filter
                </button>

                <!-- missing button -->
                <a href="{{ route('find-my-pet-form') }}">
                    <button class="text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[1vw] py-[0.5vw] font-overpass flex items-center">
                        <i class="fa-solid fa-plus mr-[0.5vw]"></i> Missing
                    </button>
                </a>
            </div>

            <!-- dropdown filter -->
            <div id="filterDropdown" class="absolute z-10 w-[16.85vw] mt-[0.7vw] bg-greenpetify text-white rounded-[1vw] shadow-lg opacity-0 scale-95 transition-all transform origin-top-left hidden font-overpass justify-between">
                <div class="p-[1vw] space-y-[1vw]">
                    <form action="{{ route('find-my-pet.index') }}" method="GET">
                        <label class="block">
                            <span class="text-[1vw] font-semibold">City</span>
                            <input type="text" name="city" placeholder="Input city here" class="w-full p-[0.5vw] bg-teal-700 rounded-[0.4vw]" value="{{ request('city') }}">
                        </label>
                        <label class="block">
                            <span class="text-[1vw] font-semibold">Collar & Tag</span>
                            <select name="collar_tag" class="w-full mt-[0.25vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]">
                                @if (request('collar_tag') == "Yes")
                                    <option value="male" selected>Yes</option> 
                                @else   
                                    <option value="yes">Yes</option> 
                                @endif
                                
                                @if (request('collar_tag') == "No")
                                    <option value="no" selected>No</option> 
                                @else   
                                    <option value="No">No</option> 
                                @endif

                                @if (request('collar_tag') == "")
                                    <option value="" selected>Any</option> 
                                @else   
                                    <option value="">Any</option> 
                                @endif
                                
                            </select>
                        </label>
                        <button type="submit" class="w-full py-[0.25vw] mt-[1vw] bg-white text-greenpetify text-[1.2vw] rounded-[0.5vw] font-semibold hover:bg-gray-200 hover:scale-105 transition-all duration-300 ease-in-out font-montserrat_alt">Apply</button>
                    </form>
                </div>
            </div>

            <div id="petCategoryContainer" class="mt-[1vw] w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt">
                <div class="pl-[0.5vw]">
                    <h4 class="text-[1.4vw] font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-[0.5vw]">
                </div>

                <!-- All Category (Cancel Category Filter) -->
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group @if(!$selectedCategory || $selectedCategory == 'all') bg-orenmuda @endif hover:bg-orenmuda">
                    <a href="{{ route('find-my-pet.index') }}" class="w-full">
                        <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left @if(!$selectedCategory || $selectedCategory == 'all') text-white @endif group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                        <hr class="border-orenmuda border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                    </a>
                </button>

                <!-- Category List -->
                @foreach ($categories as $category)
                    @php
                        $isActive = request('category') == $category->slug;
                    @endphp
                    <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group @if($isActive) bg-{{ $category->color }} @endif hover:bg-{{ $category->color }}">
                        <a href="{{ route('find-my-pet.index', ['category' => $isActive ? 'all' : $category->slug]) }}" class="w-full">
                            <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out @if($isActive) text-white @else text-black @endif">{{ $category->name }}</p>
                            <hr class="border-{{ $category->color }} border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                        </a>
                    </button>
                @endforeach

            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->

        <!-- Right Section (Display Pets) -->
        <div class="flex pt-[3vw] w-3/4">
            <div class="max-h-screen h-auto overflow-y-auto space-y-[3vw] px-[5vw] pb-[7.5vw] pt-[2vw] ml-auto">
                @foreach ($pets as $pet)
                    <div class="bg-white shadow-lg rounded-[0.75vw] p-[2.5vw] relative">
                        <div class="flex flex-col md:flex-row gap-[1.5vw]">
                            <img class="w-[27vw] h-[17vw] rounded-[0.6vw] object-cover" src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}"/>

                            <div class="flex-1 pt-[0.5vw]">
                                <span class="bg-{{$pet->pet_category->color}} text-white text-[1vw] font-semibold font-montserrat_alt px-[1vw] py-[0.5vw] rounded-[0.8vw] ">{{ ucfirst($pet->pet_category->name) }}</span>
                                <div class="text-black tab text-[1vw] !font-semibold !font-open_sans !tracking-wide gap-x-[1vw] mt-[1vw] grid grid-cols-2 space-y-[0.2vw]">
                                    <p>Name</p> <p>: {{ ucfirst($pet->name) }}</p>
                                    <p>Breed</p> <p>: {{ ucfirst($pet->breed) }}</p>
                                    <p>Color</p> <p>: {{ ucfirst($pet->color) }}</p>
                                    <p>Last Seen</p> <p>: {{ ucfirst($pet->last_seen) }}</p>
                                    <p>Collar & Tag</p> <p>: {{ ucfirst($pet->color_tag) }}</p>
                                    <p>Date Lost</p> <p>: {{ $pet->date_lost}}</p>
                                    <p>Gender</p> <p>: {{ ucfirst($pet->gender) }}</p>
                                    <p>City</p> <p>: {{ ucfirst($pet->city)}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-[1.2vw] font-open_sans text-justify text-sm text-black tracking-wide leading-snug">
                            <p>{{ ucfirst($pet->description) }}</p>
                        </div>

                        <div class="mt-[1.2vw] flex items-center">
                            <div class="w-9 h-9 bg-white border-[0.1vw] border-greentua rounded-full flex justify-center items-center p-[0.1vw]">
                                <img class="profile-logo" src="{{ asset('images/after login.svg') }}" alt="Profile logo">
                            </div>

                            <p class="ml-[0.75vw] text-greenpetify font-semibold font-overpass text-[1.1vw] tracking-wider">{{ $pet->user->name }}</p>
                            <div class="flex items-center text-black text-[0.85vw] font-medium font-overpass ml-auto">
                                <img class="mr-[0.5vw] telephone-icon" src="{{ asset('images/telephone-minus-fill.svg') }}" alt="Telephone Logo">
                                <span>{{ $pet->user->phone_number }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

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
        // Dropdown filter visibility toggle
        const filterButton = document.getElementById("filterButton");
        const filterDropdown = document.getElementById("filterDropdown");
        const petCategoryContainer = document.getElementById("petCategoryContainer");
        const sidebarLeft = document.getElementById("sidebarLeft");

        filterButton.addEventListener("click", () => {
            const isHidden = filterDropdown.classList.contains("hidden");

            if (isHidden) {
                // Menampilkan dropdown filter
                filterDropdown.classList.remove("hidden");
                filterDropdown.classList.add("opacity-100", "scale-100");

                // Menambah margin bawah kategori agar turun
                petCategoryContainer.classList.add("mt-[16vw]");

                // Menambah tinggi sidebar agar tidak terpotong oleh footer
                sidebarLeft.classList.add("h-auto");
                sidebarLeft.style.minHeight = "calc(150vh + 200px)";
            } else {
                // Menyembunyikan dropdown filter
                filterDropdown.classList.add("hidden");
                filterDropdown.classList.remove("opacity-100", "scale-100");

                // Mengembalikan margin dan tinggi sidebar ke semula
                petCategoryContainer.classList.remove("mt-[16vw]");

                // Kembalikan tinggi sidebar agar kembali normal
                sidebarLeft.style.minHeight = "100vh";
            }
        });
    </script>
</x-layout>
