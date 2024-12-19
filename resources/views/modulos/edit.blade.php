<form action="{{ route('dams.update', $dam)}}" method="POST">

@csrf

@method('PUT')


<label for="name">Curso "primero" o "segundo":</label>
    <input type="text" name="curso"/>
    <label for="modulo">Nombre del modulo:</label>
    <input type="text" name="modulo"/>
    <label for="descripcion">Descripcion del modulo:</label>
    <input type="text" name="descripcion"/>
    <label for="nHoras">Numero de horas:</label>
    <input type="number" name="nHoras"/>
    <button type="submit">Submit</button>

</form>