<!-- resources/views/imobiliarias/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Imobiliárias</title>
</head>
<body>
    <h1>Lista de Imobiliárias</h1>

    <form action="<?php echo e(route('imobiliarias.index')); ?>" method="GET">
        <input type="text" name="search" placeholder="Pesquisar imobiliárias...">
    <button type="submit">Pesquisar</button>
    </form><br><br>

    <?php if(session('success')): ?>
        <div><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Preço</th>
                <th>Aluguel</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $imobiliarias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imobiliaria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($imobiliaria->id); ?></td>
                    <td><?php echo e($imobiliaria->nome); ?></td>
                    <td><?php echo e($imobiliaria->endereco); ?></td>
                    <td><?php echo e($imobiliaria->preco); ?></td>
                    <td><?php echo e($imobiliaria->aluguel); ?></td>
                    <td>
                    <button onclick="window.location.href = '<?php echo e(route('imobiliarias.edit', $imobiliaria->id)); ?>'">Editar</button>
        </td>
                    <td><form action="<?php echo e(route('imobiliarias.destroy', $imobiliaria->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Excluir</button>
            </form></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><br><br>
    <div style='display: flex; justify-content: space-evenly;'>
    <button onclick="window.location.href = '<?php echo e(route('imobiliarias.create')); ?>'">Inserir Imobiliária</button>
    <form action="<?php echo e(route('imobiliarias.index')); ?>" method="GET">
        <button type="submit">Filtrar por Aluguel</button>
        <input type="hidden" name="tipo_negocio" value="aluguel">
    </form>

    <form action="<?php echo e(route('imobiliarias.index')); ?>" method="GET">
        <button type="submit">Filtrar por Venda</button>
        <input type="hidden" name="tipo_negocio" value="venda">
    </form>

    <form action="<?php echo e(route('imobiliarias.index')); ?>" method="GET">
        <?php if($sort === 'desc'): ?>
            <input type="hidden" name="sort" value="asc">
            <button type="submit">Ordenar por preço (crescente)</button>
        <?php else: ?>
            <input type="hidden" name="sort" value="desc">
            <button type="submit">Ordenar por preço (decrescente)</button>
        <?php endif; ?>
    </form>

    <form action="<?php echo e(route('imobiliarias.getMaxPriceHouse')); ?>" method="GET">
        <button type="submit">Casa com Maior Preço</button>
    </form>


</div>
</body>
</html>
<?php /**PATH /home/aluno/DS1/laravel/aula_laravel/resources/views/imobiliarias/index.blade.php ENDPATH**/ ?>