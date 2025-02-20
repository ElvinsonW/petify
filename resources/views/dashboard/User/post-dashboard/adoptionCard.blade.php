<!-- card 1 -->
<div class="flex flex-col md:flex-row items-start space-x-[1.5vw]">
    <!-- photo of pet -->
    <img
        src="{{ $post->image ? 'storage/' . $post->image : asset('images/articlepict.svg') }}"
        alt="Event Image"
        class="w-full md:w-[9.8vw] h-[9.8vw] rounded-[1.1vw] object-cover"
    />
    <div class="flex flex-col justify-between flex-grow">
        <!-- name -->
        <div class="flex flex-row space-x-[0.7vw] text-center items-center justify-between">
            <h2 class="text-[1.7vw] font-semibold font-montserrat_alt text-black leading-snug">{{ $post->name }}</h2>
            <!-- type -->
            <span class="bg-{{ $post->pet->pet_category->color }} text-white text-[1.2vw] font-semibold font-montserrat_alt px-[0.7vw] rounded-[0.53vw]">
                {{ $post->pet->pet_category->name }}
            </span>
        </div>
        <!-- detail -->
        <p class="mt-[0.2vw] text-[0.95vw] font-open_sans leading-snug text-gray-600 font-normal">
            {!! Str::limit(strip_tags($post->description),350) !!}
        </p>
        <div class="flex flex-col text-[0.8vw] text-black font-open_sans font-semibold mt-[0.5vw] leading-snug space-y-[0.3vw]">
            <!-- Lokasi -->
            <span class="flex items-center space-x-[0.5vw]">
                <img src="{{ asset('images/location event.svg') }}" alt="Location Icon" class="w-[1.2vw] h-[1.2vw]">
                <span>{{ $post->location }}</span>
            </span>
            <!-- Tanggal & icons -->
            <div class="flex items-center space-x-[0.5vw] justify-between mt-[0.5vw] mr-[1vw]">
                <span class="flex items-center space-x-[0.5vw]">
                    <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar Icon" class="w-[1.2vw] h-[1.2vw]">
                    <span>{{ $post->created_at->format('d F Y') }}</span>
                </span>
                <!-- Icons at the end -->
                <div class="flex justify-center space-x-[0.5vw] gap-[0.75vw]">
                    <!--  -->
                    <div class="cursor-pointer">
                        <a href="/adoptions/{{ $post->slug }}">
                            <i class="fa-solid fa-eye text-blue-500 text-[1.5vw]"></i>
                        </a>
                    </div>

                    <!-- pen edit -->
                    <div class="cursor-pointer">
                        <a href="/adoptions/{{ $post->slug }}/edit">
                            <i class="fa-solid fa-pen-nib text-yellow-500 text-[1.5vw]"></i>
                        </a>
                    </div>

                    <!-- dusbin -->
                    <div class="cursor-pointer">
                        <form action="{{ route('adoptions.destroy', $post->slug) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-transparent border-none cursor-pointer">
                                <i class="fa-solid fa-trash text-red-700 text-[1.4vw]"></i>
                            </button>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>