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
        .tooltip-login {
            position: absolute;
            z-index: 1;
            margin-top: 0px !important;
            margin-left: 23px;
            border: 3px inset #604a00bb;
            width: 160px !important;
            font-size: 0.5em;
            text-align: center;
            /* background-color: #c3f3c8; */
            background-color: antiquewhite;
            border-radius: 10px 10px 10px 10px;
        }
        .style-botao-login a {
            font-family: "MontserratAlternates";
            font-size: 0.8em !important;
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
            cursor: pointer;
            padding: 2px !important;
            width: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 8px;
            margin-bottom: 8px;
            z-index: 1;
        }

        .inf-log button{
            display: block;
            margin-left: auto;
            margin-right: auto;
            background: #603000;
            margin-bottom: 5px;
            margin-top: 5px;
        }
        .user-logado i{
            margin-left: 70px;

        }
        .inf-log a{
            color: #603000;
            font-family: "MontserratAlternates";
            font-size: 0.6em !important;
            color: #ffffff;
            letter-spacing: 2px
        }
    }

    .tooltip-login {
        position: absolute;
        z-index: 2;
        margin-top: 160px;
        border: 3px inset #604a00bb;
        width: 200px;
        font-size: 0.7em;
        text-align: center;
        /* background-color: #c3f3c8;*/
        background-color: antiquewhite;
        border-radius: 10px 10px 10px 10px;
        display: none;
    }

    .balao {
        position: relative;
        display: block;
    }

    .style-botao-login a {
        font-family: "MontserratAlternates";
        font-size: 1em;
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
        cursor: pointer;
        padding: 3px;
        width: 90px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        margin-bottom: 12px;
    }

    .seta-balao {
        position: absolute;
        font-size: 2em;
        margin-top: 67px;
        margin-left: 40px;
        color: #603000;
        display: none;
    }
    .nome-user {
        display: inline-flex;

    }
   .user-logado {
        padding-right: 5px !important
    }
    .inf-log{
        font-family: "MontserratAlternates";
        display:list-item;
        list-style:none;
        padding-right: 5px;
        padding-left: 5px;
        letter-spacing: 2px

    }
    .inf-log p{
        margin-bottom: 0px !important;
    }
    .inf-log a{
        color: #603000;
        font-family: "MontserratAlternates";
        padding-right: 5px;
        font-size: 0.8em;
        color: #ffffff;
        padding-right:  2px;
        letter-spacing: 2px
    }
    .inf-log button{

       display: block;
       margin-left: auto;
       margin-right: auto;
       background: #603000
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
            <form class="barra-superior form-inline my-2 my-lg-0" method="POST">
                {{-- @if (Route::has('login'))--}} {{-- @auth--}}
                <a data-toggle="tooltip" href="{{ url('/dashboard') }}" class="inf-menu text-sm text-gray-700 underline"></a>
                {{-- @else--}}

                @if(!Auth::check())
                    <a class="text-sm text-gray-700"><i class="far fa-user balao-user"></i></a>
                    <p class="seta-balao"><i class="fas fa-caret-up"></i></p>
                    <div class="tooltip-login style-botao-login shadow-lg  rounded">
                        <a href="{{ route('login') }}" class="row balao">entrar</a>
                        <a href={{route('register')}} class="row balao">cadastro</a>
                    </div>
                @else
                    <a class="user-logado"><i class="far fa-user"></i></a>
                    <div class="inf-log">
                        <p class="pr-2">Olá, <b>{{auth()->user()->name}}</b></p>
                        <button type="button" class="btn btn-secondary"><a href="{{ route('sair') }}"> Sair</a></button>
                    </div>
                @endif
                @if (Route::has('register')) {{--
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
                @endif
                <a href="{{route('carrinho_resumo','Argila Verde e Hortela')}}" data-toggle="tooltip" data-placement="bottom" title='Meu carrinho' class="inf-menu text-sm text-gray-700 underline"> <i class="fas fa-shopping-cart"></i> <span class="badge badge-light">0</span></a>
                <a href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-instagram"></i></a>
                <a href="{{ route('login') }}" class="inf-menu text-sm text-gray-700 underline"><i class="fab fa-whatsapp"></i></a>
                {{-- @endauth--}}
                {{-- @endif--}}
            </form>
        </nav>
    </div>
</section>
