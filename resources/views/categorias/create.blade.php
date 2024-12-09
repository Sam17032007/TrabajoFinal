<!DOCTYPE html>
<html>

<head>
    <title>Crear Categoría</title>
</head>

<body>
    <h1>Crear Categoría</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
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
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>
        <br>
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('categorias.index') }}">Volver</a>
</body>

</html>
