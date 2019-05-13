@extends('layout');

@section('content')
<p>Bem vindo à turma {{$disciplina}}. Você está no {{$periodo}}º período.</p>
<p>Para acessar uma variável da página, você deve colocar o nome da variável entre colchetes duplos e cifrão</p>

@if($periodo > 6)
<p>Você já está no último período!</p>
@else
<p>Ainda falta um pouquinho pra acabar!</p>
@endif

<p>Lista:</p>
<ul>
    @for ($i = 1; $i <= 10; $i++)
    <li>{{$i}}º item da lista</li>
    @endfor
</ul>

<p>Alunos matriculados:</p>
<ul>
    @foreach ($alunos as $aluno)
    <li>{{$aluno}}</li>
    @endforeach
</ul>

@endsection

@section("sidebar")

<p>Frutas:</p>
<ul>
  @for ($i = 0; $i < sizeof($frutas); $i++)
    <li>{{ $frutas[$i] }}</li>
  @endfor
</ul>

@endsection
