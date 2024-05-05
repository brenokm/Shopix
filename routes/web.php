<?php
 
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Login;
use App\Http\Controllers\Cadastro;
use App\Http\Controllers\Erro;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [Login::class, 'logar'])->name('login');

Route::get('/main', [Main::class, 'index'])->name('inicio');

Route::get('/cadastro', [Cadastro::class, 'cadastrar'])->name('cadastro');

Route::get('/erro', [Erro::class, 'erro'])->name('erro');
