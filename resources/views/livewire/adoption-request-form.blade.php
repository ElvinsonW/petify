<div>
    <!-- Displaying each step conditionally -->
    @if ($step == 1)
        @include('adoption-request.requestForm1')
    @elseif ($step == 2)
        @include('adoption-request.requestForm2')
    @elseif ($step == 3)
        @include('adoption-request.requestForm3')
    @elseif ($step == 4)
        @include('adoption-request.requestForm4')
    @elseif ($step == 5)
        @include('adoption-request.requestForm5')
    @endif

</div>