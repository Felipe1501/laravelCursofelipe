<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    
    <body>
        <h1>HELLO HELLO</h1>
        <img src="/img/spider.png" alt="Spider">
        @if(10 > 15)
        <p>testando fi</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
        <p>O nome é pedro</p>
        @elseif($nome == "Felipe")
        <p>o nome é {{$nome}} e ele tem {{$idade}} anos e estuda {{$estudo}}</p>
        @else
        <p>o nome nao é pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
                <p>{{$arr[$i]}} - {{$i}}</p>
                @if($i == 5)
                <p>o i é 5</p>
                @endif
        @endfor

        {{--
            @php
                $name = "Felipe";
                echo $name;
             @endphp
        --}}


        <!-- comentário -->
        {{-- comentário com blade --}}

        @foreach($pessoas as $nome)
                <p>{{$loop->index}}</p>
                <p>{{$nome}}</p>
        @endforeach
    </body>
</html>
