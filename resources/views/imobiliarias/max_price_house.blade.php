<!-- resources/views/imobiliarias/max_price_house.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Casa com Maior Preço</title>
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
    <h1>Casa com Maior Preço</h1>

    @if ($imobiliaria)
    <p>Nome da Imobiliária: {{ $imobiliaria->nome }}</p>
    <p>Endereço: {{ $imobiliaria->endereco }}</p>
    <p>Preço: {{ $imobiliaria->preco }}</p>
    <p>Tipo de Negócio: {{ $imobiliaria->aluguel }}</p>
    @else
    <p>Não há casas cadastradas.</p>
    @endif

    <button onclick="window.location.href = '{{ route('imobiliarias.index') }}'">Voltar para a lista de imobiliárias</button>
</body>

</html>
