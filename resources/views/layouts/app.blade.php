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
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!-- Navbar -->
        <nav class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('landingpage') }}" class="text-lg font-bold text-gray-800 dark:text-white">
                                Reciclaje App ♻️
                            </a>
                        </div>
                    </div>

                    <!-- Navbar dinámico -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <ul class="flex space-x-4">
                            @auth
                                <li>
                                    <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Dashboard</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="text-red-500 hover:text-red-700">Cerrar sesión</button>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Iniciar sesión</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" class="text-green-500 hover:text-green-700">Registrarse</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

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
           @yield('content')
        </main>
    </div>
</body>
</html>
