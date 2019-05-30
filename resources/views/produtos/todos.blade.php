@extends ('layout')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Ação</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($ps as $produto)
        <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->tipo}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>
                <a class="btn btn-success" href="/produtos/{{$produto->id}}" role="button">Ver</a>
                <a class="btn btn-warning" href="#" role="button">Editar</a>
                <a class="btn btn-danger" href="#" role="button">Apagar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection