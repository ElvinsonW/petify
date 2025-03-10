<div class="bg-white shadow-md rounded-[0.8vw] p-[1vw] relative">
    <!-- Image & Details -->
    <div class="flex flex-col md:flex-row gap-[1.2vw] ">     
            <!-- Pet Image -->
            <img class="[27vw] h-[17vw] rounded-[0.6vw] object-cover" src="{{ asset('storage/' . $post->image) }}" alt="Missing Dog" />    

            <!-- Pet Details -->
            <div class="flex-1 pt-[0.35vw] ">
                <div class="flex justify-between">
                    <!-- Category -->
                    <span class="bg-{{$post->pet_category->color}} text-white text-[1vw]  font-semibold font-montserrat_alt px-[1vw]  py-[0.5vw]  rounded-[0.8vw] ">Dog</span>
                    
                    <!-- dusbin -->
                    <div class="p-[1vw] rounded-md flex items-center justify-center w-[2.2vw] h-[2.2vw]">
                        <form action="{{ route('find-my-pets.destroy', ['find_my_pet' => $post->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-transparent border-none cursor-pointer">
                                <i class="fa-solid fa-trash text-red-700 text-[1.15vw]"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-black tab text-[0.9vw] !font-semibold font-overpass !tracking-wide gap-x-[1vw] mt-[1vw] grid grid-cols-2 space-y-[0.2vw]">
                    <p>Name</p> <p>: {{ ucfirst($post->name) }}</p>
                    <p>Breed</p> <p>: {{ ucfirst($post->breed) }}</p>
                    <p>Color</p> <p>: {{ ucfirst($post->color) }}</p>
                    <p>Last Seen</p> <p>: {{ ucfirst($post->last_seen) }}</p>
                    <p>Collar & Tag</p> <p>: {{ ucfirst($post->color_tag) }}</p>
                    <p>Date Lost</p> <p>: {{ \Carbon\Carbon::parse($post->date_lost)->format('d F Y') }}</p>
                    <p>Gender</p> <p>: {{ ucfirst($post->gender) }}</p>
                    <p>City</p> <p>: {{ ucfirst($post->city)}}</p>
                </div>
            </div>
    </div>
</div>