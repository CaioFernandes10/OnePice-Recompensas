<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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



// Route::get('/recompensas',[\App\Http\Controllers\recompensaController::class, 'index'])->name('paginas.recompensa');




Route::get('/login/{erro?}',[\App\Http\Controllers\UsuariosController::class, 'index'])->name('paginas.login');
Route::post('/auth',[\App\Http\Controllers\UsuariosController::class, 'autenticacao'])->name('paginas.auth');



Route::middleware('autetificacao')->group(function () {

    Route::get('/auth/sair',[\App\Http\Controllers\UsuariosController::class, 'sair'])->name('paginas.sair');
    Route::get('/inicio',[\App\Http\Controllers\homeController::class, 'index'])->name('paginas.home');
    Route::get('/recompensas',[\App\Http\Controllers\recompensaController::class, 'index'])->name('paginas.recompensa');
    Route::get('/recompensas/deletar/{id}',[\App\Http\Controllers\recompensaController::class, 'deletar'])->name('paginas.delete');
    Route::POST('/',[\App\Http\Controllers\dadosController::class, 'index'])->name('paginas.dados');
    Route::get('/recompensas/show/{id}',[\App\Http\Controllers\recompensaController::class, 'show'])->name('paginas.show');
    
});

Route::fallback(function () {
    echo 'rota acessada nao existe. <a href="' . route('paginas.login') . '">clique aqui</a> para voltar para o inicio';
});