@extends('layouts.app')

@section('content')

    <form action="{{route('empleado.store')}}" method="POST">
        @csrf

        @foreach ($camposForm as $campo => $type)
        @if (!in_array($campo, ['rendimiento', 'id_grupo_trabajo']))
        <label for="{{$campo}}">{{implode(' ', array_map('ucfirst',explode('_', $campo)))}}</label>
        <input type="{{$type}}" id="{{$campo}}" name="{{$campo}}">
        <br>
        @endif
        @endforeach

        <button type="submit">Registrar</button>
        
    </form>

@endsection