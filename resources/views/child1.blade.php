@extends('layout')

@section('content')
<p>Aqui é o conteúdo da página</p>
<p>Onde houver uma diretiva @@yield, será gerada a @@section correspondente. Ou seja, uma @@section só aparece se houver uma @@yield correspondente.</p>
<p>Uma @@yield será substituída por tudo que estiver dentro da @@section correspondente.</p>
<p>Geralmente colocamos as @@yield na view pai e as @@section nas views filhas.</p>
<p>A diretiva @@show é uma abreviação para as seguintes diretivas: @@endsection @@yield('nome-da-secao').</p>
@endsection

@section('content2')
<p>Este é outro conteúdo</p>
@endsection