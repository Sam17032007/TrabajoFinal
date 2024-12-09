<!DOCTYPE html>
<html>

<head>
    <title>Editar Categoría</title>
</head>

<body>
    <h1>Editar Categoría</h1>
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
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
        <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion">{{ $categoria->descripcion }}</textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('categorias.index') }}">Volver</a>
</body>

</html>
