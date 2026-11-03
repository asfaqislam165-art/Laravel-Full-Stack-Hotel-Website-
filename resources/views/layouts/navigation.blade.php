<nav x-data="{ open: false }" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 9999;" class="bg-stone-900 border-none shadow-2xl text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            
            <!-- Brand Logo & Desktop Nav Links -->
            <div class="flex items-center space-x-10">
                <a href="{{ Auth::check() && Auth::user()->usertype == 'admin' ? route('admin.dashboard') : route('home') }}" 
                   class="text-2xl font-extrabold tracking-widest text-amber-400 uppercase">
                    Grand Luxe
                </a>

                <div class="hidden md:flex space-x-6 text-sm font-medium">
                    @if (Auth::check() && Auth::user()->usertype == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-amber-400 transition">Dashboard</a>
                        <a href="{{ route('admin.rooms.index') }}" class="text-white hover:text-amber-400 transition">Rooms</a>
                        <a href="{{ route('admin.facilities.index') }}" class="text-white hover:text-amber-400 transition">Facilities</a>
                        <a href="{{ route('admin.bookings.index') }}" class="text-white hover:text-amber-400 transition">Bookings</a>
                    @else
                        <a href="{{ route('home') }}" class="text-white hover:text-amber-400 transition">Home</a>
                        <a href="{{ route('rooms') }}" class="text-white hover:text-amber-400 transition">Rooms & Suites</a>
                        <a href="{{ route('facilities') }}" class="text-white hover:text-amber-400 transition">Facilities</a>
                        <a href="{{ route('booking') }}" class="text-white hover:text-amber-400 transition">Book Reservation</a>
                        <a href="{{ route('about') }}" class="text-white hover:text-amber-400 transition">About Us</a>
                        <a href="{{ route('contact') }}" class="text-white hover:text-amber-400 transition">Contact</a>
                    @endif
                </div>
            </div>

            <!-- Right Profile/Auth Actions (Desktop) -->
            <div class="hidden md:flex md:items-center space-x-4">
                @auth
                    <span class="text-sm font-semibold text-stone-300">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-400 font-semibold hover:text-red-300 transition">Log Out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-stone-300 hover:text-white transition">Log in</a>
                    <a href="{{ route('register') }}" class="text-sm font-semibold text-black bg-amber-400 px-5 py-2.5 rounded-full hover:bg-amber-300 transition shadow-lg">Register</a>
                @endauth
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex items-center md:hidden">
                <button @click="open = ! open" class="text-stone-300 hover:text-white focus:outline-none p-2 rounded-xl bg-stone-800">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Mobile Menu Dropdown -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden bg-stone-900 border-t border-stone-800 px-6 pt-3 pb-6 space-y-3 shadow-2xl">
        @if (Auth::check() && Auth::user()->usertype == 'admin')
            <a href="{{ route('admin.dashboard') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Dashboard</a>
            <a href="{{ route('admin.rooms.index') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Rooms</a>
            <a href="{{ route('admin.facilities.index') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Facilities</a>
            <a href="{{ route('admin.bookings.index') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Bookings</a>
        @else
            <a href="{{ route('home') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Home</a>
            <a href="{{ route('rooms') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Rooms & Suites</a>
            <a href="{{ route('facilities') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Facilities</a>
            <a href="{{ route('booking') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Book Reservation</a>
            <a href="{{ route('about') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">About Us</a>
            <a href="{{ route('contact') }}" class="block text-white hover:text-amber-400 py-1.5 font-medium">Contact</a>
        @endif

        <div class="border-t border-stone-800 pt-4 mt-2">
            @auth
                <div class="text-sm font-semibold text-stone-300 mb-3">{{ Auth::user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-400 font-semibold hover:text-red-300">Log Out</button>
                </form>
            @else
                <div class="flex items-center space-x-4 pt-1">
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-stone-300 hover:text-white">Log in</a>
                    <a href="{{ route('register') }}" class="text-sm font-semibold text-black bg-amber-400 px-4 py-2 rounded-full">Register</a>
                </div>
            @endauth
        </div>
    </div>
</nav>