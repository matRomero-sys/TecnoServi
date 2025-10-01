@extends('layouts.app')

@section('content')
    <div>
        <a href="{{route('vehiculo.index')}}">Vehiculo</a>
        <a href="{{route('empleado.index')}}">Empleado</a>
        <a href="{{route('grupo-trabajo.index')}}">Grupo Trabajo</a>
        <a href="{{ route('orden-trabajo.index') }}">Orden de Trabajo</a>
    
    </div>

@endsection