@extends('layout')

@section('content')
<h5>Tipo: {{$produto->tipo}}</h5>
<ul>
    <li>Descrição: {{$produto->descricao}}</li>
    <li>Preço: {{$produto->preco}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
</ul>
@endsection
