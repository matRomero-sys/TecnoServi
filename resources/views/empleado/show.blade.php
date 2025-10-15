@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="show">
            <p>DNI: {{$empleado->dni}}</p>
            <p>Nombre: {{$empleado->nombre}}</p>
            <p>Fecha de Ingreso: {{$empleado->fecha_ingreso}}</p>
            <p>Rol: {{$empleado->rol->nombre}}</p>
            <p>Cantidad de Tareas: {{$empleado->cantidad_tareas}}</p>
            <p>Rendimiento: {{$empleado->rendimiento}}</p>
            <p>Activo: {{$empleado->activo}}</p>
            <p>Id Grupo de Trabajo: {{$empleado->id_grupo_trabajo}}</p>

            <div class="show-nav">
                <a href="{{route('empleado.edit', $empleado->dni)}}" class="btn-show">Modificar</a>
                <form action="{{route('empleado.destroy', $empleado->dni)}}" method="POST" class="show-nav_delete">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn-show">Eliminar</button>
                </form>
            </div>

        </div>
    </div>

@endsection