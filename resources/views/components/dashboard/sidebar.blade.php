<!-- Bagian Kiri (Sidebar) Start -->
<div class="bg-white w-[20vw] h-full shadow-lg p-[2vw] flex flex-col">
    <!-- icon logo -->
    <div class="flex justify-center items-center">
        <a href="/">
            <img class="w-[10vw]" src="{{ asset('images/Logo.svg') }}" alt="">
        </a>
    </div>

    <!-- profile -->
    <div class="pt-[2vw] flex flex-col justify-center items-center">
        <div class="w-[9vw] h-[9vw] bg-white border-[0.5vw] border-orenmuda rounded-full flex justify-center items-center">
            <img class="w-[7vw] h-[7vw]" src="{{ asset('images/after login.svg') }}" alt="After Login logo">
        </div>
        <p class="text-black font-semibold tracking-wider font-montserrat_alt text-[2vw] text-center mt-[1vw]">{{ auth()->user()->username }}</p>
        <p class="text-center text-black/60 text-[1.5vw] font-bold font-overpass tracking-wide">Admin</p>
    </div>

    <!-- menu dashboard -->
    <div class="mt-[3vw] flex flex-col space-y-[1.5vw] text-[1.2vw] font-bold font-overpass text-center cursor-pointer w-full flex-grow">
        <!-- Adoption Post Request -->
        <a href="/dashboard/adoption-post-requests">
            <div class="flex flex-row items-center space-x-[1vw]">
                <i class="fa-solid fa-paw text-[2vw] {{ request()->is(['dashboard/adoption-post-requests']) ? 'text-or-dashboard' : 'text-greenpetify' }}"></i>
                <p class="{{ request()->is(['dashboard/adoption-post-requests']) ? 'text-or-dashboard' : 'text-greenpetify' }} text-center">Adoption Post Request</p>
            </div>
        </a>

        <!-- Article Post Request -->
        <a href="/dashboard/article-requests">
            <div class="flex flex-row items-center space-x-[1vw] hover:font-extrabold hover:text-greentua transition duration-300 ease-in-out cursor-pointer">
                <i class="fa-solid fa-book text-[2vw] {{ request()->is(['dashboard/article-requests']) ? 'text-or-dashboard' : 'text-greenpetify' }} group-hover:text-greentua transition duration-300"></i>
                <p class="{{ request()->is(['dashboard/article-requests']) ? 'text-or-dashboard' : 'text-greenpetify' }} transition duration-300">Article Post Request</p>
            </div>
        </a>

        <!-- Event Post Request -->
        <a href="/dashboard/event-requests">
            <div class="flex flex-row items-center space-x-[1vw] hover:font-extrabold hover:text-greentua transition duration-300 ease-in-out cursor-pointer">
                <i class="fa-solid fa-calendar-day text-[2vw] text-greenpetify group-hover:text-greentua transition duration-300"></i>
                <p class="text-greenpetify transition duration-300">Event Post Request</p>
            </div>
        </a>
    </div>

    <!-- logout -->
    <div class="mt-auto flex justify-center items-center cursor-pointer space-x-[0.5vw] group">
        <svg class="w-[2vw] h-[2vw] text-merah group-hover:text-red-800 transition duration-300" fill="currentColor" viewBox="0 0 24 24">
            <path d="M10 9V5L3 12l7 7v-4h4v-6h-4zM19 3h-7v2h7v14h-7v2h7a2 2 0 002-2V5a2 2 0 00-2-2z"/>
        </svg>
        <p class="text-[1.2vw] font-bold font-overpass text-merah group-hover:text-red-800 group-hover:font-extrabold transition duration-300">
            Logout
        </p>
    </div>
</div>
<!-- Bagian Kiri (Sidebar) End -->