<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver agendas</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/veragenda.css') }}">
</head>

<body>
    @include('layouts/app')
    <div class="container">
        <h2>Agendas</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>Nombre Aprendiz</th>
                    <th>Nombre Clase</th>
                    <th>Fecha Agendada</th>
                    <th>Agenda Realizada El</th>
                    <th>Descripcion</th>
                </tr>
                @forelse ($agenda as $agend)
                <tr>
                    <td><a href="{{ route('profesores.perfaprendagend', $agend->idaprendiz) }}">{{ $agend->nomapren }}</a></td>
                    <td>{{ $agend->nomclas }}</td>
                    <td>{{ $agend->fechaagendada }}</td>
                    <td>{{ $agend->fechahora }}</td>
                    <td>{{ $agend->descripcion }}</td>
                </tr>
                @empty
                @endforelse
            </table>
        </div>
    </div>
</body>

</html>
