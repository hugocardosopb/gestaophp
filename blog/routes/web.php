<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/contatos/{id}', [\App\Http\Controllers\ContatoController::class, 'contatos'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login', function() {
    return 'Login';
})->name('site.login');


//neste bloco de codigo uso o prefix para agrupar rotas, para que seja acessiveis somente para um prefixo, ex: "/admin/painel" especifico.
Route::middleware('isAuthenticated:hugo')->prefix('app')->group(function() {
    Route::get('/clientes', function() {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index']
    )->name('app.fornecedores');

    Route::middleware('log.acesso')->get('/produtos', function() {
        return 'Produtos';
    });
})->name('app.produtos');



Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');


Route::fallback(function(){
    echo 'A rota que você acessou não existe. <a href="'.route('site.index').'">Clique aqui <a/> para voltar ao menu principal.';
});