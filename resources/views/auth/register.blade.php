<x-guest-layout>
    <div class="w-full flex flex-col justify-center items-center bg-black text-white px-4 py-8">
        <div class="mb-6 text-center">
            <a href="/" class="text-4xl font-extrabold text-amber-400 uppercase tracking-widest">Grand Luxe Hotel</a>
            <p class="text-stone-400 text-sm mt-2">Create an account to begin booking luxury suites</p>
        </div>

        <div class="w-full sm:max-w-md p-8 bg-stone-900 rounded-3xl border-0 shadow-2xl">
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-stone-300 text-sm font-bold">Full Name</label>
                    <input type="text" name="name" required autofocus class="w-full mt-1 bg-stone-800 border-0 ring-0 focus:ring-1 focus:ring-amber-400 text-white rounded-xl p-3">
                </div>
                <div>
                    <label class="block text-stone-300 text-sm font-bold">Email Address</label>
                    <input type="email" name="email" required class="w-full mt-1 bg-stone-800 border-0 ring-0 focus:ring-1 focus:ring-amber-400 text-white rounded-xl p-3">
                </div>
                <div>
                    <label class="block text-stone-300 text-sm font-bold">Password</label>
                    <input type="password" name="password" required class="w-full mt-1 bg-stone-800 border-0 ring-0 focus:ring-1 focus:ring-amber-400 text-white rounded-xl p-3">
                </div>
                <div>
                    <label class="block text-stone-300 text-sm font-bold">Confirm Password</label>
                    <input type="password" name="password_confirmation" required class="w-full mt-1 bg-stone-800 border-0 ring-0 focus:ring-1 focus:ring-amber-400 text-white rounded-xl p-3">
                </div>
                <button type="submit" class="w-full bg-amber-400 hover:bg-amber-300 text-black font-extrabold py-3.5 rounded-xl transition shadow-lg">Register Account</button>
                <div class="text-center pt-2 text-xs text-stone-400">
                    Already registered? <a href="{{ route('login') }}" class="text-amber-400 font-bold hover:underline">Log in</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>