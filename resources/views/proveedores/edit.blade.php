<!DOCTYPE html>
<html>

<head>
    <title>Editar Proveedor</title>
</head>

<body>
    <h1>Editar Proveedor</h1>
    <form action="{{ route('proveedors.update', $proveedor->id) }}" method="POST">
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
        <input type="text" id="nombre" name="nombre" value="{{ $proveedor->nombre }}" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ $proveedor->direccion }}" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $proveedor->telefono }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $proveedor->email }}" required>
        <br>
        <label for="contacto">Contacto:</label>
        <input type="text" id="contacto" name="contacto" value="{{ $proveedor->contacto }}" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion">{{ $proveedor->descripcion }}</textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('proveedors.index') }}">Volver</a>
</body>

</html>
