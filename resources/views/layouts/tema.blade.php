<!DOCTYPE html>
<style>
    html, body {
        height: 100%;
    }
    @font-face {
        font-family: MontserratAlternates;
        src: url("css/bibliotecas/MontserratAlternates-Regular.otf");
    }

    @font-face {
        font-family: brush-script-std-medium;
        src: url("css/bibliotecas/brush-script-std-medium.otf");
    }



</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">
        <link rel="stylesheet" href="{{ asset('css/bibliotecas/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bibliotecas/fontawesome/css/all.css')}}">



        <!-- Scripts -->
        <script src="{{url(mix('js/app.js'))}}"></script>
        <script src="{{url(mix('js/bibliotecas/jquery.js'))}}"></script>
        <script src="{{url(mix('js/bibliotecas/popper.js'))}}"></script>
        <script src="{{url(mix('js/bibliotecas/bootstrap.js'))}}"></script>
        <script src="{{url(mix('js/home/home.js'))}}"></script>


    </head>
    <body>
        <main>
          @yield('content')
        </main>
    </body>
</html>
