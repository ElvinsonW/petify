<x-layout>
    <!-- Container Start -->
    <div id="sidebarLeft" class="flex min-h-screen h-auto bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-[22vw] min-h-screen h-auto shadow-lg pl-[3vw] pt-[3vw] transition-all duration-300">
            <!-- Judul Page -->
            <div class="text-left">
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
                <button id="filterButton" class="text-white bg-greenpetify rounded-[1vw] shadow-lg transform hover:bg-greentua transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[1.25vw] py-[0.5vw] font-overpass flex items-center">
                    <i class="fa-solid fa-sliders mr-[0.5vw]"></i> Filter
                </button>

                <a href="{{ route('find-my-pet-form') }}">
                    <button class="text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[1vw] py-[0.5vw] font-overpass flex items-center">
                        <i class="fa-solid fa-plus mr-[0.5vw]"></i> Missing
                    </button>
                </a>
            </div>

            <div class="mt-[1vw] w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt">
                <div class="pl-[0.5vw]">
                    <h4 class="text-[1.4vw] font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-[0.5vw]">
                </div>

                <!-- ALL CATEGORY -->
                @php
                    $activeCategory = request()->query('category'); 
                @endphp
                <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group @if(!$activeCategory) bg-orenmuda @endif hover:bg-orenmuda">
                    <a href="{{ route('find-my-pet.index') }}" class="w-full">
                        <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left @if(!$activeCategory) text-white @endif group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                        <hr class="border-orenmuda border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                    </a>
                </button>

                @foreach ($categories as $category)
                    @php
                        $isActive = $activeCategory == $category->slug;
                    @endphp

                    <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group @if($isActive) bg-{{ $category->color }} @endif hover:bg-{{ $category->color }}">
                        <a href="{{ route('find-my-pet.index') . '?category=' . $category->slug }}" class="w-full">
                            <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out @if($isActive) text-white @else text-black @endif">{{ $category->name }}</p>
                            <hr class="border-{{ $category->color }} border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                        </a>
                    </button>
                @endforeach
            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->

        
        <!-- bagian right section -->
        <div class="flex pt-[3vw] w-3/4">
            <div class="max-h-screen h-auto overflow-y-auto space-y-[3vw] px-[5vw] pb-[7.5vw] pt-[2vw] ml-auto">
                @foreach ($pets as $pet)
                    <div class="bg-white shadow-lg rounded-[0.75vw] p-[2.5vw] relative">
                        <div class="flex flex-col md:flex-row gap-[1.5vw]">
                            <img class="w-[30vw] h-[20vw] rounded-[1vw] object-cover" src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}"/>

                            <div class="flex-1 pt-[0.5vw]">
                                <span class="bg-{{$pet->pet_category->color}} text-white text-[1vw] font-semibold font-montserrat_alt px-[1vw] py-[0.5vw] rounded-[0.8vw] ">{{ ucfirst($pet->category_pet) }}</span>
                                <div class="text-black tab text-[1vw] !font-semibold !font-open_sans !tracking-wide gap-x-[1vw] mt-[1vw] grid grid-cols-2 space-y-[0.2vw]">
                                    <p>Name</p> <p>: {{ $pet->name }}</p>
                                    <p>Breed</p> <p>: {{ $pet->breed }}</p>
                                    <p>Color</p> <p>: {{ $pet->color }}</p>
                                    <p>Last Seen</p> <p>: {{ $pet->last_seen }}</p>
                                    <p>Collar & Tag</p> <p>: {{ $pet->color_tag }}</p>
                                    <p>Date Lost</p> <p>: {{ $pet->date_lost}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-[1.2vw] font-open_sans text-justify text-sm text-black tracking-wide leading-snug">
                            <p>{{ $pet->description }}</p>
                        </div>
                        
                        <div class="mt-[1.2vw] flex items-center">
                            <div class="profile-image">
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
</x-layout>
