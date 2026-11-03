<x-app-layout>
    <head>
        <!-- FontAwesome 6.5.1 CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <div class="bg-black text-white min-h-screen py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <span class="text-amber-400 font-semibold tracking-widest uppercase text-xs">Admin Dashboard</span>
                    <h2 class="text-3xl font-black text-white tracking-tight mt-1">Manage Hotel Amenities & Facilities</h2>
                </div>
                <a href="{{ route('admin.facilities.create') }}" class="bg-amber-400 text-black px-6 py-3 rounded-xl font-extrabold text-sm hover:bg-amber-300 transition shadow-lg flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Add Facility
                </a>
            </div>

            <!-- Status Message -->
            @if (session('status'))
                <div class="mb-6 p-4 bg-amber-400/10 border border-amber-400/30 text-amber-400 rounded-2xl font-bold text-sm flex items-center gap-2">
                    <i class="fa-solid fa-circle-check"></i> {{ session('status') }}
                </div>
            @endif

            <!-- Facilities Table Container -->
            <div class="bg-stone-900 rounded-3xl overflow-hidden border border-stone-800 shadow-2xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-white">
                        <thead class="bg-stone-800 text-stone-400 uppercase text-xs tracking-wider border-b border-stone-800">
                            <tr>
                                <th class="p-5">Image</th>
                                <th class="p-5">Name</th>
                                <th class="p-5">Description</th>
                                <th class="p-5 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-800">
                            @forelse ($facilities as $facility)
                                <tr class="hover:bg-stone-800/50 transition">
                                    <td class="p-5">
                                        @if($facility->image)
                                            <img src="{{ asset('img/'.$facility->image) }}" alt="{{ $facility->name }}" class="w-14 h-14 object-cover rounded-xl border border-stone-700 shadow-md">
                                        @else
                                            <div class="w-14 h-14 bg-stone-800 rounded-xl border border-stone-700 flex items-center justify-center text-stone-500 text-xs font-semibold">
                                                N/A
                                            </div>
                                        @endif
                                    </td>
                                    <td class="p-5 font-bold text-white text-base">{{ $facility->name }}</td>
                                    <td class="p-5 text-stone-400 text-sm max-w-xs truncate">
                                        {{ $facility->description }}
                                    </td>
                                    <td class="p-5 text-right">
                                        <div class="inline-flex items-center gap-4">
                                            <!-- Edit Button -->
                                            <a href="{{ route('admin.facilities.edit', $facility->id) }}" class="text-amber-400 font-semibold hover:text-amber-300 transition inline-flex items-center gap-1.5"> 
                                                <i class="fa-solid fa-square-pen"></i> Edit
                                            </a>

                                            <!-- Delete Button / Form -->
                                            <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this facility?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-400 font-semibold hover:text-red-300 transition inline-flex items-center gap-1.5 bg-transparent border-none cursor-pointer">
                                                    Delete <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="p-8 text-center text-stone-500">
                                        No facilities found. Click "Add Facility" to create one.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>