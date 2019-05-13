@extends('layout')

{{--
    
comentario blade começa com duas chaves e dois sinal de menos e termina com dois sinais de menos e duas chaves.
um comentario blade pode ter várias linhas.

@component e @include são muito parecidos. o @include compartilha as variáveis da view, já o @component, não.
--}}


{{-- 
@section("title")
        Aprendendo Blade
@endsection
--}}
@section('title', 'Aprendendo Blade')

@section('header')
@parent {{-- se tirar a tag @parent, a section header é sobrescrita, se não,é anexada  --}}
Isto é anexado ao cabeçalho.
@endsection

@section('content')

<p>Este é o conteúdo da página</p>
<p>{{$msg}}</p>

@component('componentes.alerta', ['tipo' => 'primary'])
o <strong>componente alerta</strong> do framework
@endcomponent

@include('componentes.carta', ['titulo' => 'Este é o Título do Card'])

<p>Fim do conteúdo da página.</p>

@endsection

@section('sidebar')
<ul>
    <li>Um item do sidebar</li>
    <li>Outro item do sidebar</li>
</ul>
@endsection