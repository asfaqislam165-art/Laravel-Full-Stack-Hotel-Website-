<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Grand Luxe Hotel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-black text-white antialiased">
        <div class="min-h-screen bg-black">
            <!-- Fixed Navigation Bar -->
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-stone-900 shadow pt-28 pb-6 px-4 sm:px-6 lg:px-8 mt-20 border-none">
                    <div class="max-w-7xl mx-auto">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content with Clean Fixed Margin Logic -->
            <main class="{{ isset($header) ? 'pt-6' : 'pt-28' }} bg-black min-h-screen">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>