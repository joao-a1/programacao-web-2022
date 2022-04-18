

<?php $__env->startSection('conteudo'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>NCM</th>
            <th>Valor</th>
            <th>Fornecedor</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($p->id); ?></td>
        <td><?php echo e($p->nome); ?></td>
        <td><?php echo e($p->categoria); ?></td>
        <td><?php echo e($p->NCM); ?></td>
        <td><?php echo e($p->valor); ?>.00</td>
        <td><?php echo e($p->id_fornecedor); ?></td>
        <td>
            <a href="<?php echo e(route('produtos_alterar', ['id' => $p->id])); ?>" class="btn btn-warning">Alterar</a>
            <a href="<?php echo e(route('produtos_excluir', ['id' => $p->id])); ?>" onclick="excluir(<?php echo e($p->id); ?>)" class="btn btn-danger">Excluir</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<a href="<?php echo e(route('produtos_novo')); ?>"><button class="btn btn-primary">Voltar</button> </a>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o produto ${id}?`)){
            location.hrfe = route('produtos_excluir', {'id':id});
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaoa\Documents\programacao-web-2022\resources\views/lista_produto.blade.php ENDPATH**/ ?>