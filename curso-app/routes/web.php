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

    $arr = [1,2,3,4,5,6];

    $pessoas = ["Veigh", "Felipe", "Thiago dos Prédios", "Kevin"];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'estudo' => $estudo,
        'arr' => $arr,
        'pessoas' => $pessoas
    ]);
});

Route::get('/test', function (){
    return view('test');
});

Route::get('/routes', function (){

    $busca = request('search');

    return view('routes', ['busca' => $busca]);
});

Route::get('/routes_test/{id?}', function ($id = null){
    return view('route', ['id' => $id]);
});
