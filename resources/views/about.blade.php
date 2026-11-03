<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Grand Luxe Hotel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
</head>
<body class="bg-black text-white font-sans antialiased selection:bg-amber-400 selection:text-black">
    @include('layouts.navigation')

    <!-- Hero Header Banner -->
    <div class="relative bg-gradient-to-b from-stone-900 to-black py-20 border-b border-stone-800/50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="text-amber-400 font-semibold tracking-widest uppercase text-sm">Welcome to Excellence</span>
            <h1 class="text-4xl md:text-6xl font-black mt-3 mb-4 tracking-tight text-white">
                Redefining World-Class Luxury
            </h1>
            <p class="text-stone-400 max-w-2xl mx-auto text-base md:text-lg">
                Crafting extraordinary experiences, timeless elegance, and memories that last a lifetime.
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-16 space-y-20">
        
        <!-- Main Story Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="inline-block bg-amber-400/10 border border-amber-400/20 rounded-full px-4 py-1 text-xs text-amber-400 font-semibold uppercase tracking-wider">
                    Our Heritage
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-wide">
                    About <span class="text-amber-400">Grand Luxe Hotel</span>
                </h2>
                <p class="text-stone-300 leading-relaxed text-justify">
                    Grand Luxe Hotel is an epitome of sophistication, offering unparalleled hospitality, bespoke suites, and elite amenities designed for high-end travelers and corporate executives. Since our inception, we have strived to create an sanctuary where modern luxury seamlessly blends with timeless comfort.
                </p>
                <p class="text-stone-300 leading-relaxed text-justify">
                    From our world-class fine-dining options to our serene wellness spas, every single corner of Grand Luxe is carefully curated to deliver an unforgettable stay. Whether you are visiting for high-level business conferences or a quiet, romantic retreat, our dedicated team ensures your stay exceeds every expectation.
                </p>
                <div class="pt-2">
                    <a href="#services" class="btn btn-warning bg-amber-400 hover:bg-amber-500 border-none text-black font-bold uppercase tracking-wider px-6">
                        Explore Our Services
                    </a>
                </div>
            </div>

            <!-- Image / Visual Banner -->
            <div class="relative">
                <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-amber-500 to-amber-700 opacity-30 blur-xl"></div>
                <div class="relative bg-stone-900 rounded-3xl p-4 border border-stone-800 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200&auto=format&fit=crop" 
                         alt="Grand Luxe Interior" 
                         class="rounded-2xl object-cover w-full h-[400px]">
                </div>
            </div>
        </div>

        <!-- Key Metrics & Achievements (Stats Counter) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-stone-900/60 p-8 rounded-3xl border border-stone-800 text-center">
            <div class="space-y-2">
                <h3 class="text-4xl font-black text-amber-400">150+</h3>
                <p class="text-sm text-stone-400 uppercase tracking-widest">Luxury Suites</p>
            </div>
            <div class="space-y-2">
                <h3 class="text-4xl font-black text-amber-400">5 Stars</h3>
                <p class="text-sm text-stone-400 uppercase tracking-widest">Global Rating</p>
            </div>
            <div class="space-y-2">
                <h3 class="text-4xl font-black text-amber-400">12+</h3>
                <p class="text-sm text-stone-400 uppercase tracking-widest">Awards Won</p>
            </div>
            <div class="space-y-2">
                <h3 class="text-4xl font-black text-amber-400">98%</h3>
                <p class="text-sm text-stone-400 uppercase tracking-widest">Satisfied Guests</p>
            </div>
        </div>

        <!-- Mission & Vision Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-stone-900 p-8 rounded-3xl border border-stone-800 hover:border-amber-400/40 transition-all duration-300">
                <div class="w-12 h-12 bg-amber-400/10 text-amber-400 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-amber-400 mb-3">Our Mission</h3>
                <p class="text-stone-300 leading-relaxed">
                    To deliver uncompromised hospitality by combining personalized services, world-class culinary experiences, and luxurious accommodations that make every guest feel like royalty.
                </p>
            </div>

            <div class="bg-stone-900 p-8 rounded-3xl border border-stone-800 hover:border-amber-400/40 transition-all duration-300">
                <div class="w-12 h-12 bg-amber-400/10 text-amber-400 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-amber-400 mb-3">Our Vision</h3>
                <p class="text-stone-300 leading-relaxed">
                    To set the benchmark for luxury hospitality worldwide, continuously innovating our eco-friendly practices, signature dining, and bespoke executive guest care.
                </p>
            </div>
        </div>

        <!-- Signature Features Grid -->
        <div id="services" class="space-y-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-amber-400 uppercase tracking-wider">Why Choose Us</h2>
                <p class="text-stone-400 mt-2">Discover what sets Grand Luxe Hotel apart from the rest</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-stone-900 p-6 rounded-3xl border border-stone-800 text-center space-y-4">
                    <div class="text-amber-400 text-4xl">🍽️</div>
                    <h4 class="text-xl font-bold text-white">Fine-Dining Cuisine</h4>
                    <p class="text-stone-400 text-sm leading-relaxed">
                        Indulge in gourmet dishes prepared by Michelin-starred guest chefs using prime local & imported ingredients.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-stone-900 p-6 rounded-3xl border border-stone-800 text-center space-y-4">
                    <div class="text-amber-400 text-4xl">💆‍♀️</div>
                    <h4 class="text-xl font-bold text-white">Wellness & Spa</h4>
                    <p class="text-stone-400 text-sm leading-relaxed">
                        Rejuvenate your body and mind with our exclusive aromatherapy, hot stone therapy, and sauna retreats.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-stone-900 p-6 rounded-3xl border border-stone-800 text-center space-y-4">
                    <div class="text-amber-400 text-4xl">👔</div>
                    <h4 class="text-xl font-bold text-white">24/7 Butler Service</h4>
                    <p class="text-stone-400 text-sm leading-relaxed">
                        Our highly trained concierge and private butler service cater to your every request around the clock.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call To Action (CTA) Banner -->
        <div class="bg-gradient-to-r from-amber-500/20 via-stone-900 to-amber-500/20 p-10 rounded-3xl border border-amber-400/30 text-center space-y-6">
            <h2 class="text-3xl font-extrabold text-white">Ready for an Unforgettable Stay?</h2>
            <p class="text-stone-300 max-w-xl mx-auto">
                Book your luxury suite today and experience hospitality at its finest.
            </p>
            <div>
                <a href="/rooms" class="btn btn-warning bg-amber-400 hover:bg-amber-500 text-black border-none font-bold uppercase tracking-wider px-8 py-3">
                    Book A Room Now
                </a>
            </div>
        </div>

    </div>

    <!-- Simple Footer Section (Optional) -->
    <footer class="bg-stone-900 border-t border-stone-800 py-8 text-center text-stone-500 text-sm">
        &copy; {{ date('Y') }} Grand Luxe Hotel. All rights reserved.
    </footer>
</body>
</html>