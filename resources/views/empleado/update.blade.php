<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('empleado.update', $empleado->dni)}}" method="POST">
    @csrf 
    @method('PUT')

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $empleado->nombre }}">
    <br>

    <label for="fecha-ingreso">Fecha de Ingreso: </label>
    <input type="date" id="fecha-ingreso" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}">
<br>
    <label for="rol">Rol:</label>
    <input type="text" id="rol" name="rol" value="{{ $empleado->rol }}">
<br>
    <label for="cantidad-tareas">Cantidad de Tareas: </label>
    <input type="number" min="0" max="100" id="cantidad-tareas" name="cantidad_tareas" value="{{ $empleado->cantidad_tareas }}">
<br>
    <label for="rendimiento">rendimiento: </label>
    <input type="number" min="0" max="100" id="rendimiento" name="rendimiento" value="{{ $empleado->rendimiento }}">
<br>
    <label for="activo">activo: </label>
    <input type="number" min="0" max="1" id="activo" name="activo" value="{{ $empleado->activo }}">
    
    <br>
    <label for="cuenta">Id_cuenta: </label>
    <input type="number" id="cuenta" name="id_cuenta" value="{{ $empleado->id_cuenta }}">
    
<br>
    <label for="grupo-trabajo">Id grupo trabajo: </label>
    <input type="number" id="grupo-trabajo" name="id_grupo_trabajo" value="{{ $empleado->id_grupo_trabajo }}">
    
    


    <button type="submit">Actualizar</button>

    </form>
</body>
</html>