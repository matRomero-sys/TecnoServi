@extends('layouts.app')

@section('content')
    <div>
        <p>Patente: {{$vehiculo->patente}}</p>
        <img src="{{ asset('img/vehiculos/' . $vehiculo->img) }}" alt="imagen de vehiculo">
        <p>Marca: {{$vehiculo->marca}}</p>
        <p>Modelo: {{$vehiculo->modelo}}</p>
        <p>Vencimiento VTV: {{$vehiculo->vencimiento_vtv}}</p>
        <p>Estado de Neumáticos: {{$vehiculo->estado_neumaticos}}</p>
        <p>Mantenimiento: {{$vehiculo->mantenimiento}}</p>

        <a href="{{route('vehiculo.edit', $vehiculo->patente)}}">MODIFICAR</a>
        <form action="{{route('vehiculo.destroy', $vehiculo->patente)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button type="submit">ELIMINAR</button>
        </form>
    </div>

@endsection