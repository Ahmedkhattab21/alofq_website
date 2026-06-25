<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'شركة الأفق المتعدد لتقنية المعلومات')</title>
    <meta name="description" content="@yield('description', 'حلول برمجية متكاملة تساعد الشركات على النمو والتحول الرقمي.')">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/alofq-logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="{{ asset('assets/js/tailwind-config.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @stack('styles')
</head>
<body class="@yield('body-class', 'bg-white')">
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/threejs/r125/three.min.js"></script>
    <script src="{{ asset('assets/js/home.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
