    
    @extends('layouts.main')

    @section('title', 'Página Inicial')

    @section('content')

    @foreach($events as $event)

    <p>{{$event->title}} -- {{$event->description}}</p>

    @endforeach

    @endsection