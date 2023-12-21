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
    {{-- END STYLE CSS --}}
</head>
<body>
    
    @include('components.navbar')

    <main class="container {{ $page }}">
        @yield('content')
    </main>

    {{-- SCRIPT JS --}}
    <link rel="stylesheet" href="{{ asset('asset/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('asset/js/script.js') }}">
    @stack('js')
    {{-- END SCRIPT JS --}}
</body>
</html>