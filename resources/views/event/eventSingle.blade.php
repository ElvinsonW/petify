<x-layout>
    <!-- container -->
    <div class="container mx-auto py-8 px-4">
        <!-- title -->
        <h1 class="font-bold text-4xl md:text-5xl lg:text-6xl text-greenpetify font-montserrat_alt py-8 w-full md:w-3/4 my-8 text-center mx-auto">
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
                    <div class="flex flex-col lg:flex-row items-center lg:space-x-10 text-lg md:text-xl tracking-wide text-black font-open_sans text-justify">
                        <div class="mb-8 font-semibold space-y-4">
                            <div class="flex items-center space-x-4 md:space-x-6">
                                <img src="{{ asset('images/location event.svg') }}" alt="Location Icon" class="w-6 h-6">
                                <span class="text-lg">{{ $event->location }}</span>
                            </div>

                            <!-- Event Date -->
                            <div class="flex items-center space-x-4 md:space-x-6">
                                <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar Icon" class="w-6 h-6">
                                <span class="text-lg">
                                    {{ \Carbon\Carbon::parse($event->start_date)->format('d F Y') }} - 
                                    {{ \Carbon\Carbon::parse($event->end_date)->format('d F Y') }}
                                </span>
                            </div>

                            <div class="flex items-center space-x-4 md:space-x-6">
                                <img src="{{ asset('images/ticket event.svg') }}" alt="Ticket icon" class="w-6 h-6">
                                <span>
                                    @if($event->ticket == 0)
                                        Free
                                    @else
                                        Rp.{{ $event->ticket }}
                                    @endif
                                </span>
                            </div>
                            <div class="content leading-7 md:leading-8">
                                <p>{{ $event->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- schedule section -->

        <div class="mt-28">
        <div class="flex md:flex-row justify-center items-center mb-12">
            <div class="w-1/4 hidden md:block border-t-2 border-black"></div>
            <h2 class="text-3xl md:text-4xl font-bold font-montserrat_alt leading-snug text-center mx-8">
                Schedule Of The Event
            </h2>
            <div class="w-1/4 hidden md:block border-t-2 border-black"></div>
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-6">
            <!-- Days -->
            <div class="w-full lg:w-3/4 space-y-10">
                @foreach ($event->days as $day)
                    <button onclick="showSessions('{{ \Carbon\Carbon::parse($day->date)->format('Y-m-d') }}')" 
                        class="p-4 rounded-lg bg-gray-100 flex items-center hover:bg-green hover:text-white transition duration-300 w-full md:w-3/4">
                        <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar Icon" class="w-22 h-22 mr-4">
                        <div class="text-lg md:text-xl font-montserrat_alt font-semibold leading-snug">
                            <p class="text-gray-400 inline-block mr-4">Day {{ $loop->iteration }}</p>
                            <p></p>
                            <p class="text-black inline-block">{{ \Carbon\Carbon::parse($day->date)->format('d F Y') }}</p>
                        </div>
                    </button>
                @endforeach
            </div>

            <!-- Schedule Details -->
            <div class="flex-grow space-y-10 px-8 lg:px-12 py-8 mt-10 lg:mt-0 mb-24 overflow-y-auto scrollbar-thin max-h-screen scrollbar-track-gray-200 scrollbar-thumb-gray-400">
                @foreach ($event->days as $day)
                    <div id="sessions-{{ \Carbon\Carbon::parse($day->date)->format('Y-m-d') }}" class="sessions" style="display: none;">
                        @foreach ($day->sessions as $session)
                            <div class="p-6 rounded-lg bg-gray-100">
                                <div class="inline-block rounded-full px-4 py-2 bg-greenabout border mb-3">
                                    <p class="text-base font-semibold text-greentua font-montserrat_alt">{{ \Carbon\Carbon::parse($session->time)->format('h:i A') }}</p>
                                </div>
                                <h3 class="text-black text-lg md:text-2xl font-montserrat_alt leading-snug font-semibold">{{ $session->title }}</h3>
                                <p class="text-gray-500 mt-2 text-xl font-open_sans font-normal text-justify leading-6 md:leading-7">
                                    {{ $session->description }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <script>
        // Fungsi untuk menampilkan sesi berdasarkan tanggal yang dipilih
        function showSessions(date) {
            // Menyembunyikan semua sesi
            const allSessions = document.querySelectorAll('.sessions');
            allSessions.forEach(session => session.style.display = 'none');
            
            // Menampilkan sesi berdasarkan tanggal yang dipilih
            const selectedSessions = document.getElementById(`sessions-${date}`);
            if (selectedSessions) {
                selectedSessions.style.display = 'block';
            }
        }
    </script>





        <!-- Additional Information Section -->
        @if($event->additional_info)
            <div class="mt-16 text-lg text-gray-700">
                <h3 class="text-2xl font-semibold mb-4">Additional Information</h3>
                <p>{{ $event->additional_info }}</p>
            </div>
        @endif
    </div>


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

</x-layout>
