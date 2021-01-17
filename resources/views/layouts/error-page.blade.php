<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('page-title')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Main style -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
        <!-- Vue Container -->
        <div id="DC" class="errors">
            <!-- Main header  -->
            @include('partials.main-header')

            <!-- Main content -->
            @yield('main-content')

            <!-- Main footer -->
            @include('partials.main-footer')
        </div>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
