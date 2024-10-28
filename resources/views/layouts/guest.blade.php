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
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            #body {
                background-image: url('{{ asset('images/Saint_Joseph_Cathedral_Tagbilaran.jpg') }}');
                background-size: cover;
                background-position: center;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body class="" id="body">
        <div class="min-h-screen flex justify-center items-center">

            <div class="w-full sm:max-w-md px-6 py-4 bg-gradient-to-b from-[#8DB9D0] to-[#03486C] shadow-md overflow-hidden sm:rounded-lg flex flex-col items-center justify-center">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
