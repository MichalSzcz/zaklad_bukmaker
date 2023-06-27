<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SBC</title>

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div>
            <div>
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-40 h-40">
                </a>
            </div>

            <div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
