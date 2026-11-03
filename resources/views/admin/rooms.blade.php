<x-app-layout>
    <div class="bg-black text-white min-h-screen py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-amber-400">Manage Hotel Rooms</h2>
                <a href="{{ route('admin.rooms.create') }}" class="bg-amber-400 text-black px-4 py-2 rounded-xl font-bold text-sm hover:bg-amber-300">Add New Room</a>
            </div>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
            @if (session('status'))
                <div class="mb-4 p-4 bg-stone-800 text-amber-400 rounded-xl border-none">{{ session('status') }}</div>
            @endif

            <div class="bg-stone-900 rounded-2xl overflow-hidden border-none shadow-xl p-6">
                <table class="w-full text-left text-sm text-white">
                    <thead class="bg-stone-800 text-stone-400 uppercase text-xs">
                        <tr>
                            <th class="p-4">Photo</th>
                            <th class="p-4">Room No</th>
                            <th class="p-4">Type</th>
                            <th class="p-4">Price / Night</th>
                            <th class="p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-800">
                        @foreach ($rooms as $room)
                            <tr>
                                <td class="p-4">
                                    @if($room->image)
                                        <img src="{{ asset('img/'.$room->image) }}" class="w-12 h-12 object-cover rounded-xl">
                                    @else
                                        <span class="text-stone-500">N/A</span>
                                    @endif
                                </td>
                                <td class="p-4 font-bold text-white">{{ $room->room_number }}</td>
                                <td class="p-4 text-amber-400 font-semibold">{{ $room->room_type }}</td>
                                <td class="p-4 font-bold">${{ $room->price_per_night }}</td>
                                <td class="p-4 space-x-3">
                                    <a href="{{ route('admin.rooms.destroy', $room->id) }}" onclick="return confirm('Delete room?');" class="text-red-400 font-bold hover:underline"><i class="fa-solid fa-trash"></i> Delete</a>
                                    <a href="{{ route('admin.rooms.edit', $room->id) }}" class="text-amber-400 font-bold hover:underline"><i class="fa-solid fa-square-pen"></i> Edit </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>