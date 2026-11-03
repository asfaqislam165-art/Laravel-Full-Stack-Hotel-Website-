<x-app-layout>
    <div class="bg-black text-white min-h-screen py-10">
        <div class="max-w-7xl mx-auto px-4 bg-stone-900 p-8 rounded-2xl border-none shadow-xl">
            <h2 class="text-2xl font-bold mb-6 text-amber-400">Manage Hotel Reservations</h2>
            
            @if (session('status'))
                <div class="mb-4 p-4 bg-stone-800 text-amber-400 rounded-xl border-none">{{ session('status') }}</div>
            @endif

            <table class="w-full text-left text-sm text-white">
                <thead class="bg-stone-800 text-stone-400 uppercase text-xs">
                    <tr>
                        <th class="p-4">Guest</th>
                        <th class="p-4">Room Type</th>
                        <th class="p-4">Dates</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-800">
                    @foreach ($bookings as $b)
                        <tr>
                            <td class="p-4 font-bold">{{ $b->guest_name }}</td>
                            <td class="p-4 text-amber-400">{{ $b->room->room_type ?? 'N/A' }} (No. {{ $b->room->room_number ?? 'N/A' }})</td>
                            <td class="p-4">{{ $b->check_in }} to {{ $b->check_out }}</td>
                            <td class="p-4">
                                <span class="px-3 py-1 text-xs font-bold rounded-full 
                                    @if($b->status=='Approved') bg-green-900 text-green-300 
                                    @elseif($b->status=='Cancelled') bg-red-900 text-red-300 
                                    @else bg-amber-900 text-amber-300 @endif">
                                    {{ $b->status }}
                                </span>
                            </td>
                            <td class="p-4 space-x-2">
                                <form action="{{ route('admin.bookings.status', $b->id) }}" method="POST" class="inline">
                                    @csrf
                                    <select name="status" onchange="this.form.submit()" class="bg-stone-800 border-none text-white text-xs rounded-xl p-2">
                                        <option value="Pending" {{ $b->status=='Pending'?'selected':'' }}>Pending</option>
                                        <option value="Approved" {{ $b->status=='Approved'?'selected':'' }}>Approve</option>
                                        <option value="Cancelled" {{ $b->status=='Cancelled'?'selected':'' }}>Cancel</option>
                                    </select>
                                </form>
                                <a href="{{ route('admin.bookings.destroy', $b->id) }}" onclick="return confirm('Remove booking?');" class="text-xs text-red-400 font-bold hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>