

<?php $__env->startSection('titulo'); ?>
Cliente-Novo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form method="post" action="<?php echo e(route('clientes_novo')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-header bg-secondary mb-1 text-white">Novo cliente</div>
            <div class="card mb-1 mx-auto" style="width: 99%;">
                    <div class="card-header" style="margin-bottom: 16px;">Dados do produto</div>
                    <div class="container-fluid">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nome</label>
                            <input id="nome" type="text" class="form-control" onchange="validar();" name="nome">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Telefone</label>
                            <input id="telefone" type="text" class="form-control" onchange="validar();" name="telefone">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Renda</label>
                            <input id="renda" type="text" class="form-control" onchange="validar();" name="renda">
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aula2103\resources\views/novo_cliente.blade.php ENDPATH**/ ?>