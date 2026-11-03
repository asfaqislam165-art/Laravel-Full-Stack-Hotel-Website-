<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Concierge - Grand Luxe Hotel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-black text-white font-sans antialiased">
    @include('layouts.navigation')<br><br>
    
    <!-- Navigation -->
   @include('layouts.navigation')<br><br>

    <!-- Hero / Contact Concierge Section -->
    <div class="hero bg-stone-900 min-h-[70vh] py-16 px-4">
        <div class="hero-content flex-col lg:flex-row gap-12 max-w-6xl mx-auto w-full">
            
            <!-- Image / Visual Side -->
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-amber-500 to-amber-700 opacity-20 blur-xl"></div>
                <img
                    alt="Grand Luxe Concierge"
                    src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=1000&auto=format&fit=crop"
                    class="relative rounded-2xl shadow-2xl w-full h-[400px] object-cover border border-stone-800"
                />
            </div>

            <!-- Content Side -->
            <div class="w-full lg:w-1/2 space-y-6">
                <span class="text-amber-400 font-semibold tracking-widest uppercase text-sm">24/7 Assistance</span>
                <h1 class="text-4xl lg:text-5xl font-black text-white tracking-tight">Contact Concierge</h1>
                <p class="text-stone-300 leading-relaxed">
                    Have special requests, reservation inquiries, or need bespoke travel arrangements during your stay at Grand Luxe Hotel? Our dedicated concierge team is at your service around the clock.
                </p>

                <!-- Quick Contact Info Cards -->
                <div class="space-y-4 pt-2">
                    <div class="flex items-center space-x-4 bg-black/40 p-4 rounded-xl border border-stone-800">
                        <div class="w-10 h-10 bg-amber-400/10 text-amber-400 rounded-lg flex items-center justify-center font-bold">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-xs text-stone-400 uppercase tracking-wider">Call Directly</p>
                            <p class="text-white font-semibold">+1 (555) 234-5678</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 bg-black/40 p-4 rounded-xl border border-stone-800">
                        <div class="w-10 h-10 bg-amber-400/10 text-amber-400 rounded-lg flex items-center justify-center font-bold">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xs text-stone-400 uppercase tracking-wider">Email Us</p>
                            <p class="text-white font-semibold">concierge@grandluxehotel.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

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