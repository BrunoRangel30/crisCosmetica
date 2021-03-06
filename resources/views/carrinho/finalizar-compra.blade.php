@extends('layouts.tema')
<style>

</style>
@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
    <div class="mt-5">
        @component('carrinho.resumo_pedido');
    </div>
    @endcomponent @component('carrinho.menu_finalizar_compra'); @endcomponent

</div>
@endsection