<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('vehiculo.store')}}" method="POST">

        @csrf
        <label for="patente">Pantente</label>
        <input type="text" id="patente" name="patente">
        <br>
        
        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca">
        <br>
        
        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo">
        <br>
        
        <label for="vtv">Vencimiento VTV</label>
        <input type="date" id="vtv" name="vencimiento_vtv">
        <br>
        
        <label for="neumaticos">Estado de Neumáticos</label>
        <input type="number" min="0" max="100" id="neumaticos" name="estado_neumaticos">
        <br>
        
        <label for="mantenimiento">Mantenimiento</label>
        <input type="text" id="mantenimiento" name="mantenimiento">
        <br>

        <button type="submit">Registrar</button>
        
    </form>
</body>
</html>