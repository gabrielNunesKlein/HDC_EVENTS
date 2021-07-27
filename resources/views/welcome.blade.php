@extends('layouts.main')

@section('title', 'HDC events')

@section('content')
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
@endsection
