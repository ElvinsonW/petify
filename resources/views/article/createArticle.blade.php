<x-layout>
    <div class="w-full mt-10 mb-32 bg-no-repeat bg-center bg-contain">
        <!-- Judul Page -->
        <div class="text-center">
            <h2 class="text-6xl font-montserrat_alt font-bold text-greentua">Article Post</h2>
        </div>

        <!-- Container Pertanyaan -->  
        <div class="mx-24 mt-16">
            <form action="/articles" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-6 mb-6 font-open_sans">
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Title -->
                        <div>
                            <label for="title" class="block mb-2 text-lg font-semibold w-fit">Title of the Article</label>
                            <input type="text" id="title" name="title" class="border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none" placeholder="Title..." value="{{ old('title') }}" required/>
                        
                            @error('title')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Category Article -->
                        <div>
                            <label for="category_id" class="block mb-2 text-lg font-semibold w-fit">Article Category</label>
                            <div class="relative">
                                <select id="article_category_id" name="article_category_id" class="category appearance-none border border-black text-sm rounded-lg block w-full p-2.5 focus:outline-none pr-10 text-gray-400" required>
                                    <option value="" disabled selected hidden>Select a category...</option>
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
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

                            @error('category_id')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="w-[calc(50%-12px)]">
                        <label for="slug" class="block mb-2 text-lg font-semibold w-fit">Slug</label>
                        <input type="text" id="slug" name="slug" class="bg-gray-100 border border-gray-400 text-sm rounded-lg block w-full p-2.5 focus:outline-none cursor-pointer" placeholder="petify-articles" value="{{ old('slug') }}" readonly/>
                    
                        @error('slug')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
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
    
                        @error('images')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="content" class="block mb-3 text-lg font-semibold w-fit">Content</label>
                     
                        <input id="content" type="hidden" name="content" value="{{ old('content') }}" required>
                        <trix-editor input="content" class="h-[250px]"></trix-editor>
        
                        @error('content')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>      
                
                <!-- Button Post -->
                <button type="submit" class="mt-5 inline-flex items-center px-3 py-2.5 text-lg font-semibold font-overpass text-center text-white bg-orenmuda rounded-2xl shadow-lg transform hover:scale-95 hover:bg-orange-400 transition duration-300 ease-in-out">Create Post</button>
            
            </form>
        </div>
    </div>
</x-layout>

<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');
    
    title.addEventListener('change',function() {
        fetch('/articles/createSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    });

    function previewImage() {
        const fileInput = document.getElementById('image');
        const imgText = document.getElementById('img-text');
        const previewContainer = document.getElementById('img-preview-container');
        const file = fileInput.files[0];

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
                    imgText.style.display = "flex"
                };

                previewDiv.appendChild(img);
                previewDiv.appendChild(removeBtn);
                previewContainer.appendChild(previewDiv);
            };

            reader.readAsDataURL(file);
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
</script>