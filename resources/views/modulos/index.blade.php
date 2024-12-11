<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Módulos</title>
</head>
<body>
    <h1>Lista de Módulos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Módulo</th>
                <th>Descripción</th>
                <th>Número de Horas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modulos as $modulo)
                <tr>
                    <td>{{ $modulo->id }}</td>
                    <td>{{ $modulo->curso }}</td>
                    <td>{{ $modulo->modulo }}</td>
                    <td>{{ $modulo->descripcion }}</td>
                    <td>{{ $modulo->nHoras }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>