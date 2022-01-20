<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('head-title', 'DC Comics')</title>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

</body>
</html>