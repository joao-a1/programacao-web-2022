

<?php $__env->startSection('conteudo'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($f->id); ?></td>
        <td><?php echo e($f->nome); ?></td>
        <td><?php echo e($f->endereco); ?></td>
        <td><?php echo e($f->cep); ?></td>
        <td><?php echo e($f->cidade); ?></td>
        <td><?php echo e($f->estado); ?></td>

        <td>
            <a href="<?php echo e(route('fornecedores_alterar', ['id' => $f->id])); ?>" class="btn btn-warning">Alterar</a>
            <a href="<?php echo e(route('fornecedores_excluir', ['id' => $f->id])); ?>" onclick="excluir(<?php echo e($f->id); ?>)" class="btn btn-danger">Excluir</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="container fluid">
    <div>
        <a href="<?php echo e(route('fornecedores_novo')); ?>"><button class="btn btn-primary">Voltar</button> </a>
        <a href="<?php echo e(route('produtos_fornecedores_listar')); ?>"><button class="btn btn-primary">Produtos - Fornecedor</button> </a>
    </div>
</div>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.hrfe = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaoa\Documents\programacao-web-2022\resources\views/lista_fornecedor.blade.php ENDPATH**/ ?>