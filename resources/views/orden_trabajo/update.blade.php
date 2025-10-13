@extends('layouts.app')

@section('content')

<p>Número de Orden: {{ $ordenTrabajo->id }}</p>

<form action="{{route('orden-trabajo.update', $ordenTrabajo)}}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="descripcion">Descripción</label>
    <select id="descripcion" name="descripcion">
        <option value="instalacion" {{ $ordenTrabajo->descripcion == 'instalacion' ? 'selected' : '' }}>Instalación</option>
        <option value="reconexion" {{ $ordenTrabajo->descripcion == 'reconexion' ? 'selected' : '' }}>Reconexión</option>
        <option value="service" {{ $ordenTrabajo->descripcion == 'service' ? 'selected' : '' }}>Service</option>
        <option value="desconexion" {{ $ordenTrabajo->descripcion == 'desconexion' ? 'selected' : '' }}>Desconexión</option>
    </select>

    <label for="estado">Estado</label>
    <select id="estado" name="estado" onchange="toggleOtroCampo()">
        <option value="solicitado" {{ $ordenTrabajo->estado == 'solicitado' ? 'selected' : '' }}>Solicitado</option>
        <option value="asignado" {{ $ordenTrabajo->estado == 'asignado' ? 'selected' : '' }}>Asignado</option>
        <option value="proceso" {{ $ordenTrabajo->estado == 'proceso' ? 'selected' : '' }}>En Proceso</option>
        <option value="finalizado" {{ $ordenTrabajo->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
        <option value="cancelado" {{ $ordenTrabajo->estado == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
    </select>

    <div id="campo_otro" style="display: none;">
        <label for="motivo_inacabado">Motivo Inacabado</label>
        <input type="text" name="motivo_inacabado" id="motivo_inacabado">
    </div>

    <button id="btnGrupos" type="button">Mostrar Grupos</button>

    <div class="grupos">

    </div>

    <button type="submit">Enviar</button>

<script>
    function toggleOtroCampo() {
        const valor = document.getElementById('estado').value;
        document.getElementById('campo_otro').style.display = valor === 'cancelado' ? 'block' : 'none';
    }
    
    document.addEventListener('DOMContentLoaded', toggleOtroCampo);

    function mostrarGrupos() {
        fetch('/grupo-trabajo/data')
        .then(response=>response.json())
        .then(data=>{
            const divGrupos = document.querySelector('.grupos');
            divGrupos.innerHTML = '';
            data.grupos.forEach(g=> {
                
                divGrupos.innerHTML += `
                <div>
                    <p>N° de Grupo: ${g.id}</p>
                    <p>Integrantes:</p>
                `;
                data.empleados.forEach(e=>{
                    if (e.id_grupo_trabajo == g.id){
                        divGrupos.innerHTML += `
                            <p>${e.nombre}</p>
                        `;
                    }
                });
                divGrupos.innerHTML += `
                <p>Vehiculo: ${g.patente_vehiculo}</p>
                </div>
                <input type="radio" name="grupo_trabajo" value="${g.id}">Seleccionar Grupo</>
                `;
            });
            divGrupos.innerHTML += `
                <input type="radio" name="grupo_trabajo">No Seleccionar Grupo</>
            `;
        })
    }

    document.getElementById('btnGrupos').addEventListener('click', mostrarGrupos)

</script>
</form>

@endsection