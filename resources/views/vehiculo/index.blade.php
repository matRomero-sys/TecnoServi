@extends('layouts.app')

@section('content')
<div class="page">

<div class="nav-menu">
    <a href="{{route('vehiculo.create')}}" class="btn-add">Agregar Vehiculo</a>
</div>
    
<table class="table">

    <tr class="row-header">
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Vencimiento VTV</th>
        <th>Estado de Neumáticos</th>
        <th>Mantenimiento pendiente</th>
        <th></th>
    </tr>

    @foreach ($vehiculos as $vehiculo)

        <tr class="row-data">
            <td>{{$vehiculo->patente}}</td>
            <td>{{$vehiculo->modelo->marca->nombre}}</td>
            <td>{{$vehiculo->modelo->nombre}}</td>
            <td>{{$vehiculo->vencimiento_vtv}}</td>
            <td>{{$vehiculo->estado_neumaticos}}</td>
            <td>{{$vehiculo->mantenimiento}}</td>
            <td><a href="{{route('vehiculo.show', $vehiculo->patente)}}">Ver</a></td>
        </tr>
    @endforeach

    </table>
    
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif


</div>
@endsection