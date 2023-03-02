    @extends('layouts.main')

    @section('title', 'Routes')

    @section('content')
        <h2>testando routes em lavarel!!!</h2>

        @if($busca != '')
            <p>O usuário está buscando por: {{$busca}}</p>
        @endif

        <a href="/">voltar para o início</a><br>
        <a href="/test">teste 1</a>   
    @endsection