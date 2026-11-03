<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Luxe Hotel & Resort</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- FontAwesome & DaisyUI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black text-white font-sans antialiased selection:bg-amber-400 selection:text-black">

    <!-- Navigation Header -->
    <header class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-stone-800">
        @include('layouts.navigation')
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-b from-stone-900 to-black py-20 border-b border-stone-800/50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="text-amber-400 font-semibold tracking-widest uppercase text-sm">Welcome to Excellence</span>
            <h1 class="text-4xl md:text-6xl font-black mt-3 mb-4 tracking-tight text-white">
                Redefining World-Class Luxury
            </h1>
            <p class="text-stone-400 max-w-2xl mx-auto text-base md:text-lg">
                Crafting extraordinary experiences, timeless elegance, and memories that last a lifetime.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="{{ route('rooms') }}" class="bg-amber-400 hover:bg-amber-300 text-black font-extrabold px-8 py-3.5 rounded-full transition shadow-xl uppercase tracking-wider text-sm">
                    Explore Suites
                </a>
                <a href="{{route('facilities')}}" class="bg-stone-800 hover:bg-stone-700 text-white font-bold px-8 py-3.5 rounded-full transition border border-stone-700 uppercase tracking-wider text-sm">
                    Our Services
                </a>
            </div>
        </div>
    </section>

    <!-- Opulence & Comfort Showcase Section -->
    <section class="py-12 bg-stone-950">
        <div class="bg-stone-900 mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8 rounded-3xl border border-stone-800">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 items-center">
                <div class="p-6 md:p-12 lg:px-16 lg:py-20">
                    <div class="mx-auto max-w-xl text-left space-y-6">
                        <span class="text-amber-400 font-semibold tracking-widest uppercase text-xs">Unmatched Hospitality</span>
                        <h2 class="text-white text-3xl md:text-4xl font-extrabold tracking-wide">
                            Experience Opulence & Comfort
                        </h2>
                        <p class="text-stone-300 leading-relaxed text-sm md:text-base">
                            Discover a world of exceptional luxury, where elegance meets comfort and every detail is thoughtfully designed to create an unforgettable experience. Explore our world-class luxury suites featuring sophisticated interiors, premium furnishings, breathtaking views, and modern amenities tailored to your lifestyle.
                        </p>
                        <div>
                            <a href="{{ route('rooms') }}" class="inline-block bg-amber-400 hover:bg-amber-300 text-black font-extrabold px-8 py-3.5 rounded-full transition shadow-lg uppercase tracking-wider text-sm">
                                See Our Rooms
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <img alt="Luxury Room 1" src="-Home/One.jpg" class="h-48 w-full object-cover rounded-2xl sm:h-64 md:h-80 border border-stone-800 shadow-xl" />
                    <img alt="Luxury Room 2" src="-Home/Two.jpg" class="h-48 w-full object-cover rounded-2xl sm:h-64 md:h-80 border border-stone-800 shadow-xl" />
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="bg-stone-900 py-16 border-y border-stone-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center space-y-3">
                <h2 class="text-3xl font-bold text-white sm:text-4xl flex items-center justify-center gap-3">
                    <i class="fa-solid fa-snowflake text-amber-400"></i> Grand Luxe Hotel
                </h2>
                <p class="text-stone-300 text-base">
                    Discover the perfect blend of luxury, comfort, and exceptional hospitality designed to make your stay unforgettable.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-4">
                <div class="rounded-2xl border border-stone-800 bg-black/40 p-6 hover:border-amber-400/50 transition">
                    <h3 class="text-amber-400 text-lg font-bold flex items-center gap-2">
                        <i class="fa-solid fa-gem"></i> Accommodation
                    </h3>
                    <p class="text-stone-300 mt-2 text-sm leading-relaxed">
                        Exceptional comfort in beautifully designed rooms featuring elegant interiors and premium amenities.
                    </p>
                </div>

                <div class="rounded-2xl border border-stone-800 bg-black/40 p-6 hover:border-amber-400/50 transition">
                    <h3 class="text-amber-400 text-lg font-bold flex items-center gap-2">
                        <i class="fa-solid fa-utensils"></i> Fine Dining
                    </h3>
                    <p class="text-stone-300 mt-2 text-sm leading-relaxed">
                        Exquisite culinary flavors with gourmet international cuisine and outstanding room service.
                    </p>
                </div>

                <div class="rounded-2xl border border-stone-800 bg-black/40 p-6 hover:border-amber-400/50 transition">
                    <h3 class="text-amber-400 text-lg font-bold flex items-center gap-2">
                        <i class="fa-solid fa-spa"></i> Wellness & Spa
                    </h3>
                    <p class="text-stone-300 mt-2 text-sm leading-relaxed">
                        Rejuvenate your mind and body with exclusive spa treatments and peaceful relaxation spaces.
                    </p>
                </div>

                <div class="rounded-2xl border border-stone-800 bg-black/40 p-6 hover:border-amber-400/50 transition">
                    <h3 class="text-amber-400 text-lg font-bold flex items-center gap-2">
                        <i class="fa-solid fa-bell-concierge"></i> Concierge
                    </h3>
                    <p class="text-stone-300 mt-2 text-sm leading-relaxed">
                        Personalized high-end services and attentive 24/7 staff ready to cater to your needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3D Card Showcase -->
    <section class="bg-stone-950 py-16 border-b border-stone-800">
        <div class="text-center mb-8">
            <span class="text-amber-400 font-semibold tracking-widest uppercase text-xs">Visual Gallery</span>
            <h2 class="text-2xl md:text-3xl font-bold text-white mt-1">Explore Our Spaces</h2>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-6 px-4">
            <div class="hover-3d shadow-2xl">
                <figure class="w-60 rounded-2xl overflow-hidden border border-stone-800">
                    <img src="-Home/1.jpg" alt="Hotel Interior 1" class="w-full h-72 object-cover" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>

            <div class="hover-3d shadow-2xl">
                <figure class="w-60 rounded-2xl overflow-hidden border border-stone-800">
                    <img src="-Home/2.avif" alt="Hotel Interior 2" class="w-full h-72 object-cover" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>

            <div class="hover-3d shadow-2xl">
                <figure class="w-60 rounded-2xl overflow-hidden border border-stone-800">
                    <img src="-Home/3.avif" alt="Hotel Interior 3" class="w-full h-72 object-cover" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>

            <div class="hover-3d shadow-2xl">
                <figure class="w-60 rounded-2xl overflow-hidden border border-stone-800">
                    <img src="-Home/4.avif" alt="Hotel Interior 4" class="w-full h-72 object-cover" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>
        </div>
    </section>

    <!-- Heritage & Story Section -->
    <section class="max-w-6xl mx-auto px-4 py-20 space-y-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="inline-block bg-amber-400/10 border border-amber-400/20 rounded-full px-4 py-1 text-xs text-amber-400 font-semibold uppercase tracking-wider">
                    Our Heritage
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-wide">
                    About <span class="text-amber-400">Grand Luxe Hotel</span>
                </h2>
                <p class="text-stone-300 leading-relaxed text-justify text-sm md:text-base">
                    Grand Luxe Hotel is an epitome of sophistication, offering unparalleled hospitality, bespoke suites, and elite amenities designed for high-end travelers and corporate executives. Since our inception, we have strived to create a sanctuary where modern luxury seamlessly blends with timeless comfort.
                </p>
                <p class="text-stone-300 leading-relaxed text-justify text-sm md:text-base">
                    From our world-class fine-dining options to our serene wellness spas, every single corner of Grand Luxe is carefully curated to deliver an unforgettable stay.
                </p>
            </div>

            <div class="relative">
                <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-amber-500 to-amber-700 opacity-20 blur-xl"></div>
                <div class="relative bg-stone-900 rounded-3xl p-3 border border-stone-800 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200&auto=format&fit=crop" 
                         alt="Grand Luxe Interior" 
                         class="rounded-2xl object-cover w-full h-[380px]">
                </div>
            </div>
        </div>

        <!-- Key Metrics -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-stone-900/60 p-8 rounded-3xl border border-stone-800 text-center">
            <div class="space-y-1">
                <h3 class="text-3xl md:text-4xl font-black text-amber-400">150+</h3>
                <p class="text-xs text-stone-400 uppercase tracking-widest">Luxury Suites</p>
            </div>
            <div class="space-y-1">
                <h3 class="text-3xl md:text-4xl font-black text-amber-400">5 Stars</h3>
                <p class="text-xs text-stone-400 uppercase tracking-widest">Global Rating</p>
            </div>
            <div class="space-y-1">
                <h3 class="text-3xl md:text-4xl font-black text-amber-400">12+</h3>
                <p class="text-xs text-stone-400 uppercase tracking-widest">Awards Won</p>
            </div>
            <div class="space-y-1">
                <h3 class="text-3xl md:text-4xl font-black text-amber-400">98%</h3>
                <p class="text-xs text-stone-400 uppercase tracking-widest">Satisfied Guests</p>
            </div>
        </div>

        <!-- Call To Action (CTA) Banner -->
        <div class="bg-gradient-to-r from-amber-500/10 via-stone-900 to-amber-500/10 p-10 rounded-3xl border border-amber-400/20 text-center space-y-6">
            <h2 class="text-3xl font-extrabold text-white">Ready for an Unforgettable Stay?</h2>
            <p class="text-stone-300 max-w-xl mx-auto text-sm md:text-base">
                Book your luxury suite today and experience hospitality at its finest.
            </p>
            <div>
                <a href="{{ route('rooms') }}" class="inline-block bg-amber-400 hover:bg-amber-500 text-black font-bold uppercase tracking-wider px-8 py-3.5 rounded-full transition shadow-lg">
                    Book A Room Now
                </a>
            </div>
        </div>
    </section>

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