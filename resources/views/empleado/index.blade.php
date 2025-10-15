@extends('layouts.app')

@section('content')

<div class="page">

    <div class="nav-menu">
        <a href="{{route('empleado.create')}}" class="btn-add">AGREGAR empleado</a>
    </div>
    
    <table class="table">

        <tr class="row-header">
            <th>DNI</th>
            <th>Nombre</th>
            <th>Fecha de Ingreso</th>
            <th>Rol</th>
            <th>Cantidad de Tareas</th>
            <th>Rendimiento</th>
            <th>Estado</th>
            <th>Grupo de Trabajo</th>
            <th></th>
        </tr>

        @foreach ($empleados as $empleado)

            <tr class="row-data">
                <td>{{$empleado->dni}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{ \Carbon\Carbon::parse($empleado->fecha_ingreso)->format('d/m/Y') }}</td>
                <td>{{$empleado->rol->nombre}}</td>
                <td>{{$empleado->cantidad_tareas}}</td>
                <td>{{$empleado->rendimiento}}</td>
                @if ($empleado->activo == 1)
                <td>Activo</td>
                @else
                <td>No activo</td>
                @endif
                <td><a href="{{route('grupo-trabajo.show', $empleado->id_grupo_trabajo)}}">Ver Grupo</a></td>
                <td><a href="{{route('empleado.show', $empleado->dni)}}">Ver</a></td>
            </tr>
        @endforeach

    </table>

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

</div>

@endsection