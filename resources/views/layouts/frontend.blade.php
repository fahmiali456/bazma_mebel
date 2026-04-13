<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Furni</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')

</body>

</html>