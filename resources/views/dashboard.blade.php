<x-app-layout>
    <div class="bg-black text-white min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-amber-400 mb-6">My Reservation Dashboard</h2>
            
            <div class="bg-stone-900 p-8 rounded-3xl border-none shadow-2xl">
                <h3 class="text-lg font-bold mb-4 text-white">Your Booked Suites & History</h3>
                
                @if($userBookings->isEmpty())
                    <p class="text-stone-400 text-sm">You haven't booked any suites yet. <a href="{{ route('booking') }}" class="text-amber-400 underline font-bold">Book a suite now</a>.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-white">
                            <thead class="bg-stone-800 text-stone-400 uppercase text-xs">
                                <tr>
                                    <th class="p-4">Suite / Room</th>
                                    <th class="p-4">Check-In</th>
                                    <th class="p-4">Check-Out</th>
                                    <th class="p-4">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-800">
                                @foreach($userBookings as $item)
                                    <tr>
                                        <td class="p-4 font-bold text-amber-400">{{ $item->room->room_type ?? 'N/A' }} (No. {{ $item->room->room_number ?? 'N/A' }})</td>
                                        <td class="p-4 text-stone-300">{{ $item->check_in }}</td>
                                        <td class="p-4 text-stone-300">{{ $item->check_out }}</td>
                                        <td class="p-4">
                                            <span class="px-3 py-1 text-xs font-bold rounded-full 
                                                @if($item->status == 'Approved' || $item->status == 'Confirmed') 
                                                  
                                                @elseif($item->status == 'Cancelled' || $item->status == 'Rejected') 
                                                   
                                                @else 
                                                   
                                                @endif">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>