<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/CSS/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Banner"/>
        @if(10 > 9)
        <p>Verdadeiro</p>
        @else
        <p>Falso</p>
        @endif

        <h3>Nome é {{ $nome }} idade {{ $idade }} trabalha como {{ $profissao }}</h3>

        <p>Repetição For</p>
        @for($i = 0; $i < count($array); $i++)
            <p>Numero => {{ $array[$i] }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        <p>Repetição Foreach</p>
        @foreach($nomes as $nome)
            <p>Nome => {{ $nome }}</p>
        @endforeach

        <p>PHP puro</p>
        @php
            $nome = "Gabriel";
            echo $nome;
        @endphp
    </body>
</html>
