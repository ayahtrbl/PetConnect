<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 bg-[#f5dfbb] min-h-screen">
        <div class = "h-[5rem] flex justify-start items-center ps-8 bg-[#fdf7ec]">
            <a href="/">
                <x-application-logo class="w-auto h-9 text-gray-500" />
            </a>
        </div>
        <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="w-3/4 h-2/4 mt-6 p-[3rem] bg-[#f2542d] custom-shadow sm:rounded-lg flex text-white gap-6">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
