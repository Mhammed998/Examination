<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('frontend-title')</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&family=Poppins:ital,wght@0,200;0,300;0,400;1,200&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('frontend-styles')
</head>
<body>
    <div id="app">
        @include('layouts.frontend.parts.navbar')



        <main>
            @yield('frontend-content')
        </main>



       @include('layouts.frontend.parts.footer')

    </div>

  @yield('frontend-scripts')
</body>
</html>
