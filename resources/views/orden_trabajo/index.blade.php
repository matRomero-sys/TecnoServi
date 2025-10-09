@extends('layouts.app')

@section('content')

<table>

    <tr>
        <th>Número de orden</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th></th>
    </tr>

    @foreach ($ordenTrabajos as $ordenTrabajo)

        <tr>
            <td>{{$ordenTrabajo->id}}</td>
            <td>{{$ordenTrabajo->descripcion}}</td>
            <td>{{$ordenTrabajo->estado}}</td>

            <td><a href="{{route('orden-trabajo.show', $ordenTrabajo->id)}}">Ver</a></td>
        </tr>
    @endforeach

    </table>

<a href="{{ route('orden-trabajo.create') }}">CREAR ORDEN DE TRABAJO</a>

@endsection