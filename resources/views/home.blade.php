@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div>
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
