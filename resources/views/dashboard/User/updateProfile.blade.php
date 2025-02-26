<x-dashboard.layout>
    <!-- bagian kanan sidebar -->
    <div class="flex-1 px-[2.8vw]">
        <!-- My Profile -->
        <div class="mt-[1.6vw] items-center mb-[1.4vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">My Profile</p>
            <p class="text-black font-normal text-[1.3vw] font-overpass tracking-wide">manage your information wisely</p>
        </div>            

        <form action="/dashboard/{{ auth()->user()->username }}/profile" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <!-- Profile Picture -->
            <div class="flex flex-col items-center space-y-[0.5vw]">
                <img src="{{ asset('images/after login.svg') }}" id="profile-picture" alt="Profile Picture" class="w-28 h-28 rounded-full object-cover border-[0.1vw] border-gray-300">
                <div class="flex space-x-[1vw] text-black/50 text-[1vw] font-semibold font-open_sans tracking-wide">
                    <label for="image" class="bg-white border border-gray-400 p-[0.5vw] px-[1vw] cursor-pointer">Change Profile Image</label>
                    <input type="file" id="image" name="image" class="hidden" onchange="previewProfile()">
                </div>
                <!-- details -->
                <div class="text-black/50 font-semibold font-open_sans tracking-wide text-[0.8vw] text-center justify-center mb-[0.2vw]">
                    <p class="text-[0.8vw]">Max size: 1MB</p>
                    <p class="text-[0.8vw]">Format: .png, .jpg, .jpeg</p>
                </div>
            </div>
        
            <!-- Form Fields -->
            <div class="mt-[1.6vw] space-y-[1vw]">
                <!-- Username -->
                <div>
                    <label class="text-block text-[1.3vw] font-semibold text-black font-montserrat_alt tracking-wide">Username</label>
                    <input type="text" value="{{ $user->username }}" name="username" class="mt-[0.2vw] w-full px-[0.8vw] py-[0.3vw] border border-gray-300 rounded-[0.5vw] tracking-wide text-[1.2vw] text-black/40 focus:outline-none focus:ring focus:ring-greentipis">
                    @error('username')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
        
                <!-- Email -->
                <div>
                    <label class="text-block text-[1.3vw] font-semibold text-black font-montserrat_alt tracking-wide">Email</label>
                    <input type="email" value="{{ $user->email }}" name="email" class="mt-[0.2vw] w-full px-[0.8vw] py-[0.3vw] border border-gray-300 rounded-[0.5vw] tracking-wide text-[1.2vw] text-black/40 focus:outline-none focus:ring focus:ring-greentipis">
                    @error('email')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
        
                <!-- Phone Number -->
                <div>
                    <label class="text-block text-[1.3vw] font-semibold text-black font-montserrat_alt tracking-wide">Phone Number</label>
                    <div class="flex items-center border border-gray-300 rounded-[0.5vw] mt-[0.2vw]">
                        <span class="px-3 text-black">+62</span>
                        <input type="text" value="{{ $user->phone_number }}" name="phone_number" class="w-full px-[0.8vw] py-[0.3vw] focus:outline-none text-black/40 focus:ring focus:ring-greentipis rounded-[0.5vw]">
                    </div>
                    @error('phone_number')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
        
                <!-- Address -->
                <div>
                    <label class="text-block text-[1.3vw] font-semibold text-black font-montserrat_alt tracking-wide">Address</label>
                    <input type="text" value="{{ $user->address }}" name="address" class="mt-[0.2vw] w-full px-[0.8vw] py-[0.3vw] border border-gray-300 rounded-[0.5vw] tracking-wide text-[1.2vw] text-black/40 focus:outline-none focus:ring focus:ring-greentipis">
                    @error('address')
                        <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        
            <!-- save -->
            <div class="mt-6">
                <button id="next" type="submit" class="bg-greentipis rounded-[0.5vw] text-white text-[1.3vw] font-bold font-montserrat_alt px-[0.8vw] py-[0.25vw] tracking-widest hover:bg-greenpetify transition duration-300">Save</button>
            </div>
        </form>

        
    </div>
    <!-- sidebar kanan end -->
</x-dashboard.layout>

<script>
    function previewProfile(){
        const fileInput = document.getElementById('image');
        const file = fileInput.files[0];

        const reader = new FileReader();

        reader.onload= function (e) {
            const profile = document.getElementById('profile-picture');
            profile.src = e.target.result;
        }

        reader.readAsDataURL(file);
    }
</script>