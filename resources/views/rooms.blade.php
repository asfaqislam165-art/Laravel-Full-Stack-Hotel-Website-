<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suites & Rooms - Grand Luxe Hotel</title>
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
            <span class="text-amber-400 font-semibold tracking-widest uppercase text-sm">Exquisite Accommodations</span>
            <h1 class="text-4xl md:text-5xl font-black mt-2 mb-3 tracking-tight text-white uppercase">
                Rooms & Suites
            </h1>
            <p class="text-stone-400 max-w-xl mx-auto text-sm md:text-base">
                Discover our world-class luxury suites, featuring sophisticated interiors, premium furnishings, and modern amenities.
            </p>
        </div>
    </section>

    <!-- Rooms List Section -->
    <main class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($rooms as $room)
                <div class="bg-stone-900 rounded-3xl overflow-hidden border border-stone-800 shadow-2xl flex flex-col hover:border-amber-400/40 transition duration-300">
                    @if($room->image)
                        <div class="relative overflow-hidden h-60">
                            <img src="{{ asset('img/' . $room->image) }}" alt="{{ $room->room_type }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        </div>
                    @endif
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h3 class="text-2xl font-bold text-white tracking-wide">{{ $room->room_type }}</h3>
                        <p class="text-amber-400 font-extrabold text-lg">${{ $room->price_per_night }} <span class="text-xs font-normal text-stone-400 uppercase">/ Night</span></p>
                        <p class="text-stone-300 text-sm leading-relaxed flex-grow">{{ $room->description }}</p>
                        <div class="pt-4">
                            <a href="{{ route('booking') }}" class="block w-full text-center bg-amber-400 text-black font-extrabold py-3.5 rounded-xl hover:bg-amber-300 transition shadow-lg uppercase tracking-wider text-sm">
                                Reserve Suite
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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