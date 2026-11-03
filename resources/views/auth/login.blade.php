<x-guest-layout>
    <div class="w-full flex flex-col justify-center items-center bg-black text-white px-4">
        <div class="mb-6 text-center">
            <a href="/" class="text-4xl font-extrabold text-amber-400 uppercase tracking-widest">Grand Luxe Hotel</a>
            <p class="text-stone-400 text-sm mt-2">Sign in to manage your guest reservations</p>
        </div>

        <div class="w-full sm:max-w-md p-8 bg-stone-900 rounded-3xl border-0 outline-none shadow-2xl">
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-stone-300 text-sm font-bold">Email Address</label>
                    <input type="email" name="email" required autofocus class="w-full mt-1 bg-stone-800 border-0 ring-0 focus:ring-1 focus:ring-amber-400 text-white rounded-xl p-3">
                </div>
                <div>
                    <label class="block text-stone-300 text-sm font-bold">Password</label>
                    <input type="password" name="password" required class="w-full mt-1 bg-stone-800 border-0 ring-0 focus:ring-1 focus:ring-amber-400 text-white rounded-xl p-3">
                </div>
                <button type="submit" class="w-full bg-amber-400 hover:bg-amber-300 text-black font-extrabold py-3.5 rounded-xl transition">Sign In</button>
                <div class="text-center pt-2 text-xs text-stone-400">
                    Don't have an account? <a href="{{ route('register') }}" class="text-amber-400 font-bold hover:underline">Register now</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>