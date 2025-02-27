<x-layout>
    <!-- Adoption Post Container Start -->
    <div class="w-full mt-[2.5vw] mb-32">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-green">Adoption Post</h2>
            <p class="text-xl font-open_sans font-semibold mt-4">Pet You have Adopted from Petify</p>
        </div>

        <!-- Container Pet Adopted -->  
        <div class="w-[80vw] h-auto mx-[9vw] mt-[5vw] mb-[15vw] grid grid-cols-3 gap-[2vw] justify-items-center">
            @foreach ($pets as $pet)    
                <a href="/adoptions/create/{{ $pet->id }}" class="group">
                    <div class="relative rounded-[0.75vw] w-[25vw] h-[18vw] transition group">
                        <!-- Pet Image -->
                        <img src="{{ asset('storage/' . $pet->image_1 ) }}" class="object-cover w-full h-full group-hover:blur-[1px] rounded-[0.75vw]" alt="Pet Photo">

                        <!-- Full Overlay (covering the entire container) -->
                        <div class="absolute inset-0 bg-black rounded-[0.75vw] opacity-0 group-hover:opacity-50 transition-all"></div>
                        
                        <!-- Hover Text Info -->
                        <div class="absolute p-[0.5vw] inset-x-0 bottom-0 rounded-b-[0.75vw] text-white opacity-0 group-hover:opacity-100 transition-all">
                            <h3 class="ml-[1vw] font-semibold font-montserrat_alt text-[1.6vw]">{{ $pet->name }}</h3>
                            <p class="ml-[1vw] mb-[1vw] font-open_sans text-sm">{{ $pet->breed }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <!-- Adoption Post Container End -->
</x-layout>