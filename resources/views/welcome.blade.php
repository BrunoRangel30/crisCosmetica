@extends('layouts.tema')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <style>
        .style-nav .bg-light {
            background-color: #c3f3c8!important;
        }

        .style-nav .imagem-logo {
            padding-right: 0px;
        }

        .style-nav .titulo-logo {
            padding-right: 0px;
        }

        .style-nav-menu .bg-light {
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
        }

        .barra-superior a {
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
        }
        /*  .carrossel-config .carousel-inner{
            max-height:250px ;
            max-width:550px ;

        }*/

        .carrossel-config img {
            max-height: 380px;
            width: 100%;
        }

        .config-card {
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

        .config-card .card .preco-produto {
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
            }
        }
    </style>
</head>
@section('content')

<body>
    <div class='style-nav'>
        <nav class="navbar navbar-light bg-light">
            <div class='row'>
                <div class='col-md-2 imagem-logo'>
                    <img src="img\logo.jpeg" alt="..." class="rounded-circle">
                </div>
                <div class='col-md-8 titulo-logo'>
                    <h4> Cris Cosmética Natural</h4>
                </div>
            </div>
            <form class="barra-superior form-inline my-2 my-lg-0">
                @if (Route::has('login')) @auth
                <a data-toggle="tooltip" href="{{ url('/dashboard') }}" class="inf-menu text-sm text-gray-700 underline"></a>
                @else
                <a data-toggle="tooltip" data-placement="bottom" title='Login' href="{{ route('login') }}" class="text-sm text-gray-700 underline"><i class="far fa-user"></i></a> @if (Route::has('register')) {{--
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}} @endif
                <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom" title='Meu carrinho' class="inf-menu text-sm text-gray-700 underline"> <i class="fas fa-shopping-cart"></i></a>
                <a href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-instagram"></i></a>
                <a href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-whatsapp"></i></a> @endauth @endif
            </form>
        </nav>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carrossel-config" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="" src="img/carrossel/sabonete1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="" src="img/carrossel/sabonete1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="" src="img/carrossel/sabonete2.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--menu-->
    <div class='style-nav-menu'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-item nav-link active" href="#">Sabonetes Naturais <span class="sr-only">(current)</span></a>
                        <i class="fas fa-leaf"></i>
                    </li>
                    <li>
                        <a class="nav-item nav-link active" href="#">Cabelo</a>
                        <i class="fas fa-leaf"></i>
                    </li>
                    <li>
                        <a class="nav-item nav-link active" href="#">Pele</a>
                        <i class="fas fa-leaf"></i>
                    </li>
                    <li>
                        <a class="nav-item nav-link active" href="#">Maquiagem</a>
                        <i class="fas fa-leaf"></i>
                    </li>
                    <li>
                        <a class="nav-item nav-link active" href="#">Produtos Diversos</a>
                        <i class="fas fa-leaf"></i>
                    </li>
                    <li>
                        <a class="nav-item nav-link active" href="#">Minha Història</a>
                        <i class="fas fa-leaf"></i>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="titulos-home">
            <h3>Destaques</h3>
        </div>
        <div class="row config-card">
            <div class="col-md-4">
                <div class="card" style="width: 19rem;">
                    <img class="card-img-top" src="img/argila_verde_e_ hortela.jpeg" alt="Card image cap">
                    <div class="balao-avisos">
                        <p>30% off comprando 1 ou mais</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Argila Verde e Hortela</h5>
                        <p class="preco-produto">R$ 23,99</p>
                        <p class="parcela-produto">12 x de 4.99</p>
                        <a href="#" class="">Comprar</a>
                        <a href="#" class="botao-direita">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 19rem;">
                    <img class="card-img-top" src="img/foto_aveia.jpg" alt="Card image cap">
                    <div class="balao-avisos">
                        <p>30% off comprando 1 ou mais</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Aveia</h5>
                        <p class="preco-produto">R$ 23,99</p>
                        <p class="parcela-produto">12 x de 4.99</p>
                        <a href="#" class="">Comprar</a>
                        <a href="#" class="botao-direita">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 19rem;">
                    <img class="card-img-top" src="img/arginaRosa.jpeg" alt="Card image cap">
                    <div class="balao-avisos">
                        <p>30% off comprando 1 ou mais</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Argila Rosa</h5>
                        <p class="preco-produto">R$ 23,99</p>
                        <p class="parcela-produto">12 x de 4.99</p>

                        <a href="#" class="">Comprar</a>
                        <a href="#" class="botao-direita">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
