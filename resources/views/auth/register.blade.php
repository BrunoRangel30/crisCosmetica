@extends('layouts.tema')
<style>
    .center-texto {
        text-align: center;
    }

    .margin-form {
        padding-left: 10px;
        padding-right: 10px;
        margin-top: 50px;
    }

    .cores-icones-medio {
        color: #603000;
        font-size: 1.4em;
    }
</style>
@section('content')
<!--cabecalho inicial-->
@component('home.cabecalho_superior'); @endcomponent
<!--Menu Principal-->
@component('home.menu_principal'); @endcomponent
<div class="container">
    <div class="box-login shadow-lg bg-white rounded center-elem margin-form lavel-form ">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="center-texto pt-4 pb-2">
                <a class="text-sm text-gray-700 "><i class="far fa-user cores-icones-medio"></i></a>
                <label class="subtitulos-2 pl-2">Cadastre-se</label>
            </div>
            <x-jet-validation-errors class="mb-4 p-2 alert alert-danger" /> @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <div class="form-group p-2 ">
                <div class="row">
                    <div class="col-md-4">
                        <label>Nome</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="nome" name="email">
                    </div>
                    <div class="col-md-4 pt-2">
                        <label>E-mail</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email">
                    </div>
                    <div class="col-md-3 pt-2">
                        <label>Senha</label>
                        <input class="form-control borda-input" type="password" name="password" autocomplete="current-password">
                    </div>
                </div>
            </div>
            <div class="form-group p-2">
                <div class="row">
                    <div class="col-md-2 pt-2">
                        <label>Data de Nascimento</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="data_de_nascimento">
                    </div>
                    <div class="col-md-2 pt-2">
                        <label>Telefone</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email">
                    </div>
                </div>
            </div>
            <div class="form-group p-2">
                <div class="row">
                    <div class="col-md-4 pt-2">
                        <label>Endereço</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus name="endereco">
                    </div>
                    <div class="col-md-2 pt-2">
                        <label>N°</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus name="numero">
                    </div>
                    <div class="col-md-3 pt-2">
                        <label>Bairro</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pt-2">
                        <label>Cidade</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email">
                    </div>
                    <div class="col-md-2 pt-2">
                        <label>UF</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email">
                    </div>
                    <div class="col-md-3 pt-2">
                        <label>CEP</label>
                        <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email">
                    </div>
                </div>
            </div>
            <div>
                <div class="form-group pt-2 pb-2">
                    <button style=" width: 110px;" class="style-botao " type="submit "><a>Salvar</a></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
