@extends('template')

@section('titulo')
Alterar cliente - #{{ $cliente->id }}
@endsection

@section('conteudo')
<form method="post" action="{{ route('clientes_salvar') }}">
        @csrf
        <div class="card">
            <div class="card-header bg-secondary mb-1 text-white">Alterar cliente - #{{ $cliente->id }}</div>
            <div class="card mb-1 mx-auto" style="width: 99%;">
                    <div class="card-header" style="margin-bottom: 16px;">Dados do produto</div>
                    <div class="container-fluid">
                        <input type="hidden" name="id" value="{{ $cliente->id }}">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nome</label>
                            <input id="nome" type="text" class="form-control" onchange="validar();" name="nome" value="{{ $cliente->nome }}">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Telefone</label>
                            <input id="telefone" type="text" class="form-control" onchange="validar();" name="telefone" value="{{ $cliente->telefone }}">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Renda</label>
                            <input id="renda" type="text" class="form-control" onchange="validar();" name="renda" value="{{ $cliente->renda }}">
                        </div>
                        <div class="input-group mb-3">
                            <input id="salvar" type="submit" class="btn btn-success" value="salvar" disabled>
                        </div>
                    </div>
            </div>
        </div>
</form>

<script>
    function validar() {
        if (nome.value && telefone.value && renda.value)
            salvar.disabled = false;
        else
            salvar.disabled = true;
    }
</script>
@endsection