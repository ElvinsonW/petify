<x-dashboard.layout>
    <!-- Bagian tengah (Sidebar) start -->
    <div class="flex-1 px-[2.8vw]">
        <!-- title -->
        <div class="mt-[1.6vw] items-center mb-[1vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">Adoption History</p>
            <!-- date day -->
            <div class="flex flex-row font-montserrat_alt">
                <p class="text-black font-medium text-[1.1vw]">Wednesday</p>
                <p class="text-black font-normal text-[1.1vw]">, 5 February 2025</p>
            </div>
        </div>

        <!-- card -->
        <div class="overflow-y-auto overflow-x-hidden scrollbar-thin max-h-[80vh] mb-[3vw] pr-[0.5vw]">
            @foreach ($adoptions as $adoption)    
                <a href="{{ '/dashboard' . '/' . $user->username . '/adoption-history' . '?name=' . $adoption->adoption_post->name }}" class="flex flex-col md:flex-row items-center gap-[1.2vw] mt-[1.5vw]">
                    <!-- Pet Image -->
                    <img class="w-[16vw] h-auto object-cover rounded-lg" src="{{ asset('images/find your pet photo dog.svg') }}" alt="Missing Dog" />    
                
                    <!-- Pet Details -->
                    <div class="flex-1 text-black tracking-wide">
                        <div class="grid grid-cols-2 font-bold font-overpass text-[0.9vw]">
                            <span class="text-greenpetify">Name</span> <span>: {{ $adoption->adoption_post->name }}</span>
                            <span class="text-greenpetify">Breed</span> <span>: {{ $adoption->adoption_post->pet->breed }}</span>
                            <span class="text-greenpetify">Gender</span> <span>: {{ $adoption->adoption_post->pet->gender }}</span>
                            <span class="text-greenpetify">Weight</span> <span>: {{ $adoption->adoption_post->weight }} kg</span>
                            <span class="text-greenpetify">Age</span> <span>: {{ $adoption->adoption_post->age }} year</span>
                            <span class="text-greenpetify">Vaccine</span> <span>: {{ $adoption->adoption_post->vaccinated ? "Yes" : "No" }}</span>
                            <span class="text-greenpetify">Adopted At</span><span>: {{ $adoption->updated_at->format("d F Y") }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
            
        </div>
        <!-- end card -->
    </div>
    <!-- sidebar tengah end -->  
    
    <!-- bagian kanan sidebar --> 
    <div class="flex-1 px-[2vw] bg-white rounded-tl-[3.2vw] rounded-bl-[3.2vw] shadow-lg">
        
        <!-- Liked Post -->
        <div class="mt-[2vw] items-center mb-[1vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[1.3vw] font-bold">Life After Adoption</p>
            <p class="text-black tracking-wider font-montserrat_alt text-[1vw] font-medium">Whiskey</p>
        </div>

        <!-- Photo Life After Adoption -->
        <div class="overflow-y-auto scrollbar-thin max-h-[80vh] grid grid-cols-4 gap-[0.5vw] mt-[2vw]">
            @foreach ($lifeAfterAdoptions as $post)    
                <a href="/life-after-adoption">
                    <div class="w-full h-full flex flex-col items-center">
                        <div class="w-[8.2vw] h-[20vh] relative">
                            <img src="{{ asset('images/photo life after adoption user.png') }}" alt="Pet Post" class="w-full h-full object-cover">
                            <div class="w-full pb-[0.5vw] pl-[0.5vw] flex gap-[0.5vw] items-center mt-[-2.3vw]">
                                <svg width="28" height="28" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3717 14.0051C21.0993 13.2631 21.5036 12.2614 21.4955 11.2203C21.4874 10.1791 21.0676 9.18388 20.3285 8.45344C19.9625 8.09176 19.5292 7.80599 19.0532 7.61243C18.5772 7.41887 18.0679 7.32132 17.5544 7.32535C16.5172 7.33349 15.5258 7.75488 14.7981 8.49683C14.6005 8.69518 14.3494 8.93863 14.0448 9.2272L13.1979 10.0278L12.3509 9.2272C12.0456 8.93795 11.7942 8.69449 11.5966 8.49683C10.8632 7.76064 9.86858 7.34705 8.83144 7.34705C7.79429 7.34705 6.79963 7.76064 6.06626 8.49683C4.55555 10.0144 4.53805 12.4679 6.01069 13.9927L13.1979 21.2076L20.3717 14.0051ZM5.19256 7.6208C5.67038 7.14101 6.23767 6.76042 6.86204 6.50075C7.4864 6.24109 8.15561 6.10744 8.83144 6.10744C9.50726 6.10744 10.1765 6.24109 10.8008 6.50075C11.4252 6.76042 11.9925 7.14101 12.4703 7.6208C12.6576 7.8095 12.9001 8.04435 13.1979 8.32534C13.4943 8.04435 13.7368 7.80916 13.9255 7.61976C14.883 6.6437 16.1877 6.08947 17.5523 6.07901C18.917 6.06855 20.2299 6.60271 21.2022 7.56398C22.1745 8.52525 22.7266 9.83489 22.737 11.2048C22.7475 12.5747 22.2153 13.8927 21.2578 14.8687L13.9255 22.2303C13.7325 22.424 13.4708 22.5328 13.1979 22.5328C12.925 22.5328 12.6633 22.424 12.4703 22.2303L5.13596 14.8677C4.19541 13.8939 3.67414 12.5879 3.68473 11.2316C3.69532 9.87527 4.23692 8.57757 5.19256 7.61873V7.6208Z" fill="white"/>
                                </svg>
                                <p class="text-white text-center items-center font-semibold tracking-tight font-overpass text-[0.8vw]">38 Like</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>           
    <!-- sidebar kanan end -->
</x-dashboard.layout>