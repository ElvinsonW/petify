<!-- Container Pertanyaan -->  
<div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 mt-16">
    <!-- Title of Event -->
    <div>
        <label for="title" class="block mb-2 text-lg font-semibold">Title of Event</label>
        <input type="text" wire:model="title" id="title" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter event title..." required />
        @error('title') 
            <span class="text-red-500 text-sm">{{ $message }}</span> 
        @enderror
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Location -->
        <div>
            <label for="location" class="block mb-2 text-lg font-semibold">Location</label>
            <input type="text" wire:model="location" id="location" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter location..." required />
            @error('location') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Ticket Price -->
        <div>
            <label for="ticket" class="block mb-2 text-lg font-semibold">Ticket Price</label>
            <input type="number" wire:model="ticket" id="ticket" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Enter ticket price..." required />
            @error('ticket') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
    </div>

    <!-- Date and Attach File -->
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2">
        <!-- Start Date -->
        <div>
            <label for="start_date" class="block mb-2 text-lg font-semibold">Start Date</label>
            <input type="date" wire:model="start_date" id="start_date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
            @error('start_date') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <!-- End Date -->
        <div>
            <label for="end_date" class="block mb-2 text-lg font-semibold">End Date</label>
            <input type="date" wire:model="end_date" id="end_date" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
            @error('end_date') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Image Upload -->
        <div>
            <label for="image" class="block mb-2 text-lg font-semibold">Attach Event Image</label>
            <input type="file" wire:model="image" id="image" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none cursor-pointer" required />
            @error('image') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
    </div>

    <!-- Description Of Event -->
    <div class="mt-6">
        <label for="description" class="block mb-2 text-lg font-semibold">Event Description</label>
        <textarea wire:model="description" id="description" rows="4" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Write event description here..." required></textarea>
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
