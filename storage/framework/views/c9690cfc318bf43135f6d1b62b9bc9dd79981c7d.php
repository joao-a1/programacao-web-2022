

<?php $__env->startSection('conteudo'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Renda</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($c->id); ?></td>
        <td><?php echo e($c->nome); ?></td>
        <td><?php echo e($c->telefone); ?></td>
        <td><?php echo e($c->renda); ?>.00</td>
        <td>
            <a href="<?php echo e(route('clientes_alterar', ['id' => $c->id])); ?>" class="btn btn-warning">Alterar</a>
            <a href="<?php echo e(route('clientes_excluir', ['id' => $c->id])); ?>" onclick="excluir(<?php echo e($c->id); ?>)" class="btn btn-danger">Excluir</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<a href="<?php echo e(route('clientes_novo')); ?>"><button class="btn btn-primary">Voltar</button> </a>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o cliente ${id}?`)){
            location.hrfe = route('clientes_excluir', {'id':id});
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aula2103\resources\views/lista_cliente.blade.php ENDPATH**/ ?>