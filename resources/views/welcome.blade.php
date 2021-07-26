<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Algum título</h1>
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
