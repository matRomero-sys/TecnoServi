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

    @foreach ($camposForm as $campo => $type)
        <label for="{{$campo}}">{{implode(' ', array_map('ucfirst',explode('_', $campo)))}}</label>
        <input type="{{$type}}" id="{{$campo}}" name="{{$campo}}" value="{{$empleado->$campo}}">
        <br>
    @endforeach


    <button type="submit">Actualizar</button>

    </form>
</body>
</html>