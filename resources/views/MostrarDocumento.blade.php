@extends("layoutDocumento")
@section("contenidoDocumen")
<table border="1">
    <tr>
        <th>id</th>
        <th>fecha_subida</th>
        <th>nombre_cliente</th>
    </tr>
        @foreach($resultados as $docs)
        <tr>
            <th>{{$docs["id"]}}</th>
            <th>{{$docs["fecha_subida"]}}</th>
            <th>{{$docs["nombre_cliente"]}}</th>
            <td><a href="/ActualizarDocumento/{{$docs["id"]}}">actualizar</a></td>
            <td><a href="/EliminarDocumento/{{$docs["id"]}}" >Eliminar</a></td>
        </tr>
        @endforeach
</table>
@endsection
