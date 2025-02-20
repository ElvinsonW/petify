<div class="grid grid-cols-3 gap-6 overflow-y-auto scrollbar-thin max-h-[83vh] pb-[3vw] pr-[0.5vw]">
    @foreach ($posts as $post)  
        <a href="/adoptions/{{ $post->slug }}">
            <div class="rounded-lg shadow-xl p-2 w-[21vw]">
                <!-- Gambar Pet -->
                <img src="{{ asset('images/petadoptpic.svg') }}" alt="Pet Picture" class="w-full h-fit">
                
                <!-- Category & Days -->
                <div class="flex flex-row font-montserrat_alt font-semibold w-full">
                    <p class="w-fit rounded-xl bg-{{ $post->adoption_post->pet->pet_category->color }} text-xl text-center text-white my-4 py-1.5 px-2">{{ $post->adoption_post->pet->pet_category->name }}</p>     
                    <p class="text-slate-400 my-4 ml-auto py-1.5 px-2">{{ $post->adoption_post->created_at->diffForHumans() }}</p>
                </div>

                <!-- Name & Like -->
                <div class="flex flex-row font-montserrat_alt font-semibold w-full">
                    <p class="text-2xl">{{ $post->adoption_post->name }}</p>    
                    <!-- Like -->
                    <div class="ml-auto pr-3">
                        <i class="fa-solid fa-heart fa-lg filled-heart" style="color: #a6a6a6; cursor: pointer;"></i>
                    </div> 
                </div>

                <!-- Desc Singkat -->
                <p class="font-open_sans text-slate-600 mt-[0.5vw] mb-6 text-justify pr-2">{!! Str::limit(strip_tags($post->adoption_post->description),100) !!}</p>
                
                <!-- Profile -->
                <div class="flex flex-row">
                    <div class="w-12 h-12 bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                        <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner">
                    </div>
                    <p class="mx-2 mt-2 font-overpass font-semibold text-xl">{{ $post->adoption_post->user->username }}</p>
                    <p class="mt-2 ml-auto px-2 font-montserrat_alt font-semibold"><i class="fa-solid fa-location-dot fa-xs" style="color: #cc4b4b;"></i> {{ Str::limit($post->adoption_post->location,8) }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>