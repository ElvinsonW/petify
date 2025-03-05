<x-dashboard.layout :user="$user">
    <!-- bagian kanan sidebar -->
    <div class="flex-1 px-[2.8vw] overflow-hidden">
        <!-- Liked Post -->
        <div class="mt-[1.5vw] items-center mb-[1.4vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">Liked Post</p>
            <!-- date day -->
            <div class="flex flex-row font-montserrat_alt">
                <p class="text-black font-medium text-[1.1vw]">Wednesday</p>
                <p class="text-black font-normal text-[1.1vw]">, 5 February 2025</p>
            </div>
            
            <!-- content -->
            <div class="flex mt-[1.5vw] text-[1.5vw] font-bold font-overpass items-center w-full justify-between">
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
        </div>       

        <!-- Photo Life After Adoption -->
        @if (request('post') == "adoptions" || request('post') == "lifeAfterAdoption")
            @include('dashboard.User.liked-post.' . request('post') . 'Card',["posts" => $posts[request('post')]])
        @endif  
    </div>
    <!-- sidebar kanan end -->
</x-dashboard.layout>