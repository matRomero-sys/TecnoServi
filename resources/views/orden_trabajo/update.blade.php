@extends('layouts.app')

@section('content')

<form action="{{route('orden-trabajo.update', $ordenTrabajo)}}" method="POST" class="form">
    @csrf
    @method('PUT')

    
    <p>Número de Orden: {{ $ordenTrabajo->id }}</p>

    <div>
        <label for="descripcion">Descripción</label>
        <select id="descripcion" name="descripcion">
            <option value="instalacion" {{ $ordenTrabajo->descripcion == 'instalacion' ? 'selected' : '' }}>Instalación</option>
            <option value="reconexion" {{ $ordenTrabajo->descripcion == 'reconexion' ? 'selected' : '' }}>Reconexión</option>
            <option value="service" {{ $ordenTrabajo->descripcion == 'service' ? 'selected' : '' }}>Service</option>
            <option value="desconexion" {{ $ordenTrabajo->descripcion == 'desconexion' ? 'selected' : '' }}>Desconexión</option>
        </select>

    </div>
    
    <div>
        <label for="estado">Estado</label>
        <select id="estado" name="estado" onchange="toggleOtroCampo()">
            <option value="solicitado" {{ $ordenTrabajo->estado == 'solicitado' ? 'selected' : '' }}>Solicitado</option>
            <option value="asignado" {{ $ordenTrabajo->estado == 'asignado' ? 'selected' : '' }}>Asignado</option>
            <option value="proceso" {{ $ordenTrabajo->estado == 'proceso' ? 'selected' : '' }}>En Proceso</option>
            <option value="finalizado" {{ $ordenTrabajo->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
            <option value="cancelado" {{ $ordenTrabajo->estado == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
        </select>
    </div>
    
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

            data.grupos.forEach(g => {

                const grupo = document.createElement('table');
                grupo.classList.add('table');
                grupo.innerHTML += `
                <tr class="row-header">
                    <th>N° de Grupo</th>
                    
                    <th>Integrantes</th>
                    
                    <th>Vehiculo</th>
                    <th></th>
                </tr>
                    `;

                const empleados = document.createElement('ul');

                data.empleados.forEach(e => {
                    if (e.id_grupo_trabajo == g.id) {
                    empleados.innerHTML += `<li>${e.nombre}</li>`;
                    }
                });

            grupo.innerHTML += `
                <tr class="row-data">
                    <td>${g.id}</td>
                    <td>${empleados.outerHTML}</td>
                    <td>${g.patente_vehiculo}</td>
                    <td><input type="radio" name="grupo_trabajo" value="${g.id}" id="${g.id}"><label for="${g.id}">Seleccionar Grupo</label></td>
                </tr>
                `;
            
            divGrupos.appendChild(grupo)
            }); 
            divGrupos.innerHTML += `
                <input type="radio" name="grupo_trabajo">No Seleccionar Grupo</tr>
            `;
        })
    }

    document.getElementById('btnGrupos').addEventListener('click', mostrarGrupos)

</script>
</form>

@endsection