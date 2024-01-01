<!-- resources/views/imobiliarias/create.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Inserção - Imobiliária</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 10px;
        }

        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        input[type="text"] {
            padding: 6px;
            border: 1px solid #ddd;
        }

        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin-bottom: 10px;
        }

        .flex-container {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>

<body>
    <h1>Formulário de Inserção - Imobiliária</h1>

    <form method="POST" action="{{ route('imobiliarias.store') }}">
        @csrf

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
        <button onclick="window.location.href = '{{ route('imobiliarias.index') }}'">Voltar para a lista de imobiliárias</button>
    </form>
</body>

</html>
