<x-layout>
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain" style="background-image: url(../src/images/form-bg.png)">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-greenpetify">Adoption Post</h2>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-24 mt-16">
            <form action="/adoptions" method="post" enctype="multipart/form-data" id="createForm">
                @csrf
                @if ($pet)
                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                @endif
                <div class="grid gap-6 mb-6 md:grid-cols-2 font-open_sans">
                    <!-- Name -->
                    <div>
                        {{-- @php
                            dd($pet->name);
                        @endphp --}}
                        <label for="name" class="block mb-2 text-lg font-semibold">Name of your Pet</label>
        
                        <input type="text" id="name" name="name" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Name..." value="{{ old('name') ?? ($pet ? $pet->name : '') }}" required />
                        @error('name')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div>
                        <label for="slug" class="block mb-2 text-lg font-semibold">Slug</label>
                        <input type="text" id="slug" name="slug" class="bg-gray-100 border border-gray-400 text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Slug..." value="{{ old('slug') ?? ($pet ? str_replace(' ', '-', $pet->name) : '') }}" readonly />
                        @error('slug')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-4 font-open_sans">
                    <!-- Breed -->
                    <div>
                        <label for="breed" class="block mb-2 text-lg font-semibold">Breed</label>
                        <input type="text" id="breed" name="breed" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Breed..." value="{{ old('breed') ?? ($pet ? $pet->breed : '') }}" required />
                        @error('breed')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Age -->
                    <div>
                        <label for="age" class="block mb-2 text-lg font-semibold">Age</label>
                        <input type="number" id="age" name="age" step="0.01" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Age..." value="{{ old('age') }}" required />
                        @error('age')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Location -->
                    <div>
                        <label for="location" class="block mb-2 text-lg font-semibold">City</label>
                        <input type="text" id="location" name="location" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Location..." value="{{ old('location') }}" required />
                        @error('location')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    
                    <!-- Category Vaccinated -->
                    <div>
                        <label for="vaccinated" class="block mb-2 text-lg font-semibold">Vaccinated</label>
                        <div class="relative">
                            <select id="vaccinated" name="vaccinated" class="category appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-gray-400" required>
                                <option value="" disabled selected hidden>Select a category...</option>
                                @if (old('vaccinated') == "yes")
                                    <option value="yes" selected class="text-black">Yes</option>
                                @else
                                    <option value="yes" class="text-black">Yes</option>
                                @endif
                                
                                @if (old('vaccinated') == "no")
                                    <option value="no" selected class="text-black">No</option>
                                @else
                                    <option value="no" class="text-black">No</option>
                                @endif
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('vaccinated')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    
                    <!-- Weight -->
                    <div>
                        <label for="weight" class="block mb-2 text-lg font-semibold">Weight (Kg)</label>
                        <input type="number" id="weight" name="weight" step="0.01" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Weight..." value="{{ old('weight') }}" required />
                        @error('weight')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Category Gender -->
                    <div>
                        <label for="gender" class="block mb-2 text-lg font-semibold">Gender</label>
                        <div class="relative">
                            <select id="gender" name="gender" class="category appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-black" required>
                                <option value="" disabled selected hidden>Select a category...</option>
                                @if ($pet)
                                    @if ($pet->gender == "Male")
                                        <option value="male" selected class="text-black">Male</option>
                                    @else
                                        <option value="male" class="text-black">Male</option>
                                    @endif
                                    
                                    @if ($pet->gender == "Female")
                                        <option value="female" selected class="text-black">Female</option>
                                    @else
                                        <option value="female" class="text-black">Female</option>
                                    @endif
                                @else    
                                    @if (old('gender') == "male")
                                        <option value="male" selected class="text-black">Male</option>
                                    @else
                                        <option value="male" class="text-black">Male</option>
                                    @endif
                                    
                                    @if (old('gender') == "female")
                                        <option value="female" selected class="text-black">Female</option>
                                    @else
                                        <option value="female" class="text-black">Female</option>
                                    @endif
                                @endif
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('gender')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Category Pet -->
                    <div>
                        <label for="pet_category_id" class="block mb-2 text-lg font-semibold">Pet Category</label>
                        <div class="relative">
                            <select id="pet_category_id" name="pet_category_id" class="category appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-black" required>
                                <option value="" disabled selected hidden>Select a category...</option>
                                @foreach ($categories as $category)
                                    @if ($pet)
                                        @if ($pet->pet_category_id == $category->id)
                                            <option value="{{ $category->id }}" selected class="text-black">{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}" class="text-black">{{ $category->name }}</option>
                                        @endif
                                    @else
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected class="text-black">{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}" class="text-black">{{ $category->name }}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('pet_category_id')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    
                </div>
                
                <!-- Attach Picture -->
                <div class="mb-6">
                    <label for="images" class="block mb-3 text-lg font-semibold w-fit">
                        Attach pictures of your pet here
                    </label>
                    <div class="flex flex-col items-center justify-center w-full">
                        <label for="images" class="flex flex-col items-center justify-center w-full min-h-[20vw] p-[2vw] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                            <div id="img-text" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="font-semibold">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 1 MB each)</p>
                            </div>
                            <div id="img-preview-container" class="flex flex-wrap gap-3">
                            </div>
                            <input id="images" name="images[]" type="file" class="hidden" multiple onchange="previewImages()" value="{{ old('images[]') }}"/>
                        </label>
                    </div>

                    @error('images')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block mb-2 text-lg font-semibold">Add Description</label>
                    <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                    <trix-editor input="description" class="h-[250px] overflow-auto scrollbar-thin"></trix-editor>
    
                    @error('description')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Requirement Criteria -->
                <div class="mb-6">
                    <label for="requirement" class="block mb-2 text-lg font-semibold">Add Requirement Criteria (Optional)</label>
                    <input id="requirement" type="hidden" name="requirement" value="{{ old('requirement') }}">
                    <trix-editor input="requirement" class="h-[250px] overflow-auto scrollbar-thin"></trix-editor>
    
                    @error('requirement')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Button Post -->
                <button type="submit" class="inline-flex items-center px-3 py-2.5 text-lg font-semibold font-overpass text-center text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out">Create Post</button>
            </form>
        </div>
    </div>
    <!-- Adoption Post Container End -->
</x-layout>

<script>
    const name = document.getElementById('name');
    const slug = document.getElementById('slug');

    if(name){
        fetch('/adoptions/createSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    }
    
    name.addEventListener('input',function() {
        fetch('/adoptions/createSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    });

    const uploadedFiles = []; // Array untung mengatur file yang diupload

    function previewImages() {
        const fileInput = document.getElementById('images');
        const imgText = document.getElementById('img-text');
        const previewContainer = document.getElementById('img-preview-container');
        const files = Array.from(fileInput.files); // Mengubah FileList menjadi Array

        // imgText.classList.remove('flex')
        // imgText.classList.add('hidden')

        // Loop semua file
        files.forEach((file) => {
            // Cek apakah file tersebut sudah ada sebelumnya
            if (uploadedFiles.some((uploadedFile) => uploadedFile.name === file.name)) {
                alert(`The file "${file.name}" is already uploaded.`);
                return;
            }

            // Hanya boleh 3 foto yang diupload
            if (uploadedFiles.length >= 3) {
                alert('You can only upload up to 3 pictures.');
                return;
            }
            
            // Tambahkan file ke array 
            uploadedFiles.push(file);

            // Membuat Preview dari File image
            const reader = new FileReader();

            reader.onload = function (e) {
                const previewDiv = document.createElement('div');
                previewDiv.className = 'relative inline-block';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid w-auto w-[40vw] h-[10vw] mb-3 object-cover'; 
                img.alt = file.name;

                // Remove Button untuk menghapus file yang tidak diinginkan
                const removeBtn = document.createElement('button');
                removeBtn.className = 'absolute top-0 right-0 bg-red-500 text-white px-2 py-1';
                removeBtn.textContent = 'X';
                removeBtn.onclick = () => {
                    const index = uploadedFiles.findIndex((uploadedFile) => uploadedFile.name === file.name);
                    if (index > -1) {
                        uploadedFiles.splice(index, 1);
                    }

                    if(uploadedFiles.length == 0){
                        imgText.style.display = "flex"
                    }

                    previewDiv.remove();
                };

                previewDiv.appendChild(img);
                previewDiv.appendChild(removeBtn);
                previewContainer.appendChild(previewDiv);
            };

            reader.readAsDataURL(file);

            if(uploadedFiles.length > 0){
                imgText.style.display = "none";
            }
        });
    }



    const categories = document.querySelectorAll('.category');

    categories.forEach((selectElement) => {
        // Tambahkan event listener untuk mengatur warna teks saat ada perubahan
        selectElement.addEventListener('change', function () {
            if (this.value === "") {
                this.classList.add('text-gray-400');
                this.classList.remove('text-black');
            } else {
                this.classList.remove('text-gray-400');
                this.classList.add('text-black');
            }
        });
    });

    document.addEventListener("trix-change", function(event) {
        const targetEditor = event.target;
        const inputId = targetEditor.getAttribute("input"); // Ambil atribut input
        const inputElement = document.querySelector(`#${inputId}`);
        if (inputElement) {
            inputElement.value = targetEditor.editor.getHTML() // Ambil teks dari editor
        }
    });


    document.addEventListener("trix-action-invoke", function(event) {
            var button = event.target;
            var attribute = button.getAttribute("data-trix-attribute");
            if (attribute) {
                event.target.editor.activateAttribute(attribute);
            }
        });
</script>


