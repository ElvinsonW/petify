<x-dashboard.layout :user="$user">
    @if (session('updateSuccess'))

        <div class="alert absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('updateSuccess') }}
            </div>
            <button class="close-button ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @elseif (session('deleteSuccess'))

        <div class="alert absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('deleteSuccess') }}
            </div>
            <button class="close-button ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

    @elseif (session('userError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('userError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    
    @endif
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
                @php
                    $queryParams["post"] = "adoption";
                    $url = url('/dashboard') . '/' . $user->username . '/posts' . '?' . http_build_query($queryParams);
                @endphp
                <!-- page adoption post -->
                <a href="{{ $url }}">
                    <p class="{{ request('post') == 'adoption' ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Adoption Post</p>
                </a>
                
                @php
                    $queryParams["post"] = "article";
                    $url = url('/dashboard') . '/' . $user->username . '/posts' . '?' . http_build_query($queryParams);
                @endphp
                <!-- page article post -->
                <a href="{{ $url }}">
                    <p class="{{ request('post') == "article" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Article Post</p>
                </a>
                
                @php
                    $queryParams["post"] = "event";
                    $url = url('/dashboard') . '/' . $user->username . '/posts' . '?' . http_build_query($queryParams);
                @endphp
                <!-- page event post -->
                <a href="{{ $url }}">
                    <p class="{{ request('post') == "event" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">Event Post</p>
                </a>
                
                <!-- page Find My Pet post -->
                @php
                    $queryParams["post"] = "find-my-pet";
                    $url = url('/dashboard') . '/' . $user->username . '/posts' . '?' . http_build_query($queryParams);
                @endphp
                <a href="{{ $url }}">
                    <p class="{{ request('post') == "find-my-pet" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">FindMyPet Post</p>
                </a>
        
                <!-- Search Bar -->
                @php
                    $queryParams = request()->query();
                @endphp

                <form method="GET" action="{{ url('/dashboard' . '/' . $user->username . '/posts') . '?' . http_build_query($queryParams) }}" class="flex bg-white shadow-md rounded-[0.5vw] px-[1.1vw] py-[1.1vw] text-black text-[1vw] font-semibold font-open_sans tracking-wide w-[25vw] justify-end">
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

        @if (request('post') == "adoption" || request('post') == "article" || request('post') == 'event')    
            <div class="overflow-y-auto scrollbar-thin max-h-[80vh] mb-[3vw] pr-[0.5vw] flex flex-col gap-[1vw]">
                @foreach ($posts[request('post')] as $post)    
                    <div class="last:mb-[6vw]">
                        @include('/dashboard/user/post-dashboard/' . request('post') . 'Card', ["post" => $post])
                    </div>
                @endforeach
            </div>
            
            @if (auth()->user()->id == $user->id)    
                <!-- Floating Button Adoption Post  -->
                <div class=" hover:bg-orange-400 fixed bottom-[1.5vw] bg-or-dashboard text-white font-montserrat_alt text-[1.3vw] font-semibold tracking-wide px-[0.8vw] py-[0.4vw] rounded-[0.6vw] shadow-white shadow-lg flex items-center space-x-[0.5vw] cursor-pointer">
                    <a href="{{ '/' . request('post') . 's/create' }}">
                        <span>+ Create Post</span>
                    </a>
                </div>
            @endif
        @endif
        <!-- sidebar kanan end -->
    </div>
</x-dashboard.layout>

<script>
    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });
</script>

    