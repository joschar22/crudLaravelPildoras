@extends('../layouts.plantilla')

@section('cabecera')

edicion de  registros
@endsection


@section('contenido')

<form action="{{route('productos.update',$producto->id)}}') " method="POST"> <table>
    <tr>
    <td>Nombre</td>
    <td>
        <input type="text" value='{{$producto->NombreArticulo}}' name="NombreArticulo" id=""> {{csrf_field()}}

        <input type="hidden" name='_method' value='PUT'>
    </td>
    </tr>
    <tr>
        <td>Seccion</td>
        <td><input type="text" value='{{$producto->Seccion}}' name="Seccion" id=""></td>
    </tr>
    <tr>
        <td>Precio</td>
        <td><input type="text" value='{{$producto->Precio}}' name="Precio" id=""></td>
    </tr>
    <tr>
        <td>Fecha</td>
        <td><input type="text" value='{{$producto->Fecha}}' name="Fecha" id=""></td>
    </tr>
    <tr>
        <td>Pais Origen</td>
        <td><input type="text" value='{{$producto->PaisOrigen}}' name="PaisOrigen" id=""></td>
    </tr>
    <tr>
        <td align='right'>
            <input type="submit" name='enviar' value="Enviar">
        </td>

        <td align='center'><input type="submit" name='limpiar' value="Limpiar"></td>
    </tr>
</table>
</form>
@endsection
@section('pie')
@endsection