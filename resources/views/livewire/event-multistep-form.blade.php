<div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain px-4" style="background-image: url(../src/images/form-bg.png)">
    <!-- Judul Page -->
    <div class="text-center mb-8">
        <p class="text-3xl sm:text-4xl lg:text-6xl font-montserrat_alt font-bold text-greenpetify">Event Post</p>
    </div>

    <!-- Steps -->
    <div id="steps" class="flex justify-center items-center gap-4 font-open_sans">
        <div id="step" class="flex flex-col items-center">
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

    @if ($step == 1)
        @includeIf('event.eventForm1',["categories" => $categories])
    @elseif ($step == 2)
        @includeIf('event.eventForm2',["dayLength" => $dayLength, "start_date" => $start_date])
    @endif
</div>



<script>
    let sessionCount = Array(30).fill(0);


    // Add a new session for a specific day
    function addNewSession(dayIndex) {
        sessionCount[dayIndex]++;
        
        // Get the sessions container for the current day
        const sessionsContainer = document.getElementById(`input-day-${dayIndex + 1}`);
        
        // Create new session HTML
        const newSession = document.createElement('div');
        newSession.classList.add('p-4', 'bg-gray-50', 'shadow', 'rounded-xl', 'flex', 'flex-col');
        
        newSession.innerHTML = `
            <div class="flex justify-between items-start gap-4 mb-4">
                <div class="flex items-center gap-4 w-[30vw]">
                    <div class="w-7 h-7 bg-green-500 text-white flex items-center justify-center rounded-full">
                        <i class="fas fa-clock"></i>
                    </div>
                    <input 
                        type="time" 
                        wire:model="sessions.${dayIndex}.${sessionCount[dayIndex]}.time" 
                        class="w-1/2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                        placeholder="Time input here..."
                        required>
                </div>
                <button class="delete-session" onclick="deleteSession(this)">
                    <i class="fa-solid fa-trash text-red-600"></i>
                </button>
            </div>
            <div class="flex flex-col gap-4">
                <input 
                    type="text" 
                    wire:model="sessions.${dayIndex}.${sessionCount[dayIndex]}.title" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                    placeholder="Session Title"
                    required>
                <textarea 
                    wire:model="sessions.${dayIndex}.${sessionCount[dayIndex]}.description" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-green" 
                    rows="3" placeholder="Description here..."></textarea>
            </div>
        `;

        sessionsContainer.appendChild(newSession);
    }

    // Toggle visibility of the selected day's sessions
    function toggleSessions(dayIndex) {
        const sessionsContainer = document.getElementById(`sessions-day-${dayIndex}`);
        
        // Hide other sessions
        document.querySelectorAll('.session').forEach(item => item.classList.add('hidden'));
        sessionsContainer.classList.toggle('hidden');
    }

    function deleteSession(button) {
        const sessionDiv = button.closest('.p-4.bg-gray-50.shadow.rounded-xl.flex.flex-col');
        sessionDiv.remove();
    }

</script>