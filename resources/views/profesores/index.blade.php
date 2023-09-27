<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/arcprincipal.css') }}">
</head>

<body>
    @include('layouts/app')
    <div class="container">
        <a href="{{ route('profesores.create', $codigo) }}"><button>Crear clase</button></a>
        <a href="{{ route('profesores.perfill', $codigo) }}"><button>Perfil</button></a>
    </div>

    <h2>Mis clases creadas</h2>
    <div class="centered-container">
        @forelse ($clase as $class)
            <div class="class-item">
                
                <div class="class-info">
                    <p><strong>Nombre:</strong> {{ $class->nombre }}</p>
                    <p><strong>Categoria:</strong> {{ $class->nomins }}</p>
                    <p><strong>Descripcion:</strong> {{ $class->descripcion }}</p>
                    <p><strong>Fecha:</strong> {{ $class->fecha }}</p>
                    <p><strong>Disponibilidad:</strong> {{ $class->horainicio }} - {{ $class->horafin }}</p>
                    <p><strong>Cupos:</strong> {{ $class->cupos }}</p>
                    <p><strong>Costo:</strong> {{ $class->costo }}</p>
                </div>
                
                <div class="class-actions">
                    <a href="{{ route('profesores.editarclases', ['id' => $class->idclase, 'codigo' => $codigo]) }}"><button>Editar</button></a>
                    @if ($class->cupos > 0)
                        <a href="{{ route('profesores.showagen', ['id' => $class->idclase]) }}"><button>Ver agendas</button></a>
                    @endif
                </div>
            </div>
        @empty
        @endforelse
    </div>
    <br><br><br><br>
    
</body>

</html>
