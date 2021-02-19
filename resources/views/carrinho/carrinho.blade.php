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
    }
</style>

@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
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
                <div class="row card-produto  bg-white rounded img">
                    <div class="col">
                        <img class="imagem-det-prod" src="../img/argila_verde_e_ hortela.jpeg" alt="Card image cap">
                    </div>
                    <div class="col">
                        <p>Argilaverde e hortela</p>
                        <p>1</p>
                    </div>
                    <div class="col">
                        <p><i class="far fa-trash-alt"></i></p>
                        <p> R$ 12,39</p>
                    </div>
                </div>
                <div class="row card-produto bg-white rounded img">
                    <div class="col">
                        <p>SubTotal sem Frete</p>
                    </div>
                    <div class="col">
                        <p> R$ 12,39</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Formas de entrega </h3>
                <!--caso tenha inserido o cep-->
                <div class="row">
                    <div class="col">
                        <p>Cep: 39270-0000</p>
                    </div>
                    <div class="col">
                        <a>alterar Cep</a>
                    </div>
                </div>
                <h4>Envio a Domicílio </h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      PAC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      SEDEX
                    </label>
                </div>
                <h3>Outras Informações </h3>
                <div class="row">
                    <div class="col">
                        <a>Política de troca e devolução</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Total</p>
                    </div>
                    <div class="col">
                        <p>1736</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a>Finalizar Compra</a>
                    </div>
                    <div class="col">
                        <a>Continuar comprando</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@component('rodape.footer'); @endcomponent @endsection
