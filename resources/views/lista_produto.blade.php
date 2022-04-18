@extends('template')

@section('conteudo')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>NCM</th>
            <th>Valor</th>
            <th>Fornecedor</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($produtos as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->categoria }}</td>
        <td>{{ $p->NCM }}</td>
        <td>{{ $p->valor }}.00</td>
        <td>{{ $p->id_fornecedor }}</td>
        <td>
            <a href="{{ route('produtos_alterar', ['id' => $p->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="{{ route('produtos_excluir', ['id' => $p->id]) }}" onclick="excluir({{ $p->id }})" class="btn btn-danger">Excluir</a>
        </td>

    </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('produtos_novo')}}"><button class="btn btn-primary">Voltar</button> </a>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o produto ${id}?`)){
            location.hrfe = route('produtos_excluir', {'id':id});
        }
    }
</script>
@endsection