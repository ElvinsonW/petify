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

    <div class="flex h-screen overflow-hidden">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-[22vw] h-full shadow-lg pl-[3vw] pt-[3vw]">
            <!-- Judul Page -->
            <div class="text-left">
                <h4 class="text-[2.4vw] font-montserrat_alt font-bold text-greenpetify leading-none">Life After</h4>
                <h2 class="text-[3.2vw] font-montserrat_alt font-bold text-greenpetify">Adoption</h2>
            </div>
            
            <!-- Search Bar -->
            <form class="max-w-md w-[16vw] mt-[1vw]">           
                <label for="search" class="mb-[0.5vw] text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                    <div class="relative w-full border-1/2 border-gray-400 rounded-[0.5vw] bg-white shadow-md">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-[0.75vw] pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    <input type="search" id="search" name="search" class="rounded-[0.5vw] block w-full max-w-[calc(100%-5.2vw)] p-[1vw] ps-10 !font-overpass font-semibold focus:outline-none" value="{{ request('search') }}" placeholder="Search Here">
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-[0.5vw] px-[0.5vw] py-[0.4vw] !font-overpass">Search</button>
                </div>
            </form>
            
            <!-- Button Life After Adoption Post -->
            <a href="/life-after-adoption/create">
                <button class="mt-[1vw] w-[16vw] text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass"><i class="fa-solid fa-plus mr-[0.5vw]" style="color: #ffffff;"></i>Add Post</button>
            </a>      

            <!-- Container Pet Category -->
            <div class="mt-[1vw] w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt">
                <div class="pl-[0.5vw]">
                    <h4 class="text-[1.4vw] font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-[0.5vw]">
                </div>

                <!-- ALL CATEGORY -->
                @if (request()->is('life-after-adoption') && !request()->query('category')) 
                    @php
                        $queryParams = request()->query();
                    @endphp

                    <button class="clear-category pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group bg-orenmuda">
                        <a href="{{ url('life-after-adoption/') . '?' . http_build_query($queryParams) }}">
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
                        <a href="{{ url('life-after-adoption/') . '?' . http_build_query($queryParams) }}">
                            <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">All Category</p>
                            <hr class="border-orenmuda border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                        </a>
                    </button>   

                @endif
                
                @foreach ($categories as $category)
                    @php
                        $isActive = request()->query('category') == $category->slug;
                    @endphp
                    
                    @if ($isActive)
                        @php
                            $queryParams = request()->query();
                            unset($queryParams["category"]);
                        @endphp
                        <button class="pl-[0.5vw] pr-[0.5vw] w-full rounded-[0.75vw] group bg-{{ $category->color }}">
                            <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-[0.5vw] w-full border-white">
                            </a>
                        </button>
                    @else
                        @php
                            $queryParams = request()->query();
                            $queryParams["category"] = $category->slug;
                        @endphp
                        <button class="pl-[0.5vw] pr-[0.5vw] w-full transition duration-500 ease-in-out rounded-[0.75vw] group hover:bg-{{ $category->color }}">
                            <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-[1.4vw] font-semibold mt-[0.5vw] text-left group-hover:text-white transition-colors duration-500 ease-in-out">{{ $category->name }}</p>
                                <hr class="border-{{ $category->color }} border-1/2 w-[6vw] my-[0.5vw] group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
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
            <div class="grid grid-cols-1 gap-16 mx-[3vw] mt-[2.5vw] mb-[3.5vw] justify-items-center">
                <!-- Post -->
                @php
                    $likedPostIds = $likedPosts->pluck('laa_post_id')->toArray();
                @endphp

                @foreach ($posts as $post)
                    @php
                        $isLiked = in_array($post->id, $likedPostIds); 
                    @endphp
                
                    <div class="rounded-[0.75vw] shadow-xl p-[1vw] w-[42vw] bg-white">
                        <!-- Profile -->
                        <div class="flex flex-row mb-4 items-center gap-3">
                            <div class="w-[4.2vw] h-[4.2vw] bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                <img src="{{ asset('storage/' . $post->user->image) ?? asset('images/after login.svg') }}" alt="Profile Owner" class="w-[3.2vw] h-[3.2vw] rounded-full">
                            </div>
                            <p class="mt-[0.25vw] font-overpass font-semibold text-[1.6vw]">{{ $post->user->username }}</p>
                        </div>

                        <!-- Gambar Pet -->
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Pet Post" class="w-[100%] h-[25vw] rounded-sm object-cover">
                        
                        <!-- Like & Days -->
                        <div class="flex flex-row mt-[2vw] mb-[1vw] pl-[0.25vw]">
                            <!-- Like -->
                            <i class="fa-solid fa-heart fa-2x like-icon {{ $isLiked ? 'filled-heart' : '' }}" data-id="{{ $post->id }}" style="color: #a6a6a6; cursor: pointer;"></i>  
                            
                            <!-- Like Count -->
                            <p class="ml-[0.5vw] text-[1.2vw] font-open_sans font-semibold like-count" data-post-id="{{ $post->id }}">{{ $post->like_count }} likes</p> 
                            
                            <!-- Days -->
                            <p class="text-slate-400 ml-auto px-[0.25vw] font-montserrat_alt font-semibold">{{ $post->created_at->diffForHumans() }}</p>
                        </div>

                        <!-- Caption -->
                        <p class="px-[0.25vw] font-open_sans text-slate-600 my-[1vw] text-justify pr-[0.5vw]">{{ $post->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Bagian Tengah (Konten) End-->

        <!-- Bagian Kanan (Adoption Data) Start -->
        <div class="w-[22vw] h-[100%] shadow-lg pl-[3vw] pt-[3vw]">
            @if ($pets->isNotEmpty())
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA UDAH ADA PET YANG DIADOPSI (START) -->
                <div class="w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] mb-[2.5vw]">
                    <h4 class="mb-[1vw] text-left text-[1.2vw] font-montserrat_alt font-semibold text-greenpetify">Your Pet that has been Adopted</h4>

                    @foreach ($pets as $pet)
                        @php
                            $queryParams = request()->query();
                            $queryParams['pet'] = $pet->name;
                        @endphp
                        <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="flex flex-row mb-[1.25vw]">
                            <div class="w-[4.2vw] h-[4.2vw] bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner" class="w-[3.2vw]">
                            </div>
            
                            <div class="flex flex-col justify-center font-montserrat_alt">
                                <p class="mx-[0.75vw] font-semibold text-md w-[4vw]">{{ Str::of($pet->name)->explode(' ')[0] }}</p>
                                <div class="mx-[0.75vw] flex items-center justify-center gap-2">
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
                <div class="w-[16vw] shadow-2xl rounded-[0.5vw] border-1/2 border-gray-400 p-[1vw] font-montserrat_alt text-left">
                    <h4 class="mb-[1vw] text-left text-[1.2vw] font-montserrat_alt font-semibold text-greenpetify">You have no Pet that has been Adopted</h4>
                    <i class="fa-solid fa-paw fa-5x text-center w-full my-[1.25vw]" style="color: #166b68;"></i>
                    <p class="text-sm">Have a pet that's up for adoption? Click the button below to create an adoption post!</p>
    
                    <a href="/adoptions/create">
                        <button class="mt-[1vw] w-full text-white bg-orenmuda rounded-[1vw] shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-[1.2vw] font-semibold px-[0.75vw] py-[0.75vw] font-overpass"><i class="fa-solid fa-plus mr-[0.5vw]" style="color: #ffffff;"></i>Adoption Post</button>
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

    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });

    </script>   
</body>
</html>