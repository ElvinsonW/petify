<x-layout>

    @if (session('createSuccess'))

        <div id="alert" 
            class="absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('createSuccess') }}
            </div>
            <button id="close-button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
  
    @endif

    <div class="flex bg-no-repeat bg-center bg-contain h-[100vw]" style="background-image: url({{ asset('images/adopt-bg.png') }})">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-80 h-full shadow-lg pl-10 pt-10">
            <!-- Judul Page -->
            <div class="text-left">
                <h4 class="text-4xl font-montserrat_alt font-bold text-greenpetify">Life After</h4>
                <h2 class="text-5xl font-montserrat_alt font-bold text-greenpetify">Adoption</h2>
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
            
            <!-- Button Life After Adoption Post -->
            <a href="/life-after-adoption/create">
                <button class="mt-4 w-5/6 text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2.5 font-overpass"><i class="fa-solid fa-plus mr-2" style="color: #ffffff;"></i>Add Post</button>
            </a>      

            <!-- Container Pet Category -->
            <div class="mt-4 w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt">
                <div class="pl-2">
                    <h4 class="text-xl font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-2">
                </div>
                
                @foreach ($categories as $category)
                    @php
                        $isActive = request()->query('category') == $category->slug;
                    @endphp
                    
                    @if ($isActive)
                        @php
                            $queryParams = request()->query();
                            unset($queryParams["category"]);
                        @endphp
                        <button class="pl-2 pr-2 w-full rounded-xl group bg-{{ $category->color }}">
                            <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-xl font-semibold mt-2 text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-2 w-full border-white">
                            </a>
                        </button>
                    @else
                        @php
                            $queryParams = request()->query();
                            $queryParams["category"] = $category->slug;
                        @endphp
                        <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-{{ $category->color }}">
                            <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">{{ $category->name }}</p>
                                <hr class="border-{{ $category->color }} border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                            </a>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- Bagian Kiri (Sidebar) End -->
        
        <!-- Bagian Tengah (Konten) Start -->
        <div class="flex-1 overflow-y-auto scrollbar-hidden">
            <!-- Life After Adoption Posts -->
            <div class="grid grid-cols-1 gap-16 mx-12 mt-10 mb-14 justify-items-center">
                <!-- Post -->
                @php
                    $likedPostIds = $likedPosts->pluck('laa_post_id')->toArray();
                @endphp

                @foreach ($posts as $post)
                    @php
                        $isLiked = in_array($post->id, $likedPostIds); 
                    @endphp
                
                    <div class="rounded-xl shadow-xl p-4 w-5/6 bg-white">
                        <!-- Profile -->
                        <div class="flex flex-row mb-4 items-center gap-3">
                            <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner" class="w-12">
                            </div>
                            <p class="mt-1 font-overpass font-semibold text-2xl">{{ $post->user->username }}</p>
                        </div>

                        <!-- Gambar Pet -->
                        <img src="{{ asset("storage/" . $post->image) }}" alt="Pet Post" class="w-full h-fit">
                        
                        <!-- Like & Days -->
                        <div class="flex flex-row mt-8 mb-4 pl-1">
                            <!-- Like -->
                            <i class="fa-solid fa-heart fa-2x like-icon {{ $isLiked ? 'filled-heart' : '' }}" data-id="{{ $post->id }}" style="color: #a6a6a6; cursor: pointer;"></i>  
                            
                            <!-- Like Count -->
                            <p class="ml-2 text-lg font-open_sans font-semibold like-count" data-post-id="{{ $post->id }}">{{ $post->like_count }} likes</p> 
                            
                            <!-- Days -->
                            <p class="text-slate-400 ml-auto px-1 font-montserrat_alt font-semibold">{{ $post->created_at->diffForHumans() }}</p>
                        </div>

                        <!-- Caption -->
                        <p class="px-1 font-open_sans text-slate-600 my-4 text-justify pr-2">{{ $post->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Bagian Tengah (Konten) End-->

        <!-- Bagian Kanan (Adoption Data) Start -->
        <div class="w-80 h-full shadow-lg pl-10 pt-10">
            @if ($pets)
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA UDAH ADA PET YANG DIADOPSI (START) -->
                <div class="w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 mb-10">
                    <h4 class="mb-4 text-left text-lg font-montserrat_alt font-semibold text-greenpetify">Your Pet that has been Adopted</h4>

                    @foreach ($pets as $pet)
                        @php
                            $queryParams = request()->query();
                            $queryParams['pet'] = $pet->name;
                        @endphp
                        <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="flex flex-row mb-5">
                            <div class="w-16 h-16 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner" class="w-12">
                            </div>
            
                            <div class="flex flex-col justify-center font-montserrat_alt">
                                <p class="mx-3 font-semibold text-md w-[4vw]">{{ Str::of($pet->name)->explode(' ')[0] }}</p>
                                <div class="mx-3 flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-image text-sm w-fit h-fit text-greenpetify"></i>
                                    <p class="text-sm text-greenpetify font-bold">{{ $pet->total_posts }} Posts</p>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA UDAH ADA PET YANG DIADOPSI (END) -->
            @else
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA BELOM ADA PET YANG DIADOPSI (START) --> 
                <div class="w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt text-left">
                    <h4 class="mb-4 text-left text-lg font-montserrat_alt font-semibold text-greenpetify">You have no Pet that has been Adopted</h4>
                    <i class="fa-solid fa-paw fa-5x text-center w-full my-5" style="color: #166b68;"></i>
                    <p class="text-sm">Have a pet that's up for adoption? Click the button below to create an adoption post!</p>
    
                    <a href="/adoptions/create">
                        <button class="mt-4 w-full text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2.5 font-overpass"><i class="fa-solid fa-plus mr-2" style="color: #ffffff;"></i>Adoption Post</button>
                    </a>
                </div>
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA BELOM ADA PET YANG DIADOPSI (END) -->
            @endif
        </div>
        <!-- Bagian Kanan (Adoption Data) Start -->
    </div>
    <!-- Page Content End -->

</x-layout>
    <script>
        // Script untuk Fitur Like
        const likeIcons = document.querySelectorAll('.like-icon'); 
        
        likeIcons.forEach(likeIcon => {
            likeIcon.addEventListener('click', function () {
                const laaId = likeIcon.getAttribute('data-id'); 
                const url = `/life-after-adoption/${laaId}/like`;
                const method = likeIcon.classList.contains('filled-heart') ? 'DELETE' : 'POST';

                fetch(url, {
                    method: method,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json',
                    },
                })
                    .then(response => {
                        if (response.ok) {
                            likeIcon.classList.toggle('filled-heart'); 
                        } else {
                            console.error('Error: Unable to process the request');
                        }
                    })
                    .catch(error => console.error('Network error:', error));
            });
        });

    setInterval(() => {
        // Select all the posts on the page
        const posts = document.querySelectorAll('.like-count');

        posts.forEach(post => {
            const postId = post.getAttribute('data-post-id'); // Get the post ID from data-post-id attribute
            
            // Make a request to fetch the like count for this post
            fetch(`/life-after-adoption/${postId}/like-count`)
                .then(response => response.json())
                .then(data => {
                    // Update the like count in the DOM
                    const likeCountElement = document.querySelector(`[data-post-id="${postId}"]`);
                    if (likeCountElement) {
                        likeCountElement.textContent = `${data.like_count} likes`;  
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    }, 1000);  // Update every 5 seconds


    </script>   
</body>
</html>