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

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#56739b">
        <meta name="msapplication-TileColor" content="#f9f9f7">
        <meta name="theme-color" content="#f9f9f7">


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
