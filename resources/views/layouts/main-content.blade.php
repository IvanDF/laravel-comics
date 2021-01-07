<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('page-title')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Main styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
    
        <div id="comics">

            <!-- Main Header -->
            @include('partials.main-header')

            <!-- Main section -->
            @yield('content')
            
            <!-- Main Footer -->
            @include('partials.main-footer')

        </div>

        <!-- Main scripts -->
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
