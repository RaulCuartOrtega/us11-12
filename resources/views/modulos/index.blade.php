<table>

    @foreach ($dam_all as $dams )

    <tr>

        <td> {{ $dams->id }} </td>
        <td> {{ $dams->curso }} </td>
        <td> {{ $dams->modulo }} </td>
        <td> {{ $dams->descripcion }} </td>
        <td> {{ $dams->nHoras }} </td>

    </tr>

</table>

<form action="{{ route('dams.destroy', $dams)}}" method="POST">

    @method('DELETE')
    @csrf
    
    <button type="submit">Delete</button>

</form>

<a href="{{ route('dams.edit', parameters: $dam)}}" method="POST">Update</a>

{{ $dam_all->links()}}
@endforeach