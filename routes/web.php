<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste/{nome}', function ($nome){
    return "<h1>Ola ".$nome."!</h1>";
});

Route::get('/soma/{n1}/{n2}', function ($n1, $n2){
    return "<h1>A soma e: ".$n1+$n2."!</h1>";
});

//Route::get('genres', [\App\Http\Controllers\GenreController::class, 'index']);
Route::resource('genres', \App\Http\Controllers\GenreController::class);
