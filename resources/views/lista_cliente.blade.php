@extends('template')

@section('conteudo')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Renda</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->telefone }}</td>
        <td>{{ $c->renda }}</td>
        <td>
            <a href="{{ route('clientes_alterar', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="{{ route('clientes_excluir', ['id' => $c->id]) }}" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
        </td>

    </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('clientes_novo')}}"><button class="btn btn-primary">Voltar</button> </a>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o cliente ${id}?`)){
            location.hrfe = route('clientes_excluir', {'id':id});
        }
    }
</script>
@endsection