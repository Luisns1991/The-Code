<form action="{{ url('/asientos') }}" method="post">
    {{ csrf_field() }}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br>

    <label for="Descripcion">{{'Descripcion'}}</label>
    <input type="text" name="Descripcion" id="Descripcion" value="">
    <br>

    <label for="Precio">{{'Precio'}}</label>
    <input type="text" name="Precio" id="Precio" value="">
    <br>

    <label for="Activo">{{'Activo'}}</label>
    <input type="text" name="Activo" id="Activo" value="">
    <br>

    <input type="submit" value="Agregar">
</form>
