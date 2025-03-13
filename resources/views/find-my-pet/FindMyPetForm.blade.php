<x-layout>
    <!-- Missing Post Container Start -->
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/form-bg.png)">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-greenpetify">Missing Post</h2>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-24 mt-16">
            <!-- Form untuk Mengirim Data -->
            <form action="/find-my-pets" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Pesan Sukses -->
                @if(session('success'))
                    <div class="bg-green-500 text-white p-3 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid gap-6 mb-6 md:grid-cols-2 font-open_sans">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-2 text-lg font-semibold">Name of your Pet</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Name of your pet..." required />
                    </div>

                    <!-- Breed -->
                    <div>
                        <label for="breed" class="block mb-2 text-lg font-semibold">Breed</label>
                        <input type="text" id="breed" name="breed" value="{{ old('breed') }}" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Breed..." required />
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-4 font-open_sans">
                    <!-- Last Seen -->
                    <div>
                        <label for="last_seen" class="block mb-2 text-lg font-semibold">Last Seen</label>
                        <input type="text" id="last_seen" name="last_seen" value="{{ old('last_seen') }}" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Last seen..." required />
                    </div>
                    
                    <!-- Date Lost -->
                    <div>
                        <label for="date_lost" class="block mb-2 text-lg font-semibold">Date Lost</label>
                        <input type="date" id="date_lost" name="date_lost" value="{{ old('date_lost') }}" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>
                    
                    <!-- Color -->
                    <div>
                        <label for="color" class="block mb-2 text-lg font-semibold">Color</label>
                        <input type="text" id="color" name="color" value="{{ old('color') }}" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Color..." required />
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block mb-2 text-lg font-semibold">Gender</label>
                        <div class="relative">
                            <select id="gender" name="gender" class="appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" required>
                                <option value="" disabled selected hidden>Select gender...</option>
                                <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                                <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Pet Category -->
                    <div>
                        <label for="pet_category_id" class="block mb-2 text-lg font-semibold">Pet Category</label>
                        <div class="relative">
                            <select id="pet_category_id" name="pet_category_id" class="category appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-black" required>
                                <option value="" disabled selected hidden>Select a category...</option>
                                @foreach ($categories as $category)
                                    @if (old('pet_category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected class="text-black">{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}" class="text-black">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Color & Tag -->
                    <div>
                        <label for="color_tag" class="block mb-2 text-lg font-semibold">Color & Tag</label>
                        <div class="relative">
                            <select id="color_tag" name="color_tag" class="category appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-black" required>
                                <option value="" disabled selected hidden>Select color & tag...</option>
                                @if (old('color_tag') == "yes")
                                    <option value="yes" class="text-black" selected>Yes</option>
                                @else           
                                    <option value="yes" class="text-black">Yes</option>
                                @endif

                                @if (old('color_tag') == "no")
                                    <option value="no" class="text-black" selected>No</option>
                                @else           
                                    <option value="no" class="text-black">No</option>
                                @endif
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <!-- City -->
                    <div>
                        <label for="city" class="block mb-2 text-lg font-semibold">City</label>
                        <input type="text" id="city" name="city" value="{{ old('city') }}" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="City..." required />
                    </div>
                </div>

                <!-- Attach Picture -->
                    
                <div class="mb-6">
                    <label for="images" class="block mb-3 text-lg font-semibold w-fit">
                        Attach pictures of your pet here
                    </label>
                    <div class="flex flex-col items-center justify-center w-full">
                        <label for="image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                            <div id="img-text" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="font-semibold">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 1 MB each)</p>
                            </div>
                            <div id="img-preview-container" class="flex flex-wrap gap-3"></div>
                            <input id="image" name="image" type="file" class="hidden" onchange="previewImage()"/>
                        </label>
                    </div>

                    @error('image')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <!-- Any Information -->
                <label for="description" class="block mb-2 text-lg font-semibold">Any Information?</label>
                <div class="w-full my-5 border border-black rounded-lg">
                    <div class="px-4 py-2 rounded-b-lg">
                        <textarea id="description" name="description" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white focus:outline-none" placeholder="Write a description about your pet here..." required>{{ old('description') }}</textarea>
                    </div>
                </div>

                <!-- Button Post -->
                <button type="submit" class="inline-flex items-center px-3 py-2.5 text-lg font-semibold font-overpass text-center text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out">
                    Post
                </button>
            </form>
        </div>
    </div>
    <!-- Missing Post Container End -->
</x-layout>

<script>
    function previewImage() {
        const fileInput = document.getElementById('image');
        const imgText = document.getElementById('img-text');
        const previewContainer = document.getElementById('img-preview-container');
        const file = fileInput.files[0];

        previewContainer.innerHTML = '';

        imgText.style.display = "none";

            const reader = new FileReader();

            reader.onload = function (e) {
                const previewDiv = document.createElement('div');
                previewDiv.className = 'relative inline-block';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid w-auto h-[20vh] mb-3'; 
                img.alt = file.name;

                // Remove Button untuk menghapus file yang tidak diinginkan
                const removeBtn = document.createElement('button');
                removeBtn.className = 'absolute top-0 right-0 bg-red-500 text-white px-2 py-1';
                removeBtn.textContent = 'X';
                removeBtn.onclick = () => {
                    previewDiv.remove();
                    imgText.style.display = "flex";
                    fileInput.value = "";
                };

                previewDiv.appendChild(img);
                previewDiv.appendChild(removeBtn);
                previewContainer.appendChild(previewDiv);
            };

            reader.readAsDataURL(file);
    }
</script>