<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        th:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>  
    @include('layouts/app')
    <br>
    <br>
    <div style="text-align: center; ">
        <a href="{{ route('cat.create') }}"><button>Crear Categoria</button></a> <br><br>
        <a href="{{ route('admins.showcats') }}"><button>Ver categorias</button></a> <br><br>
    </div>
    <br>
    <br>
    <div class="container">
        <h2 style="color: #007bff;">Comentarios</h2>

        <table>
            <tr>
                <th>Descripcion</th>
                <th>Fecha Y Hora</th>
                <th>Tipo</th>
            </tr>
            @forelse ($comentario as $coment)
                <tr>
                    <td>{{ $coment->descripcion }}</td>
                    <td>{{ $coment->fechahora }}</td>
                    <td>{{ $coment->tipo }}</td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
</body>
</html>
