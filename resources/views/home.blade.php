<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bar Shop</title>
        <!-- Foundation -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        {{-- Change this for a individual Menu File Component, and include accesibility --}}
       @include('menu')
        
        @yield('banner')

        <div class="container">
            @yield('content')
       </div>

       @include('footer')  
    </body>
</html>
