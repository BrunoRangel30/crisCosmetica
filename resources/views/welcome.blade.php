@extends('layouts.tema')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <style>
    /*  .style-nav .bg-light {
            background-color: #c3f3c8!important;
        }

        .style-nav .imagem-logo {
            padding-right: 0px;
        }

        .style-nav .titulo-logo {
            padding-right: 0px;
        }*/

       /* .style-nav-menu .bg-light {
            background-color: #c3f3c8!important;
        }

        .style-nav-menu a {
            font-family: "MontserratAlternates";
            font-size: 1.2em;
            color: #603000;
            padding-left: 10px;
        }

        .style-nav-menu .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .style-nav-menu .navbar-nav li {
            text-align: center;
        }

        .style-nav-menu .navbar-nav li a {
            padding-bottom: 0px;
        }

        .style-nav-menu .navbar-nav li i {
            color: #008000;
        }*/

       /* .barra-superior a {
            padding-right: 35px;
            font-family: "MontserratAlternates";
            font-size: 1.2em;
            text-decoration: none;
        }

        .barra-superior a i {
            font-size: 1.8em;
            color: #603000;
        }

        .imagem-logo img {
            width: 75%;
            float: right;
        }

        .titulo-logo h4 {
            font-family: "brush-script-std-medium";
            font-size: 2.1em;
            color: #fc791e;
            text-align: left;
            padding-top: 10px;
        }*/
        /*  .carrossel-config .carousel-inner{
            max-height:250px ;
            max-width:550px ;

        }*/

       /* .carrossel-config img {
            max-height: 380px;
            width: 100%;
        }*/

       /* .config-card {
            padding-top: 30px;
        }

        .config-card .card h5 {
            text-align: center;
            font-family: "MontserratAlternates";
            font-size: 1.2em;
            color: #603000;
            font-weight: 900
        }
        /* .config-card .card  {
            border:1px solid #008000;
        }*/

      /*  .config-card .card .preco-produto {
            text-align: center;
            font-family: "MontserratAlternates";
            font-size: 1.4em;
            color: #fc791e;
            font-weight: 900;
        }

        .config-card .card .parcela-produto {
            text-align: center;
            font-family: "MontserratAlternates";
            font-size: 1em;
            color: #603000;
            font-weight: 900;
        }

        .config-card a {
            font-family: "MontserratAlternates";
            font-size: 0.8em;
            font-style: normal;
            color: #ffff;
            background: #fc791e;
            border: 3px inset #60300063;
            text-shadow: 0px -1px 10px #603000;
            box-shadow: 1px 1px 9px #000000;
            -moz-box-shadow: 1px 1px 9px #000000;
            -webkit-box-shadow: 1px 1px 9px #000000;
            border-radius: 53px 0px 90px 40px;
            -moz-border-radius: 83px 0px 90px 40px;
            -webkit-border-radius: 83px 0px 90px 40px;
            width: 20%;
            padding: 5px 10px;
            cursor: pointer;
        }

        .titulos-home h3 {
            font-family: "MontserratAlternates";
            padding-top: 30px;
            color: #fc791e;
            font-weight: 900;
            text-align: center;
            font-size: 2em;
        }

        .config-card a:active {
            cursor: pointer;
            position: relative;
            top: 2px;
        }

        .botao-direita {
            margin-left: 50px;
        }

        .config-card a:hover {
            color: #FFF;
            text-decoration: none;
        }

        .config-card .card img {
            max-height: 340px !important;
            min-height: 340px !important;
            border-radius: 20px 20px 0px 0px;
            border-bottom: 3px solid #fc791e;
        }

        .config-card .card-body {
            position: relative;
        }

        .config-card .card {
            max-height: 550px !important;
            border-radius: 20px 20px 20px 20px;
        }

        .config-card .card {
            max-height: 550px !important;
        }

        .balao-avisos p {
            color: #FFF;
            font-family: "MontserratAlternates";
            font-size: 0.8em;
        }

        .balao-avisos {
            padding: 5px;
            height: 50px;
            width: 148px;
            background-color: #fc791e;
            border-radius: 10px 10px 10px 10px;
            font-weight: 600;
            position: absolute;
            margin: 10px;
        }*/

       /* .depoimentos-foto img {
            max-height: 250px !important;
            min-width: 200px !important;
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            padding: 0;
            background-size: cover;
            border-radius: 100%;
            background-position: center;
            margin-top: 2%;
        }

        .depoimentos-texto h4 {
            font-family: "MontserratAlternates";
            padding-top: 20px;
            font-weight: 900;
            text-align: center;
            color: #603000;
            font-size: 1.8em;
        }

        .depoimentos-texto p {
            font-family: "MontserratAlternates";
            padding-top: 10px;
            font-weight: 500;
            text-align: center;
            color: #603000;
            font-size: 1em;
            padding-left: 25%;
            padding-right: 25%;
        }*/

        .rodape {
            background-color: #c3f3c8!important;
        }

        .titulos-footer h3 {
            font-family: "MontserratAlternates";
            padding-top: 10px;
            color: #603000;
            font-weight: 700;
            font-size: 1.5em;
        }

        .menu-rodape li a {
            font-family: "MontserratAlternates";
            color: #603000 !important;
            font-weight: 300;
            font-size: 1em;
        }

        .menu-rodape li a img {
            width: 50px;
        }
        /*celular*/

        @media all and (max-width: 800px) {
            .imagem-logo img {
                width: 20%;
                display: block;
                margin-left: auto;
                margin-right: auto;
                float: none;
            }
            .barra-superior {
                font-family: "MontserratAlternates";
                font-size: 1.2em;
                text-decoration: none;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .barra-superior a i {
                font-size: 1.2em;
                color: #603000;
            }
            .titulo-logo h4 {
                font-family: "brush-script-std-medium";
                font-size: 1.8em;
                color: #fc791e;
                text-align: center;
                padding-top: 10px;
            }
            .config-card .card {
                margin-top: 20px;
                margin-left: 20px;
            }
            .depoimentos-texto p {
                font-family: "MontserratAlternates";
                padding-top: 10px;
                font-weight: 500;
                text-align: center;
                color: #603000;
                font-size: 1em;
                padding-left: 5%;
                padding-right: 5%;
            }
        }
    </style>
</head>
@section('content')

<body>
    <!--cabecalho inicial-->
    @component('home.cabecalho_superior');
    @endcomponent
    <!--carrossel-->
    @component('home.carrossel');
    @endcomponent
    <!--Menu Principal-->
    @component('home.menu_principal');
    @endcomponent
    <!--Destaques-->
    @component('home.sessao_1');
    @endcomponent
    @component('home.sessao_2');
    @endcomponent
    @component('rodape.footer');
    @endcomponent
        {{--
        <div class="relative flex items-top   dark:bg-gray-900">
            @if (Route::has('login'))
            <div class="barra-superior fixed top-0 right-0 px-6 py-4 sm:block">
                <div class="my-2 my-lg-0">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a> @if (Route::has('register')) {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> @endif
                    <a id='teste1' href="{{ route('login') }}" class="text-sm text-gray-700 underline">Meu Carrinho</a>
                    <a id='teste1' href="{{ route('login') }}" class="text-sm text-gray-700 underline">Redes Sociais</a> @endauth
                    <div class='imagem-logo navbar-nav mr-auto mt-2 mt-lg-0'>
                        <img src="img\logoCrisCosmetica.jpeg" alt="..." class="rounded-circle">
                    </div>
                </div>
            </div>
            @endif
        </div>--}}
</body>
@endsection
