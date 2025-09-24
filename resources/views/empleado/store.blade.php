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

 <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>

    <label for="fecha-ingreso">Fecha de Ingreso: </label>
    <input type="date" id="fecha-ingreso" name="fecha_ingreso">
<br>
    <label for="rol">Rol:</label>
    <input type="text" id="rol" name="rol">
<br>
    <label for="cantidad-tareas">Cantidad de Tareas: </label>
    <input type="number" id="cantidad-tareas" name="cantidad_tareas">
<br>
    <label for="rendimiento">rendimiento: </label>
    <input type="number" id="rendimiento" name="rendimiento">
<br>
    <label for="activo">activo: </label>
    <input type="number" id="activo" name="activo">

    <br>
    <label for="cuenta">Id_cuenta: </label>
    <input type="number" id="cuenta" name="id_cuenta">
  
<br>
    <label for="grupo-trabajo">Id grupo trabajo: </label>
    <input type="number" id="grupo-trabajo" name="id_grupo_trabajo">
    
    
        <button type="submit">Registrar</button>
        
    </form>
</body>
</html>