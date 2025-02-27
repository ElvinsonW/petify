<x-layout>
    <!-- Missing Post Container Start -->
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/form-bg.png)">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-green">Missing Post</h2>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-24 mt-16">
            <!-- Form untuk Mengirim Data -->
            <form action="{{ route('find-my-pet.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Pesan Error jika Ada -->
                @if($errors->any())
                    <div class="bg-red-500 text-white p-3 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

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
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Name of your pet..." required />
                    </div>

                    <!-- Breed -->
                    <div>
                        <label for="breed" class="block mb-2 text-lg font-semibold">Breed</label>
                        <input type="text" id="breed" name="breed" value="{{ old('breed') }}" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Breed..." required />
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-4 font-open_sans">
                    <!-- Last Seen -->
                    <div>
                        <label for="last_seen" class="block mb-2 text-lg font-semibold">Last Seen</label>
                        <input type="text" id="last_seen" name="last_seen" value="{{ old('last_seen') }}" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Last seen..." required />
                    </div>
                    
                    <!-- Date Lost -->
                    <div>
                        <label for="date_lost" class="block mb-2 text-lg font-semibold">Date Lost</label>
                        <input type="date" id="date_lost" name="date_lost" value="{{ old('date_lost') }}" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required />
                    </div>
                    
                    <!-- Color -->
                    <div>
                        <label for="color" class="block mb-2 text-lg font-semibold">Color</label>
                        <input type="text" id="color" name="color" value="{{ old('color') }}" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Color..." required />
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block mb-2 text-lg font-semibold">Gender</label>
                        <select id="gender" name="gender" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" required>
                            <option value="" disabled selected hidden>Select gender...</option>
                            <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                            <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                        </select>
                    </div>

                    <!-- Pet Category -->
                    <div>
                        <label for="pet_category_id" class="block mb-2 text-lg font-semibold">Pet Category</label>
                        <div class="relative">
                            <select id="pet_category_id" name="pet_category_id" class="category appearance-none bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-gray-400" required>
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
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Color & Tag -->
                    <div>
                        <label for="color_tag" class="block mb-2 text-lg font-semibold">Color & Tag</label>
                        <div class="relative">
                            <select id="color_tag" name="color_tag" class="category appearance-none bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-gray-400" required>
                                <option value="" disabled selected hidden>Select color & tag...</option>
                                <option value="yes" class="text-black">Yes</option>
                                <option value="no" class="text-black">No</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Attach Picture -->
                    <div>
                        <label for="attach" class="block mb-2 text-lg font-semibold">Attach picture of your pet here (Max: 1mb)</label>
                        <input id="attach" type="file" name="attach" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none cursor-pointer" required />
                    </div>
                </div>

                <!-- City -->
                <div>
                    <label for="city" class="block mb-2 text-lg font-semibold">City</label>
                    <input type="text" id="city" name="city" value="{{ old('city') }}" class="bg-gray-50 border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="City..." required />
                </div>

                <!-- Any Information -->
                <label for="description" class="block mb-2 text-lg font-semibold">Any Information?</label>
                <div class="w-full my-5 border-gray-300 border-2 rounded-lg bg-gray-50">
                    <div class="px-4 py-2 bg-white rounded-b-lg">
                        <textarea id="description" name="description" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:outline-none" placeholder="Write a description about your pet here..." required>{{ old('description') }}</textarea>
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
