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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/enter/login', [EventController::class, 'login']);

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
