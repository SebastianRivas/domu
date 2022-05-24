<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:8080/js/bundle.js"></script>
        @endenv

        <footer class="text-center py-1 bg-neutral-700 text-sm">
            <p class="mt-4 text-white">
                Domu Trusted <br />
                Miami FL <br />
            </p>
            
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/NeutronB.png') }}" alt="Neutron Logo" class="w-40 h-40">
            </div>
            
            <p class="mt-4 text-white">
                Copyright © 2022 Domu Trusted<br />
                Powered by Neutron Technologies
            </p>
        </footer>
    </body>
</html>
