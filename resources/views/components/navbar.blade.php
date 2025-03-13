

<!-- Header -->
<header class="w-full bg-white shadow-xl">
    <nav class="px-5 flex justify-between items-center w-full font-overpass font-medium text-xl tracking-wide-9">
        <!-- LOGO -->
        <div class="mt-2 w-28 lg:w-32 h-auto flex justify-center ml-3">
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo Petify" class="w-full h-auto">
            </a>
        </div>

        <!-- Feature -->
        <ul class="text-greenpetify lg:flex gap-10 hidden align-middle text-center justify-center list-none">
            <x-nav-link href="/adoptions" :active="request()->is(['adoptions', 'adoptions/*'])">Adoption</x-nav-link>  
            <x-nav-link href="/articles" :active="request()->is(['articles','articles/*'])">Articles</x-nav-link>  
            <x-nav-link href="/events" :active="request()->is(['events','events/*'])">Events</x-nav-link>  
            <x-nav-link href="/find-my-pets" :active="request()->is(['find-my-pets','find-my-pets/*'])">Find My Pet</x-nav-link>  
            <x-nav-link href="/life-after-adoption" :active="request()->is(['life-after-adoption','life-after-adoption/*'])">Life After Adoption</x-nav-link>   
        </ul>

        @auth
            <!-- AFTER LOGIN -->
            <a href='{{ auth()->user()->role == "User" ?  "/dashboard" . "/" . auth()->user()->username . "/posts?post=adoption" : "/dashboard" . "/adoption-post-requests"}}' class="lg:flex hidden items-center justify-center space-x-3 font-semibold">
                <p class="text-greenpetify text-center">{{ auth()->user()->username }}</p>
                <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                    <img src="{{ asset('storage/' . auth()->user()->image) ?? asset('images/after login.svg') }}" alt="After Login logo" class="rounded-full w-10 h-10 object-cover">
                </div>
            </a>
        @else
            <!-- BEFORE LOGIN -->
            <!-- Login/signin -->
            <div class="lg:flex hidden gap-6">
                <a href="/login" class="px-4 py-4rem text-white bg-greenpetify rounded-2xl border border-greentua shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out"><button class="w-full h-full">Login</button></a>
                <a href="/register" class="px-4 py-4rem text-white bg-greenpetify rounded-2xl border border-greentua shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out"><button class="w-full h-full">Sign Up</button></a>
            </div>
        @endauth
            
        <!-- hamburger icon -->
        <button class="buttonToogle lg:hidden block mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon h-8 w-8 text-greenpetify icon-hamburger transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <!-- phone -->
    <div class="py-[2vw] mobileMenu hidden font-overpass font-medium text-lg tracking-wide-9 text-center">
        <ul class="text-red gap-4 list-none">
            {{-- <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="/adoptions">Adoption</a></li>  
            <li class="cursor-pointer m-7 p-2 font-semibold border-greentua text-greentua border rounded-3xl flex items-center justify-center shadow-md hover:shadow-lg transition-shadow duration-200">
                <p class="text-center pt-1"><a href="/articles">Article</a></p>
                <img class="w-7 h-auto ml-2" src="{{ asset('images/Vector.svg') }}" alt="">
            </li>
            <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="/event">Event</a></li>
            <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="/find-my-pet">Find Your Pet</a></li>
            <li class="py-3 px-3 cursor-pointer hover:text-greentua hover:font-semibold"><a href="/life-after-adoption">Life After Adoption</a></li> --}}
            <x-nav-link href="/adoptions" :active="request()->is(['adoptions', 'adoptions/*'])" class="mb-2">Adoption</x-nav-link>  
            <x-nav-link href="/articles" :active="request()->is(['articles','articles/*'])">Articles</x-nav-link>  
            <x-nav-link href="/events" :active="request()->is(['events','events/*'])">Events</x-nav-link>  
            <x-nav-link href="/find-my-pets" :active="request()->is(['find-my-pets','find-my-pets/*'])">Find My Pet</x-nav-link>  
            <x-nav-link href="/life-after-adoption" :active="request()->is(['life-after-adoption','life-after-adoption/*'])">Life After Adoption</x-nav-link>   

        </ul>

        <!-- a line before button -->
        <hr class="my-2 border-t-2 border-greentua-300">

        <!-- BEFORE LOGIN -->
        {{-- <div class="flex gap-6 mt-5 m-5">
            <button class="w-full px-4 py-4rem text-white bg-greenpetify rounded-2xl border border-greentua shadow-lg hover:bg-greentua hover:scale-95 transition duration-300"><a href="./login.html">Login</a></button>
            <button class="w-full px-4 py-4rem text-white bg-greenpetify rounded-2xl border border-greentua shadow-lg hover:bg-greentua hover:scale-95 transition duration-300"><a href="./register.html">Sign In</a></button>
        </div> --}}

        <!-- AFTER LOGIN -->
        <!-- <div class="flex items-center justify-center space-x-5 font-medium mr-5">
            <div class="flex items-center justify-center space-x-3 font-semibold">
                <p class="text-greenpetify text-center">Dodoidoy</p>
                <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                    <img src="{{ asset('images/after login.svg') }}" alt="After Login logo">
                </div>
            </div>
            <button class="px-4 py-2 text-white bg-greenpetify rounded-full border border-greentua shadow-lg hover:bg-greentua hover:scale-95 transition duration-300 w-auto">
                Log Out
            </button>
        </div>        -->
    </div>
</header>

