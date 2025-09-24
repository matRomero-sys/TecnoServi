@extends('layouts.app')

@section('content')

    <div>
        <p>ID: {{$grupoTrabajo->id}}</p>
        <p>Estado: {{$grupoTrabajo->estado}}</p>
        <p>Patente Vehiculo: {{$grupoTrabajo->patente_vehiculo}}</p>

        <a href="{{route('grupo-trabajo.edit', $grupoTrabajo->id)}}">MODIFICAR</a>
        <form action="{{route('grupo-trabajo.destroy', $grupoTrabajo->id)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button type="submit">ELIMINAR</button>
        </form>
    </div>

    @endsection