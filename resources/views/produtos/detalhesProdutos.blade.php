 @extends('layouts.tema')
<style>
    .imagem-det-prod {
        padding: 10px;
        height: 60vh;
        width: 100%;
    }
    
    .img .imagem-det-prod {
        padding: 0%;
        border-radius: 20px 20px 20px 20px;
    }
    
    .card-produto {
        margin-top: 50px
    }
    
    @font-face {
        font-family: MontserratAlternates;
        src: url("../css/bibliotecas/MontserratAlternates-Regular.otf");
    }
    
    @font-face {
        font-family: brush-script-std-medium;
        src: url("../css/bibliotecas/brush-script-std-medium.otf");
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
    /*celular*/
    
    @media all and (max-width: 800px) {
        .card-produto .subtitulos {
            margin-top: 12px !important;
        }
        .contador {
            max-width: 150px;
        }
    }
</style>

@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
    <div class="row card-produto shadow-lg p-3 mb-5 bg-white rounded img">
        <div class="col-md-6">
            <img class="imagem-det-prod" src="../img/argila_verde_e_ hortela.jpeg" alt="Card image cap">
        </div>
        <div class="col-md-6">
            <h3 class="subtitulos">Argila verde e Hortelã</h3>
            <p class="subtitulos-2"> R$ 44,90</p>
            <p class="subtitulos-3">12x de R$6.48</p>
            <div class="row">
                <div class="col-md-3 col-sm-6 contador">
                    <input type="number" class=" form-control js-quantity-input form-control-inline" autocorrect="off" autocapitalize="off" name="quantity" value="1" min="1" aria-label="Alterar quantidade">
                </div>
                <div class="style-botao pt-2">
                    <a>Comprar</a>
                </div>
            </div>
            <label class="subtitulos-3 pt-3">Formas de Envio</label>
            <div class="input-group botao2">
                <input type="text" class="form-control pb-3" style="max-width:147px;" placeholder="Seu CEP" aria-label="" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <a class="btn btn-outline-secondary" type="button" id="button-addon2">Calcular</a>
                </div>
            </div>
            <a class="subtitulos-4">Não sei meu cep</a>
        </div>
        <div class="row p-4">
            <ul>
                <li class="font-text">
                    <b>Descrição do Produto:</b> Lorem ipsum dolor sit amet consectetur adipiscing elit non odio, porttitor ultricies scelerisque ex lobortis aliquet et pulvinar, tincidunt id habitant facilisi eros orci eget cras. Consectetur vestibulum
                    sociosqu placerat duis fermentum dapibus, sapien egestas nam dictumst quis, augue pharetra ornare est morbi. Tempor cubilia vitae dictumst condimentum dis suscipit bibendum libero magnis eleifend imperdiet, mus velit pellentesque eros
                    litora parturient praesent erat duis nec tincidunt, in at ex primis lectus et augue ipsum molestie quisque. Congue mollis velit turpis natoque habitant euismod malesuada, eros efficitur fames torquent tempus sollicitudin rutrum diam,
                    donec curabitur aenean facilisis dolor vulputate. Nam montes elit a inceptos nisl odio ligula aptent aenean imperdiet eu, dis vel arcu pharetra luctus at sagittis semper euismod.</li>
            </ul>

        </div>
    </div>
</div>
@component('rodape.footer'); @endcomponent @endsection