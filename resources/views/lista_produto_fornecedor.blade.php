@extends('template')

@section('conteudo')
@foreach($fornecedor as $f)
<table class="table">
    <thead>
        <tr>
            <th>Fornecedor</th>
            <th>Produtos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $f->nome }}</td>
            <td>{{ $f->produtos }}</td>
        </tr>
    </tbody>
</table>
@endforeach
@endsection