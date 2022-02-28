<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Meta Info --}}
        @include('layouts.metaquotes')

        {{-- Style --}}
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        @yield('styles')
    </head>
    <body class="antialiased">
   
            @yield('content')
        @include('layouts.footer')

        {{-- Scripts --}}
        <script src="{{ asset('js/global.js') }}"></script>
        @yield('scripts')

    </body>
</html>
