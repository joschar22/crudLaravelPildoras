@extends('../layouts.plantilla')

@section('cabecera')

edicion de registros
@endsection


@section('contenido')

<form action="{{route('productos.update',$producto->id)}}') " method="POST"> <table> <tr>
    <td>Nombre< /td> <td> <input type="text" value='{{$producto->NombreArticulo}}' name="NombreArticulo" id="">
        {{csrf_field()}}

        <input type="hidden" name='_method' value='PUT'>
        </td>
        </tr> <tr> <td>Seccion</td>
        <td><input type="text" value='{{$producto->Seccion}}' name="Seccion" id=""></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="text" value='{{$producto->Precio}}' name="Precio" id=""></td>
        </tr>
        <tr? <td>Fecha</td> <td><input type="text" value='{{$producto->Fecha}}' name="Fecha" id=""></td>
        </tr> <tr> <td>Pais Origen</td>
        <td><input type="text" value='{{$producto->PaisOrigen}}' name="PaisOrigen" id=""></td>
        </tr>
        <tr>
            <td align='right'>
            <input type="submit" name='enviar' value="Actualizar">
            </td>

            <td align='center'><input type="reset" name='limpiar' value="Limpiar Campios"></td>
        </tr>
        </table>
</form>

</form>

<form action="{{route('productos.update',$producto->id)}}') " method="POST">{{csrf_field()}}
    
    <input type="hidden" name='_method' value='DELETE'>
    <input type="submit" value='Eliminar Registro' >

</form>
@endsection
@section('pie')
@endsection