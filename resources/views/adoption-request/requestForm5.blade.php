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
            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-greenpetify text-white  font-bold transition-all duration-500">2</div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-3" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-greenpetify text-white font-bold transition-all duration-500">3</div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-4" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-greenpetify text-white font-bold transition-all duration-500">4</div>
        </div>

        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed border-gray-300"></div>
        </div>

        <div id="step-5" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-greenpetify bg-white text-greenpetify font-bold transition-all duration-500">5</div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="w-2/3 flex flex-col justify-center">
            <div>
                <label for="description5" class="block mb-5 text-xl font-semibold text-center">
                    What’s your reason for adopting?              
                </label>
                <textarea wire:model="description5" id="description5" rows="15" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Write pet description here..." required></textarea>
                @error('description5') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between gap-4 mt-6">
                <!-- Back Button -->
                <div class="gap-6 flex flex-row">
                    <button wire:click="previousStep" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">
                        Back
                    </button>
                </div>

                <!-- Submit Button -->
                <div class="gap-6 flex flex-row">
                    <button wire:click="submitForm" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">
                        Submit
                    </button>
                </div>
            </div>

        </div>

    </div>
</div>