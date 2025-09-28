<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrdenTrabajo;


class OrdenTrabajoController extends Controller
{

    public function __construct(){
        $this->middleware('role:admin|cliente')->only(['index', 'create']);
        $this->middleware('role:admin|empleado')->only(['store', 'edit', 'update', 'destroy']);
    
    }

    public function index(){
        return view('orden_trabajo.index');
        
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
}
