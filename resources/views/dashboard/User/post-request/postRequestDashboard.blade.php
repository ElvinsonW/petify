<x-dashboard.layout>
    <!-- bagian kanan sidebar -->
    <div class="flex-1 px-[2.8vw] overflow-hidden">
        <!-- Contribution Overview -->
        <div class="mt-[1.5vw] items-center mb-[1.4vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">Contribution Overview</p>
            
            <!-- content -->
            @php
                $queryParams = request()->query();
            @endphp
            <div class="flex mt-[1.5vw] text-[1.5vw] font-bold font-overpass w-full items-center justify-between">
                <div class="flex gap-[5vw]">
                    @php
                        $queryParams["post"] = "adoptions";
                        $url = url('/dashboard/my-post-requests') . '?' . http_build_query($queryParams);
                    @endphp
                    <!-- page adoption post -->
                    <a href="{{ $url }}">
                        <p class="{{ request('post') == 'adoptions' ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Adoption Post</p>
                    </a>
                    
                    @php
                        $queryParams["post"] = "articles";
                        $url = url('/dashboard/my-post-requests') . '?' . http_build_query($queryParams);
                    @endphp
                    <!-- page article post -->
                    <a href="{{ $url }}">
                        <p class="{{ request('post') == "articles" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Article Post</p>
                    </a>
                    
                    @php
                        $queryParams["post"] = "events";
                        $url = url('/dashboard/my-post-requests') . '?' . http_build_query($queryParams);
                    @endphp
                    <!-- page event post -->
                    <a href="{{ $url }}">
                        <p class="{{ request('post') == "events" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Event Post</p>
                    </a>
            
                    <!-- Search Bar -->
                    @php
                        $queryParams = request()->query();
                    @endphp
                </div>

                <form method="GET" action="{{ url('/dashboard/my-post-requests') . '?' . http_build_query($queryParams) }}" class="flex bg-white shadow-md rounded-[0.5vw] px-[1.1vw] py-[1.1vw] text-black text-[1vw] font-semibold font-open_sans tracking-wide w-[25vw] justify-end">
                    @if (request('post'))
                        <input type="hidden" name="{{ 'post' }}" value="{{ request('post') }}">
                    @endif
                    <svg class="w-[1.6vw] h-[1.6vw] justify-center text-center cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4a6 6 0 100 12 6 6 0 000-12zM21 21l-4.35-4.35"></path>
                    </svg>
                    <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Search here..." class="ml-[0.5vw] border-none outline-none w-full">
                </form>
            </div>
        </div>   

        @if (request('post') == "adoptions" || request('post') == "articles" || request('post') == "events")
            @include('dashboard/user/post-request/' . request('post') . 'Card',["requests" => $requests[request('post')]])
        @endif
    </div>
</x-dashboard.layout>