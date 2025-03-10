<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatoController::class, 'show'])->name('form');

// Adicione esta rota para a página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');