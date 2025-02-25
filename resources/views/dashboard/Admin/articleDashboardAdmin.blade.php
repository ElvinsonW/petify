    <x-dashboard.layout>
        <!-- Sidebar Kanan Start -->
        <div class="flex-1 p-[2vw] h-screen flex flex-col">
        <!-- Header -->
        <div class="font-montserrat_alt tracking-wider">
            <p class="text-black font-normal text-[1.5vw]">Hello Dodoidoy,</p>
            <p class="text-black font-semibold text-[2.5vw]">Good Afternoon!</p>
        </div>

        <!-- Dashboard Summary -->
        <div class="flex flex-row mt-[1.5vw] space-x-[2vw]">
            <!-- Post Request -->
            @php
                $queryParams = request()->query();
                if(request('status')){
                    unset($queryParams['status']);
                }
            @endphp
            
            <a href="{{ url('/dashboard/article-requests') . '?' . http_build_query($queryParams) }}" class="flex items-center {{ !request('status') ? 'bg-white' : '' }} px-[2vw] py-[1.5vw] rounded-tl-[1.5vw] rounded-tr-[1.5vw] w-[20vw]">
                <img src="{{ asset('images/post request.svg') }}" alt="">
                <div class="ml-[1vw]">
                    <p class="text-black font-bold font-overpass text-[1.8vw]">{{ $total_pending_requests }}</p>
                    <p class="font-bold font-overpass text-gray-400 text-[1.1vw]">Total Post Request</p>
                </div>
            </a>

            <!-- Approved Post -->
            @php
                $queryParams = request()->query();
                $queryParams["status"] = "Accepted";
            @endphp
            <a href="{{ url('/dashboard/article-requests') . '?' . http_build_query($queryParams) }}" class="{{ request('status') == "Accepted" ? 'bg-white' : '' }} flex items-center bg-abuevent px-[2vw] py-[1.5vw] rounded-tl-[1.5vw] rounded-tr-[1.5vw] w-[20vw]">
                <img src="{{ asset('images/approve.svg') }}" alt="">
                <div class="ml-[1vw]">
                    <p class="text-black font-bold font-overpass text-[1.8vw]">{{ $total_accepted_requests }}</p>
                    <p class="font-bold font-overpass text-gray-400 text-[1.1vw]">Total Approved Post</p>
                </div>
            </a>

            <!-- Rejected Post -->
            @php
                $queryParams = request()->query();
                $queryParams["status"] = "Rejected";
            @endphp
            <a href="{{ url('/dashboard/article-requests') . '?' . http_build_query($queryParams) }}" class="{{ request('status') == "Rejected" ? 'bg-white' : '' }} flex items-center bg-abuevent px-[2vw] py-[1.5vw] rounded-tl-[1.5vw] rounded-tr-[1.5vw] w-[20vw]">
                <img src="{{ asset('images/rejected.svg') }}" alt="">
                <div class="ml-[1vw]">
                    <p class="text-black font-bold font-overpass text-[1.8vw]">{{ $total_rejected_requests }}</p>
                    <p class="font-bold font-overpass text-gray-400 text-[1.1vw]">Total Rejected Post</p>
                </div>
                </a>
        </div>

        <!-- Table -->
        <div class="bg-white p-[2vw] rounded-lg shadow-lg flex-1 flex flex-col overflow-hidden">
            <!-- Table Header -->
            <div class="grid font-bold text-[1.2vw] border-b pb-[1vw] font-overpass text-gray-500 gap-[1vw]"
                style="grid-template-columns: 5% 10% 45% 20% 15%;">
                <p>ID</p>
                <p>Requester</p>
                <p>Title</p>
                <p>Article Category</p>
                <p>Action</p>
            </div>

                <!-- Table Rows -->
            <div class="divide-y divide-gray-300 overflow-y-auto overflow-x-clip scroll-m-0 flex-1">
                @foreach ($requests as $request)
                <div class="grid py-[0.5vw] items-center text-[1.2vw] font-bold font-overpass text-black gap-[1vw]"
                    style="grid-template-columns: 5% 10% 45% 20% 15%;">
                    <p>{{ $request->id }}</p>
                    <p>{{ $request->user->username }}</p>
                    <p>{{ $request->title }}</p>
                    <span class="bg-{{ $request->article_category->color }} text-white text-[1vw] font-semibold font-montserrat_alt px-[1vw] py-[0.5vw] rounded-xl w-fit text-center">
                        {{ $request->article_category->name }}
                    </span>
                    @if ($request->approval_status === "Pending")    
                        <div class="flex space-x-[0.5vw]">
                            <button class="bg-blue-200 p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                <a href="/dashboard/article-requests/{{ $request->slug }}">
                                    <i class="fa-solid fa-eye text-blue-500 text-[1.2vw]"></i>
                                </a>
                            </button>
                            <button class="bg-greenabout p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                <a href="/dashboard/article-requests/{{ $request->slug }}/accept">
                                    <i class="fa-solid fa-check text-greentipis text-[1.2vw]"></i>
                                </a>
                            </button>
                            <button class="bg-red-200 p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                <a href="/dashboard/article-requests/{{ $request->slug }}/reject">
                                    <i class="fa-solid fa-xmark text-red-600 text-[1.2vw]"></i>
                                </a>
                            </button>
                        </div>
                    @else
                        <p class="{{ $request->approval_status === "Accepted" ? 'text-green-500' : 'text-red-500' }}">{{ $request->approval_status }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </x-dashboard.layout>