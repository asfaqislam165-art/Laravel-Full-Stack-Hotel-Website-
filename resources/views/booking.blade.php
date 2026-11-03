<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Stay - Grand Luxe Hotel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- DaisyUI & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black text-white font-sans antialiased selection:bg-amber-400 selection:text-black">

    <!-- Navigation Header -->
    <header class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-stone-800">
        @include('layouts.navigation')
    </header><br><br>

    <!-- Header Banner Section -->
    <section class="relative bg-gradient-to-b from-stone-900 to-black py-16 border-b border-stone-800/50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="text-amber-400 font-semibold tracking-widest uppercase text-sm">Reservations</span>
            <h1 class="text-4xl md:text-5xl font-black mt-2 mb-3 tracking-tight text-white uppercase">
                Book Your Stay
            </h1>
            <p class="text-stone-400 max-w-xl mx-auto text-sm md:text-base">
                Reserve your luxury suite with ease and enjoy world-class hospitality tailored to your experience.
            </p>
        </div>
    </section>

    <!-- Booking Form Section -->
    <main class="max-w-4xl mx-auto px-4 py-16">
        <div class="bg-stone-900 p-8 md:p-12 rounded-3xl border border-stone-800 shadow-2xl relative overflow-hidden">
            <!-- Glow Accent -->
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-extrabold text-amber-400 uppercase tracking-wide">
                    Suite Reservation Request
                </h2>
                <p class="text-stone-400 text-sm mt-1">Please fill in the details below to complete your booking.</p>
            </div>

            @if(session('status'))
                <div class="mb-8 p-4 bg-amber-400/10 border border-amber-400/30 text-amber-400 rounded-2xl text-center font-bold text-sm flex items-center justify-center gap-2">
                    <i class="fa-solid fa-circle-check"></i> {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Room Selection -->
                <div>
                    <label class="block text-xs uppercase font-bold tracking-wider text-amber-400 mb-2">Select Accommodations</label>
                    <div class="relative">
                        <select name="room_id" required class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition appearance-none">
                            @foreach($rooms as $r)
                                <option value="{{ $r->id }}" class="bg-stone-900 text-white">
                                    {{ $r->room_type }} (No. {{ $r->room_number }}) - ${{ $r->price_per_night }}/night
                                </option>
                            @endforeach
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-stone-500 pointer-events-none text-xs"></i>
                    </div>
                </div>

                <!-- Guest Info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Full Name</label>
                        <input type="text" name="guest_name" required value="{{ Auth::check() ? Auth::user()->name : '' }}" placeholder="John Doe" class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition placeholder-stone-600">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Email Address</label>
                        <input type="email" name="email" required value="{{ Auth::check() ? Auth::user()->email : '' }}" placeholder="john@example.com" class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition placeholder-stone-600">
                    </div>
                </div>

                <!-- Dates & Phone -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Phone Number</label>
                        <input type="text" name="phone" required placeholder="+1 (555) 000-0000" class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition placeholder-stone-600">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Check In</label>
                        <input type="date" name="check_in" required class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition [color-scheme:dark]">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Check Out</label>
                        <input type="date" name="check_out" required class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition [color-scheme:dark]">
                    </div>
                </div>

                <!-- Guests Count -->
                <div>
                    <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Total Guests</label>
                    <input type="number" min="1" name="guests_count" value="1" required class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition">
                </div>

                <!-- Special Requests -->
                <div>
                    <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">Special Requests</label>
                    <textarea name="special_requests" rows="3" placeholder="Airport pickup, high floor, dietary preferences..." class="w-full bg-black/60 border border-stone-800 focus:border-amber-400 text-white rounded-xl p-3.5 outline-none transition placeholder-stone-600 resize-none"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-amber-400 text-black font-extrabold py-4 rounded-xl hover:bg-amber-300 transition shadow-lg uppercase tracking-wider text-sm flex items-center justify-center gap-2">
                    <i class="fa-solid fa-calendar-check"></i> Confirm Reservation
                </button>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="footer sm:footer-horizontal bg-stone-900 text-white p-10 border-t border-stone-800">
        <nav class="space-y-2">
            <h6 class="footer-title text-amber-400 uppercase font-bold tracking-wider">Social Media</h6>
            <a href="#" class="link link-hover flex items-center gap-2"><i class="fa-brands fa-facebook-f text-amber-400"></i> Facebook</a>
            <a href="#" class="link link-hover flex items-center gap-2"><i class="fa-brands fa-youtube text-amber-400"></i> Youtube</a>
            <a href="#" class="link link-hover flex items-center gap-2"><i class="fa-brands fa-whatsapp text-amber-400"></i> Whatsapp</a>
            <a href="#" class="link link-hover flex items-center gap-2"><i class="fa-regular fa-envelope text-amber-400"></i> Email</a>
        </nav>
        <nav class="space-y-2">
            <h6 class="footer-title text-amber-400 uppercase font-bold tracking-wider">Quick Links</h6>
            <a href="/about" class="link link-hover">About us</a>
            <a href="/facilities" class="link link-hover">Facilities</a>
            <a href="/rooms" class="link link-hover">Rooms</a>
            <a href="/booking" class="link link-hover">Booking</a>
        </nav>
        <nav class="space-y-2">
            <h6 class="footer-title text-amber-400 uppercase font-bold tracking-wider">Legal</h6>
            <a href="#" class="link link-hover">Terms of use</a>
            <a href="#" class="link link-hover">Privacy policy</a>
            <a href="#" class="link link-hover">Cookie policy</a>
        </nav>
    </footer>

    <!-- Copyright Footer -->
    <footer class="bg-black text-stone-500 footer footer-center p-4 border-t border-stone-900 text-xs">
        <aside>
            <p>Copyright © {{ date('Y') }} Mahin IT & Limited - All rights reserved.</p>
        </aside>
    </footer>

</body>
</html>