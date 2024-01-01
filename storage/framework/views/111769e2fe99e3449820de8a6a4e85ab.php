<!-- resources/views/imobiliarias/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Editar Imobiliária</title>
</head>
<body>
    <h1>Editar Imobiliária</h1>

    <form action="<?php echo e(route('imobiliarias.update', $imobiliaria->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="nome">Nome da Imobiliária:</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo e($imobiliaria->nome); ?>" required><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" value="<?php echo e($imobiliaria->endereco); ?>" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" name="preco" id="preco" step="0.01" value="<?php echo e($imobiliaria->preco); ?>" required><br><br>

        <label for="aluguel">Tipo de Negócio:</label><br>
        <select name="aluguel" id="aluguel" required>
            <option value="Aluguel" <?php echo e($imobiliaria->aluguel === 'Aluguel' ? 'selected' : ''); ?>>Aluguel</option>
            <option value="Venda" <?php echo e($imobiliaria->aluguel === 'Venda' ? 'selected' : ''); ?>>Venda</option>
        </select><br><br>

        <button type="submit">Salvar</button><br><br>
        <a href="<?php echo e(route('imobiliarias.index')); ?>">Voltar para a lista de imobiliárias</a>
    </form>
</body>
</html>
<?php /**PATH /home/aluno/DS1/laravel/aula_laravel/resources/views/imobiliarias/edit.blade.php ENDPATH**/ ?>