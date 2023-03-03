<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index(){
        
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function login(){
        return view('enter.login');
    }

    public function store(Request $request){
        $request = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description= $request->description;

        $event->save();

        return redirect('/')->with('msg', 'Evento Criado com Sucesso!');
    }
}
