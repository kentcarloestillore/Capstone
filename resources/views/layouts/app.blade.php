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
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/htmx.min.js') }}"></script>
        {{-- <script src="{{ asset('js/tailwind.min.js') }}"></script> --}}
        <style>
            ::-webkit-scrollbar {
                width: 5px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: gray;
                border-radius: 10px;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <div class="flex">

                 <!-- Sidebar -->
                <div class="w-64 fixed inset-y-0">
                    @include('layouts.sidebar')
                </div>

                 <!-- Main content area -->
                <div class="flex-grow ml-64">

                    <!-- Navigation -->
                    <div class="sticky top-0 z-10 bg-white dark:bg-gray-900 shadow">
                        @include('layouts.navigation')
                    </div>

                    <!-- Page Heading -->
                    @isset($header)
                        <header class="">
                            <div class="px-4 py-1">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset

                    <!-- Page Content -->
                    <main>
                        <article id="content" class="min-h-[30vh] p-5 flex-grow overflow-auto">
                            @yield('content')
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
