@extends('layouts.app')

@section('content')

<form action="{{ route('orden-trabajo.store') }}" method="POST" class="form">
@csrf

<div>
    <label for="descripcion">Descripción</label>
    <textarea type="text" id="descripcion" name="descripcion"></textarea>   
</div>

<div class="form-nav">
    <button type="submit">Enviar</button>
</div>
    
    </form>
    
@endsection