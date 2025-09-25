@extends('layouts.app')

@section('content')

<form action="{{ route('orden-trabajo.store') }}" method="POST">
@csrf


    <label for="descripcion">Descripción</label>
    <input type="text" id="descripcion" name="descripcion">
    
    <button type="submit">Enviar</button>

    </form>
    
@endsection