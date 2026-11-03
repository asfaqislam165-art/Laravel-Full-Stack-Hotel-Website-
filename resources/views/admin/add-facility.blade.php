<x-app-layout>
    <div class="bg-black text-white min-h-screen py-10">
        <div class="max-w-3xl mx-auto px-4 bg-stone-900 p-8 rounded-2xl border-none shadow-xl">
            <h2 class="text-2xl font-bold mb-6 text-amber-400">Add Hotel Facility</h2>
            <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-stone-300">Facility Name</label>
                    <input type="text" name="name" required class="w-full bg-stone-800 border-none text-white rounded-xl p-3 mt-1">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-stone-300">Description</label>
                    <textarea name="description" rows="3" required class="w-full bg-stone-800 border-none text-white rounded-xl p-3 mt-1"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-stone-300">Facility Image</label>
                    <input type="file" name="image" class="mt-2 text-stone-400">
                </div>
                <button type="submit" class="w-full bg-amber-400 text-black font-bold py-3 rounded-xl hover:bg-amber-300">Save Facility</button>
            </form>
        </div>
    </div>
</x-app-layout>