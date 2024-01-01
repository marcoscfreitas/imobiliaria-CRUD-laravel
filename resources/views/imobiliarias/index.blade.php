<!DOCTYPE html>
<html>

<head>
    <title>Lista de Imobiliárias</title>
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
    <h1>Lista de Imobiliárias</h1>

    <form action="{{ route('imobiliarias.index') }}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar imobiliárias...">
        <button type="submit">Pesquisar</button>
    </form><br><br>

    @if (session('success'))
    <div class="success-message">{{ session('success') }}</div>
    @endif

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
            @foreach ($imobiliarias as $imobiliaria)
            <tr>
                <td>{{ $imobiliaria->id }}</td>
                <td>{{ $imobiliaria->nome }}</td>
                <td>{{ $imobiliaria->endereco }}</td>
                <td>{{ $imobiliaria->preco }}</td>
                <td>{{ $imobiliaria->aluguel }}</td>
                <td>
                    <button onclick="window.location.href = '{{ route('imobiliarias.edit', $imobiliaria->id) }}'">Editar</button>
                </td>
                <td>
                    <form action="{{ route('imobiliarias.destroy', $imobiliaria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table><br><br>

    <div class="flex-container">
        <button onclick="window.location.href = '{{ route('imobiliarias.create') }}'">Inserir Imobiliária</button>
        <form action="{{ route('imobiliarias.index') }}" method="GET">
            <button type="submit">Filtrar por Aluguel</button>
            <input type="hidden" name="tipo_negocio" value="aluguel">
        </form>

        <form action="{{ route('imobiliarias.index') }}" method="GET">
            <button type="submit">Filtrar por Venda</button>
            <input type="hidden" name="tipo_negocio" value="venda">
        </form>

        <form action="{{ route('imobiliarias.index') }}" method="GET">
            @if ($sort === 'desc')
            <input type="hidden" name="sort" value="asc">
            <button type="submit">Ordenar por preço (crescente)</button>
            @else
            <input type="hidden" name="sort" value="desc">
            <button type="submit">Ordenar por preço (decrescente)</button>
            @endif
        </form>

        <form action="{{ route('imobiliarias.getMaxPriceHouse') }}" method="GET">
            <button type="submit">Casa com Maior Preço</button>
        </form>
    </div>

</body>

</html>
