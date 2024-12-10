<form action="{{ route('dam.store') }}" method="post">
    @csrf

    <label for="name">Nombre</label>
    <input type="text" name="programacionmultimedia"/>

    <button type="submit">Enviar</button>
</form>