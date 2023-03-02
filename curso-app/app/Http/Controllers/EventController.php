<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
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
    }

    public function create(){
        return view('events.create');
    }

    public function login(){
        return view('enter.login');
    }
}
