<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/createclass.css') }}">
    <title>Agenda Tu Clase</title>
</head>
<body>
    <h1>Agendar Clase</h1>

    <table style="text-align: center; border:2px solid black">
        <tr>
            <td style="border:2px solid black; padding:5px">Nombre</td>
            <td style="border:2px solid black; padding:5px">Instrumento</td>
            <td style="border:2px solid black; padding:5px">Descripcion</td>
            <td style="border:2px solid black; padding:5px">Fecha</td>
            <td style="border:2px solid black; padding:5px" colspan="2">Disponibilidad</td>
            <td style="border:2px solid black; padding:5px">Costo</td>
            <td style="border:2px solid black; padding:5px">Profesores</td>
        </tr>

        <tr>
            <td style="border:2px solid black; padding:10px">{{ $clase->nombre }}</td>
            <td style="border:2px solid black; padding:10px">{{ $clase->categorias->nombre }}</td>
            <td style="border:2px solid black; padding:10px">{{ $clase->descripcion }}</td>
            <td style="border:2px solid black; padding:10px">{{ $clase->fecha }}</td>
            <td style="border:2px solid black; padding:10px">{{ $clase->horainicio }}</td>
            <td style="border:2px solid black; padding:10px">{{ $clase->horafin }}</td>
            <td style="border:2px solid black; padding:10px">{{ $clase->costo }}</td>
            <td style="border:2px solid black; padding:10px">{{ $profesor->nombre }}</td>       
         </tr>
    </table>

    <form action="{{ route('agendar.store', ['idclase' => $clase->idclase]) }}" method="POST" class="fade-in">
        @csrf
        <input type="hidden" name="idclase" value="{{ $clase->idclase }}">
        <label for="documento">Digita Tu Documento Completo: </label>
        <input type="number" name="documento" id="documento">
        <label for="fechahora">Fecha Hora:</label>
        <input type="datetime-local" id="fechahora" name="fechahora">
        <label for="fechaagendada"></label>
        <input type="hidden" id="fechaagendada" name="fechaagendada">
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4"></textarea>
        <br>

        <button type="submit">Asignar Clase</button>

    </form>
    <a href="{{ route('menu') }}" class="btn">Volver</a>
</body>
</html>
