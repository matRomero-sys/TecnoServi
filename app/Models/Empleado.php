<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $primaryKey = 'dni';

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = [
        'dni',
        'nombre',
        'fecha_ingres',
        'rol',
        'cantidad_tareas',
        'rendimiento',
        'activo',
        'id_cuenta',
        'id_grupo_trabajo'
    ];
}
