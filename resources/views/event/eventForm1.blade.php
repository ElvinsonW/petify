<!-- Container Pertanyaan -->  
<div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 mt-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
        <!-- Title of Event -->
        <div>
            <label for="title" class="block mb-2 text-lg font-semibold">Title of Event</label>
            <input type="text" wire:model="title" id="title" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter event title..." required />
            @error('title') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <!-- SLug -->
        <div>
            <label for="slug" class="block mb-2 text-lg font-semibold">Slug</label>
            <input type="text" wire:model="slug" id="slug" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter location..." required />
            @error('slug') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
        <!-- Location -->
        <div>
            <label for="location" class="block mb-2 text-lg font-semibold">Location</label>
            <input type="text" wire:model="location" id="location" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter location..." required />
            @error('location') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Ticket Price -->
        <div>
            <label for="ticket" class="block mb-2 text-lg font-semibold">Ticket Price</label>
            <input type="number" wire:model="ticket" id="ticket" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter ticket price..." required />
            @error('ticket') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
    </div>

    <!-- Date and Attach File -->
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 mb-6">
        <!-- Start Date -->
        <div>
            <label for="start_date" class="block mb-2 text-lg font-semibold">Start Date</label>
            <input type="date" wire:model="start_date" id="start_date" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
            @error('start_date') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <!-- End Date -->
        <div>
            <label for="end_date" class="block mb-2 text-lg font-semibold">End Date</label>
            <input type="date" wire:model="end_date" id="end_date" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
            @error('end_date') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
    </div>

    <div class="mb-6">
        <label for="images" class="block mb-3 text-lg font-semibold w-fit">
            Attach pictures of your pet here
        </label>
        <div class="flex flex-col items-center justify-center w-full">
            <label for="image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                @if ($image)
                    <div id="img-preview-container">
                        <div class="relative inline-block">
                            @if ($image instanceof \Illuminate\Http\UploadedFile)
                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid w-auto h-[20vh] mb-3">
                            @else
                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid w-auto h-[20vh] mb-3">
                            @endif
                            <button type="button" class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1" wire:click="deleteImage">X</button>
                        </div>
                    </div>                
                @else
                    <div id="img-text" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="font-semibold">Click to upload</span> or drag and drop
                        </p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 1 MB each)</p>
                    </div>
                @endif
                <input id="image" wire:model="image" type="file" class="hidden"/>
            </label>
        </div>

        @error('image')
            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </p>
        @enderror
    </div>

    <!-- Description Of Event -->
    <div class="mt-6">
        <label for="description" class="block mb-2 text-lg font-semibold">Event Description</label>
        <textarea wire:model="description" id="description" rows="10" class="border border-black  text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Write event description here..." required></textarea>
        @error('description') 
            <span class="text-red-500 text-sm">{{ $message }}</span> 
        @enderror
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-end gap-4 mt-6">
        <div class="gap-6 flex flex-row mt-8">
            <button type="button" wire:click="nextStep" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Next</button>
        </div>
    </div> 
</div>

<script>
    function previewImage() {
        const imgText = document.getElementById('img-text');
        imgText.style.display = "none"; // Sembunyikan teks upload
    }
</script>