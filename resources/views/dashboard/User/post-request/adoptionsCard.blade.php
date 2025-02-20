<!-- Table -->
<div class="bg-white p-[2vw] rounded-lg shadow-lg flex-1 flex flex-col overflow-hidden">
    <!-- Table Header -->
    <div class="grid font-bold text-[1.2vw] border-b pb-[1vw] font-overpass text-gray-500 gap-[1vw]"
    style="grid-template-columns: 5% 10% 25% 15% 10% 10% 15%;">
        <p>ID</p>
        <p>Requester</p>
        <p>Pet Name</p>
        <p>Pet Category</p>
        <p>Age</p>
        <p>Vaccinated</p>
        <p>Action</p>
    </div>

    <!-- Table Rows -->
    <div class="divide-y divide-gray-300 overflow-y-auto overflow-x-clip scroll-m-0 flex-1">
        @foreach ($requests as $request)
            <div class="grid py-[0.5vw] items-center text-[1.2vw] font-bold font-overpass text-black gap-[1vw]"
            style="grid-template-columns: 5% 10% 25% 15% 10% 10% 15%;">
                <p>{{ $request->id }}</p>
                <p>{{ $request->user->username }}</p>
                <p>{{ $request->name }}</p>
                <span class="bg-{{ $request->pet_category->color }} text-white text-[1vw] font-semibold font-montserrat_alt px-[1vw] py-[0.5vw] rounded-xl w-fit text-center">
                    {{ $request->pet_category->name }}
                </span>
                <p>{{ $request->age }} year</p>
                <p>{{ $request->vaccinated  ? "Yes" : "No" }}</p>
                <p class="{{ $request->approval_status === "Accepted" ? 'text-green-500' : '' }} {{ $request->approval_status === "Rejected" ? 'text-red-500' : '' }}">{{ $request->approval_status }}</p>
            </div>
        @endforeach
    </div>
</div>