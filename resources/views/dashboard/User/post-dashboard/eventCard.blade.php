<!-- card 1 -->
<div class="flex flex-col md:flex-row items-start space-x-[1.5vw] bg-gray-50 hover-brightness">
    <!-- photo of pet -->
    <img
        src="{{ $post->image ? 'storage/' . $post->iamge : asset('images/articlepict.svg') }}"
        alt="Event Image"
        class="w-full md:w-[9.8vw] h-[9.8vw] rounded-[1.1vw] object-cover"
    />
    <div class="flex flex-col justify-between flex-grow">
        <div class="flex flex-row w-full items-start justify-between space-x-[0.7vw]">
            <!-- name -->
            <h2 class="text-[1.7vw] font-semibold font-montserrat_alt text-black leading-snug flex-1">
                {{ Str::limit($post->title,50) }}
            </h2>
            <!-- type -->
            <span class="bg-{{ $post->event_category->color }} text-white text-[1.1vw] font-semibold font-montserrat_alt px-[0.7vw] py-[0.1vw] rounded-[0.53vw]">
                {{ $post->event_category->name }}
            </span>
        </div>
        <!-- detail -->
        <p class="mt-[0.2vw] text-[0.95vw] font-open_sans leading-snug text-gray-600 font-normal">
            {!! Str::limit($post->description,350) !!}
        </p>
        <div class="flex flex-col text-[0.8vw] text-black font-open_sans font-semibold mt-[1.5vw] leading-snug space-y-[0.3vw]">
            <!-- Lokasi -->
            <span class="flex items-center space-x-[0.5vw]">
                <img src="{{ asset('images/location event.svg') }}" alt="Location Icon" class="w-[1.2vw] h-[1.2vw]">
                <span>{{ $post->location }}</span>
            </span>
            <!-- Tanggal & icons -->
            <div class="flex items-center space-x-[0.5vw] justify-between mt-[0.5vw]">
                <span class="flex items-center space-x-[0.5vw]">
                    <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar Icon" class="w-[1.2vw] h-[1.2vw]">
                    <span>{{ $post->created_at->format('d F Y') }}</span>
                </span>
            </div>
        </div>
    </div>
</div>