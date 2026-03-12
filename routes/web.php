<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobreNos', [App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato'); // metodo get
Route::post('/contato',[App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato'); // metodo post
Route::get('/login', function(){return 'login';})->name('site.login');

//metodo prefix prefixando o endereco e depois o metodo group agrupando co a funcão de callback o retante da rota neste endereço prefixado.
Route::prefix('/app')->group(function(){ 
    Route::get('/clientes',function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class,'index'])->name('app.fornecedores.index');
    Route::get('/produtos',function(){return 'produtos';})->name('app.produtos');
});

//passagem de parametros de uma rota para um controlador
Route::get('/teste/{p1}/{p2}',[App\Http\Controllers\testeController::class,'teste'])->name('teste');


Route::fallback(function(){
    echo'A rota acessada não existe. <a href="' .route('site.index') . '">clique aqui</a> para ir para a página principal';
});

