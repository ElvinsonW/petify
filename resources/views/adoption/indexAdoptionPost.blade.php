<x-layout>
    @if (session('ownerError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('ownerError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    
    @elseif (session('createSuccess'))

        <div class="alert absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('createSuccess') }}
            </div>
            <button class="close-button ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

    @endif

    <div class="flex overflow-hidden" id="adoptionContainer">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div id="sidebarLeft" class="w-[22vw] min-h-[100vh] shadow-lg pl-[3vw] pt-[3vw]">
            <!-- Greetings -->
            <div class="font-montserrat_alt">
                <h4 class="text-[1.2vw]">Hello {{ auth()->user()->username }},</h4>
                <h2 class="text-[1.4vw] font-bold" id="sapaan">Good Afternoon!</h2>
            </div>
            
            <!-- Search Bar -->
            <div>
                <form class="max-w-md w-[16vw] mt-[1vw]" method="GET" action="{{ url('adoptions') }}">
                    @php
                        $params = ['category', 'like', 'minWeight','maxWeight','minAge','maxAge','city','gender','vaccine'];
                    @endphp

                    @foreach($params as $param)
                        @if(request($param))
                            <input type="hidden" name="{{ $param }}" value="{{ request($param) }}">
                        @endif
                    @endforeach
            
                    <label for="search" class="mb-[0.5vw] text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                    <div class="relative w-full border-1/2 border-gray-400 rounded-[0.5vw] bg-white shadow-md">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-[0.75vw] pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="search" name="search" class="rounded-[0.5vw] block w-full max-w-[calc(100%-5.2vw)] p-[1vw] ps-10 !font-overpass font-semibold focus:outline-none" value="{{ request('search') }}" placeholder="Search Here">
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-[0.5vw] px-[0.5vw] py-[0.4vw] !font-overpass">Search</button>
                    </div>
                </form>
            </div>
            
            <!-- Button Filter & Your Like -->
            
            <div class="flex flex-row w-[16vw] justify-between">
                <!-- Filter Button -->
                <button class="mt-[1vw] text-white bg-greenpetify rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass" id="filterButton">
                    <i class="fa-solid fa-sliders mr-2" style="color: #ffffff;"></i>Filter
                </button>
                
                <!-- Like Button -->
                @if (request('like'))
                    @php
                        $queryParams = request()->query();
                        unset($queryParams["like"]);
                    @endphp
                    <button class="mt-[1vw] ml-[1vw] text-white bg-orange-800 rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-800 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass"><i class="fa-solid fa-heart mr-2" style="color: #ffffff;"><a href="{{ url('adoptions') . '?' . http_build_query($queryParams) }}"></i>Your Like</a></button>
                @else
                    @php
                        $queryParams = request()->query();
                        $queryParams["like"] = 'true';
                    @endphp
                    <button class="mt-[1vw] ml-[1vw] text-white bg-oren rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-800 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass"><i class="fa-solid fa-heart mr-2" style="color: #ffffff;"><a href="{{ url('adoptions') . '?' . http_build_query($queryParams) }}"></i>Your Like</a></button>
                @endif

                <!-- Dropdown Filter -->
                <div id="filterDropdown" class="absolute z-10 w-[16.85vw] mt-[5vw] bg-greenpetify text-white rounded-[1vw] shadow-lg opacity-0 scale-95 transition-all transform origin-top-left hidden font-overpass">
                    <form class="p-[1vw] space-y-[1vw]">

                        @foreach ($params as $param)
                            @if ($param)
                                <input type="hidden" name="{{ $param }}" value="{{ request($param) }}" >    
                            @endif
                        @endforeach

                        <!-- Weight Input -->
                        <label class="block">
                            <span class="text-[1vw] font-semibold">Weight (KG)</span>
                            <div class="flex space-x-[0.5vw]">
                                <input type="number" name="minWeight" placeholder="Min" class="w-[6.5vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]" min="1" value="{{ request('minWeight') }}">
                                <input type="number" name="maxWeight" placeholder="Max" class="w-[6.5vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]" min="1" value="{{ request('maxWeight') }}">
                            </div>
                        </label>

                        <!-- Age Input -->
                        <label class="block">
                            <span class="text-[1vw] font-semibold">Age (Year)</span>
                            <div class="flex space-x-[0.5vw]">
                                <input type="number" name="minAge" placeholder="Min Age" class="w-[6.5vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]" min="1" value="{{ request('minAge') }}">
                                <input type="number" name="maxAge" placeholder="Max Age" class="w-[6.5vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]" min="1" value="{{ request('maxAge') }}">
                            </div>
                        </label>

                        <!-- City Input -->
                        <label class="block">
                            <span class="text-[1vw] font-semibold">City</span>
                            <input type="text" name="city" placeholder="Input city here" class="w-full p-[0.5vw] bg-teal-700 rounded-[0.4vw]" value="{{ request('city') }}">
                        </label>

                        <!-- Gender Select -->
                        <label class="block">
                            <span class="text-[1vw] font-semibold">Gender</span>
                            <select name="gender" class="w-full mt-[0.25vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]">
                                @if (request('gender') == "male")
                                    <option value="male" selected>Male</option> 
                                @else   
                                    <option value="male">Male</option> 
                                @endif
                                
                                @if (request('gender') == "female")
                                    <option value="female" selected>Female</option> 
                                @else   
                                    <option value="female">Female</option> 
                                @endif

                                @if (request('gender') == "")
                                    <option value="" selected>Any</option> 
                                @else   
                                    <option value="">Any</option> 
                                @endif
                                
                            </select>
                        </label>

                        <!-- Vaccined Select -->
                        <label class="block">
                            <span class="text-base font-semibold">Vaccine</span>
                            <select name="vaccine" class="w-full mt-[0.25vw] p-[0.5vw] bg-teal-700 rounded-[0.4vw]">
                                @if (request('vaccine') == "yes")
                                    <option value="yes" selected>Yes</option> 
                                @else   
                                    <option value="yes">Yes</option> 
                                @endif

                                @if (request('vaccine') == "no")
                                    <option value="no" selected>No</option> 
                                @else   
                                    <option value="no">No</option> 
                                @endif

                                @if (request('vaccine') == "")
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
            
            <!-- Button Adoption Post -->
            <a href="/adoptions/create/before-create-1">
                <button id="addButton" class="relative z-0 mt-[1vw] w-[16vw] text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass"><i class="fa-solid fa-plus mr-[0.5vw]" style="color: #ffffff;"></i>Adoption Post</button>
            </a>
            
            <!-- Container Pet Category -->
            <div id="petCategoryContainer" class="mt-[1vw] w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt">
                <div class="pl-[0.5vw]">
                    <h4 class="text-[1.4vw] font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-[0.5vw]">
                </div>
                
                <!-- ALL CATEGORY -->
                @if (request()->is('adoptions') && !request()->query('category')) 
                    @php
                        $queryParams = request()->query();
                    @endphp

                    <button class="clear-category pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-orenmuda">
                        <a href="{{ url('adoptions/') . '?' . http_build_query($queryParams) }}">
                            <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">All Category</p>
                            <hr class="border-1/2 my-[0.5vw] w-full border-white">
                        </a>
                    </button>         

                @else
                    @php
                        $queryParams = request()->query();
                        unset($queryParams['category']); 
                    @endphp
                    <button class="clear-category pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-orenmuda">
                        <a href="{{ url('adoptions/') . '?' . http_build_query($queryParams) }}">
                            <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                            <hr class="border-orenmuda border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                        </a>
                    </button>   

                @endif
                
                <!-- nyalain komen di bawah ini kalo lagi di category all -->
                
                @foreach ($categories as $category)
                    @php
                        $isActive = request()->query('category') == $category->slug;
                        $queryParams = request()->query();
                        $queryParams["category"] = $category->slug;
                        unset($queryParams['page']); 
                    @endphp

                    @if ($isActive)
                        @php
                            unset($queryParams["category"]);
                        @endphp
                        <button class="pl-[0.5vw] pr-[0.5vw] w-full rounded-[0.75vw] group bg-{{ $category->color }}">
                            <a href="{{ url('/adoptions') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-[0.5vw] w-full border-white">
                            </a>
                        </button>
                
                    @else
                        <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-{{ $category->color }}">
                            <a href="{{ url('/adoptions') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">{{ $category->name }}</p>
                                <hr class="border-{{ $category->color }} border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                            </a>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->
        
        <!-- Bagian Kanan (Konten) Start -->
        <div class="ml-[0.25vw] flex-1 pt-[3vw]">
            <!-- Judul Page -->
            <div class="text-center">
                <h2 class="text-[3.8vw] font-montserrat_alt font-bold text-greenpetify">Adopt your Pet!</h2>
                <p class="text-[1.4vw] font-open_sans font-semibold mt-[1vw]">Find the animal you want to care for</p>
            </div>

            <!-- Pet Adopt Catalog -->
            <div class="grid grid-cols-3 gap-[0.75vw] mx-[1vw] mt-[1vw]">
                <!-- Catalog -->
                @foreach ($adoptions as $adoption)

                    <a href="/adoptions/{{ $adoption->slug }}" class="min-h-[43vw] w-[24vw] mt-[2.5vw]">
                        <div class="rounded-[0.5vw] shadow-xl p-[0.5vw] w-full h-full hover:bg-gray-100">
                            <!-- Gambar Pet -->
                            <img src="{{ $adoption->pet->image_1 }}" alt="Pet Picture" class="object-cover w-[100%] h-[30vh] rounded-md">
                            
                            <!-- Category & Days -->
                            <div class="flex flex-row font-montserrat_alt font-semibold w-[100%]">
                                <p class="w-fit rounded-[0.75vw] bg-{{ $adoption->pet->pet_category->color }} text-[1.4vw] text-center text-white my-[1vw] py-[0.5vw] px-[0.5vw]">{{ $adoption->pet->pet_category->name }}</p>     
                                <p class="text-slate-400 my-[1vw] ml-auto py-[0.5vw] px-[0.5vw]">{{ $adoption->created_at->diffForHumans() }}</p>
                            </div>
        
                            <!-- Name & Like -->
                            <div class="flex flex-row font-montserrat_alt font-semibold w-[100%] min-h-[5vw]">
                                <p class="text-[1.6vw] w-[18vw]">{{ $adoption->name }}</p>    
                                <!-- Like -->
                                @php
                                    $likedPostIds = $likedPosts->pluck('adoption_post_id')->toArray();
                                    $isLiked = in_array($adoption->id,$likedPostIds);
                                @endphp
                                <div class="mt-[0.25vw] ml-auto pr-[0.75vw]">
                                    <i class="fa-solid fa-heart fa-lg likeIcon {{ $isLiked ? 'filled-heart' : '' }}" style="color: #a6a6a6; cursor: pointer;"></i>
                                </div> 
                            </div>
        
                            <!-- Desc Singkat -->
                            <p class="font-open_sans text-slate-600 mt-[1vw] mb-[1.5vw] text-justify pr-[0.5vw] break-words min-h-[10vw]">{{ Str::limit($adoption->description,150) }}</p>
                            
                            <!-- Profile -->
                            <div class="flex flex-row">
                                <div class="w-[3.2vw] h-[3.2vw] rounded-full bg-white border-4 border-greentua flex justify-center items-center">
                                    <img src="{{ asset('storage/' . $adoption->user->image) ?? asset('images/after login.svg') }}" alt="Profile Owner" class="rounded-full">
                                </div>
                                <p class="mx-[0.5vw] mt-[0.5vw] font-overpass font-semibold text-[1.4vw]">{{ $adoption->user->username }}</p>
                                <p class="mt-[0.5vw] ml-auto px-[0.5vw] font-montserrat_alt font-semibold"><i class="fa-solid fa-location-dot fa-xs" style="color: #cc4b4b;"></i> {{ Str::limit($adoption->location,10) }}</p>
                            </div>
                        </div>
                    </a>

                @endforeach
                
            </div>
            <div class="ml-[1.5vw] mr-[2vw] my-[2.5vw] text-[1.4vw]">
                {{ $adoptions->links() }}
            </div>
        </div>
    </div>

</x-layout>

<script>
    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });

    const sapaan = document.getElementById('sapaan');

    function updateSapaan(){
        const now = new Date();
        const hours = now.getHours();

        let greeting;
        if (hours >= 6 && hours < 12) {
            greeting = "Good Morning!";
        } else if (hours >= 12 && hours < 18) {
            greeting = "Good Afternoon!";
        } else {
            greeting = "Good Night!";
        }

        sapaan.textContent = greeting;
    }
    
    setInterval(updateSapaan(),10000);

    const filterButton = document.getElementById("filterButton");
    const filterDropdown = document.getElementById("filterDropdown");
    const addButton = document.getElementById('addButton');
    const sidebarLeft = document.getElementById("sidebarLeft"); // Ambil sidebar kiri

    filterButton.addEventListener("click", () => {
            const isHidden = filterDropdown.classList.contains("hidden");

            if (isHidden) {
                // Menampilkan dropdown filter
                filterDropdown.classList.remove("hidden");
                filterDropdown.classList.add("opacity-100", "scale-100");

                // Menambah margin bawah kategori agar turun
                addButton.classList.add("mt-[32vw]");

                // Menambah tinggi sidebar agar tidak terpotong oleh footer
                sidebarLeft.classList.add("h-auto");
                sidebarLeft.style.minHeight = "calc(150vh + 200px)"; // Tinggi sidebar lebih panjang
            } else {
                // Menyembunyikan dropdown filter
                filterDropdown.classList.add("hidden");
                filterDropdown.classList.remove("opacity-100", "scale-100");

                // Mengembalikan margin dan tinggi sidebar ke semula
                addButton.classList.remove("mt-[32vw]");

                // Kembalikan tinggi sidebar agar kembali normal
                sidebarLeft.style.minHeight = "100vh";
            }
        });

        document.addEventListener("click", (event) => {
            if (!filterButton.contains(event.target) && !filterDropdown.contains(event.target)) {
                filterDropdown.classList.add("hidden");
                filterDropdown.classList.remove("opacity-100", "scale-100");
                addButton.classList.remove("mt-[32vw]");
                sidebarLeft.style.minHeight = "100vh"; // Kembali ke tinggi normal
            }
        });

</script>