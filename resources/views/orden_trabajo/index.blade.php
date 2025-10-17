@extends('layouts.app')

@section('content')
<div class="page">

@role('administrador|jefe')
<div class="nav-menu">
    
<a href="{{ route('orden-trabajo.create') }}" class="btn-add">Crear Orden</a>

</div>
@endrole

@isset($mensaje_vacio)
    <div>{{ $mensaje_vacio }}</div>
@else

<table class="table">

    <tr class="row-header">
        <th>Número de orden</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th></th>
    </tr>

    @foreach ($ordenTrabajos as $ordenTrabajo)

        <tr class="row-data">
            <td>{{$ordenTrabajo->id}}</td>
            <td>{{$ordenTrabajo->descripcion}}</td>
            <td>{{$ordenTrabajo->estado}}</td>

            <td><a href="{{route('orden-trabajo.show', $ordenTrabajo->id)}}">Ver</a></td>
        </tr>
    @endforeach

    </table>
</div>

@endisset

@endsection