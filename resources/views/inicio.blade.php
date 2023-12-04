<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Vencimiento</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoría ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->fecha_vencimiento }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->categoria_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
