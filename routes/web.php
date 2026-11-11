<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/marcas/{id}', [App\Http\Controllers\HomeController::class, 'marcas'])->name('marcas');
Route::get('/produto/{id}', [App\Http\Controllers\HomeController::class, 'produto'])->name('produto');
