<!-- resources/views/imobiliarias/edit.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Editar Imobiliária</title>
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
    <h1>Editar Imobiliária</h1>

    <form action="{{ route('imobiliarias.update', $imobiliaria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome da Imobiliária:</label><br>
        <input type="text" name="nome" id="nome" value="{{ $imobiliaria->nome }}" required><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" value="{{ $imobiliaria->endereco }}" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" name="preco" id="preco" step="0.01" value="{{ $imobiliaria->preco }}" required><br><br>

        <label for="aluguel">Tipo de Negócio:</label><br>
        <select name="aluguel" id="aluguel" required>
            <option value="Aluguel" {{ $imobiliaria->aluguel === 'Aluguel' ? 'selected' : '' }}>Aluguel</option>
            <option value="Venda" {{ $imobiliaria->aluguel === 'Venda' ? 'selected' : '' }}>Venda</option>
        </select><br><br>

        <button type="submit">Salvar</button><br><br>
        <a href="{{ route('imobiliarias.index') }}">Voltar para a lista de imobiliárias</a>
    </form>
</body>

</html>
