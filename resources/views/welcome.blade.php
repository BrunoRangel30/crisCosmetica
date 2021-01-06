@extends('layouts.tema')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <style>

        .style-nav .bg-light{
            background-color: #c3f3c8!important;
        }
        .style-nav .imagem-logo {
            padding-right: 0px;
        }
        .style-nav .titulo-logo {
            padding-right: 0px;
        }
        .style-nav-menu .bg-light{
            background-color: #c3f3c8!important;
        }
        .style-nav-menu a{
            font-family: "MontserratAlternates";
            font-size: 1.2em;
            color:#603000;
        }
        .style-nav-menu .navbar-nav{
            margin-left: auto;
            margin-right: auto;

        }
        .style-nav-menu .navbar-nav li{
           text-align: center;

        }
        .style-nav-menu .navbar-nav li a{
          padding-bottom:0px;

        }
        .style-nav-menu .navbar-nav li i{
           color: #008000;

        }

        .barra-superior a{
            padding-right: 35px;
            font-family: "MontserratAlternates";
            font-size: 1.2em;
            text-decoration: none;
        }
        .barra-superior a i{
            font-size: 1.8em;
            color:#603000;
        }
        .imagem-logo img{
            width: 75%;
            float: right;
        }
        .titulo-logo h4{
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
        .carrossel-config img{
            max-height:380px ;
            width: 100%;
        }
        /*celular*/
        @media all and (max-width: 800px){

            .imagem-logo img{
                width: 20%;
                display: block;
                margin-left: auto ;
                margin-right: auto ;
                float: none;
           }
           .barra-superior{
                font-family: "MontserratAlternates";
                font-size: 1.2em;
                text-decoration: none;
                display: block;
                margin-left: auto ;
                margin-right: auto ;
            }
            .barra-superior a i{
                font-size: 1.2em;
                color:#603000;
            }
            .titulo-logo h4{
                font-family: "brush-script-std-medium";
                font-size: 1.8em;
                color: #fc791e;
                text-align: center;
                padding-top: 10px;
            }

        }


        /*#c3f3c8!important;*/

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
                        @if (Route::has('login'))
                                @auth
                                    <a data-toggle="tooltip"  href="{{ url('/dashboard') }}" class="inf-menu text-sm text-gray-700 underline"></a>
                                @else
                                    <a data-toggle="tooltip" data-placement="bottom" title='Login' href="{{ route('login') }}" class="text-sm text-gray-700 underline"><i class="far fa-user"></i></a>
                                @if (Route::has('register'))
                                        {{--<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
                                @endif
                                        <a  href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom" title='Meu carrinho' class="inf-menu text-sm text-gray-700 underline"> <i class="fas fa-shopping-cart"></i></a>
                                        <a  href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-instagram"></i></a>
                                        <a  href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-whatsapp"></i></a>

                                @endauth
                        @endif
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
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <i class="fas fa-leaf"></i>
                    </li>
                    <li>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <i class="fas fa-leaf"></i>
                    <li>
                    <li>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <i class="fas fa-leaf"></i>
                    </li>
                </ul>
                </div>
            </nav>
         </div>
       {{-- <div class="relative flex items-top   dark:bg-gray-900">
            @if (Route::has('login'))
                <div class="barra-superior fixed top-0 right-0 px-6 py-4 sm:block">
                        <div class="my-2 my-lg-0">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                @if (Route::has('register'))
                                {{--  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                                <a id='teste1' href="{{ route('login') }}" class="text-sm text-gray-700 underline">Meu Carrinho</a>
                                    <a id='teste1' href="{{ route('login') }}" class="text-sm text-gray-700 underline">Redes Sociais</a>
                            @endauth
                            <div class='imagem-logo navbar-nav mr-auto mt-2 mt-lg-0'>
                               <img src="img\logoCrisCosmetica.jpeg" alt="..." class="rounded-circle">
                            </div>
                        </div>
                </div>
            @endif
        </div>--}}
    </body>
    @endsection

