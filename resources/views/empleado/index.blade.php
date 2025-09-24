@extends('layouts.app')

@section('content')

    <table class="table table-dark">

    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Fecha de Ingreso</th>
        <th>Rol</th>
        <th>Cantidad de Tareas</th>
        <th>Rendimiento</th>
        <th>Activo</th>
        <th>id_grupo_trabajo</th>
        <th></th>
    </tr>

    @foreach ($empleados as $empleado)

        <tr>
            <td>{{$empleado->dni}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->fecha_ingreso}}</td>
            <td>{{$empleado->rol}}</td>
            <td>{{$empleado->cantidad_tareas}}</td>
            <td>{{$empleado->rendimiento}}</td>
            <td>{{$empleado->activo}}</td>
            <td>{{$empleado->id_grupo_trabajo}}</td>
            <td><a href="{{route('empleado.show', $empleado->dni)}}">Ver</a></td>
        </tr>
    @endforeach

    </table>

    <a href="{{route('empleado.create')}}">AGREGAR empleado</a>
    
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@endsection