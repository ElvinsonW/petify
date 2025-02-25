
<x-dashboard.layout>
    <!-- Sidebar Kanan Start -->
    <div class="flex-1 p-[2vw] h-screen flex flex-col">
        <!-- Header -->
        <div class="font-montserrat_alt tracking-wider">
            <p class="text-black font-normal text-[1.5vw]">Hello Dodoidoy,</p>
            <p class="text-black font-semibold text-[2.5vw]">Good Afternoon!</p>
        </div>

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
                @foreach ($requests as $request)
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
                                <p class="{{ $request->approval_status === "Accepted" ? 'text-green-500' : 'text-red-500' }}">{{ $request->approval_status }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-dashboard.layout>
