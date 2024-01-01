<!-- resources/views/imobiliarias/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inserção - Imobiliária</title>
</head>
<body>
    <h1>Formulário de Inserção - Imobiliária</h1>

    <form method="POST" action="<?php echo e(route('imobiliarias.store')); ?>">
        <?php echo csrf_field(); ?>

        <label for="nome">Nome da Imobiliária:</label><br>
        <input type="text" name="nome" id="nome" required><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" required><br>

        <label for="preco">Preço:</label><br>
        <input type="number" name="preco" id="preco" step="0.01" required><br><br>

        <label for="aluguel">Tipo de Negócio:</label>
        <select name="aluguel" id="aluguel" required>
            <option value="Aluguel">Aluguel</option>
            <option value="Venda">Venda</option>
        </select><br><br>

        <button type="submit">Salvar</button><br><br>
        <button onclick="window.location.href = '<?php echo e(route('imobiliarias.index')); ?>'">Voltar para a lista de imobiliárias</button>
    </form>
</body>
</html>
<?php /**PATH /home/aluno/DS1/laravel/aula_laravel/resources/views/imobiliarias/create.blade.php ENDPATH**/ ?>