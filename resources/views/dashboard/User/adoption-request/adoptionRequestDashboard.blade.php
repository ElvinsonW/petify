
<x-dashboard.layout :user="$user">
    <!-- Sidebar Kanan Start -->
    <div class="flex-1 p-[2vw] h-screen flex flex-col">
        <div class="items-center mb-[1.4vw]">
            <!-- Header -->
            <div class="font-montserrat_alt tracking-wider">
                <p class="text-black font-normal text-[1.5vw]">Hello Dodoidoy,</p>
                <p class="text-black font-semibold text-[2.5vw]">Good Afternoon!</p>
            </div>

            <!-- content -->
            @php
                $queryParams = request()->query();
            @endphp
            <div class="flex mt-[1vw] text-[1.5vw] font-bold font-overpass items-center justify-between">
                <div class="flex space-x-[5vw] text-[1.5vw]">
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
