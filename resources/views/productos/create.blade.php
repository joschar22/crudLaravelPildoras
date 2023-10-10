@extends('../layouts.plantilla')

@section('cabecera')

Insertar registros
@endsection


@section('contenido')

<form action="{{ url('/productos') }}" method="POST"> <table>
    <tr>
    <td>Nombre</td>
    <td>
        <input type="text" placeholder='crear' name="NombreArticulo" id=""> {{csrf_field()}}
    </td>
    </tr>
    <tr>
        <td>Seccion</td>
        <td><input type="text" placeholder='Seccion' name="Seccion" id=""></td>
    </tr>
    <tr>
        <td>Precio</td>
        <td><input type="text" placeholder='Precio' name="Precio" id=""></td>
    </tr>
    <tr>
        <td>Fecha</td>
        <td><input type="text" placeholder='Fecha' name="Fecha" id=""></td>
    </tr>
    <tr>
        <td>Pais Origen</td>
        <td><input type="text" placeholder='Pais Origen' name="PaisOrigen" id=""></td>
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