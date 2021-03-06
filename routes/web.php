<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/detalhes_produtos/{nome}', 'App\Http\Controllers\Produtos\ProdutosController@detalhesProdutos')->name('detalhes_produtos');
Route::get('/carrinho_resumo/{nome}', 'App\Http\Controllers\Carrinho\CarrinhoController@show')->name('carrinho_resumo');
Route::post('/finalizar', 'App\Http\Controllers\Carrinho\CarrinhoController@finalizarCompra')->name('finalizar');
Route::get('/cartao', 'App\Http\Controllers\Carrinho\CarrinhoController@finalizarCartao')->name('cartao');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Redirect::intended();
})->name('dashboard');

Route::get('/sair', function () {
    Auth::logout();
   return redirect(url()->previous());
})->name('sair');
