

<?php $__env->startSection('conteudo'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Fornecedor</th>
            <th>Produtos</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td><?php echo e($f->nome); ?></td>
                <td>
            <?php $__currentLoopData = $f->produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($p->nome); ?> <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<a href="<?php echo e(route('fornecedores_listar')); ?>"><button class="btn btn-primary">Voltar</button> </a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaoa\Documents\programacao-web-2022\resources\views/lista_produto_fornecedor.blade.php ENDPATH**/ ?>