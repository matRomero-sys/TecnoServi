<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Modelo;

class VehiculoController extends Controller
{
    public function __construct(){
        $this->middleware('auth:empleados');

        $methods = ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'];

        foreach ($methods as $method) {
            $this->middleware("permission:vehiculo.$method")->only($method);
        }
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
            'img' => $request->img,
        ]);

        return redirect()->route('vehiculo.index')->with('success', 'Vehículo actualizado correctamente');

    }

    public function create(){
        $marcas = Marca::all();
        $modelos = Modelo::all();

        return view('vehiculo.store', compact('marcas', 'modelos'));
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
