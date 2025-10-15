@extends('layouts.app')

@section('content')

    <form action="{{route('empleado.update', $empleado->dni)}}" method="POST" class="form">
    @csrf 
    @method('PUT')

    @foreach ($camposForm as $campo => $type)
    @if ($campo == 'rol_id')
        <!-- pongo un label solo para que quede bien los estilos, pero hay que sacarlo -->
        <div>
            <label for="">Seleccione Rol</label>
            <select name="rol">
                <option selected disabled></option>
                @foreach($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                @endforeach
            </select>
        </div>
    @elseif ($campo != 'password')
    <div>
        <label for="{{$campo}}">{{implode(' ', array_map('ucfirst',explode('_', $campo)))}}</label>
        <input type="{{$type}}" id="{{$campo}}" name="{{$campo}}" value="{{$empleado->$campo}}">
    </div>
    @endif
    @endforeach


    <button type="submit">Actualizar</button>

    </form>

@endsection