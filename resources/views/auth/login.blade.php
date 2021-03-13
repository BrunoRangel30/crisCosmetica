@extends('layouts.tema')

<style>
    .box-login {
        border: 2px inset #fc791e;
        width: 40%;
        margin-right: auto !important;
        margin-left: auto !important;
        margin-top: 50px;
        display: block;
        padding-left: 50px;
        padding-right: 50px;
        border-radius: 20px;
    }

    .box-login .form-control {
        margin-right: auto !important;
        margin-left: auto !important;
        display: block;
        text-align: center;
        position: relative;
        width: 100%;
    }

    .center button {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .center a:hover {
        color: #603000 !important;
        text-decoration: none;
    }

    .illustration img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        padding: 15px;
    }


    @media all and (max-width: 800px) {
        .box-login {
            border: 2px inset #fc791e;
            width: 90%;
            margin-right: auto !important;
            margin-left: auto !important;
            margin-top: 30px;
            display: block;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 20px;
        }
        .illustration img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
            padding: 15px;
        }
         ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #603000 !important;
            font-family: "MontserratAlternates";
            font-weight: 900;
            font-size: 0.8em;
            /* Firefox */
        }
    }
</style>
@section('content')
    <!--cabecalho inicial-->
    @component('home.cabecalho_superior');
    @endcomponent
    <!--Menu Principal-->
    @component('home.menu_principal');
    @endcomponent
    <div class="container">
        <div class="box-login shadow-lg bg-white rounded">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="illustration p-2">
                    <img src='img/logo.jpeg'>
                </div>
                <x-jet-validation-errors class="mb-4 alert alert-danger" />
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                <div class="form-group p-2">
                    <input class="form-control borda-input" :value="old('email')" autofocus type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group p-2">
                    <input class="form-control" type="password" name="password" autocomplete="current-password" placeholder="Senha">
                </div>
                <div>
                    <div class="form-group p-2">
                        <button style="width: 110px;" class="style-botao" type="submit"><a>Entrar</a></button>
                    </div>
                </div>
                {{-- <a class="forgot" href="{{ route('register') }}">Cadastrar usuário</a>--}}
                @if (Route::has('password.request'))
                    <div class="center p-2">
                        <button class="p-2"><a class="forgot  subtitulos-4" href="{{ route('password.request') }}">esqueceu sua senha?</a> </button>
                        <button><a class="forgot  subtitulos-4" href={{route( 'register')}} class="row balao">cadastre-se</a></button>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
