<x-dashboard.layout>
    <!-- Sidebar Kanan Start -->
    <div class="flex-1 p-[2vw]">
        <!-- Header -->
        <div class="font-montserrat_alt tracking-wider mb-[3vw]">
            <p class="text-greenpetify font-bold text-[2vw]">Adoption Request</p>
            <div class="flex flex-row">
                <p class="text-black font-medium text-[1.1vw]">Wednesday</p>
                <p class="text-black font-normal text-[1.1vw]">, 5 February 2025</p>
            </div>
        </div>

        <!-- Table -->
        <div class="p-[2vw]">
            <!-- Table Header -->
            <div class="grid grid-cols-7 font-bold text-[1.2vw] border-b pb-[1vw] font-overpass text-gray-500">
                <p>Requested By</p>
                <p>Pet Name</p>
                <p>Pet Category</p>
                <p>Trust Point</p>
                <p class="col-span-2 w-[20vw]">Contact</p>
                <p>Action</p>
            </div>

            <!-- Table Rows -->
            <div class="divide-y divide-gray-300">
                @foreach ($requests as $request)    
                    <div class="grid grid-cols-7 py-[0.5vw] items-center text-[1.2vw] font-bold font-overpass text-black">
                        <p>{{ $request->user->username }}</p>
                        <p>{{ $request->adoption_post->name }}</p>
                        <span class="bg-{{ $request->adoption_post->pet->pet_category->color }} text-white text-[1vw] font-semibold font-montserrat_alt px-[1vw] py-[0.5vw] rounded-xl w-fit text-center">
                            {{ $request->adoption_post->pet->pet_category->name }}
                        </span>
                        <p>{{ $request->user->point }}</p>
                        <p class="col-span-2 w-[20vw]">{{ $request->user->phone_number }}</p>
                        <div class="flex space-x-[0.5vw]">
                            @if ($request->approval_status == "Pending")    
                                <button class="bg-blue-200 p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                    <i class="fa-solid fa-eye text-blue-500 text-[1.2vw]"></i>
                                </button>
                                <button class="bg-greenabout p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                    <a href="/adoptions/{{ $request->adoption_post->slug }}/adoption-request/{{ $request->id }}/accept">
                                        <i class="fa-solid fa-check text-greentipis text-[1.2vw]"></i>
                                    </a>
                                </button>
                                <button class="bg-red-200 p-[1vw] rounded-md flex items-center justify-center w-[2.5vw] h-[2.5vw]">
                                    <a href="/adoptions/{{ $request->adoption_post->slug }}/adoption-request/{{ $request->id }}/reject">
                                        <i class="fa-solid fa-xmark text-red-600 text-[1.2vw]"></i>
                                    </a>
                                </button>
                            
                            @else
                                <p class="{{ $request->approval_status === "Accepted" ? 'text-green-500' : 'text-red-500' }}">{{ $request->approval_status }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="grid grid-cols-7 py-[0.5vw] items-center text-[1.2vw] font-bold font-overpass text-black"></div>
            </div>
        </div>
    </div>
</x-dashboard.layout>