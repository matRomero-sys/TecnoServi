<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function __construct(){
        $this->middleware('role:empleado|admin')->only(['index', 'show']);
        $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index() {
        $vehiculos = Vehiculo::where('is_active', 1)->get();
        return view('vehiculo.index', compact('vehiculos'));
    }

    public function show(Vehiculo $vehiculo) {
        return view('vehiculo.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo) {
        return view('vehiculo.update', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo) {

        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'vencimiento_vtv' => 'required',
            'estado_neumaticos' => 'required',
            'mantenimiento' => 'required',
        ]);

        $vehiculo->update([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'vencimiento_vtv' => $request->vencimiento_vtv,
            'estado_neumaticos' => $request->estado_neumaticos,
            'mantenimiento' => $request->mantenimiento,
        ]);

        return redirect()->route('vehiculo.index')->with('success', 'Vehículo actualizado correctamente');

    }

    public function create(){
        return view('vehiculo.store');
    }

    public function store(Request $request){
        
        $request->validate([
            'patente' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'vencimiento_vtv' => 'required',
            'estado_neumaticos' => 'required',
            'mantenimiento' => 'required',
        ]);

        Vehiculo::create($request->only('patente', 'marca', 'modelo', 'vencimiento_vtv', 'estado_neumaticos', 'mantenimiento'));
        
        return redirect()->route('vehiculo.index')->with('success', 'Vehículo creado correctamente');

    }

    public function destroy(Vehiculo $vehiculo){
        $vehiculo->update([
            'is_active' => 0
        ]);

        
        return redirect()->route('vehiculo.index')->with('success', 'Vehículo eliminado correctamente');

    }

}
