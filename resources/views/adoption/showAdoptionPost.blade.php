<x-layout>
    @if (session('adoptError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('adoptError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @elseif (session('likeError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('likeError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

    @elseif (session('requestSuccess'))

        <div class="alert absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('requestSuccess') }}
            </div>
            <button class="close-button ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

    @endif
    <!-- Pet Picture Section Start -->
    <div>
        <!-- Swiper Carousel -->
        <div class="swiper default-carousel swiper-container">
            <div class="swiper-wrapper">
                @if ($adoption->image_1)
                    @for ($i = 1 ; $i <= 3 ; $i++)
                        @if($adoption->{'image_' . $i})
                            <div class="swiper-slide">
                                <div class="h-auto">
                                    <img src="{{ asset('storage/' . $adoption->{'image_' . $i}) }}" alt="Pet Picture" class="w-full h-[50vw] rounded-b-4xl object-cover">
                                </div>
                            </div>
                        @endif
                    @endfor
                @elseif ($adoption->pet->image_1)
                    @for ($i = 1 ; $i <= 3 ; $i++)
                        @if($adoption->pet->{'image_' . $i})
                            <div class="swiper-slide">
                                <div class="h-auto">
                                    <img src="{{ asset('storage/' . $adoption->pet->{'image_' . $i}) }}" alt="Pet Picture" class="w-full h-[50vw] rounded-b-4xl object-cover">
                                </div>
                            </div>
                        @endif
                    @endfor
                @else

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="h-auto">
                            <img src="{{ asset('images/petpict.svg') }}" alt="Pet Picture" class="w-full h-auto rounded-b-4xl">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="h-auto">
                            <img src="{{ asset('images/petpict.svg') }}" alt="Pet Picture" class="w-full h-auto rounded-b-4xl">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="h-auto">
                            <img src="{{ asset('images/petpict.svg') }}" alt="Pet Picture" class="w-full h-auto rounded-b-4xl">
                        </div>
                    </div>
                @endif
            </div>

            <!-- Navigation Buttons -->
            <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-white !w-12 !h-12 transition-all duration-500 rounded-full !top-1/2 !-translate-y-1/2 !left-5 hover:bg-white" data-carousel-prev>
                <svg class="h-5 w-5 text-white group-hover:text-greentua" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-white !w-12 !h-12 transition-all duration-500 rounded-full !top-1/2 !-translate-y-1/2 !right-5 hover:bg-white" data-carousel-next>
                <svg class="h-5 w-5 text-white group-hover:text-greentua" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>     
    <!-- Pet Picture Section End -->
    
    <!-- Pet Details Section Start -->
    <div class="mb-16 ml-16 bg-no-repeat bg-center bg-contain" style="background-image: url(../public/images/adopt-bg-single.png)">
        <!-- Name & Details & Ribbon -->
        <div class="flex flex-row">
            <!-- Name & Details -->
            <div class="flex flex-col mt-16">
                <!-- Name & Like -->
                <div class="flex flex-row">
                    <!-- Name -->
                    <div class="flex flex-col">
                        <h1 class="font-bold text-black font-montserrat_alt text-6xl tracking-wide mb-4">{{ $adoption->name }}</h1>
                        <h4 class="font-semibold text-greentipis font-montserrat_alt text-3xl"><i class="fa-solid fa-location-dot fa-xs" style="color: #cc4b4b;"></i> {{ $adoption->location }}</h4>
                    </div>
    
                    <!-- Like -->
                    <div class="mt-2 ml-5">
                        <i class="fa-solid fa-heart fa-3x {{ $isLiked ? 'filled-heart' : '' }}" id="likeIcon" style="color: #a6a6a6; cursor: pointer;"></i>
                    </div>
                </div>
                
                <!-- Details -->
                <div class="mt-10 flex flex-row">
                    <div class="relative w-40 h-40 bg-kuning rounded-2xl shadow-lg mr-10">
                        <!-- Lapisan bawah -->
                        <div class="absolute top-2 left-2 w-full h-full bg-kuninggelap rounded-2xl -z-10"></div>
                        <!-- Konten -->
                        <div class="flex flex-col items-center justify-center h-full font-montserrat_alt font-semibold">
                          <p class="text-oren text-xl mb-4">Vaccined</p>
                          <p class="text-black text-2xl">{{ $adoption->vaccinated ? "Yes" : "No" }}</p>
                        </div>
                    </div>
                   
                    <div class="relative w-40 h-40 bg-kuning rounded-2xl shadow-lg mr-10">
                        <!-- Lapisan bawah -->
                        <div class="absolute top-2 left-2 w-full h-full bg-kuninggelap rounded-2xl -z-10"></div>
                        <!-- Konten -->
                        <div class="flex flex-col items-center justify-center h-full font-montserrat_alt font-semibold">
                          <p class="text-oren text-xl mb-4">Age</p>
                          <p class="text-black text-2xl">{{ $adoption->age }} Year</p>
                        </div>
                    </div>
                   
                    <div class="relative w-64 h-40 bg-kuning rounded-2xl shadow-lg mr-10">
                        <!-- Lapisan bawah -->
                        <div class="absolute top-2 left-2 w-full h-full bg-kuninggelap rounded-2xl -z-10"></div>
                        <!-- Konten -->
                        <div class="flex flex-col items-center justify-center h-full font-montserrat_alt font-semibold">
                          <p class="text-oren text-xl mb-4">Breed</p>
                          <p class="text-black text-2xl">{{ $adoption->breed ? $adoption->breed : $adoption->pet->breed }}</p>
                        </div>
                    </div>
                   
                    <div class="relative w-40 h-40 bg-kuning rounded-2xl shadow-lg mr-10">
                        <!-- Lapisan bawah -->
                        <div class="absolute top-2 left-2 w-full h-full bg-kuninggelap rounded-2xl -z-10"></div>
                        <!-- Konten -->
                        <div class="flex flex-col items-center justify-center h-full font-montserrat_alt font-semibold">
                          <p class="text-oren text-xl mb-4">Gender</p>
                          <p class="text-black text-2xl">{{ $adoption->gender ? $adoption->gender : $adoption->pet->gender }}</p>
                        </div>
                    </div>
                   
                    <div class="relative w-40 h-40 bg-kuning rounded-2xl shadow-lg mr-10">
                        <!-- Lapisan bawah -->
                        <div class="absolute top-2 left-2 w-full h-full bg-kuninggelap rounded-2xl -z-10"></div>
                        <!-- Konten -->
                        <div class="flex flex-col items-center justify-center h-full font-montserrat_alt font-semibold">
                          <p class="text-oren text-xl mb-4">Weight</p>
                          <p class="text-black text-2xl">{{ $adoption->weight }} Kg</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ribbon I'm Adopted (kalo udah Adopted) -->
            @if ($adoption->status == "1")    
                <div>
                    <img src="{{ asset('images/ribbonadopted.svg') }}" alt="I'm Adopted Status">
                </div>
            @endif
        </div>

        <!-- Owner & Contact -->
        <div class="mt-10 mr-16 flex flex-row">
            <!-- Owner -->
            <a class="flex flex-col mr-36" href="/dashboard/{{ $adoption->user->username }}/posts?post=adoption">
                <h4 class="font-montserrat_alt font-semibold text-2xl">Owner</h4>
                <hr class="border-black border-1/2 w-64">
                <div class="flex flex-row mt-4">
                    <div class="w-24 h-24 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                        <img src="{{ asset('storage/' . $adoption->user->image) ?? asset('images/after login.svg') }}" alt="Dodoidoy Profile" class="w-[6vw] h-[6vw] rounded-full object-cover">
                    </div>
                    
                    <div class="flex flex-col mt-4 ml-4">
                        <p class="font-overpass font-semibold text-2xl">{{ $adoption->user->username }}</p>
                        <p class="font-overpass font-semibold text-orenmuda text-xl mt-2"><i class="fa-solid fa-paw mr-2 bg-orenmuda rounded-full bg-opacity-25 border-orenmuda border-opacity-25 border-4" style="color: #f2ae72;"></i>{{ $adoption->user->point }}</p>
                    </div>
                </div>
            </a>

            <!-- Contact -->
            <div class="flex flex-col">
                <h4 class="font-montserrat_alt font-semibold text-2xl">Contact</h4>
                <hr class="border-black border-1/2 w-64">
               
                <div class="flex flex-col mt-8">
                    <p class="font-overpass text-xl"><i class="fa-solid fa-envelope mr-4 text-xl" style="color: #166B68;"></i>{{ $adoption->user->email }}</p>
                    <p class="font-overpass text-xl mt-2"><i class="fa-solid fa-phone mr-4 text-xl" style="color: #166B68;"></i>{{ $adoption->user->phone_number }}</p>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="mt-16 mr-16">
            <h4 class="font-montserrat_alt font-semibold text-2xl mb-2">Description</h4>
            <hr class="border-black border-1/2 w-full break-words">
            {!! $adoption->description !!}              
        </div>

        <!-- Requirement -->
        @if ($adoption->requirement)    
            <div class="mt-16 mr-16">
                <h4 class="font-montserrat_alt font-semibold text-2xl mb-2">Requirement Criteria</h4>
                <hr class="border-black border-1/2 w-full break-words">
                {!! $adoption->requirement !!}                    
            </div>
        @endif  
        @if (($adoption->status == "0" || $adoption->adoption_status == "0") && auth()->user()->id != $adoption->user_id)    
            <!-- Button Adopt Me (kalo belom diadopt)-->
            <a href="{{ '/adoptions' . '/' . $adoption->slug . '/adoption-request/create' }}">
                <button class="mt-10 text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Adopt Me</button>
            </a>
        @elseif($adoption->status == "1" || $adoption->adoption_status == "1")
            <!-- Button Life After Adoption (kalo udah diadopt) -->
            <a href="/life-after-adoption?pet={{ $adoption->name }}">
                <button class="mt-10 text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Life After Adoption</button>
            </a>
        @endif

    </div>
    <!-- Pet Details Section End -->
</x-layout>

<script>
    // Script untuk inisialisasi Swiper.js
    const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Script untuk Fitur Like
    const likeIcon = document.getElementById('likeIcon');
    const adoptionSlug = "{{ $adoption->slug }}"

    // Tambahkan event listener saat diklik
    likeIcon.addEventListener('click', function () {
        const url = likeIcon.classList.contains('filled-heart') ? `/adoptions/${adoptionSlug}/unlike` : `/adoptions/${adoptionSlug}/like`;        
        const method = 'POST';

        fetch(url, {
            method: method,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
            .then(response => {
                if (response.ok) {
                    likeIcon.classList.toggle('filled-heart');
                } else {
                    console.error('Error: Unable to process the request');
                }
            })
            .catch(error => console.error('Network error:', error));
    });


    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });
</script>