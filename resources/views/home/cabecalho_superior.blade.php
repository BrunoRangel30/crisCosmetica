<style>
      /* .style-nav nav {
            /* position: fixed;
            z-index: 1;
            width: 100%;
        }*/

    .style-nav .bg-light {
        background-color: #c3f3c8!important;
    }

    .style-nav .imagem-logo {
        padding-right: 0px;
    }

    .style-nav .titulo-logo {
        padding-right: 0px;
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
    }
</style>
<section>
    <div class='style-nav'>
        <nav class="navbar navbar-light bg-light">
            <div class='row'>
                <div class='col-md-2 imagem-logo'>
                    <img src="{{asset('img\logo.jpeg')}}" alt="..." class="rounded-circle">
                </div>
                <div class='col-md-8 titulo-logo'>
                    <h4> Cris Cosmética Natural</h4>
                </div>
            </div>
            <form class="barra-superior form-inline my-2 my-lg-0">
              {{--  @if (Route::has('login'))--}}
                  {{--  @auth--}}
                        <a data-toggle="tooltip" href="{{ url('/dashboard') }}" class="inf-menu text-sm text-gray-700 underline"></a>
                       {{-- @else--}}
                        <a data-toggle="tooltip" data-placement="bottom" title='Login' href="{{ route('login') }}" class="text-sm text-gray-700 underline"><i class="far fa-user"></i></a>
                        @if (Route::has('register'))
                        {{--<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
                        @endif
                        <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom" title='Meu carrinho' class="inf-menu text-sm text-gray-700 underline"> <i class="fas fa-shopping-cart"></i> <span class="badge badge-light">0</span></a>
                        <a href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-instagram"></i></a>
                        <a href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-whatsapp"></i></a>
                   {{-- @endauth--}}
               {{-- @endif--}}
            </form>
        </nav>
    </div>
</section>
