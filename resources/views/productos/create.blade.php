<!DOCTYPE html>
<html>

<head>
    <title>Crear Producto</title>
</head>

<body>
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required step="0.01">
        <br>
        <label for="id_proveedor">Proveedor:</label>
        <select id="id_proveedor" name="id_proveedor" required>
            @foreach ($proveedors as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="id_categoria">Categoría:</label>
        <select id="id_categoria" name="id_categoria" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>
        <br>
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('productos.index') }}">Volver</a>
</body>

</html>
