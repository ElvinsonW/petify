<div class="grid grid-cols-3 gap-6 overflow-y-auto scrollbar-thin max-h-[75vh] pb-[3vw] pr-[0.5vw] mb-[5vw]">
    @foreach ($posts as $post)  
        <a href="/adoptions/{{ $post->adoption_post->slug }}" class="w-full">
            <div class="rounded-[0.5vw] shadow-xl p-[0.5vw] w-full h-full hover:bg-gray-100">
                <!-- Gambar Pet -->
                <img src="{{ asset('storage/' . $post->adoption_post->pet->image_1) }}" alt="Pet Picture" class="object-cover w-[100%] h-[30vh] rounded-md">
                
                <!-- Category & Days -->
                <div class="flex flex-row font-montserrat_alt font-semibold w-[100%]">
                    <p class="w-fit rounded-[0.75vw] bg-{{ $post->adoption_post->pet->pet_category->color }} text-[1.4vw] text-center text-white my-[1vw] py-[0.5vw] px-[0.5vw]">{{ $post->adoption_post->pet->pet_category->name }}</p>     
                    <p class="text-slate-400 my-[1vw] ml-auto py-[0.5vw] px-[0.5vw]">{{ $post->adoption_post->created_at->diffForHumans() }}</p>
                </div>

                <!-- Name & Like -->
                <div class="flex flex-row font-montserrat_alt font-semibold w-[100%] min-h-[5vw]">
                    <p class="text-[1.6vw] w-[16vw]">{{ $post->adoption_post->name }}</p>    
                    <!-- Like -->
                    <div class="mt-[0.25vw] ml-auto pr-[0.75vw]">
                        <i class="fa-solid fa-heart fa-lg filled-heart" style="color: #a6a6a6; cursor: pointer;"></i>
                    </div> 
                </div>

                <!-- Desc Singkat -->
                <p class="font-open_sans text-slate-600 mt-[1vw] mb-[1.5vw] text-justify pr-[0.5vw] break-words min-h-[6vw]">{!! Str::limit(strip_tags($post->adoption_post->description),100) !!}</p>
                
                <!-- Profile -->
                <div class="flex flex-row">
                    <div class="w-[3.2vw] h-[3.2vw] bg-white border-4 border-greentua rounded-full flex justify-center items-center">
                        <img src="{{ asset('images/after login.svg') }}" alt="Profile Owner">
                    </div>
                    <p class="mx-[0.5vw] mt-[0.5vw] font-overpass font-semibold text-xl">{{ $post->adoption_post->user->username }}</p>
                    <p class="mt-[0.5vw] ml-auto px-[0.5vw] font-montserrat_alt font-semibold"><i class="fa-solid fa-location-dot fa-xs" style="color: #cc4b4b;"></i> {{ Str::limit($post->adoption_post->location,8) }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>