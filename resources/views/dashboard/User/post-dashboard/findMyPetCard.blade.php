<div class="bg-white shadow-md rounded-[0.8vw] p-[1vw] relative">
    <!-- Image & Details -->
    <div class="flex flex-col md:flex-row gap-[1.2vw] ">     
            <!-- Pet Image -->
            <img class="w-[20vw]" src="{{ asset('storage/' . $post->image) }}" alt="Missing Dog" />    

            <!-- Pet Details -->
            <div class="flex-1 pt-[0.35vw] ">
                <span class="bg-{{$post->pet_category->color}} text-white text-[1vw]  font-semibold font-montserrat_alt px-[1vw]  py-[0.5vw]  rounded-[0.8vw] ">Dog</span>
                <div class="text-black text-[0.9vw]  font-semibold font-overpass tracking-wide gap-x-[1vw]  mt-[1vw]">
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

            <!-- Share Button -->
            <div class="cursor-pointer">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.61 21C15.9473 21 15.385 20.7683 14.923 20.305C14.4617 19.841 14.231 19.2777 14.231 18.615C14.231 18.515 14.275 18.2627 14.363 17.858L7.166 13.585C6.95 13.8343 6.68567 14.03 6.373 14.172C6.06033 14.314 5.72467 14.385 5.366 14.385C4.70867 14.385 4.15 14.151 3.69 13.683C3.23 13.215 3 12.654 3 12C3 11.346 3.23 10.785 3.69 10.317C4.15 9.849 4.70867 9.615 5.366 9.615C5.724 9.615 6.05967 9.686 6.373 9.828C6.68633 9.97 6.95067 10.166 7.166 10.416L14.364 6.161C14.3173 6.03167 14.2837 5.90333 14.263 5.776C14.2417 5.648 14.231 5.51733 14.231 5.384C14.231 4.722 14.4633 4.159 14.928 3.695C15.3927 3.23167 15.9567 3 16.62 3C17.2833 3 17.846 3.23233 18.308 3.697C18.77 4.16167 19.0007 4.72567 19 5.389C18.9993 6.05233 18.7677 6.615 18.305 7.077C17.8423 7.539 17.279 7.76967 16.615 7.769C16.2537 7.769 15.9203 7.695 15.615 7.547C15.3097 7.399 15.0497 7.2 14.835 6.95L7.636 11.223C7.68267 11.3523 7.71633 11.481 7.737 11.609C7.75833 11.7363 7.769 11.8667 7.769 12C7.769 12.1333 7.75833 12.2637 7.737 12.391C7.71567 12.5183 7.68233 12.647 7.637 12.777L14.835 17.05C15.0503 16.8 15.3103 16.601 15.615 16.453C15.9203 16.305 16.2537 16.231 16.615 16.231C17.2777 16.231 17.841 16.463 18.305 16.927C18.7683 17.3923 19 17.9567 19 18.62C19 19.2833 18.7677 19.846 18.303 20.308C17.8383 20.77 17.2733 21.0007 16.61 21Z" fill="black"/>
                </svg>
            </div>
    </div>
</div>