<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <form action="{{url('productos')}}" method="post">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
        <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" required><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>

        <label for="categoria_id">Categoría ID:</label>
        <input type="number" id="categoria_id" name="categoria_id" required><br><br>

        <button type="submit">Registrar Producto</button><br><br>
    </form>

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
