<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        foreach($asientos as $asiento)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$asiento->Nombre}}</td>
            <td>{{$asiento->Descripcion}}</td>
            <td>{{$asiento->Precio}}</td>
            <td>{{$asiento->Activo}}</td>
            <td>Editar | 

            <form method="post" action="{{ url('/asientos/'.$asientos->id) }}">
                {{csrf_fiel() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    </tbody>
</table>