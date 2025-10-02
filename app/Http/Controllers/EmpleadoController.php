<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{

    public function __construct(){
        $this->middleware('auth:empleados');

        $methods = ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'];

        foreach ($methods as $method) {
            $this->middleware("permission:empleado.$method")->only($method);
        }
    }


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
            'dni' => 'required',
            'nombre' => 'required',
            'fecha_ingreso' => 'required',
            'rol' => 'required',
            'cantidad_tareas' => 'required',
            'rendimiento' => 'required',
            'activo' => 'nullable',
            'id_grupo_trabajo' => 'required',
        ]);


        $empleado->update([
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'fecha_ingreso' => $request->fecha_ingreso,
            'rol' => $request->rol,
            'cantidad_tareas' => $request->cantidad_tareas,
            'rendimiento' => $request->rendimiento,
            'activo' => $request->has('activo') ? 1 : 0,
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
            'dni' => 'required',
            'nombre' => 'required',
            'fecha_ingreso' => 'required',
            'rol' => 'required',
            'cantidad_tareas' => 'required',
            'rendimiento' => 'required',
            'activo' => 'nullable',
            'id_grupo_trabajo' => 'required',
            'password' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $validated['activo'] = $request->has('activo') ? 1 : 0;

        $empleado = Empleado::create($validated);

        if ($validated['rol'] == 'jefe'){
            $empleado->assignRole('jefe');
        } elseif ($validated['rol'] == 'admin'){
            $empleado->assignRole('admin');
        }
        else {
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
