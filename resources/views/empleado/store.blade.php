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

        @foreach ($camposForm as $campo => $type)
        <label for="{{$campo}}">{{implode(' ', array_map('ucfirst',explode('_', $campo)))}}</label>
        <input type="{{$type}}" id="{{$campo}}" name="{{$campo}}">
        <br>
        @endforeach

        <button type="submit">Registrar</button>
        
    </form>
</body>
</html>