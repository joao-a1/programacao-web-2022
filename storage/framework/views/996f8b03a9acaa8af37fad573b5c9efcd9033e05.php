

<?php $__env->startSection('titulo'); ?>
Alterar produto - #<?php echo e($produto->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form method="post" action="<?php echo e(route('produtos_salvar')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-header bg-secondary mb-1 text-white">Alterar produto - #<?php echo e($produto->id); ?></div>
            <div class="card mb-1 mx-auto" style="width: 99%;">
                    <div class="card-header" style="margin-bottom: 16px;">Dados do produto</div>
                    <div class="container-fluid">
                        <input type="hidden" name="id" value="<?php echo e($produto->id); ?>">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nome</label>
                            <input id="nome" type="text" class="form-control" onchange="validar();" name="nome" value="<?php echo e($produto->nome); ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Categoria</label>
                            <input id="categoria" type="text" class="form-control" onchange="validar();" name="categoria" value="<?php echo e($produto->categoria); ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">NCM</label>
                            <input id="NCM" type="text" class="form-control" onchange="validar();" name="NCM" value="<?php echo e($produto->NCM); ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Valor</label>
                            <input id="valor" type="text" class="form-control" onchange="validar();" name="valor" value="<?php echo e($produto->valor); ?>">
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aula2103\resources\views/altera_produto.blade.php ENDPATH**/ ?>