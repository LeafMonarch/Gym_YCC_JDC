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
        <div class="min-h-screen bg-gray-100 ">
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
                {{ $slot }}
            </main>
        </div>

        <div>
            @yield('content')
        </div>

         <div>
            @include('layouts.footer')
        </div>
    </body>








    {{-- Jamie, just leave the ones down here for a while, might not know when we'll use it --}}


    {{-- <body class="bg-gray-100 h-screen antialiased leading-none font-sans">
        <div id="app">
            <header class="bg-gray-800 py-6">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div>
                        <a href="{{ url('/dashboard') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                        <a class="no-underline hover:underline" href="/dashboard">Home</a>
                        <a class="no-underline hover:underline" href="/appointment">Appointment</a>
                        @guest
                            <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span>{{ Auth::user()->name }}</span>
    
                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </nav>
                </div>
            </header>
    
            <main>
                {{ $slot }}
            </main>
    
            <div>
                @include('layouts.footer')
            </div>
        </div>
    </body> --}}
</html>
