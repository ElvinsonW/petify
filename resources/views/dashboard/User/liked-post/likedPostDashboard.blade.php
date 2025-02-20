<x-dashboard.layout>
    <!-- bagian kanan sidebar -->
    <div class="flex-1 px-[2.8vw] ">
        <!-- Liked Post -->
        <div class="mt-[1.6vw] items-center mb-[1vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">Liked Post</p>
            
            <!-- content -->
            <div class="flex text-[1.5vw] font-bold font-overpass w-full justify-between">
                <div class="flex text-[1.5vw] font-bold font-overpass w-full items-center space-x-[5vw]">
                    <!-- adoption post -->
                    @php
                        $queryParams = request()->query();
                        $queryParams["post"] = "adoptions";
                        $url = url('/dashboard') . '/' . $user->username . '/liked-posts' . '?' . http_build_query($queryParams);
                    @endphp
                    <a href="{{ $url }}">
                        <p class="{{ request('post') == "adoptions" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Adoption Post</p>
                    </a>
                    
                    <!-- page life after adoption post -->
                    @php
                        $queryParams = request()->query();
                        $queryParams["post"] = "lifeAfterAdoption";
                        $url = url('/dashboard') . '/' . $user->username . '/liked-posts' . '?' . http_build_query($queryParams);
                    @endphp
                    <a href="{{ $url }}">
                        <p class="{{ request('post') == "lifeAfterAdoption" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Life After Adoption Post</p>
                    </a>
                </div>

                <!-- Search Bar -->
                <form class="ml-auto flex bg-white shadow-md rounded-[0.5vw] px-[1.1vw] py-[1.1vw] text-black text-[1vw] font-semibold font-open_sans tracking-wide w-[35vw]">
                    
                    @if (request('post'))
                        <input type="hidden" name="post" value="{{ request('post') }}">
                    @endif
                    <svg class="w-[1.6vw] h-[1.6vw] justify-center text-center cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4a6 6 0 100 12 6 6 0 000-12zM21 21l-4.35-4.35"></path>
                    </svg>
                    <input name="search" type="text" placeholder="Search here..." class="ml-[0.5vw] border-none outline-none w-full">
                </form>
            </div>
        </div>       

        <!-- Photo Life After Adoption -->
        @if (request('post') == "adoptions" || request('post') == "lifeAfterAdoption")
            @include('dashboard.User.liked-post.' . request('post') . 'Card',["posts" => $posts[request('post')]])
        @endif  
    </div>
    <!-- sidebar kanan end -->
</x-dashboard.layout>