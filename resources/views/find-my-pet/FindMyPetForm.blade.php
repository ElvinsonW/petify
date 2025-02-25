<x-layout>
    <!-- Missing Post Container Start -->
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/form-bg.png)">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-green">Missing Post</h2>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-24 mt-16">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2 font-open_sans">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-2 text-lg font-semibold">Name of your Pet</label>
                        <input type="text" id="name" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Name of your pet..." required />
                    </div>

                    <!-- Breed -->
                    <div>
                        <label for="breed" class="block mb-2 text-lg font-semibold">Breed</label>
                        <input type="text" id="breed" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Breed..." required />
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-4 font-open_sans">
                    <!-- Last Seen -->
                    <div>
                        <label for="last seen" class="block mb-2 text-lg font-semibold">Last Seen</label>
                        <input type="text" id="last seen" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Last seen..." required />
                    </div>
                    
                    <!-- Date -->
                    <div>
                        <label for="date" class="block mb-2 text-lg font-semibold">Date Lost</label>
                        <input type="date" id="date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>
                    
                    <!-- Color -->
                    <div>
                        <label for="color" class="block mb-2 text-lg font-semibold">Color</label>
                        <input type="text" id="color" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Color..." required />
                    </div>

                    <!-- Category Pet -->
                    <div>
                        <label for="category-pet" class="block mb-2 text-lg font-semibold">Pet Category</label>
                        <div class="relative">
                            <select id="category-pet" name="category-pet" class="category appearance-none bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-gray-400" required>
                                <option value="" disabled selected hidden>Select a category...</option>
                                <option value="dog" class="text-black">Dog</option>
                                <option value="cat" class="text-black">Cat</option>
                                <option value="reptile" class="text-black">Reptile</option>
                                <option value="other" class="text-black">Other Pet</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- color and tag -->
                    <div>
                        <label for="category-pet" class="block mb-2 text-lg font-semibold">Color & Tag</label>
                        <div class="relative">
                            <select id="category-pet" name="category-pet" class="category appearance-none bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-gray-400" required>
                                <option value="" disabled selected hidden>Select color & tag...</option>
                                <option value="dog" class="text-black">Yes</option>
                                <option value="cat" class="text-black">No</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Attach Picture -->
                    <div>
                        <label for="attach" class="block mb-2 text-lg font-semibold">Attach picture of your pet here</label>
                        <input id="attach" type="file" multiple required class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none cursor-pointer">
                    </div>
                </div>

                <!-- Any Information -->
                <label for="description" class="block mb-2 text-lg font-semibold">Any Information?</label>
                <div class="w-full my-5 border-gray-300 border-2 rounded-lg bg-gray-50">
                    <!-- Buttons -->
                    <div class="flex flex-wrap items-center justify-start gap-4 px-3 py-2 border-b-2 border-gray-300">
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <!-- <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM13.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm-7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm3.5 9.5A5.5 5.5 0 0 1 4.6 11h10.81A5.5 5.5 0 0 1 10 15.5Z"/>
                            </svg> -->
                            <i class="fa-solid fa-face-smile"></i>
                            <span class="sr-only">Add emoji</span>
                        </button>
                    
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-bold"></i>
                            <span class="sr-only">Bold text</span>
                        </button>
                    
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-italic"></i>
                            <span class="sr-only">Italic text</span>
                        </button>

                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-underline"></i>
                            <span class="sr-only">Underline text</span>
                        </button>
                    
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-strikethrough"></i>
                            <span class="sr-only">Strikethrough text</span>
                        </button>

                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-list"></i>
                            <span class="sr-only">Add list</span>
                        </button>

                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <!-- <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 3h9.563M9.5 9h9.563M9.5 15h9.563M1.5 13a2 2 0 1 1 3.321 1.5L1.5 17h5m-5-15 2-1v6m-2 0h4"/>
                            </svg> -->
                            <i class="fa-solid fa-list-ol"></i>
                            <span class="sr-only">Add numbered-list</span>
                        </button>

                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-quote-left"></i>
                            <span class="sr-only">Add Quote</span>
                        </button>

                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-rotate-left"></i>
                            <span class="sr-only">Undo</span>
                        </button>

                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                            <i class="fa-solid fa-rotate-right"></i>
                            <span class="sr-only">Redo</span>
                        </button>
                    </div>

                    <!-- Text Area -->
                    <div class="px-4 py-2 bg-white rounded-b-lg">
                        <textarea id="description" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:outline-none" placeholder="Write a description about your pet here..." required ></textarea>
                    </div>
                </div>

                <!-- Button Post -->
                <button type="submit" class="inline-flex items-center px-3 py-2.5 text-lg font-semibold font-overpass text-center text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out">Post</button>
            </form>
        </div>
    </div>
    <!-- Adoption Form Container End -->
    
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