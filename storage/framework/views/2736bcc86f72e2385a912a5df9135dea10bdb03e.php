

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
                            <select id="id_fornecedor" class="form-select" name="id_fornecedor">
                                <option value="">Selecione...</option>
                                
                                <?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($f->id); ?>"><?php echo e($f->nome); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
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