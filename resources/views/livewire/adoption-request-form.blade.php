<div>
    <!-- Step 1 -->
    @if ($step == 1)
        <!-- <div class="form-step">
            <label for="description">Do you have other pets at home? If yes, what pets are they and have they been vaccinated?</label>
            <textarea wire:model="description" id="description" class="form-control"></textarea>
        </div> -->
        @includeif('adoption-request.requestForm1')
    @elseif ($step == 2)
        <!-- <div class="form-step">
            <label for="travel_plan">What will you do with the pet when you travel or are away?</label>
            <textarea wire:model="travel_plan" id="travel_plan" class="form-control"></textarea>
        </div> -->
        @includeif('adoption-request.requestForm2')
    @elseif ($step == 3)
        <!-- <div class="form-step">
            <label for="experience">Do you have any previous experience keeping animals?</label>
            <textarea wire:model="experience" id="experience" class="form-control"></textarea>
        </div> -->
        @includeif('adoption-request.requestForm3')
    @elseif ($step == 4)
        <!-- <div class="form-step">
            <label for="yard_space">Do you have a yard or outdoor space for animals?</label>
            <textarea wire:model="yard_space" id="yard_space" class="form-control"></textarea>
        </div> -->
        @includeif('adoption-request.requestForm4')
    @elseif ($step == 5)
        <!-- <div class="form-step">
            <label for="adoption_reason">What’s your reason for adopting?</label>
            <textarea wire:model="adoption_reason" id="adoption_reason" class="form-control"></textarea>
        </div> -->
        @includeif('adoption-request.requestForm5')
    @endif

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="alert alert-success mt-4">
            {{ session('message') }}
        </div>
    @endif
</div>
