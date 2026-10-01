<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('education') }}">Education</a>
        <a href="{{ route('projects') }}">Projects</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer', '©2026 Pavels Blog. All rights reserved.')
    </footer>

    @stack('scripts')

</body>
</html>