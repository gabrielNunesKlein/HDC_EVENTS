@extends('layouts.main')

@section('title', 'produtos')

@section('content')
<h1>Está é a pagina de produtos</h1>
<p>Você pesquisou por {{ $busca }}</p>
<a href="/">Voltar para pagina home</a>
@endsection