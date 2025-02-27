<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify - Register</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    
        
    <!-- Favicon Petify -->
    <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg">

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
    <div class="flex flex-col">
        <div class="flex flex-col lg:flex-row h-screen">
            <!-- Bagian Kiri -->
            <div class="lg:w-3/5 flex-1 flex bg-cover bg-center" style="background-image: url('{{ asset('images/login-register.svg') }} ');">
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
            <div class="flex-1 flex flex-col items-center justify-center relative min-h-screen">
                <!-- Header di Luar Form -->
                <div class="absolute top-7 items-start text-center">
                    <h2 class="text-5xl font-bold font-montserrat_alt tracking-widest text-greenpetify mb-[0.75vw]">Sign Up</h2>
                    <p class=" text-black text-base font-normal font-open_sans tracking-wide text-center">
                        Join us and become a community of animal lovers!
                    </p>
                </div>

                <!-- Form Section -->
                <div class="w-full flex items-center justify-center mt-[3vw]">
                    
                    <form class="font-open_sans font-semibold text-base tracking-wide text-black w-[30vw]" action="/register" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <div class="mb-6">
                            <div class="py-1 border border-black rounded-2xl flex items-center mb-2">
                                <div class="w-20 text-black text-sm font-semibold pl-4">Name</div>
                                <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                                <div class="flex-grow">
                                    <input type="text" id="name" name="name" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Name" value="{{ old('name') }}" required>
                                </div>
                                <div class="w-10 h-10 flex items-center justify-center mr-2">
                                    <img src="{{ asset('images/login-profile.svg') }}" alt="Username Icon" class="w-6 h-6">
                                </div>
    
                            </div>
                            
                            @error('name')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Username -->
                        <div class="mb-6">
                            <div class="py-1 border border-black rounded-2xl flex items-center mb-2">
                                <div class="w-20 text-black text-sm font-semibold pl-4">Username</div>
                                <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                                <div class="flex-grow">
                                    <input type="text" id="username" name="username" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Username" value="{{ old('username') }}" required>
                                </div>
                                <div class="w-10 h-10 flex items-center justify-center mr-2">
                                    <img src="{{ asset('images/login-profile.svg') }}" alt="Username Icon" class="w-6 h-6">
                                </div>
                            </div>
                            
                            @error('username')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Email -->
                        <div class="mb-6">
                            <div class="py-1 border border-black rounded-2xl flex items-center mb-2">
                                <div class="w-20 text-black text-sm font-semibold pl-4">Email</div>
                                <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                                <div class="flex-grow">
                                    <input type="text" id="email" name="email" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Email" value="{{ old('email') }}" required>
                                </div>
                                <div class="w-10 h-10 flex items-center justify-center mr-2">
                                    <!-- Icon goes here -->
                                    <img src="{{ asset('images/login-email.svg') }}" alt="Username Icon" class="w-6 h-6">
                                </div>
                            </div>
    
                            @error('email')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-6">
                            <div class="py-1 border border-black rounded-2xl flex items-center mb-2">
                                <div class="w-20 text-black text-sm font-semibold pl-4">Phone Number</div>
                                <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                                <div class="flex-grow">
                                    <input type="text" id="phone_number" name="phone_number" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Phone Number" value="{{ old('phone_number') }}" required>
                                </div>
                                <div class="w-10 h-10 flex items-center justify-center mr-2">
                                    <!-- Icon goes here -->
                                    <img src="{{ asset('images/login-phone.svg') }}" alt="Username Icon" class="w-6 h-6">
                                </div>
                            </div>
    
                            @error('phone_number')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $address }}
                                </p>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="mb-6">
                            <div class="py-1 border border-black rounded-2xl flex items-center mb-2">
                                <div class="w-20 text-black text-sm font-semibold pl-4">Address</div>
                                <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                                <div class="flex-grow">
                                    <input type="text" id="address" name="address" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Address" value="{{ old('address') }}" required>
                                </div>
                                <div class="w-10 h-10 flex items-center justify-center mr-2">
                                    <!-- Icon goes here -->
                                    <img src="{{ asset('images/login-location.svg') }}" alt="Username Icon" class="w-6 h-6">
                                </div>
                            </div>
    
                            @error('address')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-6">
                            <div class="py-1 border border-black rounded-2xl flex items-center mb-2">
                                <div class="w-20 text-black text-sm font-semibold pl-4">Password</div>
                                <div class="text-black text-xl font-normal font-open_sans tracking-wide ml-3">|</div>
                                <div class="flex-grow">
                                    <input type="password" id="password" name="password" class="w-full text-black text-base font-normal bg-transparent placeholder:text-gray-500 focus:outline-none pl-2" placeholder="Your Password" value="{{ old('password') }}" required>
                                </div>
                                <div class="w-10 h-10 flex items-center justify-center mr-2">
                                    <!-- Icon goes here -->
                                    <img src="{{ asset('images/login-pass-show.svg') }}" alt="Username Icon" id="pass-button" class="w-6 h-6">
                                </div>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <!-- <label for="confirm-password" class="block mb-2">Confirm Password</label>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <img src="/src/images/confirm-password-icon.svg" alt="Confirm Password Icon" class="w-5 h-5">
                            </div>
                            <input type="password" id="confirm-password"
                                class="text-sm text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-lg block w-full pl-10 p-2.5"
                                placeholder="Confirm Your Password">
                        </div> -->

                        <div class="flex space-x-8 text-sm font-normal font-open_sans leading-5">
                            <!-- First column of rules -->
                            <div class="flex flex-col">
                                <!-- Min 8 char -->
                                <div class="flex items-center space-x-2 mb-2">
                                    <i class="fa-solid fa-circle-check fa-lg text-gray-400" id="min-8-check"></i>
                                    <p id="min-8">Min. 8 Characters</p>
                                </div>
                                <!-- Uppercase -->
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-check fa-lg text-gray-400" id="uppercase-check"></i>
                                    <p id="uppercase">At Least 1 Uppercase</p>
                                </div>
                            </div>
                            
                            <!-- Second column of rules -->
                            <div class="flex flex-col ml-5 mb-14">
                                <!-- Lowercase -->
                                <div class="flex items-center space-x-2 mb-2 just">
                                    <i class="fa-solid fa-circle-check fa-lg text-gray-400" id="lowercase-check"></i>
                                    <p id="lowercase">At Least 1 Lowercase</p>
                                </div>
                                <!-- Number -->
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-check fa-lg text-gray-400" id="number-check"></i>
                                    <p id="number">At Least 1 Number</p>
                                </div>
                            </div>
                        </div>
                        

                        <!-- Button -->
                        <div class="flex justify-center">
                            <button type="submit"
                                    class=" bg-greenpetify text-xl font-semibold font-montserrat_alt tracking-wide text-white py-2 px-4 rounded-xl hover:bg-greentua">
                                
                                    Sign Up
                                
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        const passButton = document.getElementById("pass-button");
        const passInput = document.getElementById("password");
        const form = document.getElementById("form");

        passButton.addEventListener("click", function() {
            passInput.type = passInput.type === "password" ? "text" : "password";

            passButton.src = passInput.type === "password" ? "{{ asset('images/login-pass-show.svg') }}" : "{{ asset('images/login-pass-hide.svg') }}";
        });


        function updateValidation(elementId, isValid) {
            const element = document.getElementById(elementId);
            const checkElement = document.getElementById(elementId + '-check')

            if (isValid) {
                element.classList.add("text-greenpetify", "font-bold");
                element.classList.remove("text-red-500", "text-gray-400");
                checkElement.classList.add('text-greenpetify')
                checkElement.classList.remove('text-red-500')
            } else {
                element.classList.add("text-red-500");
                element.classList.remove("text-greenpetify", "font-bold", "text-gray-400");
                checkElement.classList.add('text-red-500')
                checkElement.classList.remove('text-greenpetify')
            }
        }

        function validatePassword(password) {
            const min8 = password.length >= 8;
            const uppercase = /[A-Z]/.test(password);
            const lowercase = /[a-z]/.test(password);
            const number = /[0-9]/.test(password);

            // Update the UI
            updateValidation("min-8", min8);
            updateValidation("uppercase", uppercase);
            updateValidation("lowercase", lowercase);
            updateValidation("number", number);

            // Return overall validation result
            return min8 && uppercase && lowercase && number;
        }

        passInput.addEventListener("input", function () {
            validatePassword(passInput.value);
        });

        form.addEventListener("submit", function (e) {
            const isValid = validatePassword(passInput.value);

            if (!isValid) {
                e.preventDefault(); 
                alert("Password does not meet the requirements. Please fix it before submitting.");
            }
        });

        
    </script>


    </body>
</html>