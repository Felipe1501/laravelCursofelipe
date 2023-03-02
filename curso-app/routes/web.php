<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = 'Felipe';
    $idade = 18;
    $estudo = 'Ciencia da Computação';

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'estudo' => $estudo]);
});

Route::get('/test', function (){
    return view('test');
});

Route::get('/routes', function (){
    return view('routes');
});
