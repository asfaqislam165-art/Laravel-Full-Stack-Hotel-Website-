<x-app-layout>
    <div class="bg-black text-white min-h-screen py-10">
        <div class="max-w-3xl mx-auto px-4 bg-stone-900 p-8 rounded-2xl border-none shadow-xl">
            <h2 class="text-2xl font-bold mb-6 text-amber-400">Update Room & Suite</h2>
            
            <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-stone-300">Room Number</label>
                    <input type="text" name="room_number" value="{{ $room->room_number }}" required class="w-full bg-stone-800 border-none text-white rounded-xl p-3 mt-1">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-stone-300">Room Type</label>
                    <input type="text" name="room_type" value="{{ $room->room_type }}" required class="w-full bg-stone-800 border-none text-white rounded-xl p-3 mt-1">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-stone-300">Price Per Night ($)</label>
                    <input type="number" step="0.01" name="price_per_night" value="{{ $room->price_per_night }}" required class="w-full bg-stone-800 border-none text-white rounded-xl p-3 mt-1">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-stone-300">Description</label>
                    <textarea name="description" rows="3" class="w-full bg-stone-800 border-none text-white rounded-xl p-3 mt-1">{{ $room->description }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-stone-300">Current Image</label>
                    @if($room->image)
                        <img src="{{ asset('img/'.$room->image) }}" class="w-20 h-20 object-cover rounded-xl mt-2 mb-2">
                    @endif
                    <input type="file" name="image" class="mt-2 text-stone-400">
                </div>

                <button type="submit" class="w-full bg-amber-400 text-black font-bold py-3 rounded-xl hover:bg-amber-300 transition">Update Room</button>
            </form>
        </div>
    </div>
</x-app-layout>