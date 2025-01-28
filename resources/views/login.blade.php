<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify - Login</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <!-- Favicon Petify -->
    <link rel="icon" href="../src/images/favicon.svg" type="image/svg">

    <!-- Font Overpass, Montserrat Alternates, & Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Katibeh&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @if (session('registerSuccess'))
        
        <div id="alert" 
            class="absolute z-40 flex items-center justify-center p-4 mb-4 w-[30vw] text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" 
            style="top: 10%; left: 50%; transform: translate(-50%, -50%);" 
            role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                Registration Success, Please Login!
            </div>
            <button id="close-button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

    @endif

    <div class="flex flex-col">
        <div class="flex flex-col lg:flex-row h-screen">
            <!-- Bagian Kiri -->
            <div class="lg:w-3/5 flex-1 flex bg-cover bg-center" style="background-image: url('{{ asset('images/login-register.svg') }}');">
                <div class="text-center text-white p-8 flex flex-col justify-end">
                    <a href="../pages/index.html" class="absolute top-4">
                        <img src="{{ asset('images/Logo-White.svg') }}" alt="Petify Logo" class="w-40 mb-auto">
                    </a>
                    <div class="font-open_sans flex items-center space-x-2">
                        <h1 class="text-8xl font-bold tracking-widest leading-none lead">“</h1>
                        <h1 class="text-5xl font-bold tracking-widest">Welcome to Petify!</h1>
                    </div>
                    <p class="pl-32 pr-24 text-justify text-sm font-normal tracking-wide">Find your loyal companion here and explore a variety of informative articles about pet care, health, and needs. Log in now to discover more and be part of the animal lovers' community!</p>
                </div>
            </div>
        
            <!-- Bagian Kanan -->
            <div class="relative z-0 flex-1 flex flex-col items-center justify-center min-h-screen">
                <!-- Header di Luar Form -->
                <div class="items-start text-center mb-10">
                    <h2 class="text-5xl font-bold font-montserrat_alt tracking-widest text-greenpetify mb-3">Login</h2>
                </div>

                <!-- Form Section -->
                <div class="w-full flex items-center justify-center" >
                    <form class="font-open_sans font-semibold text-base tracking-wide text-black" action="/login" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Username -->
                        <div class="py-1 border border-black rounded-2xl flex items-center mb-8 w-[30vw]">
                            <div class="w-20 text-black text-sm font-semibold pl-4">Username</div>
                            <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                            <div class="flex-grow">
                                <input type="text" id="username" name="username" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Username">
                            </div>
                            <div class="w-10 h-10 flex items-center justify-center mr-2">
                                <img src="{{ asset('images/login-profile.svg') }}" alt="Username Icon" class="w-6 h-6">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="py-1 border border-black rounded-2xl flex items-center mb-4">
                            <div class="w-20 text-black text-sm font-semibold pl-4">Password</div>
                            <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                            <div class="flex-grow">
                                <input type="password" id="password" name="password" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Password">
                            </div>
                            <div class="w-10 h-10 flex items-center justify-center mr-2">
                                <!-- Icon goes here -->
                                <img src="{{ asset('images/login-pass-show.svg') }}" id="pass-button" alt="Username Icon" class="w-6 h-6">
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4   font-semibold font-open_sans text-sm">
                            <label class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-teal-600 border-gray-300 rounded">
                                <span class="ml-2 text-black">Remember me</span>
                            </label>
                            <a href="#" class=" text-greenpetify hover:underline">Forgot Password?</a>
                        </div>

                        <!-- don't have account -->
                        <div class="font-semibold font-open_sans text-sm flex space-x-1 mb-10">
                            <p class="text-black">
                                Don't have account?
                            </p>
                            <p class="text-blue-600 hover:text-blue-800">
                                <a href="/register">
                                    Sign Up
                                </a>
                            </p>     
                        </div>

                        <!-- Button -->
                        <div class="flex justify-center">
                            <button type="submit" class=" bg-greenpetify text-xl font-semibold font-montserrat_alt tracking-wide text-white py-2 px-4 rounded-xl hover:bg-greentua">
                                    Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const passInput = document.getElementById('password');
        const passButton = document.getElementById('pass-button');

        passButton.addEventListener("click", function() {
            passInput.type = passInput.type === "password" ? "text" : "password";

            passButton.src = passInput.type === "password" ? "{{ asset('images/login-pass-show.svg') }}" : "{{ asset('images/login-pass-hide.svg') }}";
        });

        const closeButton = document.getElementById('close-button');
        const alert = document.getElementById('alert');

        closeButton.addEventListener('click', function() {
           alert.style.display = "none"; 
        });
    </script>
</body>
</html>

    