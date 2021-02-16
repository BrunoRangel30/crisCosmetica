<style>
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

    @media all and (max-width: 800px) {
        .config-card .card {
            margin-top: 20px;
            margin-left: 20px;
        }
    }
</style>
<section>
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

                        <a id='1' onclick="exibirDetalhes(this)" href="{{route('detalhes_produtos','Argila Verde e Hortela')}}"class="botao-direita">Ver mais</a>
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
</section>
