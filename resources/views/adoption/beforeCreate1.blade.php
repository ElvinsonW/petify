<x-layout>
    @if (session('createError'))
        
        <div class="alert absolute z-40 flex items-center p-4 mb-4 w-[30vw] text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-[1vw] font-medium">
                {{ session('createError') }}
            </div>
            <button type="button" class="close-button ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    <div class="w-full mt-[2.5vw] mb-32" id="createStep1">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-green">Adoption Post</h2>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-[10vw] mt-[8vw] mb-[15vw] flex flex-row justify-evenly">
            <a href="/adoptions/create/before-create-2">
                <div class="shadow-2xl rounded-[0.75vw] w-[28vw] h-[18vw] py-[4.5vw] justify-items-center text-center hover:bg-gray-200 transition">
                    <img src="{{ asset('images/ever-posted-icon.svg') }}" class="w-[5vw]" alt="Icon Ever Posted">
                    <p class="mt-[1vw] font-montserrat_alt text-[1.2vw] font-bold text-green">Ever Posted</p>
                </div>
            </a>

            <a href="/adoptions/create">
                <div class="shadow-2xl rounded-[0.75vw] w-[28vw] h-[18vw] py-[4.5vw] justify-items-center text-center hover:bg-gray-200 transition">
                    <img src="{{ asset('images/new-adopt-post.svg') }}" class="w-[5vw]" alt="Icon New Adoption Post">
                    <p class="mt-[1vw] font-montserrat_alt text-[1.2vw] font-bold text-green">New Adoption Post</p>
                </div>
            </a>
        </div>
    </div>
</x-layout>

<script>
    const closeButtons = document.querySelectorAll('.close-button');
    
    closeButtons.forEach((button) => {
        button.addEventListener('click', function() {
            const alert = button.closest('.alert')
            alert.style.display = "none";
        });
    });
</script>