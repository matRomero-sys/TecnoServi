<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Spatie\Permission\Traits\HasRoles;

class EmpleadoController extends Controller
{

    // public function __construct(){
    //     $this->middleware('role:empleado|admin')->only(['index', 'show']);
    //     $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    // }

    public function index() {
       $empleados = Empleado::where('is_active', 1)->get();

       return view('empleado.index', compact('empleados'));
        
    }

    public function show(Empleado $empleado) {
        return view('empleado.show', compact('empleado'));
    }

    public function edit(Empleado $empleado) {
        $camposForm = Empleado::columnasForm();

        return view('empleado.update', compact('empleado', 'camposForm'));
    }

    public function update(Request $request, Empleado $empleado) {


        $request->validate([
            'nombre' => 'required',
            'fecha_ingreso' => 'required',
            'rol' => 'required',
            'cantidad_tareas' => 'required',
            'rendimiento' => 'required',
            'activo' => 'nullable',
            'id_cuenta' => 'required',
            'id_grupo_trabajo' => 'required'
        ]);


        $empleado->update([
            'nombre' => $request->nombre,
            'fecha_ingreso' => $request->fecha_ingreso,
            'rol' => $request->rol,
            'cantidad_tareas' => $request->cantidad_tareas,
            'rendimiento' => $request->rendimiento,
            'activo' => $request->has('activo') ? 1 : 0,
            'id_cuenta' => $request->id_cuenta,
            'id_grupo_trabajo' => $request->id_grupo_trabajo,
            
        ]);

        return redirect()->route('empleado.index')->with('success', 'Empleado actualizado correctamente');

    }

    public function create(){
        $camposForm = Empleado::columnasForm();

        return view('empleado.store', compact('camposForm'));
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'nombre' => 'required',
            'fecha_ingreso' => 'required',
            'rol' => 'required',
            'cantidad_tareas' => 'required',
            'rendimiento' => 'required',
            'activo' => 'nullable',
            'id_cuenta' => 'required',
            'id_grupo_trabajo' => 'required'
        ]);

        $validated['activo'] = $request->has('activo') ? 1 : 0;

        $empleado = Empleado::create($validated);

        if ($validated['rol'] == 'admin'){
            $empleado->assignRole('admin');
        } else {
            $empleado->assignRole('empleado');
        }
        
        return redirect()->route('empleado.index')->with('success', 'Empleado creado correctamente');

    }

    public function destroy(Empleado $empleado){
        $empleado->update([
            'is_active' => 0
        ]);

        
        return redirect()->route('empleado.index')->with('success', 'Empleado eliminado correctamente');

    }

}
