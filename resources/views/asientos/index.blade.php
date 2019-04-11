prueba de index

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($asientos as $asiento)
        <tr>
            <td>{{$asiento->Nombre}}</td>
            <td>{{$asiento->Descripcion}}</td>
            <td>{{$asiento->Precio}}</td>
            <td>{{$asiento->Activo}}</td>
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>