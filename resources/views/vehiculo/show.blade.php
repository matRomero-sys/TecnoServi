<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Patente: {{$vehiculo->patente}}</p>
        <p>Marca: {{$vehiculo->marca}}</p>
        <p>Modelo: {{$vehiculo->modelo}}</p>
        <p>Vencimiento VTV: {{$vehiculo->vencimiento_vtv}}</p>
        <p>Estado de Neumáticos: {{$vehiculo->estado_neumaticos}}</p>
        <p>Mantenimiento: {{$vehiculo->mantenimiento}}</p>

        <a href="{{route('vehiculo.edit', $vehiculo->patente)}}">MODIFICAR</a>
    </div>
</body>
</html>