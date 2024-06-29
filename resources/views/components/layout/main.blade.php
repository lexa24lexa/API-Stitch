<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stitch</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&family=Salsa&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stitch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/containers.css') }}">
</head>
<body>
<!-- Navbar -->
<x-layout.nav></x-layout.nav>
{{-- Content --}}
<main class="content-div">
    {{ $slot }}
</main>
{{-- Footer --}}
<x-layout.footer></x-layout.footer>
</body>
</html>
