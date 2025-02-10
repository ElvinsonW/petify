<div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain px-4" style="background-image: url(../src/images/form-bg.png)">
    <!-- Judul Page -->
    <div class="text-center mb-8">
        <p class="text-3xl sm:text-4xl lg:text-6xl font-montserrat_alt font-bold text-greenpetify">Event Post</p>
    </div>

    <!-- Steps -->
    <div id="steps" class="flex justify-center items-center gap-4 font-open_sans">
        <div id="step-1" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full 
                {{ $step > 1 ? 'bg-greenpetify text-white' : 'border-2 border-greenpetify bg-white text-greenpetify' }} 
                font-bold transition-all duration-500">
                1
            </div>
        </div>
        <div class="flex items-center">
            <div class="w-16 border-t-2 border-dashed {{ $step > 1 ? 'border-greenpetify' : 'border-gray-300' }} "></div>
        </div>
        <div id="step-2" class="flex flex-col items-center">
            <div class="w-8 h-8 flex items-center justify-center rounded-full {{ $step > 2 ? 'bg-greenpetify text-white' : '' }} {{ $step == 2 ? 'border-2 border-greenpetify bg-white text-greenpetify' : 'bg-white border-2 border-gray-300 text-gray-300' }} font-bold transition-all duration-500">2</div>
        </div>
    </div>

    @if ($step == 2)
        @include('event.eventForm1')
    @elseif ($step == 1)
        @include('event.eventForm2')
    @endif
</div>

<script>
    let dayCount = 1;
    let sessionCount = [0]; // Track sessions per day

    // Add a new session for a specific day
    function addNewSession(dayIndex) {
        sessionCount[dayIndex]++;
        
        // Get the sessions container for the current day
        const sessionsContainer = document.getElementById(`input-day-${dayIndex + 1}`);
        
        // Create new session HTML
        const newSession = document.createElement('div');
        newSession.classList.add('p-4', 'bg-gray-50', 'shadow', 'rounded-xl', 'flex', 'flex-col');
        
        newSession.innerHTML = `
            <div class="flex items-center gap-4 mb-4">
                <div class="w-7 h-7 bg-green-500 text-white flex items-center justify-center rounded-full">
                    <i class="fas fa-clock"></i>
                </div>
                <input 
                    type="time" 
                    wire:model="sessions.${dayIndex}.${sessionCount[dayIndex]}.time"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                    placeholder="Time input here...">
            </div>
            <div class="flex flex-col gap-4">
                <input 
                    type="text" 
                    wire:model="sessions.${dayIndex}.${sessionCount[dayIndex]}.title" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                    placeholder="Session Title">
                <textarea 
                    wire:model="sessions.${dayIndex}.${sessionCount[dayIndex]}.description" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                    rows="3" placeholder="Description here..."></textarea>
            </div>
        `;

        sessionsContainer.appendChild(newSession);
    }

    // Add new day and sessions when needed
    function addNewDay() {
        dayCount++;
        sessionCount.push(0); // Initialize session count for the new day

        // Create new Day HTML block
        const newDay = document.createElement('div');
        newDay.classList.add('w-full', 'p-4', 'bg-gray-50', 'shadow', 'rounded-xl', 'flex', 'flex-col', 'items-center');
        newDay.id = `day-session-${dayCount}`;
        newDay.setAttribute("data-day-index", dayCount);
        newDay.addEventListener("click", function () {
            const index = this.getAttribute("data-day-index");
            toggleSessions(index);
        });


        newDay.innerHTML = `
            <div class="flex flex-col md:flex-row gap-2 mb-4 w-full">
                <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar" class="w-12 h-12">
                <div class="flex flex-col w-full">
                    <p class="text-lg font-semibold font-montserrat_alt">Day ${dayCount}</p>
                    <input 
                        type="date" 
                        wire:model="days.${dayCount - 1}.date" 
                        class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                        placeholder="Input date here..."
                        id="date-selector-${dayCount}">
                </div>
            </div>
        `;

        // Append new day block to schedule container
        document.getElementById('day-container').appendChild(newDay);

        // Create a new session block for the new day
        const sessionsContainer = document.getElementById('session-container');
        const newSessionBlock = document.createElement('div');
        newSessionBlock.classList.add('w-full',"session", "hidden");
        newSessionBlock.id = `sessions-day-${dayCount}`;

        newSessionBlock.innerHTML = `
            <div class="w-full flex flex-col gap-5" id="input-day-${dayCount}">
                <div class="p-4 bg-gray-50 shadow rounded-xl flex flex-col">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-7 h-7 bg-green-500 text-white flex items-center justify-center rounded-full">
                            <i class="fas fa-clock"></i>
                        </div>
                        <input 
                            type="time" 
                            wire:model="sessions.${dayCount-1}.${sessionCount}.time" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                            placeholder="Time input here...">
                    </div>
                    <div class="flex flex-col gap-4">
                        <input 
                            type="text" 
                            wire:model="sessions.${dayCount-1}.${sessionCount}.title" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                            placeholder="Session Title">
                        <textarea 
                            wire:model="sessions.${dayCount-1}.${sessionCount}.description"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                            rows="3" placeholder="Description here...">
                        </textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="mt-5 bg-kuning text-black rounded-lg px-4 py-2 hover:bg-kuninggelap transition font-montserrat_alt text-base font-semibold" onclick="addNewSession(${dayCount-1})">+ New Session</button>
        `;


        sessionsContainer.appendChild(newSessionBlock);
    }

    // Toggle visibility of the selected day's sessions
    function toggleSessions(dayIndex) {
        const sessionsContainer = document.getElementById(`sessions-day-${dayIndex}`);
        
        // Hide other sessions
        document.querySelectorAll('.session').forEach(item => item.classList.add('hidden'));
        sessionsContainer.classList.remove('hidden');
    }

</script>