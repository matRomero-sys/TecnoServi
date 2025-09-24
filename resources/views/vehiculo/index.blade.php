@extends('layouts.app')

@section('content')

<table>

    <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Vencimiento VTV</th>
        <th>Estado de Neumáticos</th>
        <th>Mantenimiento pendiente</th>
        <th></th>
    </tr>

    @foreach ($vehiculos as $vehiculo)

        <tr>
            <td>{{$vehiculo->patente}}</td>
            <td>{{$vehiculo->marca}}</td>
            <td>{{$vehiculo->modelo}}</td>
            <td>{{$vehiculo->vencimiento_vtv}}</td>
            <td>{{$vehiculo->estado_neumaticos}}</td>
            <td>{{$vehiculo->mantenimiento}}</td>
            <td><a href="{{route('vehiculo.show', $vehiculo->patente)}}">Ver</a></td>
        </tr>
    @endforeach

    </table>

    <a href="{{route('vehiculo.create')}}">AGREGAR VEHICULO</a>
    
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@endsection