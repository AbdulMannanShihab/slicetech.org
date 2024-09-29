<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" 
              content="Discover a world of shopping at our E-commerce platform! 
              From trendy fashion to cutting-edge gadgets, we’ve got it all. 
              Browse, click, and shop with confidence. 
              Your next favorite item is just a click away !">
        <meta name="author" content="Mannan Shihab">
        <title>{{ $title ?? 'SliceTech' }}</title>
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
        @livewireScripts
    </body>
</html>
