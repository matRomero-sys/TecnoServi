@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="show">
            <p>Patente: {{$vehiculo->patente}}</p>
            <img src="{{ asset('img/vehiculos/' . $vehiculo->img) }}" alt="imagen de vehiculo">
            <p>Marca: {{$vehiculo->modelo->marca->nombre}}</p>
            <p>Modelo: {{$vehiculo->modelo->nombre}}</p>
            <p>Vencimiento VTV: {{$vehiculo->vencimiento_vtv}}</p>
            <p>Estado de Neumáticos: {{$vehiculo->estado_neumaticos}}</p>
            <p>Mantenimiento: {{$vehiculo->mantenimiento}}</p>

            <div class="show-nav">
                <a href="{{route('vehiculo.edit', $vehiculo->patente)}}" class="btn-show">Modificar</a>
                <form action="{{route('vehiculo.destroy', $vehiculo->patente)}}" method="POST" class="form-show">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn-show">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

@endsection