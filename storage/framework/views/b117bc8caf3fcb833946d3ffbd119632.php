<!-- resources/views/imobiliarias/max_price_house.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Casa com Maior Preço</title>
</head>
<body>
    <h1>Casa com Maior Preço</h1>

    <?php if($imobiliaria): ?>
        <p>Nome da Imobiliária: <?php echo e($imobiliaria->nome); ?></p>
        <p>Endereço: <?php echo e($imobiliaria->endereco); ?></p>
        <p>Preço: <?php echo e($imobiliaria->preco); ?></p>
        <p>Tipo de Negócio: <?php echo e($imobiliaria->aluguel); ?></p>
    <?php else: ?>
        <p>Não há casas cadastradas.</p>
    <?php endif; ?>

    <button onclick="window.location.href = '<?php echo e(route('imobiliarias.index')); ?>'">Voltar para a lista de imobiliárias</button>
</body>
</html>
<?php /**PATH /home/aluno/DS1/laravel/aula_laravel/resources/views/imobiliarias/max_price_house.blade.php ENDPATH**/ ?>