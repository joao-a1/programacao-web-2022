@extends('template')

@section('titulo')
Fornecedor-Novo
@endsection

@section('conteudo')
    <form method="post" action="{{ route('fornecedores_novo') }}">
        @csrf
        <div class="card">
            <div class="card-header bg-secondary mb-1 text-white">Novo fornecedor</div>
            <div class="card mb-1 mx-auto" style="width: 99%;">
                    <div class="card-header" style="margin-bottom: 16px;">Dados do fornecedor</div>
                    <div class="container-fluid">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nome</label>
                            <input id="nome" type="text" class="form-control" onchange="validar();" name="nome">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Endereço</label>
                            <input id="endereco" type="text" class="form-control" onchange="validar();" name="endereco">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">CEP</label>
                            <input id="cep" type="text" class="form-control" onchange="validar();" name="cep">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Cidade</label>
                            <input id="cidade" type="text" class="form-control" onchange="validar();" name="cidade">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Estado</label>
                            <select id="estado" class="form-select" onchange="validar();" name="estado">
                                        <option value="">Selecione...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                            </select>
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
        if (nome.value && endereco.value && cep.value && cidade.value && estado.value)
            salvar.disabled = false;
        else
            salvar.disabled = true;
    }
</script>
@endsection