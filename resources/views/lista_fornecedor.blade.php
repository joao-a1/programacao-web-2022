@extends('template')

@section('conteudo')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fornecedores as $f)
    <tr>
        <td>{{ $f->id }}</td>
        <td>{{ $f->nome }}</td>
        <td>{{ $f->endereco }}</td>
        <td>{{ $f->cep }}</td>
        <td>{{ $f->cidade }}</td>
        <td>{{ $f->estado }}</td>

        <td>
            <a href="{{ route('fornecedores_alterar', ['id' => $f->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="{{ route('fornecedores_excluir', ['id' => $f->id]) }}" onclick="excluir({{ $f->id }})" class="btn btn-danger">Excluir</a>
        </td>

    </tr>
    @endforeach
    </tbody>
</table>
<div class="container fluid">
    <div>
        <a href="{{ route('fornecedores_novo')}}"><button class="btn btn-primary">Voltar</button> </a>
        <a href="{{ route('produtos_fornecedores_listar')}}"><button class="btn btn-primary">Produtos - Fornecedor</button> </a>
    </div>
</div>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.hrfe = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection