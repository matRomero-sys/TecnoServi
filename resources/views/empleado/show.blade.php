@extends('layouts.app')

@section('content')
    <div>
        <p>DNI: {{$empleado->dni}}</p>
        <p>Nombre: {{$empleado->nombre}}</p>
        <p>Fecha de Ingreso: {{$empleado->fecha_ingreso}}</p>
        <p>Rol: {{$empleado->rol}}</p>
        <p>Cantidad de Tareas: {{$empleado->cantidad_tareas}}</p>
        <p>Rendimiento: {{$empleado->rendimiento}}</p>
        <p>Activo: {{$empleado->activo}}</p>
        <p>Id Grupo de Trabajo: {{$empleado->id_grupo_trabajo}}</p>

        <a href="{{route('empleado.edit', $empleado->dni)}}">MODIFICAR</a>
        <form action="{{route('empleado.destroy', $empleado->dni)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button type="submit">ELIMINAR</button>
        </form>
    </div>

@endsection