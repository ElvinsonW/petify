@props(['active' => false])

@if ($active)
    <li class="cursor-pointer p-2 font-semibold border-greentua text-greentua border rounded-3xl flex items-center justify-center shadow-md hover:shadow-lg transition-shadow duration-200">
        <p class="text-center h-fit flex items-center justify-center">
            <a {{ $attributes }} class="h-fit flex items-center justify-center">
                {{ $slot }}
            </a>
        </p>
        <img class="w-7 h-auto ml-2" src="{{ asset('images/Vector.svg') }}" alt="">
    </li> 
@else
    <li class="cursor-pointer p-2 hover:text-greentua hover:font-semibold transition duration-300 ease-in-out"><a {{ $attributes }}>{{ $slot }}</a></li>  
@endif