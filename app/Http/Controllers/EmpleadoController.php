<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index() {
        $empleados = Empleado::/*where('is_active', 1)->*/get();
        return view('empleado.index', compact('empleados'));
        
    }

    public function show(Empleado $empleado) {
        return view('empleado.show', compact('empleado'));
    }

    public function edit(Empleado $empleado) {
        return view('empleado.update', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado) {

        $request->validate([
            'nombre' => 'required',
            'fecha_ingreso' => 'required',
            'rol' => 'required',
            'cantidad_tareas' => 'required',
            'rendimiento' => 'required',
            'activo' => 'required',
            'id_cuenta' => 'required',
            'id_grupo_trabajo' => 'required'
        ]);

        $empleado->update([
            'nombre' => $request->nombre,
            'fecha_ingreso' => $request->fecha_ingreso,
            'rol' => $request->rol,
            'cantidad_tareas' => $request->cantidad_tareas,
            'rendimiento' => $request->rendimiento,
            'activo' => $request->activo,
            'id_cuenta' => $request->id_cuenta,
            'id_grupo_trabajo' => $request->id_grupo_trabajo,
            
        ]);

        return redirect()->route('empleado.index')->with('success', 'Empleado actualizado correctamente');

    }

    public function create(){
        return view('empleado.store');
    }

    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required',
            'fecha_ingreso' => 'required',
            'rol' => 'required',
            'cantidad_tareas' => 'required',
            'rendimiento' => 'required',
            'activo' => 'required',
            'id_cuenta' => 'required',
            'id_grupo_trabajo' => 'required'
        ]);

        Empleado::create($request->only('nombre', 'fecha_ingreso', 'rol', 'cantidad_tareas', 'rendimiento', 'activo', 'id_cuenta', 'id_grupo_trabajo'));
        
        return redirect()->route('empleado.index')->with('success', 'Empleado creado correctamente');

    }

    public function destroy(Empleado $empleado){
        $empleado->update([
            'is_active' => 0
        ]);

        
        return redirect()->route('empleado.index')->with('success', 'Empleado eliminado correctamente');

    }

}
