
<x-dashboard.layout :user="$user">
    @if (session('requestError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('requestError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif
    <!-- Sidebar Kanan Start -->
    <div class="flex-1 px-[2.8vw] h-screen flex flex-col">
        <div class="mt-[1.5vw] items-center mb-[1.4vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">Adoption Request</p>
            <!-- date day -->
            @php
                $date = \Carbon\Carbon::now();
            @endphp
            <div class="flex flex-row font-montserrat_alt">
                <p class="text-black font-medium text-[1.1vw]">{{ ucfirst($date->format('l')) }}</p>
                <p class="text-black font-normal text-[1.1vw]">, {{ $date->format('j F Y') }}</p>
            </div>

            <!-- content -->
            @php
                $queryParams = request()->query();
            @endphp
            <div class="flex mt-[1vw] text-[1.5vw] font-bold font-overpass items-center justify-between">
                <div class="flex gap-[5vw]">
                    @php
                        $queryParams["request"] = "other-request";
                        $url = url('/dashboard') . '/' . $user->username . '/adoption-requests' . '?' . http_build_query($queryParams);
                    @endphp
    
                    <!-- page other adoption request -->
                    <a href="{{ $url }}">
                        <p class="{{ request('request') == 'other-request' ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">
                            Other Request
                        </p>
                    </a>
                    
                    @php
                        $queryParams["request"] = "my-request";
                        $url = url('/dashboard') . '/' . $user->username . '/adoption-requests' . '?' . http_build_query($queryParams);
                    @endphp
                    <!-- page article post -->
                    <a href="{{ $url }}">
                        <p class="{{ request('request') == "my-request" ? "text-black" : "text-black/30 hover:text-black/40 w-fit block after:block after:content-[''] after:absolute after:h-[3px] after:bg-black/50 after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center text-[1.3vw]" }} cursor-pointer relative">
                            My Request
                        </p>
                    </a>
                </div>
        
                <!-- Search Bar -->
                @php
                    $queryParams = request()->query();
                @endphp

                <form method="GET" action="{{ url('/dashboard' . '/' . $user->username . '/adoption-requests') . '?' . http_build_query($queryParams) }}" class="flex bg-white shadow-md rounded-[0.5vw] px-[1.1vw] py-[1.1vw] text-black text-[1vw] font-semibold font-open_sans tracking-wide w-[25vw] justify-end">
                    @if (request('request'))
                        <input type="hidden" name="{{ 'request' }}" value="{{ request('request') }}">
                    @endif
                    <svg class="w-[1.6vw] h-[1.6vw] justify-center text-center cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4a6 6 0 100 12 6 6 0 000-12zM21 21l-4.35-4.35"></path>
                    </svg>
                    <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Search here..." class="ml-[0.5vw] border-none outline-none w-full">
                </form>
            </div>
        </div>     

        @if (request('request'))       
            <!-- Table -->
            <div class="bg-white p-[2vw] rounded-lg shadow-lg flex-1 flex flex-col overflow-hidden">
                <!-- Table Header -->
                <div class="grid font-bold text-[1.2vw] border-b pb-[1vw] font-overpass text-gray-500"
                    style="grid-template-columns: 15% 20% 15% 10% 20% 15%;">
                    <p>Requested By</p>
                    <p>Pet Name</p>
                    <p>Pet Category</p>
                    <p>Trust Point</p>
                    <p>Contact</p>
                    <p>Action</p>
                </div>

                    <!-- Table Rows -->
                <div class="divide-y divide-gray-300 overflow-y-auto overflow-x-clip scroll-m-0 flex-1">
                    @foreach ($requests[request('request')] as $request)
                        <div class="grid py-[0.5vw] items-center text-[1.2vw] font-bold font-overpass text-black"
                            style="grid-template-columns: 15% 20% 15% 10% 20% 15%;">
                            <p>{{ $request->user->username }}</p>
                            <p>{{ $request->adoption_post->name }}</p>
                            <span class="bg-{{ $request->adoption_post->pet->pet_category->color }} text-white text-[1vw] font-semibold font-montserrat_alt px-[1vw] py-[0.5vw] rounded-xl w-fit text-center">
                                {{ $request->adoption_post->pet->pet_category->name }}
                            </span>
                            <p>{{ $request->user->point }}</p>
                            <p>{{ $request->user->phone_number }}</p>
                            <div class="flex space-x-[0.5vw]">
                                @if ($request->approval_status == "Pending")   
                                    @if (request('request') == "other-request")    
                                        <button class="bg-blue-200 p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                            <a href="/dashboard/{{ $user->username }}/adoption-requests/{{ $request->id }}/show" class="flex items-center justify-center">
                                                <i class="fa-solid fa-eye text-blue-500 text-[1.2vw]"></i>
                                            </a>
                                        </button>
                                        <button class="bg-greenabout p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                            <a href="/adoptions/{{ $request->adoption_post->slug }}/adoption-request/{{ $request->id }}/accept" class="flex items-center justify-center">
                                                <i class="fa-solid fa-check text-greentipis text-[1.2vw]"></i>
                                            </a>
                                        </button>
                                        <button class="bg-red-200 p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                            <a href="/adoptions/{{ $request->adoption_post->slug }}/adoption-request/{{ $request->id }}/reject" class="flex items-center justify-center">
                                                <i class="fa-solid fa-xmark text-red-600 text-[1.2vw]"></i>
                                            </a>
                                        </button>
                                    
                                    @else
                                        <p>{{ $request->approval_status }}</p>
                                    @endif 
                                @else
                                    <p class="{{ $request->approval_status === "Accepted" ? 'text-green-500' : 'text-red-500' }}">{{ $request->approval_status }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
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