@extends('layouts.tema')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->

</head>
@section('content')

<body>
    <!--cabecalho inicial-->
    @component('home.cabecalho_superior');
    @endcomponent
    <!--carrossel-->
    @component('home.carrossel');
    @endcomponent
    <!--Menu Principal-->
    @component('home.menu_principal');
    @endcomponent
    <!--Destaques-->
    @component('home.sessao_1');
    @endcomponent
    @component('home.sessao_2');
    @endcomponent
    @component('rodape.footer');
    @endcomponent
        {{--
        <div class="relative flex items-top   dark:bg-gray-900">
            @if (Route::has('login'))
            <div class="barra-superior fixed top-0 right-0 px-6 py-4 sm:block">
                <div class="my-2 my-lg-0">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a> @if (Route::has('register')) {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> @endif
                    <a id='teste1' href="{{ route('login') }}" class="text-sm text-gray-700 underline">Meu Carrinho</a>
                    <a id='teste1' href="{{ route('login') }}" class="text-sm text-gray-700 underline">Redes Sociais</a> @endauth
                    <div class='imagem-logo navbar-nav mr-auto mt-2 mt-lg-0'>
                        <img src="img\logoCrisCosmetica.jpeg" alt="..." class="rounded-circle">
                    </div>
                </div>
            </div>
            @endif
        </div>--}}
</body>
@endsection
