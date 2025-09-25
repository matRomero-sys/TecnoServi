<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrdenTrabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'estado',
        'motivo_inacabado',
        'id_grupo_trabajo',
        'id_cliente'
    ];
}
