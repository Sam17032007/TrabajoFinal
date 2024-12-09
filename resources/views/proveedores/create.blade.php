<!DOCTYPE html>
<html>

<head>
    <title>Crear Proveedor</title>
</head>

<body>
    <h1>Crear Proveedor</h1>
    <form action="{{ route('proveedors.store') }}" method="POST">
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
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="contacto">Contacto:</label>
        <input type="text" id="contacto" name="contacto" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>
        <br>
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('proveedors.index') }}">Volver</a>
</body>

</html>
