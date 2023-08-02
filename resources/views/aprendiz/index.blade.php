<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aprendices</title>
</head>
<body>
    <h1>Lista de Aprendices</h1>
    <a href="{{ route('aprendices.create') }}">Crear Nuevo Aprendiz</a>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aprendices as $aprendiz)
                <tr>
                    <td>{{ $aprendiz->nombre }}</td>
                    <td>{{ $aprendiz->apellido }}</td>
                    <td>{{ $aprendiz->email }}</td>
                    <td>{{ $aprendiz->telefono }}</td>
                    <td>{{ $aprendiz->descripcion }}</td>
                    <td>{{ $aprendiz->Imagen }}</td>
                    <td>
                        <a href="{{ route('aprendices.show', $aprendiz->idaprendiz) }}">Ver</a>
                        <a href="{{ route('aprendices.edit', $aprendiz->idaprendiz) }}">Editar</a>
                        <form action="{{ route('aprendices.destroy', $aprendiz->idaprendiz) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
