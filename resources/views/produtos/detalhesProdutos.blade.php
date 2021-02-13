 @extends('layouts.tema')
<style>
    .imagem-det-prod {
        padding: 10px;
        height: 60vh;
        width: 100%;
    }
    
    @font-face {
        font-family: MontserratAlternates;
        src: url("../css/bibliotecas/MontserratAlternates-Regular.otf");
    }
    
    @font-face {
        font-family: brush-script-std-medium;
        src: url("../css/bibliotecas/brush-script-std-medium.otf");
    }
</style>

@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="imagem-det-prod" src="../img/argila_verde_e_ hortela.jpeg" alt="Card image cap">
        </div>
        <div class="col-md-6">
            <h3>Argila verde e Hortelã</h3>
            <p> R$ 44,90</p>
            <p>12x de R$6.48</p>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" class=" form-control js-quantity-input form-control-inline" autocorrect="off" autocapitalize="off" name="quantity" value="1" min="1" aria-label="Alterar quantidade">
                </div>
                <div class="col-md-6">
                    <button>Comprar</button>
                </div>
            </div>
            <label>Formas de Envio</label>
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Formas de Envio</button>
                </div>
            </div>
            <a>Não sei meu cep</a>
        </div>
    </div>
    <div class="row">
        <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipiscing elit non odio, porttitor ultricies scelerisque ex lobortis aliquet et pulvinar, tincidunt id habitant facilisi eros orci eget cras. Consectetur vestibulum sociosqu placerat duis fermentum dapibus,
                sapien egestas nam dictumst quis, augue pharetra ornare est morbi. Tempor cubilia vitae dictumst condimentum dis suscipit bibendum libero magnis eleifend imperdiet, mus velit pellentesque eros litora parturient praesent erat duis nec tincidunt,
                in at ex primis lectus et augue ipsum molestie quisque. Congue mollis velit turpis natoque habitant euismod malesuada, eros efficitur fames torquent tempus sollicitudin rutrum diam, donec curabitur aenean facilisis dolor vulputate. Nam
                montes elit a inceptos nisl odio ligula aptent aenean imperdiet eu, dis vel arcu pharetra luctus at sagittis semper euismod.</li>
        </ul>

    </div>
</div>
@endsection