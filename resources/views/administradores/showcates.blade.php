<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrumentos creados</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            min-height: 100vh;
        }

        footer {
            padding: 20px;
            text-align: center;
            background-color: #343a40;
            color: #fff;
            margin-top: 20px;
        }

        .table-container {
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
    </style>
</head>
<body>
    @include('layouts/app')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Categorias</h2>
        <div class="table-container">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th onclick="sortTable(0)">Nombre</th>
                        <th onclick="sortTable(1)">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categorias as $instru)
                        <tr>
                            <td>{{$instru->nombre}}</td>
                            <td>{{$instru->tipo}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">No hay datos disponibles</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        &copy; 2023 C-crea
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function sortTable(n) {
            // ... (mismo script de ordenación que antes)
        }

        function highlightRow(row) {
            row.style.backgroundColor = "#007bff";
            row.style.color = "#fff";
        }

        function resetRow(row) {
            row.style.backgroundColor = "";
            row.style.color = "";
        }

        var tableRows = document.querySelectorAll("#data-table tbody tr");

        tableRows.forEach(function (row) {
            row.addEventListener("mouseover", function () {
                highlightRow(row);
            });
            row.addEventListener("mouseout", function () {
                resetRow(row);
            });
        });
    </script>
</body>
</html>
