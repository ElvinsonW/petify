<x-dashboard.layout :user="$user">
    <div class="flex-1 px-[2.8vw] overflow-hidden min-h-screen flex flex-col">
        <!-- My Profile -->
        <div class="mt-[1.6vw] items-center mb-[1.4vw]">
            <!-- title -->
            <p class="text-greenpetify tracking-wide font-montserrat_alt text-[2vw] font-bold">Adoption Request Detail</p>
            <p class="text-black font-normal text-[1.3vw] font-overpass tracking-wide">Manage your information wisely</p>
        </div>        
        
        <div class="bg-white p-[2vw] rounded-lg shadow-lg flex-1 flex flex-col overflow-auto scrollbar-thin">
            
            <div class="mb-[2vw] flex flex-col gap-[0.5vw]">
                <a href="/adoptions/{{ $request->adoption_post->slug }}" class="font-bold text-[1.1vw]">Pet <span class="ml-[5.1vw]">: &nbsp;&nbsp;&nbsp; <span class="hover:text-greentua">{{ $request->adoption_post->name }}</span></span></a>
                <a href="/dashboard/{{ $request->user->username }}/posts?post=adoption" class="font-bold text-[1.1vw]">Request By  <span class="ml-[1vw]">: &nbsp;&nbsp;&nbsp; <span class="hover:text-greentua">{{ ucfirst($request->user->username) }}</span></span> </a>
                <p class="font-bold text-[1.1vw]">Trust Point <span class="ml-[1.1vw]">: &nbsp;&nbsp;&nbsp; <span>{{ ucfirst($request->user->point) }}</span></span></p>
            </div>

            <div class="mb-[1.5vw]">
                <p class="font-bold text-gray-500 text-[1.2vw] mb-[1vw]">Do you have other pets at home? If yes, what pets are they and have they been vaccinated?</p>
                <textarea class="w-full border border-black p-[1vw] rounded-[1vw]" rows="5" disabled>{{ $request->Q1 }}</textarea>
            </div>

            <div class="mb-[1.5vw]">
                <p class="font-bold text-gray-500 text-[1.2vw] mb-[1vw]">What will you do with the pet when you travel or are away?</p>
                <textarea class="w-full border border-black p-[1vw] rounded-[1vw]" rows="5" disabled>{{ $request->Q2 }}</textarea>
            </div>

            <div class="mb-[1.5vw]">
                <p class="font-bold text-gray-500 text-[1.2vw] mb-[1vw]">Do you have any previous experience keeping animals?     </p>
                <textarea class="w-full border border-black p-[1vw] rounded-[1vw]" rows="5" disabled>{{ $request->Q3 }}</textarea>
            </div>

            <div class="mb-[1.5vw]">
                <p class="font-bold text-gray-500 text-[1.2vw] mb-[1vw]">Do you have a yard or outdoor space for animals? </p>
                <textarea class="w-full border border-black p-[1vw] rounded-[1vw]" rows="5" disabled>{{ $request->Q4 }}</textarea>
            </div>

            <div class="mb-[1.5vw]">
                <p class="font-bold text-gray-500 text-[1.2vw] mb-[1vw]">What’s your reason for adopting?  </p>
                <textarea class="w-full border border-black p-[1vw] rounded-[1vw]" rows="5" disabled>{{ $request->Q5 }}</textarea>
            </div>
        </div>

        
    </div>
</x-dashboard.layout>