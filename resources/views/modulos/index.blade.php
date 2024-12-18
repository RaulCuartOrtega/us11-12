<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Módulos</title>
</head>
<body>
    <h1>Lista de Módulos</h1>

    <table>
            @foreach ($modulos_all as $modulo)
                <tr>
                    <td>{{ $modulo->id }}</td>
                    <td>{{ $modulo->curso }}</td>
                    <td>{{ $modulo->modulo }}</td>
                    <td>{{ $modulo->descripcion }}</td>
                    <td>{{ $modulo->nHoras }}</td>
                </tr>
            @endforeach
    </table>
  
    <form action=" {{ route ('Dam1.destroy',$dam) }} method ="post">
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>

    </form>

    
    <a href="{{ route('modulos.edit',$dam)}}" method="POST">Update</a>

    {{ $modulos_all->links() }}
    @endforeach
</body>
</html>