<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} Page | Artistry Indo</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- END STYLE CSS --}}
</head>
<body class="pb-5 mb-5" id="home">
    
    @include('components.navbar')

    <main class="container {{ $page }}">
        @yield('content')
    </main>

    {{-- SCRIPT JS --}}
    <link rel="stylesheet" href="{{ asset('asset/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('asset/js/script.js') }}">
    {{-- END SCRIPT JS --}}
</body>
</html>