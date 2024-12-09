<!DOCTYPE html>
<html>
<head>
    <title>proveedors</title>
</head>
<body>
    <h1>Lista de proveedors</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedors as $proveedor)
                <tr>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>
                        <a href="{{ route('proveedors.edit', $proveedor->id) }}">Editar</a>
                        <form action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('proveedors.create') }}">Crear Proveedor</a>
</body>
</html>
