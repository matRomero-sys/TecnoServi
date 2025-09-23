<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('vehiculo.update', $vehiculo->patente)}}" method="POST">
    @csrf 
    @method('PUT')

    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca" value="{{ $vehiculo->marca }}">
    <br>
    <label for="modelo">Modelo:</label>
    <input type="text" id="modelo" name="modelo" value="{{ $vehiculo->modelo }}">
<br>
    <label for="vencimiento-vtv">Vencimiento VTV: </label>
    <input type="text" id="vencimiento-vtv" name="vencimiento_vtv" value="{{ $vehiculo->vencimiento_vtv }}">
<br>
    <label for="estado-neumaticos">Estado de Neumáticos: </label>
    <input type="text" id="estado-neumaticos" name="estado_neumaticos" value="{{ $vehiculo->estado_neumaticos }}">
<br>
    <label for="mantenimiento">Mantenimiento: </label>
    <input type="text" id="mantenimiento" name="mantenimiento" value="{{ $vehiculo->mantenimiento }}">
    
    <button type="submit">Actualizar</button>

    </form>
</body>
</html>