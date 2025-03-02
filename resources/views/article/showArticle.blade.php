<x-layout>
    <div>
        <!-- Image -->
        <div class="w-full">
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image ) }}" alt="Article Picture" class="w-full h-[70vh] object-cover">
            @else
                <img src="{{ asset('images/article Cat Detail.svg') }}" alt="Cat Article" class="w-full h-[70vh] object-cover">
            @endif
        </div>
    
        <!-- Article Container -->
        <div class="max-w-6xl mx-auto px-6 lg:px-0 mt-8 mb-36">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Sidebar: Writer Info -->
                <div class="w-full md:w-1/4">
                    <!-- writer -->
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold mb-2 font-montserrat_alt text-greenpetify">Writer</p>
                    <a class="text-xl sm:text-2xl lg:text-3xl font-bold mb-4 font-overpass" href="/dashboard/{{ $article->user->username }}/posts?post=adoption">{{ $article->user->name }} - ({{ $article->user->username }})</a>
                    <!-- date -->
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold mb-2 font-montserrat_alt text-greenpetify">Date</p>
                    <p class="text-xl sm:text-2xl lg:text-3xl font-bold mb-4 font-overpass">11 Jan 2024</p>
                    <!-- media social -->
                    <p class="text-lg sm:text-xl lg:text-2xl font-bold mb-2 font-montserrat_alt text-greenpetify">Media Social</p>
                    <div class="flex flex-col sm:flex-col text-xl font-bold font-overpass">
                        <a href="#" class="hover:text-blue-700 transition flex items-center mb-3">
                            <i class="fa-brands fa-facebook mr-4 text-2xl sm:text-3xl"></i>Facebook
                        </a>
                        <a href="#" class="hover:text-red-500 transition flex items-center mb-3">
                            <i class="fa-brands fa-instagram mr-4 text-2xl sm:text-3xl"></i>Instagram
                        </a>
                        <a href="#" class="hover:text-blue-500 transition flex items-center mb-3">
                            <i class="fa-brands fa-twitter mr-4 text-2xl sm:text-3xl"></i>Twitter
                        </a>
                    </div>
                </div>
    
                <!-- Content of article -->
                <div class="w-full md:w-3/4 font-overpass tracking-tight text-justify">
                    <!-- Title -->
                    <p class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                        {{ $article->title }}
                    </p>
    
                    <!-- isi -->
                    <div class="text-base md:text-xl leading-relaxed mb-6">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>