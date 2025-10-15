@extends('layouts.app')

@section('content')

    <div class="home-page">
    @if(Auth::guard('empleados')->user()->can('vehiculo.index'))
        <a href="{{ route('vehiculo.index') }}">Vehiculo</a>
    @endif
    @if(Auth::guard('empleados')->user()->can('empleado.index'))
        <a href="{{ route('empleado.index') }}">Empleado</a>
    @endif
    @if(Auth::guard('empleados')->user()->can('grupo_trabajo.index'))
        <a href="{{ route('grupo-trabajo.index') }}">Grupo Trabajo</a>
    @endif
    @if(Auth::guard('empleados')->user()->can('orden_trabajo.index') or Auth::guard()->user()->can('orden_trabajo.index'))
        <a href="{{ route('orden-trabajo.index') }}">Orden de Trabajo</a>
    @endif
    </div>


@endsection
