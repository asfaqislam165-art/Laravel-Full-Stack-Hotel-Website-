<x-app-layout>
    <div class="bg-black text-white min-h-screen py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-8 text-amber-400">Hotel Executive Control Dashboard</h2>

            <!-- Metric Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-stone-900 p-6 rounded-2xl border-none shadow-xl">
                    <p class="text-xs uppercase tracking-wider text-stone-400 font-bold">Total Suites & Rooms</p>
                    <p class="text-4xl font-extrabold text-white mt-2">{{ $roomCount ?? 0 }}</p>
                </div>
                <div class="bg-stone-900 p-6 rounded-2xl border-none shadow-xl">
                    <p class="text-xs uppercase tracking-wider text-stone-400 font-bold">Amenities & Facilities</p>
                    <p class="text-4xl font-extrabold text-white mt-2">{{ $facilityCount ?? 0 }}</p>
                </div>
                <div class="bg-stone-900 p-6 rounded-2xl border-none shadow-xl">
                    <p class="text-xs uppercase tracking-wider text-stone-400 font-bold">Total Reservations</p>
                    <p class="text-4xl font-extrabold text-amber-400 mt-2">{{ $bookingCount ?? 0 }}</p>
                </div>
                <div class="bg-stone-900 p-6 rounded-2xl border-none shadow-xl">
                    <p class="text-xs uppercase tracking-wider text-stone-400 font-bold">Registered Guests</p>
                    <p class="text-4xl font-extrabold text-white mt-2">{{ $userCount ?? 0 }}</p>
                </div>
            </div>

            <div class="bg-stone-900 p-8 rounded-2xl border-none shadow-xl">
                <h3 class="text-xl font-bold text-white">Welcome back, Admin {{ Auth::user()->name }}</h3>
                <p class="mt-2 text-stone-400">Manage your hotel suites, exclusive guest amenities, and pending reservations seamlessly.</p>
            </div>
        </div>
    </div>
</x-app-layout>