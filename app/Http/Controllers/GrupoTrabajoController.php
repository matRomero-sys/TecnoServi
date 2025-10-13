<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoTrabajo;
use App\Models\Empleado;

class GrupoTrabajoController extends Controller
{
    public function __construct(){
        $this->middleware('auth:empleados');

        $methods = ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'];

        foreach ($methods as $method) {
            $this->middleware("permission:grupo_trabajo.$method")->only($method);
        }
    }

     public function index() {
        $grupoTrabajos = GrupoTrabajo::where('is_active', 1)->get();
        return view('grupo_trabajo.index', compact('grupoTrabajos'));
        
    }

    public function show(GrupoTrabajo $grupoTrabajo) {
        return view('grupo_trabajo.show', compact('grupoTrabajo'));
    }

    public function edit(GrupoTrabajo $grupoTrabajo) {
        $camposForm = GrupoTrabajo::columnasForm();

        return view('grupo_trabajo.update', compact('grupoTrabajo', 'camposForm'));
    }

    public function update(Request $request, GrupoTrabajo $GrupoTrabajo) {


        $request->validate([
            'estado' => 'required',
            'patente_vehiculo' => 'required',
        ]);

        $GrupoTrabajo->update([
            'estado' => $request->estado,
            'patente_vehiculo' => $request->patente_vehiculo,
            
        ]);

        return redirect()->route('grupo-trabajo.index')->with('success', 'GrupoTrabajo actualizado correctamente');

    }

    public function create(){
        $camposForm = GrupoTrabajo::columnasForm();

        return view('grupo_trabajo.store', compact('camposForm'));
    }

    public function store(Request $request){
        
        $request->validate([
            'estado' => 'required',
            'patente_vehiculo' => 'required',
        ]);

        GrupoTrabajo::create($request->only('estado', 'patente_vehiculo'));
        
        return redirect()->route('grupo-trabajo.index')->with('success', 'GrupoTrabajo creado correctamente');

    }

    public function destroy(GrupoTrabajo $grupoTrabajo){
        $grupoTrabajo->update([
            'is_active' => 0
        ]);

        
        return redirect()->route('grupo-trabajo.index')->with('success', 'GrupoTrabajo eliminado correctamente');

    }

    public function getData() {
        $grupoTrabajos = GrupoTrabajo::all();
        $empleados = Empleado::all();
        return response()->json([
            'grupos' => $grupoTrabajos,
            'empleados' => $empleados,
        ]);
    }
}
