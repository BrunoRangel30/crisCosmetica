<!DOCTYPE html>
<style>
    html,
    body {
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
    /*subtitulos*/

    .titulo {
        font-family: "MontserratAlternates";
        color: #fc791e;
        font-weight: 900;
        font-size: 1.7em;
    }

    .subtitulos {
        font-family: "MontserratAlternates";
        font-size: 1.3em;
        color: #603000;
        font-weight: 900
    }

    .subtitulos-2 {
        font-family: "MontserratAlternates";
        font-size: 1.2em;
        color: #fc791e;
        font-weight: 900;
    }

    .subtitulos-3 {
        font-family: "MontserratAlternates";
        font-size: 1em;
        color: #603000;
        font-weight: 900;
    }

    .subtitulos-4 {
        font-family: "MontserratAlternates";
        font-size: 0.8em;
        color: #603000;
        font-weight: 900;
    }

    .subtitulos-5 {
        font-family: "MontserratAlternates";
        font-size: 1em;
        color: #fc791e;
        font-weight: 900;
    }
    /*botoes*/

    .style-botao a {
        font-family: "MontserratAlternates";
        font-size: 0.8em;
        font-style: normal;
        color: #ffff !important;
        background: #fc791e;
        border: 3px inset #60300063;
        text-shadow: 0px -1px 10px #603000;
        box-shadow: 1px 1px 9px #000000;
        -moz-box-shadow: 1px 1px 9px #000000;
        -webkit-box-shadow: 1px 1px 9px #000000;
        border-radius: 53px 0px 90px 40px;
        -moz-border-radius: 83px 0px 90px 40px;
        -webkit-border-radius: 83px 0px 90px 40px;
        padding: 5px 10px;
        cursor: pointer;
        z-index: 1 !important;
    }

    .style-botao a:active {
        cursor: pointer;
        position: relative;
        top: 2px;
    }

    .style-botao a:hover {
        color: #FFF;
        text-decoration: none;
    }

    .botao2 a {
        font-family: "MontserratAlternates";
        font-size: 0.8em;
        font-style: normal;
        color: #ffff !important;
        background: #fc791e;
        border: 3px inset #60300063;
        text-shadow: 0px -1px 10px #603000;
        box-shadow: 1px 1px 9px #000000;
        -moz-box-shadow: 1px 1px 9px #000000;
        -webkit-box-shadow: 1px 1px 9px #000000;
        /* border-radius: 53px 0px 90px 40px;*/
        -moz-border-radius: 83px 0px 90px 40px;
        /*   -webkit-border-radius: 83px 0px 90px 40px;*/
        padding: 5px 10px;
        cursor: pointer;
    }

    .botao2 a:hover {
        color: #FFF;
        text-decoration: none;
    }

    .font-text {
        font-family: "MontserratAlternates";
        padding-top: 10px;
        font-weight: 500;
        color: #603000;
        font-size: 1em;
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
