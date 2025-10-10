@extends('layouts.app')

@section('content')

    <form action="{{route('vehiculo.store')}}" method="POST">

        @csrf
        <label for="patente">Pantente</label>
        <input type="text" id="patente" name="patente">
        <br>

        <label for="marca">Marca</label>
        <select name="marca" id="marca">
            <option value=""></option>
            @foreach ($marcas as $marca)
            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
            @endforeach
        </select>

        <label for="modelo">Modelo</label>
        <select name="modelo" id="modelo">
        </select>
        
        <label for="vtv">Vencimiento VTV</label>
        <input type="date" id="vtv" name="vencimiento_vtv">
        <br>
        
        <label for="neumaticos">Estado de Neumáticos</label>
        <input type="number" min="0" max="100" id="neumaticos" name="estado_neumaticos">
        <br>
        
        <label for="mantenimiento">Mantenimiento</label>
        <input type="text" id="mantenimiento" name="mantenimiento">
        <br>

        <button type="submit">Registrar</button>
        
<script>
    const modelos = @json($modelos); // Ej: [{id:1, nombre:"Corsa", id_marca:1}, ...]

    const marcaSelect = document.getElementById('marca');
    const modeloSelect = document.getElementById('modelo');

    marcaSelect.addEventListener('change', function () {
        const marcaId = this.value;

        // Limpiar opciones anteriores
        modeloSelect.innerHTML = '<option value=""></option>';

        // Filtrar modelos que pertenecen a la marca seleccionada
        const modelosFiltrados = modelos.filter(m => m.marca_id == marcaId);

        // Agregar opciones al select de modelos
        modelosFiltrados.forEach(m => {
            const option = document.createElement('option');
            option.value = m.id;
            option.textContent = m.nombre;
            modeloSelect.appendChild(option);
        });
    });
</script>
    </form>

@endsection