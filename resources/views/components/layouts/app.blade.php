<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! seo() !!}
        <meta name="description" 
              content="Dive into Laravel, PHP, Livewire, and Filament-PHP with expert insights and tutorials. 
              Learn how to build dynamic web applications efficiently using modern frameworks and tools. 
              Stay updated with the latest tips and best practices in PHP development.">
        <meta name="author" content="Mannan Shihab">
        <link rel="icon" href="{{ asset('asset/images/SliceTechFavicon.png') }}">
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
