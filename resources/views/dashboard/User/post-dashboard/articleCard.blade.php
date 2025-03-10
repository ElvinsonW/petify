<!-- card 1 -->
<a href="/articles/{{ $post->slug }}" class="flex flex-col md:flex-row items-start space-x-[1.5vw] bg-gray-50 hover-brightness rounded-[1.1vw]">
    <!-- photo of pet -->
    <img
        src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/articlepict.svg') }}"
        alt="Event Image"
        class="w-full md:w-[10vw] h-[10vw] rounded-[1.1vw] object-cover"
    />
    <div class="flex flex-col justify-between flex-grow w-[80%]">
        <div class="flex flex-row space-x-[0.7vw] w-full items-start justify-between">
            <!-- name -->
            <h2 class="text-[1.7vw] font-semibold font-montserrat_alt text-black leading-snug">{{ Str::limit($post->title,50) }}</h2>
            <!-- type -->
            <span class="bg-{{ $post->article_category->color }} text-white text-[1.2vw] font-semibold font-montserrat_alt px-[0.7vw] py-[0.1vw] rounded-[0.53vw]">{{ $post->article_category->name }}</span>
        </div>
        <!-- detail -->
        <p class="block w-full mt-[0.2vw] text-[0.95vw] font-open_sans leading-snug text-gray-600 font-normal break-words">
            {!! Str::limit(strip_tags($post->content),350) !!}
        </p>
        <div class="flex justify-between items-center text-[0.8vw] text-black font-open_sans font-semibold mt-[1vw] leading-snug">
            <!-- Tanggal dan Icon -->
            <div class="flex items-center space-x-[0.5vw]">
                <img src="{{ asset('images/uim_calendar.svg') }}" alt="Calendar Icon" class="w-[1.2vw] h-[1.2vw]">
                <span>{{ $post->created_at->format('d F Y') }}</span>
            </div>            
        </div>
    </div>
</a>