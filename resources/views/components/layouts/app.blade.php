<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="SliceTech.org">
        <link rel="icon" href="{{ asset('asset/images/SliceTechFavicon.png') }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        @if(request()->is('/'))
            <title> {{ config('app.name', 'Slice-Tech') }}</title>
        @else
            {!! seo() !!}
        @endif

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-slate-200 dark:bg-slate-700">
        @livewire('partials.navbar')
        <main>
            {{ $slot }}
        </main>
        @livewire('partials.footer')
        <script>
            document.querySelector('.hs-collapse-toggle').addEventListener('click', function() {
              const navbar = document.getElementById('navbar-collapse-with-animation');
              navbar.classList.toggle('hidden');
            });
        </script>
        @livewireScripts
    </body>
</html>
