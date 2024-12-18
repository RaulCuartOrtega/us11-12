<table>

    @foreach ($modulos_all as $modulos )

    <tr>

        <td> {{ $modulos->id }} </td>
        <td> {{ $modulos->curso }} </td>
        <td> {{ $modulos->modulo }} </td>
        <td> {{ $modulos->descripcion }} </td>
        <td> {{ $modulos->nHoras }} </td>

    </tr>

</table>

<form action="{{ route('modulos.destroy', $modulos)}}" method="POST">

    @method('DELETE')
    @csrf
    
    <button type="submit">Delete</button>

</form>

<a href="{{ route('modulos.edit', parameters: $modulos)}}" method="POST">Update</a>

{{ $modulos_all->links()}}
@endforeach