<!-- Schedule Form -->
<div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 mt-16">
    <div>
        <div id="schedule-container">
            <!-- Initial Day and Session Block -->
            <div class="flex flex-col lg:flex-row gap-10" id="day-session-1">
                <!-- Schedule Day -->
                <div class="w-full lg:w-1/3">
                    <div class="w-full gap-5 flex flex-col" id="day-container">
                        <div class="w-full p-4 bg-gray-50 shadow rounded-xl flex flex-col items-center" id="day-session-1" onclick="toggleSessions(1)">
                            <div class="flex flex-col md:flex-row gap-2 mb-4 w-full">
                                <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar" class="w-12 h-12">
                                <div class="flex flex-col w-full">
                                    <p class="text-lg font-semibold font-montserrat_alt">Day 1</p>
                                    <input 
                                        type="date" 
                                        wire:model="days.0.date"
                                        class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                                        placeholder="Input date here..."
                                        id="date-selector-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="mt-5 bg-kuning text-black rounded-lg px-4 py-2 hover:bg-kuninggelap transition font-montserrat_alt text-base font-semibold" onclick="addNewDay()">+ New Day</button>
                </div>

                <!-- Schedule Details (Sessions) -->
                <div class="w-full lg:w-2/3 flex flex-col gap-5" id="session-container">
                    <div class="w-full session" id="sessions-day-1">                            
                        <div class="w-full flex flex-col gap-5" id="input-day-1">
                            <div class="p-4 bg-gray-50 shadow rounded-xl flex flex-col">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-7 h-7 bg-green-500 text-white flex items-center justify-center rounded-full">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <input 
                                        type="time" 
                                        wire:model="sessions.0.0.time" 
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                                        placeholder="Time input here...">
                                </div>
                                <div class="flex flex-col gap-4">
                                    <input 
                                        type="text" 
                                        wire:model="sessions.0.0.title" 
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                                        placeholder="Session Title">
                                    <textarea 
                                        wire:model="sessions.0.0.description" 
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                                        rows="3" placeholder="Description here..."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="mt-5 bg-kuning text-black rounded-lg px-4 py-2 hover:bg-kuninggelap transition font-montserrat_alt text-base font-semibold" onclick="addNewSession(0)">+ New Session</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-between gap-4 mt-6">
        <div class="gap-6 flex flex-row mt-8">
            <button type="button" wire:click="previousStep" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Back</button>
        </div>
        <div class="gap-6 flex flex-row mt-8">
            <button type="submit" wire:click="submitForm" class="text-white bg-greentipis rounded-2xl shadow-lg transform hover:scale-95 hover:bg-greentua transition duration-300 ease-in-out text-xl font-semibold px-5 py-2.5 font-overpass">Submit</button>
        </div>
    </div> 
    
</div>