<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">
</head>
<body>
    <div class="cabecera">
        @yield('cabecera')
        <img src="{{ asset( 'images/logo.png' ) }}" class="imagenCabecera" alt='logo de la pagina'/>
    </div>

    <div class="contenido">
        @yield('contenido')
    </div>
    
    <div class="pie">
        @yield('pie')
        Jose chaqquere rea todo los derechos reservados
    </div>

</body>
</html>