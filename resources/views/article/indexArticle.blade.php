<x-layout>
    @if (session('createSuccess'))
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

    <div class="flex overflow-hidden">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-[22vw] min-h-[100vh] shadow-lg pl-[3vw] pt-[3vw]">
            <!-- Greetings -->
            <div class="font-montserrat_alt">
                <h4 class="text-[1.2vw]">Hello {{ auth()->user()->username }},</h4>
                <h2 class="text-[1.4vw] font-bold" id="sapaan">Good Afternoon!</h2>
            </div>
            
            <!-- Search Bar -->
            <div>
                @php
                    $params = ['category', 'liked'];
                @endphp
                @foreach($params as $param)
                    @if(request($param))
                        <input type="hidden" name="{{ $param }}" value="{{ request($param) }}">
                    @endif
                @endforeach

                <form class="max-w-md w-[16vw] mt-[1vw]">
                    <label for="search" class="mb-[0.5vw] text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                    <div class="relative w-full border-1/2 border-gray-400 rounded-[0.5vw] bg-white shadow-md">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-[0.75vw] pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="search" name="search" class="rounded-[0.5vw] block w-full max-w-[calc(100%-5.2vw)] p-[1vw] ps-10 !font-overpass font-semibold" value="{{ request('search') }}" placeholder="Search Here">
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-[0.5vw] px-[0.5vw] py-[0.4vw] !font-overpass">Search</button>
                    </div>
                </form>
            </div>

            
            <!-- Button Article Post -->
            <a href="/articles/create">
                <button class="mt-[1vw] w-[16vw] text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass"><i class="fa-solid fa-plus mr-[0.5vw]" style="color: #ffffff;"></i>Article Post</button>
            </a>
            
            <!-- Container Article Category -->
            <div class="mt-[1vw] w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt">
                <div class="pl-[0.5vw]">
                    <h4 class="text-[1.4vw] font-bold">Article Category</h4>
                    <hr class="border-black border-1/2 w-full my-[0.5vw]">
                </div>
                
                @foreach ($categories as $category)
                    @php
                        $isActive = request()->query('category') == $category->slug;
                        $queryParams = request()->query();
                        $queryParams["category"] = $category->slug
                    @endphp
                    
                    @if ($isActive)
                        @php
                            unset($queryParams["category"]);
                        @endphp
                        <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-{{ $category->color }}">
                            <a href="{{ url('/articles') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-[0.5vw] w-full border-white">
                            </a>
                        </button>
                    @else
                        <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-{{ $category->color }}">
                            <a href="{{ url('/articles') . '?' . http_build_query($queryParams) }}" class="w-full">
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
                <h2 class="text-[3.8vw] font-montserrat_alt font-bold text-greenpetify">Article</h2>
                <p class="text-[1.4vw] font-open_sans font-semibold mt-[1vw]">Find anything you need about your pet here!</p>
            </div>

            <!-- Article Catalog -->
            <div class="grid grid-cols-3 gap-[0.75vw] mx-[1vw] mt-[1vw]">        
                @foreach ($articles as $article)
                    <a href="/articles/{{ $article->slug }}" class="block w-full">
                        <div class="rounded-[0.5vw] shadow-xl p-[0.5vw] min-h-[38vw] w-[24vw] mt-[2.5vw]">
                            <!-- Gambar Article -->
                            @if($article->image)
                                <img src="{{ asset('storage/' . $article->image ) }}" alt="Article Picture" class="w-[100%] h-[30vh] object-cover rounded-md">
                            @else
                                <img src="{{ asset('images/articlepict.svg') }}" alt="Article Picture" class="w-[100%] h-[30vh] object-cover rounded-md">
                            @endif
                            
                            <!-- Category & Days -->
                            <div class="flex flex-row font-montserrat_alt font-semibold w-[100%]">
                                <p href="/articles?category={{ $article->article_category->slug }}" class="w-fit rounded-[0.75vw] bg-{{  $article->article_category->color }} text-[1.4vw] text-center text-white my-[1vw] py-[0.5vw] px-[0.5vw]">{{ $article->article_category->name }}</p>     
                                <p class="text-slate-400 my-[1vw] ml-auto py-[0.5vw] px-[0.5vw]">{{ $article->created_at->diffForHumans() }}</p>
                            </div>
        
                            <!-- Judul Article -->
                            <h4 class="font-montserrat_alt font-semibold w-[100%] text-[1.6vw] pr-[0.5vw] min-h-[5vw]">{{ $article->title }}</h4>    
        
                            <!-- Desc Singkat -->
                            <p class="font-open_sans text-slate-600 my-[1vw] text-justify pr-[0.5vw] w-[100%] break-words min-h-[5vw]">
                                {!! Str::limit(strip_tags($article->content), 100) !!}
                            </p>
                            
                            <!-- Profile -->
                            <div class="flex flex-row">
                                <div class="w-[3.2vw] h-[3.2vw] bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                    <img src="images/after login.svg" alt="Profile Writer">
                                </div>
                                <p class="mx-[0.5vw] mt-[0.5vw] font-overpass font-semibold text-[1.4vw]">{{ $article->user->username }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            
            <div class="ml-[1.5vw] mr-[2vw] my-[2.5vw] text-[1.4vw]">
                {{ $articles->links() }}
            </div>
            
        </div>
    </div>
</x-layout>

<script>
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

    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });

</script>