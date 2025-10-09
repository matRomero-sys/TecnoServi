<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrdenTrabajo;


class OrdenTrabajoController extends Controller
{

    public function __construct(){
        $this->middleware('auth:web,empleados');

        $methods = ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'];

        foreach ($methods as $method) {
            $this->middleware("permission:orden_trabajo.$method")->only($method);
        }
    }

    public function index(){
        $ordenTrabajos = OrdenTrabajo::all();
        return view('orden_trabajo.index', compact('ordenTrabajos'));
    }

    public function show(OrdenTrabajo $ordenTrabajo) {
        return view('orden_trabajo.show', compact('ordenTrabajo'));
    }

    public function create(){
        return view('orden_trabajo.store');
    }

    public function store(Request $request) {
      $request->validate([
        'descripcion' => 'required'
      ]);
      
        OrdenTrabajo::create([
            'descripcion' => $request->descripcion,
            'estado' => 'Solicitado',
            'id_cliente' => Auth::id()
        ]);
    }

    public function edit() {
        return view('orden_trabajo.update');
    }
}
