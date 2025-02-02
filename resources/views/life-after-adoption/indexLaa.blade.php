<x-layout>
    <div class="flex bg-no-repeat bg-center bg-contain h-[100vw]" style="background-image: url({{ asset('images/adopt-bg.png') }})">
        <!-- Bagian Kiri (Sidebar) Start -->
        <div class="w-80 h-full shadow-lg pl-10 pt-10">
            <!-- Judul Page -->
            <div class="text-left">
                <h4 class="text-4xl font-montserrat_alt font-bold text-green">Life After</h4>
                <h2 class="text-5xl font-montserrat_alt font-bold text-green">Adoption</h2>
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
            <button id="addPostButton" class="mt-4 w-5/6 text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out text-lg font-semibold px-3 py-2.5 font-overpass">
                <i class="fa-solid fa-plus mr-2" style="color: #ffffff;"></i>Add Post
            </button>

            <!-- Pop-Up Modal -->
            <div id="addPostModal" class="hidden fixed inset-0 bg-black bg-opacity-10 backdrop-blur-md items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-xl p-6 w-1/2 relative">
                    <!-- Close Button -->
                    <button id="closeModalButton" class="absolute top-4 right-4 text-merah hover:text-red-800">
                        <i class="fa-solid fa-xmark fa-lg"></i>
                    </button>
                    
                    <!-- Modal Content -->
                    <h2 class="text-center text-4xl font-bold font-montserrat_alt text-green my-8">Life After Adoption Post</h2>
                    
                    <!-- Drop Zone Picture -->
                    <div class="flex items-center justify-center justify-self-center w-2/3">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="fa-solid fa-image fa-3x text-gray-300"></i>
                                <p class="my-2 text-gray-500 font-open_sans mt-2"><span class="font-semibold">Click or Drag and Drop</span> to Insert Picture Here</p>
                                <p class="text-xs text-gray-500 font-open_sans">SVG, PNG, JPG or GIF</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>                     

                    <!-- Text Area for Caption -->      
                    <form>
                        <div class="w-full my-5 border-gray-300 border-2 rounded-lg bg-gray-50">
                            <!-- Buttons -->
                            <div class="flex flex-wrap items-center justify-start gap-4 px-3 py-2 border-b-2 border-gray-300">
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <!-- <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM13.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm-7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm3.5 9.5A5.5 5.5 0 0 1 4.6 11h10.81A5.5 5.5 0 0 1 10 15.5Z"/>
                                    </svg> -->
                                    <i class="fa-solid fa-face-smile"></i>
                                    <span class="sr-only">Add emoji</span>
                                </button>
                               
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-bold"></i>
                                    <span class="sr-only">Bold text</span>
                                </button>
                               
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-italic"></i>
                                    <span class="sr-only">Italic text</span>
                                </button>

                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-underline"></i>
                                    <span class="sr-only">Underline text</span>
                                </button>
                               
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-strikethrough"></i>
                                    <span class="sr-only">Strikethrough text</span>
                                </button>

                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-list"></i>
                                    <span class="sr-only">Add list</span>
                                </button>

                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <!-- <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 3h9.563M9.5 9h9.563M9.5 15h9.563M1.5 13a2 2 0 1 1 3.321 1.5L1.5 17h5m-5-15 2-1v6m-2 0h4"/>
                                    </svg> -->
                                    <i class="fa-solid fa-list-ol"></i>
                                    <span class="sr-only">Add numbered-list</span>
                                </button>

                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <span class="sr-only">Add Quote</span>
                                </button>

                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-rotate-left"></i>
                                    <span class="sr-only">Undo</span>
                                </button>

                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <i class="fa-solid fa-rotate-right"></i>
                                    <span class="sr-only">Redo</span>
                                </button>
                            </div>

                            <!-- Text Area -->
                            <div class="px-4 py-2 bg-white rounded-b-lg">
                                <label for="editor" class="sr-only">Publish post</label>
                                <textarea id="editor" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:outline-none" placeholder="Write your caption here..." required ></textarea>
                            </div>
                        </div>

                        <!-- Buttom Post -->
                        <button type="submit" class="inline-flex items-center px-3 py-2.5 text-lg font-semibold font-overpass text-center text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out">Post</button>
                    </form>
                </div>
            </div>

            <!-- Container Pet Category -->
            <div class="mt-4 w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt">
                <div class="pl-2">
                    <h4 class="text-xl font-bold">Pet Category</h4>
                    <hr class="border-black border-1/2 w-full my-2">
                </div>
                
                @foreach ($categories as $category)
                    @php
                        $isActive = request()->query('category') == $category->slug; 
                        $queryParams = request()->query();
                        $queryParams["category"] = $category->slug;
                    @endphp
                    
                    @if ($isActive)
                        <button class="pl-2 pr-2 w-full rounded-xl group bg-{{ $category->color }}">
                            <a href="{{ url('/life-after-adoption') . '?' . http_build_query($queryParams) }}" class="w-full">
                                <p class="text-xl font-semibold mt-2 text-left text-white">{{ $category->name }}</p>
                                <hr class="border-1/2 my-2 w-full border-white">
                            </a>
                        </button>
                    @else
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
                            <p class="mt-1 font-overpass font-semibold text-2xl">Dodoidoy</p>
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
                    <h4 class="mb-4 text-left text-lg font-montserrat_alt font-semibold text-green">Your Pet that has been Adopted</h4>

                    @foreach ($pets as $pet)
                        <div class="flex flex-row mb-5">
                            <div class="w-16 h-16 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                                <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner" class="w-12">
                            </div>
            
                            <div class="flex flex-col font-montserrat_alt">
                                <p class="mx-3 mt-2 font-semibold text-md w-[4vw]">{{ Str::of($pet->name)->explode(' ')[0] }}</p>
                                <p class="mx-3 text-sm">{{ $pet->breed }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA UDAH ADA PET YANG DIADOPSI (END) -->
            @else
                <!-- NYALAIN KOMEN DI BAWAH INI KALO MISALNYA BELOM ADA PET YANG DIADOPSI (START) --> 
                <div class="w-5/6 shadow-2xl rounded-lg border-1/2 border-gray-400 p-4 font-montserrat_alt text-left">
                    <h4 class="mb-4 text-left text-lg font-montserrat_alt font-semibold text-green">You have no Pet that has been Adopted</h4>
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

        // Script untuk Add Post
        // Ambil elemen tombol dan modal
        const addPostButton = document.getElementById('addPostButton');
        const addPostModal = document.getElementById('addPostModal');
        const closeModalButton = document.getElementById('closeModalButton');

        // Tambahkan event listener untuk membuka modal
        addPostButton.addEventListener('click', () => {
            addPostModal.classList.remove('hidden'); // Tampilkan modal
        });

        // Tambahkan event listener untuk menutup modal
        closeModalButton.addEventListener('click', () => {
            addPostModal.classList.add('hidden'); // Sembunyikan modal
        });

        // Tambahkan event untuk menutup modal jika klik di luar konten modal
        addPostModal.addEventListener('click', (event) => {
            if (event.target === addPostModal) {
                addPostModal.classList.add('hidden'); // Sembunyikan modal
            }
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