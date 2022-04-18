

<?php $__env->startSection('conteudo'); ?>
<?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<table class="table">
    <thead>
        <tr>
            <th>Fornecedor</th>
            <th>Produtos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo e($f->nome); ?></td>
            <td><?php echo e($f->produtos); ?></td>
        </tr>
    </tbody>
</table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaoa\Documents\programacao-web-2022\resources\views/lista_produto_fornecedor.blade.php ENDPATH**/ ?>