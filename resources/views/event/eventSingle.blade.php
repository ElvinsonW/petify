<x-layout>
    <!-- container -->
    <div class="container mx-auto py-8 px-4">
        <!-- title -->
        <h1 class="font-bold text-4xl md:text-5xl lg:text-6xl text-green font-montserrat_alt py-8 text-center">
            {{ $event->title }}
        </h1>

        <!-- Event details section -->
        <div class="flex flex-col lg:flex-row items-center lg:space-x-12 mb-10">
            <!-- Event Image -->
            <div class="lg:w-1/2 w-full mb-8 lg:mb-0">
                <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="w-full h-auto rounded-lg shadow-lg object-cover">
            </div>

            <!-- Event Information -->
            <div class="lg:w-1/2 w-full">
                <div class="space-y-6">
                    <!-- Event Location -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/location event.svg') }}" alt="Location Icon" class="w-6 h-6">
                        <span class="text-lg">{{ $event->location }}</span>
                    </div>

                    <!-- Event Date -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar Icon" class="w-6 h-6">
                        <span class="text-lg">
                            {{ \Carbon\Carbon::parse($event->start_date)->format('d F Y') }} - 
                            {{ \Carbon\Carbon::parse($event->end_date)->format('d F Y') }}
                        </span>
                    </div>

                    <!-- Event Description -->
                    <div class="text-lg text-gray-700">
                        <p>{{ $event->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-center mb-6">Event Schedule</h2>

            <!-- Loop through days and sessions -->
            @foreach ($event->days as $day)
                <div class="mb-10">
                    <h3 class="text-xl font-semibold mb-3">{{ \Carbon\Carbon::parse($day->date)->format('l, d F Y') }}</h3>
                    
                    @if ($day->sessions->count() == 1)
                        <!-- If only one session -->
                        <div class="p-4 rounded-lg bg-gray-100 mb-4">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold">{{ $day->sessions->first()->time }}</p>
                                <span class="text-sm text-gray-500">{{ $day->sessions->first()->title }}</span>
                            </div>
                            <p class="text-gray-600 mt-2">{{ $day->sessions->first()->description }}</p>
                        </div>
                    @elseif ($day->sessions->count() > 1)
                        <!-- If more than one session -->
                        @foreach ($day->sessions as $session)
                            <div class="p-4 rounded-lg bg-gray-100 mb-4">
                                <div class="flex justify-between items-center">
                                    <p class="text-lg font-semibold">{{ $session->time }}</p>
                                    <span class="text-sm text-gray-500">{{ $session->title }}</span>
                                </div>
                                <p class="text-gray-600 mt-2">{{ $session->description }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>


        <!-- Additional Information Section -->
        @if($event->additional_info)
            <div class="mt-16 text-lg text-gray-700">
                <h3 class="text-2xl font-semibold mb-4">Additional Information</h3>
                <p>{{ $event->additional_info }}</p>
            </div>
        @endif
    </div>
</x-layout>

<script>
        const buttonToogle = document.querySelector('.buttonToogle');
        const mobileMenu = document.querySelector('.mobileMenu');
    
        buttonToogle.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
            
            const icon = buttonToogle.querySelector('.icon');
            
            // Toggle antara hamburger dan X
            if (icon.classList.contains('icon-hamburger')) {
                // ganti path
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
                icon.classList.remove('icon-hamburger');
                icon.classList.add('icon-close');
                icon.style.transform = 'rotate(90deg)'; // rotation effect
            } else {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                icon.classList.remove('icon-close');
                icon.classList.add('icon-hamburger');
                icon.style.transform = 'rotate(0deg)'; // Reset rotation
            }
        });
</script>  
