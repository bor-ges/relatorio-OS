<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Painel - OS') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/resources/css/sidebar.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: sans-serif;
            }

            .container {
                display: flex;
                flex-direction: row;
            }

            #default-sidebar {
                width: 200px;
                min-width: 200px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #progress {
                width: 100%;
            }

            #perfil,
            .table-container {
                width: calc(100% - 200px);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield("content")
                @stack('js')
            </main>
        </div>

    </body>
</html>
