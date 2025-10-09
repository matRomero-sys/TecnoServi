@extends('layouts.app')

@section('content')

<form action="{{route('orden-trabajo.update')}}" method="POST">
    <select name="descripcion">
        <option value="instalacion">Instalación</option>
        <option value="reconexion">Reconexión</option>
        <option value="service">Service</option>
        <option value="desconexion">Desconexión</option>
    </select>

    <select name="estado">
        <option value="solicitado">Solicitado</option>
        <option value="asignado">Asignado</option>
        <option value="proceso">En Proceso</option>
        <option value="finalizado">Finalizado</option>
        <option value="cancelado">Cancelado</option>
    </select>

    <div id="campo_otro" style="display: none;">
    <input type="text" name="otro_contacto" placeholder="Especificar...">
</div>

<script>
    function toggleOtroCampo() {
    const valor = document.getElementById('tipo_contacto').value;
    document.getElementById('campo_otro').style.display = valor === 'otro' ? 'block' : 'none';
    }
</script>
</form>

@endsection