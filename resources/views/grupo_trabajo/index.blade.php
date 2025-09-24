@extends('layouts.app')

@section('content')

    <table>

    <tr>
        <th>ID</th>
        <th>Estado</th>
        <th>Patente Vehiculo</th>
        <th></th>
    </tr>

    @foreach ($grupoTrabajos as $grupoTrabajo)

        <tr>
            <td>{{$grupoTrabajo->id}}</td>
            <td>{{$grupoTrabajo->estado}}</td>
            <td>{{$grupoTrabajo->patente_vehiculo}}</td>
            <td><a href="{{route('grupo-trabajo.show', $grupoTrabajo->id)}}">Ver</a></td>
        </tr>
    @endforeach

    </table>

    <a href="{{route('grupo-trabajo.create')}}">AGREGAR GRUPO DE TRABAJO</a>
    
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@endsection