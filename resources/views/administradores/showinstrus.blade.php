<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrumentos creados</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <br>
    <div style="text-align: center; ">
    <br>
    <br>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Nombre</td>
                <td style="border:2px solid black; padding:5px">Tipo</td>
            </tr>
            @forelse ($instrumentos as $instru)
                <tr>
                <td style="border-right:2px solid black; padding:10px">{{$instru->nombre}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$instru->tipo}}</td>
                </tr>
             @empty
            @endforelse
        </table>
    </div>
</body>
</html>

