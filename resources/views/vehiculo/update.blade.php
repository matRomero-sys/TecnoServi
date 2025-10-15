@extends('layouts.app')

@section('content')

    <form action="{{route('vehiculo.update', $vehiculo->patente)}}" method="POST" class="form">
    @csrf 
    @method('PUT')
    
        <div>
        <label for="marca">Marca</label>
        <select name="marca" id="marca">
            <option value=""></option>
            @foreach ($marcas as $marca)
            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
            @endforeach
        </select>

        </div>
        
        <div><label for="modelo">Modelo</label>
        <select name="modelo" id="modelo">
        </select>
        </div>

    <div>
    <label for="vencimiento-vtv">Vencimiento VTV: </label>
    <input type="date" id="vencimiento-vtv" name="vencimiento_vtv" value="{{ $vehiculo->vencimiento_vtv }}">
    </div>
    
    <div>
    
    <label for="estado-neumaticos">Estado de Neumáticos: </label>
    <input type="text" id="estado-neumaticos" name="estado_neumaticos" value="{{ $vehiculo->estado_neumaticos }}">
</div>

<div>
    <label for="mantenimiento">Mantenimiento: </label>
    <input type="text" id="mantenimiento" name="mantenimiento" value="{{ $vehiculo->mantenimiento }}">
</div>

<div>
    <label for="img">imagen</label>
    <input type="text" id="img" name="img" value="{{ $vehiculo->img}}">
</div>

    <button type="submit">Actualizar</button>
    </form>

@endsection