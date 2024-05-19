<?php
 
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ErroController;
use App\Http\Controllers\CarouselController;

Route::get('/', function () {
    return view('index');
});

Route::namespace('site')->group(function(){
    Route::get('/carousel',[CarouselController::class, 'invoke'])->name('carousel');
    Route::get('/login', [LoginController::class, 'logar'])->name('login');
    Route::get('/deslogin', [LoginController::class, 'deslogar'])->name('deslogin');
    Route::get('/main', [MainController::class, 'index'])->name('inicio');
    Route::get('/cadastro', [CadastroController::class, 'cadastrar'])->name('cadastro');
    Route::get('/erro', [ErroController::class, 'erro'])->name('erro');
});