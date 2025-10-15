@extends('layouts.app')

@section('content')

<div class="page">
    <p>Descripción: {{$ordenTrabajo->descripcion}}</p>
    <p>Estado: {{$ordenTrabajo->estado}}</p>
    
    @if ($ordenTrabajo->estado !='solicitado')
        @if ($ordenTrabajo->estado=='cancelado')
        <p>Motivo Inacabado: {{$ordenTrabajo->motivo_inacabado}}</p>
        @endif
    
        <p>Grupo de Trabajo: </p><a href="{{route('grupo-trabajo.show', $ordenTrabajo->id_grupo_trabajo)}}">Ver grupo de trabajo</a>    
    @endif
    
    <a href="{{route('orden-trabajo.edit', $ordenTrabajo->id)}}">MODIFICAR</a>
    <form action="{{route('orden-trabajo.destroy', $ordenTrabajo->id)}}" method="POST">
        @csrf 
        @method('DELETE')
        <button type="submit">ELIMINAR</button>
    </form>
</div>

@endsection