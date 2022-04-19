

<?php $__env->startSection('titulo'); ?>
Alterar cliente - #<?php echo e($cliente->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form method="post" action="<?php echo e(route('clientes_salvar')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-header bg-secondary mb-1 text-white">Alterar cliente - #<?php echo e($cliente->id); ?></div>
            <div class="card mb-1 mx-auto" style="width: 99%;">
                    <div class="card-header" style="margin-bottom: 16px;">Dados do produto</div>
                    <div class="container-fluid">
                        <input type="hidden" name="id" value="<?php echo e($cliente->id); ?>">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nome</label>
                            <input id="nome" type="text" class="form-control" onchange="validar();" name="nome" value="<?php echo e($cliente->nome); ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Telefone</label>
                            <input id="telefone" type="text" class="form-control" onchange="validar();" name="telefone" value="<?php echo e($cliente->telefone); ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Renda</label>
                            <input id="renda" type="text" class="form-control" onchange="validar();" name="renda" value="<?php echo e($cliente->renda); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaoa\Documents\programacao-web-2022\resources\views/altera_cliente.blade.php ENDPATH**/ ?>