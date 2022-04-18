

<?php $__env->startSection('titulo'); ?>
Produto-Novo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form method="post" action="<?php echo e(route('produtos_novo')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-header bg-secondary mb-1 text-white">Novo produto</div>
            <div class="card mb-1 mx-auto" style="width: 99%;">
                    <div class="card-header" style="margin-bottom: 16px;">Dados do produto</div>
                    <div class="container-fluid">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nome</label>
                            <input id="nome" type="text" class="form-control" onchange="validar();" name="nome">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Categoria</label>
                            <input id="categoria" type="text" class="form-control" onchange="validar();" name="categoria">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">NCM</label>
                            <input id="NCM" type="text" class="form-control" onchange="validar();" name="NCM">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Valor</label>
                            <input id="valor" type="text" class="form-control" onchange="validar();" name="valor">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Fornecedor</label>
                            <select id="id_fornecedor" class="form-select" onchange="validar();" name="id_fornecedor">
                                <option value="">Selecione...</option>
                                
                                <option value="1">Fornecedor 1</option>
                                <option value="2">Fornecedor 2</option>
                                <option value="3">Fornecedor 3</option>
                                <option value="4">Fornecedor 4</option>
                                <option value="5">Fornecedor 5</option>
                                
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
        if (nome.value && categoria.value && NCM.value && valor.value)
            salvar.disabled = false;
        else
            salvar.disabled = true;
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaoa\Documents\programacao-web-2022\resources\views/novo_produto.blade.php ENDPATH**/ ?>