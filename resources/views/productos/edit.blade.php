<!DOCTYPE html>
<html>

<head>
    <title>Editar Producto</title>
</head>

<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
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
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" value="{{ $producto->precio }}" required>
        <br>
        <label for="id_proveedor">Proveedor:</label>
        <select id="id_proveedor" name="id_proveedor" required>
            @foreach ($proveedors as $proveedor)
                <option value="{{ $proveedor->id }}" {{ $proveedor->id == $producto->id_proveedor ? 'selected' : '' }}>
                    {{ $proveedor->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="id_categoria">Categoría:</label>
        <select id="id_categoria" name="id_categoria" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoria->id == $producto->id_categoria ? 'selected' : '' }}>
                    {{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="stock">Stock:</label>
        <input type="text" id="stock" name="stock" value="{{ $producto->stock }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('productos.index') }}">Volver</a>
</body>

</html>
