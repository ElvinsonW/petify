<x-layout>
    <!-- Event Container Start -->
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain px-4" style="background-image: url(../src/images/form-bg.png)">
        <!-- Judul Page -->
        <div class="text-center mb-8">
            <p class="text-3xl sm:text-4xl lg:text-6xl font-montserrat_alt font-bold text-green">Event Post</p>
        </div>
        <!-- Steps -->
        <div id="steps" class="flex justify-center items-center gap-4 font-open_sans">
            <!-- Step 1 -->
            <div id="step-1" class="flex flex-col items-center">
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green text-white font-bold">1</div>
            </div>
            <!-- Separator -->
            <div class="flex items-center">
                <div class="w-16 border-t-2 border-dashed border-black"></div>
            </div>
            <!-- Step 2 -->
            <div id="step-2" class="flex flex-col items-center">
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-black font-bold">2</div>
            </div>
        </div>
        <!-- Descriptions and schedule -->
        <div class="flex justify-center items-center gap-10 font-open_sans mt-2">
            <div class="flex flex-col items-center">
                <p class="text-black font-bold">Description</p>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-black font-bold">Schedule</p>
            </div>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 mt-16">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-1 font-open_sans">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Title of Event -->
                        <div>
                            <label for="pets_info" class="block mb-2 text-lg font-semibold">Title of Event</label>
                            <input type="text" id="pets_info" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Answer here..." required />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Location -->
                            <div>
                                <label for="pets_care" class="block mb-2 text-lg font-semibold">Location</label>
                                <input type="text" id="pets_care" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Location..." required />
                            </div>
                            <!-- Ticket -->
                            <div>
                                <label for="experience" class="block mb-2 text-lg font-semibold">Ticket</label>
                                <input type="text" id="experience" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Ticket..." required />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Date and attach file -->
                <div class="grid gap-6 mb-6 sm:grid-cols-1 md:grid-cols-2 font-open_sans">
                    <div>
                        <label for="start_date" class="block mb-2 text-lg font-semibold">Start Date</label>
                        <input type="date" id="start_date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>
                    
                    <div>
                        <label for="end_date" class="block mb-2 text-lg font-semibold">End Date</label>
                        <input type="date" id="end_date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>                                     
                    <div>
                        <label for="attach" class="block mb-2 text-lg font-semibold">Attach picture of your pet here</label>
                        <input id="attach" type="file" multiple required class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none cursor-pointer">
                    </div>
                </div>

                <!-- Description Of Event -->
                <label for="article-content" class="block mb-2 text-lg font-semibold">Description of the event</label>
                <div class="w-full my-5 border-gray-300 border-2 rounded-lg bg-gray-50">
                    <!-- Buttons -->
                    <div class="flex flex-wrap items-center justify-start gap-4 px-3 py-2 border-b-2 border-gray-300">
                        <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
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
                        <textarea id="article-content" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:outline-none" placeholder="Write your article here..." required></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">
                    <a href="./event-form2.html">Next</a>
                </button>
            </form>
        </div>  
    </div>
    <!-- Event Container End -->
</x-layout>
