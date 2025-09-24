@extends('layouts.app')

@section('content')

    <form action="{{route('grupo-trabajo.update', $grupoTrabajo->id)}}" method="POST">
    @csrf 
    @method('PUT')

    @foreach ($camposForm as $campo => $type)
        <label for="{{$campo}}">{{implode(' ', array_map('ucfirst',explode('_', $campo)))}}</label>
        <input type="{{$type}}" id="{{$campo}}" name="{{$campo}}" value="{{$grupoTrabajo->$campo}}">
        <br>
    @endforeach


    <button type="submit">Actualizar</button>

    </form>

@endsection