<div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain px-4" style="background-image: url(../src/images/form-bg.png)">
    <!-- Judul Page -->
    <div class="text-center mb-12">
        <p class="text-3xl sm:text-4xl lg:text-6xl font-montserrat_alt font-bold text-greenpetify">Adoption Form</p>
    </div>

    <!-- Steps -->
    <div id="steps" class="flex justify-center items-center gap-4 font-open_sans mb-16">
        <div id="step-1" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full 
                bg-greenpetify text-white 
                font-bold transition-all duration-500">
                1
            </div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-2" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-greenpetify bg-white text-greenpetify font-bold transition-all duration-500">2</div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-3" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white border-2 border-gray-300 text-gray-300 font-bold transition-all duration-500">3</div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-4" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white border-2 border-gray-300 text-gray-300 font-bold transition-all duration-500">4</div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-5" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-white border-2 border-gray-300 text-gray-300 font-bold transition-all duration-500">5</div>
        </div>
    </div>

    

    <div class="flex justify-center">
        <div class="w-2/3 flex flex-col justify-center">
            <div>
                <label for="description2" class="block mb-5 text-xl font-semibold text-center">
                    What will you do with the pet when you travel or are away?                    
                </label>
                <textarea wire:model="description2" id="description2" rows="15" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Write pet description here..." required></textarea>
                @error('description2') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between gap-4 mt-6">
                <!-- Previous Button -->
                <div class="gap-6 flex flex-row">
                    <button wire:click="previousStep" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Back</button>
                </div>

                <!-- Next Button -->
                <div class="gap-6 flex flex-row">
                    <button wire:click="nextStep" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Next</button>
                </div>
            </div> 
        </div>
    </div>

</div>
