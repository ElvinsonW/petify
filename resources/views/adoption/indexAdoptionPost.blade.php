<x-layout>
    @if (session('ownerError'))
        
        <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
  
    @endif
    <div class="flex bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/adopt-bg.png)">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-80 h-full shadow-lg pl-10 pt-10">
            <!-- Greetings -->
            <div class="font-montserrat_alt">
                <h4 class="text-lg">Hello Dodoidoy,</h4>
                <h2 class="text-xl font-bold">Good Afternoon!</h2>
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
            
            <!-- Button Filter & Your Like -->
            <div class="flex flex-row">
                <button class="mt-4 text-white bg-greenpetify rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-lg font-semibold px-2.5 py-2.5 font-overpass"><i class="fa-solid fa-sliders mr-2" style="color: #ffffff;"></i>Filter</button>
                <button class="mt-4 ml-4 text-white bg-oren rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-800 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2.5 font-overpass"><i class="fa-solid fa-heart mr-2" style="color: #ffffff;"><a href="/adoptions?like=true"></i>Your Like</a></button>
            </div>
            
            <!-- Button Adoption Post -->
            <a href="/adoptions/create">
                <button class="mt-4 w-5/6 text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2.5 font-overpass"><i class="fa-solid fa-plus mr-2" style="color: #ffffff;"></i>Adoption Post</button>
            </a>
            
            <!-- Container Pet Category -->
            <div class="mt-4 w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt">
                <div class="pl-2">
                    <h4 class="text-xl font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-2">
                </div>
                
                <!-- ALL CATEGORY -->
                @if (request()->is('adoptions') && !request()->query('category')) 
                     
                    <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-orenmuda">
                        <a href="/adoptions" class="w-full">
                            <p class="text-xl font-semibold mt-2 text-left text-white">All Category</p>
                            <hr class="border-1/2 my-2 w-full border-white">
                        </a>
                    </button>         

                @else

                    <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-orenmuda">
                        <a href="/adoptions" class="w-full">
                            <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                            <hr class="border-orenmuda border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                        </a>
                    </button>   

                @endif
                
                <!-- nyalain komen di bawah ini kalo lagi di category all -->
                
                @foreach ($categories as $category)
                    @php
                        $isActive = request()->query('category') == $category->id;
                    @endphp
                    
                    @if ($isActive)
                        <button class="pl-2 pr-2 w-full rounded-xl group bg-{{ $category->color }}">
                            <a href="/adoptions?category={{ $category->id }}" class="w-full">
                                <p class="text-xl font-semibold mt-2 text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-2 w-full border-white">
                            </a>
                        </button>
                    @else
                        <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-{{ $category->color }}">
                            <a href="/adoptions?category={{ $category->id }}" class="w-full">
                                <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">{{ $category->name }}</p>
                                <hr class="border-{{ $category->color }} border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                            </a>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->
        
        <!-- Bagian Kanan (Konten) Start -->
        <div class="ml-12 flex-1 pt-10">
            <!-- Judul Page -->
            <div class="text-center">
                <h2 class="text-6xl font-montserrat_alt font-bold text-greenpetify">Adopt your Pet!</h2>
                <p class="text-xl font-open_sans font-semibold mt-4">Find the animal you want to care for</p>
            </div>

            <!-- Pet Adopt Catalog -->
            <div class="grid grid-cols-3 gap-6 mx-12 mt-14">
                <!-- Catalog -->
                @foreach ($adoptions as $adoption)

                    <a href="/adoptions/{{ $adoption->slug }}">
                        <div class="rounded-lg shadow-xl p-2 w-80">
                            <!-- Gambar Pet -->
                            <img src="{{ asset('images/petadoptpic.svg') }}" alt="Pet Picture" class="w-full h-fit">
                            
                            <!-- Category & Days -->
                            <div class="flex flex-row font-montserrat_alt font-semibold w-full">
                                <p class="w-fit rounded-xl bg-{{ $adoption->pet->petCategory->color }} text-xl text-center text-white my-4 py-1.5 px-2">{{ $adoption->pet->petCategory->name }}</p>     
                                <p class="text-slate-400 my-4 ml-auto py-1.5 px-2">{{ $adoption->created_at->diffForHumans() }}</p>
                            </div>
        
                            <!-- Name & Like -->
                            <div class="flex flex-row font-montserrat_alt font-semibold w-full">
                                <p class="text-2xl">{{ $adoption->name }}</p>    
                                <!-- Like -->
                                <div class="mt-1 ml-auto pr-3">
                                    <i class="fa-solid fa-heart fa-lg likeIcon" style="color: #a6a6a6; cursor: pointer;"></i>
                                </div> 
                            </div>
        
                            <!-- Desc Singkat -->
                            <p class="font-open_sans text-slate-600 my-4 text-justify pr-2">{{ Str::limit($adoption->description,150) }}</p>
                            
                            <!-- Profile -->
                            <div class="flex flex-row">
                                <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                    <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner">
                                </div>
                                <p class="mx-3 mt-2 font-overpass font-semibold text-xl">{{ $adoption->user->name }}</p>
                                <p class="mt-2 ml-auto px-2 font-montserrat_alt font-semibold"><i class="fa-solid fa-location-dot fa-xs" style="color: #cc4b4b;"></i> Tangerang</p>
                            </div>
                        </div>
                    </a>

                @endforeach
                
            </div>
            <div class="mx-12 my-10 text-xl">
                {{ $adoptions->links() }}
            </div>
        </div>
    </div>

</x-layout>