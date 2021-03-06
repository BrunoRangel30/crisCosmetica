@extends('layouts.tema')
<style>

</style>
@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
    @component('carrinho.resumo_pedido'); @endcomponent @component('carrinho.menu_finalizar_compra'); @endcomponent

    <form class="mt-4">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Numero do Cartão</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Validade</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Código de segurança</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Nome Completo</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress2">CPF</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Telefone</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Data de Nascimento</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1x de R$ 17.99 sem juros </option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"> Finalizar Compra</button>
    </form>
</div>

@endsection