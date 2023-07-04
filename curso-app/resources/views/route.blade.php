@extends('layouts.main')

@section('title', 'Parâmetros URL')

@section('content')
    @if($id != null)
    <p>Exibindo produto id: {{$id}}</p>
    @endif
@endsection