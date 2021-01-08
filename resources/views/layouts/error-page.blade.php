<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('page-title')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
        <!-- Main styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/logo/favicon/favicon.png')}}" type="image/x-icon">
    </head>
    <body>
    
        <div id="comics" class="errors">

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