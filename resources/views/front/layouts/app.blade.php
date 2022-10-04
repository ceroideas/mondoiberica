<!DOCTYPE html>
<html lang="ES_es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="robots" content="noindex, nofollow">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles()
</head>

<body class="font-nunito text-gray antialiased max-w-10xl mx-auto">
    <div class="flex h-screen">
        {{-- Sidebar --}}
        <div class="lg:w-1/5 2xl:w-2/12">
            @include('front.layouts.sidebar')

            {{-- navigation from breeze --}}
            {{-- @include('front.layouts.navigation') --}}
        </div>

        {{-- Header --}}
        <div class="lg:w-4/5 2xl:w-10/12 box-content">
            <x-header section="{{ $section ?? '' }}" />

            {{-- Main --}}
            <main class="px-8">
                {{ $slot }}
            </main>
        </div>
    </div>
    @livewireScripts()
</body>

</html>
