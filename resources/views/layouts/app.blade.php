<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LarApp @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            @include('includes.messages')
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>