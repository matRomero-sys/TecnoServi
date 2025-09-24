@extends('layouts.app')

@section('content')
    <form action="{{route('grupo-trabajo.store')}}" method="POST">
        @csrf

        @foreach ($camposForm as $campo => $type)
        <label for="{{$campo}}">{{implode(' ', array_map('ucfirst',explode('_', $campo)))}}</label>
        <input type="{{$type}}" id="{{$campo}}" name="{{$campo}}">
        <br>
        @endforeach

        <button type="submit">Registrar</button>
        
    </form>

@endsection