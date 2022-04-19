@extends('template')

@section('conteudo')
<table class="table">
    <thead>
        <tr>
            <th>Fornecedor</th>
            <th>Produtos</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fornecedor as $f)
        <tr>
                <td>{{ $f->nome }}</td>
                <td>
            @foreach($f->produtos as $p)
                {{ $p->nome }} <br>
            @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection