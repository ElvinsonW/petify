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

    <div class="flex h-[145vw] overflow-hidden">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-80 h-full shadow-lg pl-10 pt-10">
            <!-- Greetings -->
            <div class="font-montserrat_alt">
                <h4 class="text-lg">Hello {{ auth()->user()->username }},</h4>
                <h2 class="text-xl font-bold" id="sapaan">Good Afternoon!</h2>
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

                <form class="max-w-md w-5/6 mt-4">
                    <label for="search" class="mb-2 text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="search" name="search" class="block w-full p-4 ps-10 !font-overpass font-semibold text-black border-1/2 border-gray-400 rounded-lg bg-white shadow-md" placeholder="Search Here..." value="{{ request('search') }}">
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-lg px-2 py-2 !font-overpass">Search</button>
                    </div>
                </form>
            </div>

            
            <!-- Button Article Post -->
            <a href="/articles/create">
                <button class="mt-4 w-5/6 text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2.5 font-overpass"><i class="fa-solid fa-plus mr-2" style="color: #ffffff;"></i>Article Post</button>
            </a>
            
            <!-- Container Article Category -->
            <div class="mt-4 w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt">
                <div class="pl-2">
                    <h4 class="text-xl font-bold">Article Category</h4>
                    <hr class="border-black border-1/2 w-full my-2">
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
                        <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-{{ $category->color }}">
                            <a href="{{ url('/articles') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-xl font-semibold mt-2 text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-2 w-full border-white">
                            </a>
                        </button>
                    @else
                        <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-{{ $category->color }}">
                            <a href="{{ url('/articles') . '?' . http_build_query($queryParams) }}" class="w-full">
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
        <div class="ml-2 flex-1 pt-10">
            <!-- Judul Page -->
            <div class="text-center">
                <h2 class="text-6xl font-montserrat_alt font-bold text-greenpetify">Article</h2>
                <p class="text-xl font-open_sans font-semibold mt-4">Find anything you need about your pet here!</p>
            </div>

            <!-- Article Catalog -->
            <div class="grid grid-cols-3 gap-10 mx-10 mt-14">        
                @foreach ($articles as $article)
                    <a href="/articles/{{ $article->slug }}" class="block w-full">
                        <div class="rounded-lg shadow-xl p-2 h-[38vw] w-[22vw]">
                            <!-- Gambar Article -->
                            @if($article->image)
                                <img src="{{ asset('storage/' . $article->image ) }}" alt="Article Picture" class="w-full h-[30vh] object-cover rounded-md">
                            @else
                                <img src="{{ asset('images/articlepict.svg') }}" alt="Article Picture" class="w-full h-[30vh] object-cover rounded-md">
                            @endif
                            
                            <!-- Category & Days -->
                            <div class="flex flex-row font-montserrat_alt font-semibold w-full">
                                <p href="/articles?category={{ $article->article_category->slug }}" class="w-fit rounded-xl bg-{{  $article->article_category->color }} text-xl text-center text-white my-4 py-1.5 px-2">{{ $article->article_category->name }}</p>     
                                <p class="text-slate-400 my-4 ml-auto py-1.5 px-2">{{ $article->created_at->diffForHumans() }}</p>
                            </div>
        
                            <!-- Judul Article -->
                            <h4 class="font-montserrat_alt font-semibold w-full text-xl pr-2 min-h-[5vw]">{{ $article->title }}</h4>    
        
                            <!-- Desc Singkat -->
                            <p class="font-open_sans text-slate-600 my-4 text-justify pr-2 w-full break-words min-h-[5vw]">
                                {!! Str::limit(strip_tags($article->content), 100) !!}
                            </p>
                            
                            <!-- Profile -->
                            <div class="flex flex-row">
                                <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                    <img src="images/after login.svg" alt="Profile Writer">
                                </div>
                                <p class="mx-3 mt-2 font-overpass font-semibold text-xl">{{ $article->user->username }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            
            <div class="mx-12 my-10 text-xl">
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