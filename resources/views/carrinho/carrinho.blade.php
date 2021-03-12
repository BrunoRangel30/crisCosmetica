@extends('layouts.tema')
<style>
    @font-face {
        font-family: MontserratAlternates;
        src: url("../css/bibliotecas/MontserratAlternates-Regular.otf");
    }

    @font-face {
        font-family: brush-script-std-medium;
        src: url("../css/bibliotecas/brush-script-std-medium.otf");
    }

    .imagem-det-prod {
        padding: 10px;
        height: 16vh;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    .img .imagem-det-prod {
        padding: 0%;
        border-radius: 20px 20px 20px 20px;
    }

    .card-produto {
        margin-top: 50px
    }

    .botao2 .btn-outline-secondary:hover {
        color: #fff;
        background-color: #fc791e;
        border-color: #603000 !important;
    }

    .botao2 .btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #fc791e;
        border-color: #603000 !important;
    }
    /*botao quantidade*/

    .botao-soma {
        border: 3px inset #604a00bb;
        display: inline-flex;
        height: 3vh;
        width: 90px;
        text-align: center;
        border-radius: 5px 5px 5px 5px;
    }

    .botao-soma p {
        width: 30px;
    }

    .botao-soma i {
        width: 30px;
        padding-top: 3px;
        background-color: #fc791e;
        color: #fff;
        cursor: pointer;
    }

    .formas-envio {
        display: inline-flex;
        border: 3px inset #604a00bb;
        border-radius: 5px 5px 5px 5px;
        margin-left: 8px;
        margin-top: 8px;
    }

    .formas-envio-desmarcado {
        display: inline-flex;
        border-radius: 5px 5px 5px 5px;
        margin-left: 8px;
        margin-top: 8px;
    }

    .formas-envio i {
        border-right: 3px inset #604a00bb;
        background-color: #fc791e;
        color: #ffff;
        font-size: 1.3em;
    }

    .formas-envio-desmarcado i {
        background-color: #FFF;
        color: #fc791e;
        font-size: 1.3em;
    }

    .inf-envio {
        display: block;
    }
    /*
    /*

    .botao-soma i {
        padding: 5px;
    }
    /*celular*/

    @media all and (max-width: 800px) {
        .card-produto .subtitulos {
            margin-top: 12px !important;
        }
        .contador {
            max-width: 150px;
        }
        .imagem-det-prod {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 30vh;
        }
        .botao-soma {
            border: 3px inset #604a00bb;
            display: inline-flex;
            height: 4vh;
            width: 90px;
            text-align: center;
            border-radius: 5px 5px 5px 5px;
        }
       /* .style-botao a {
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
            display: block;
            margin-left: auto;
            margin-left: auto;
            text-align: center;
        }*/
    }
</style>

@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
    <form action="{{route('finalizar')}}" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <h3 class="titulo"> Itens do Carrinho</h3>
                    <div class="row card-produto bg-white rounded img">
                        <div class="col-md-4">
                            <img class="imagem-det-prod" src="../img/argila_verde_e_ hortela.jpeg" alt="Card image cap">
                        </div>
                        <div class="col">
                            <p class="subtitulos">Argila verde e hortela</p>
                            <p class="subtitulos"><i class="far fa-trash-alt"></i></p>
                            <div class="botao-soma">
                                <i class="fas fa-minus"></i>
                                <p>1</p>
                                <i class="fas fa-plus"></i>
                            </div>
                            <p class="subtitulos-2 pt-3"> R$ 12,39</p>
                        </div>
                    </div>
                    <div class="row card-produto bg-white rounded img">
                        <div class="col-md-4">
                            <img class="imagem-det-prod" src="../img/argila_verde_e_ hortela.jpeg" alt="Card image cap">
                        </div>
                        <div class="col">
                            <p class="subtitulos">Argila verde e hortela</p>
                            <p class="subtitulos"><i class="far fa-trash-alt"></i></p>
                            <div class="botao-soma">
                                <i class="fas fa-minus"></i>
                                <p>1</p>
                                <i class="fas fa-plus"></i>
                            </div>
                            <p class="subtitulos-2 pt-3"> R$ 12,39</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <p class="subtitulos">SubTotal sem Frete</p>
                        </div>
                        <div class="col">
                            <p class="subtitulos-2"> R$ 12,39</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <h3 class="titulo">Formas de entrega </h3>
                    <!--caso tenha inserido o cep-->
                    <div class="row">
                        <div class="col">
                            <p class="subtitulos-3 p-2">Cep: 39270-0000</p>
                        </div>
                        <div class="col p-2">
                            <button class="style-botao"><a>alterar Cep</a><button>
                        </div>
                    </div>
                    <h4 class="subtitulos-5">Envio a Domicílio </h4>
                    <div class="formas-envio">
                        <i class="far fa-check-square p-3"></i>
                        <div class="inf-envio">
                            <p class="subtitulos-3 m-1 pl-1">PAC Correios</p>
                            <p class="subtitulos-3 m-1 pl-1">Chega ate dia 21/03/2021</p>
                        </div>
                        <p class="subtitulos-5 pl-3 pt-3 pr-3">32,90</p>
                    </div>
                    <div class="formas-envio-desmarcado">
                        <i class="far fa-square p-3"></i>
                        <div class="inf-envio">
                            <p class="subtitulos-3 m-1">PAC Correios</p>
                            <p class="subtitulos-3 m-1">Chega ate dia 21/03/2021</p>
                        </div>
                        <p class="subtitulos-5 pl-3 pt-3 pr-3">32,90</p>
                    </div>
                    <h3 class="subtitulos-5 pt-2">Outras Informações </h3>
                    <div class="row">
                        <div class="col">
                            <a class="subtitulos-4 p-2">Política de troca e devolução</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="subtitulos pt-3">Total</p>
                        </div>
                        <div class="col">
                            <p class="subtitulos pt-3"> R$ 1736</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pt-3">
                            <button class='style-botao' type="submit"><a>Finalizar Compra</a></button>
                        </div>
                        <div class="col-md-6 p-3">
                            <button class='style-botao'><a>Continuar Comprando</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@component('rodape.footer') @endcomponent
@endsection
