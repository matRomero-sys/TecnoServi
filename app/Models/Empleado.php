<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';

    public $incrementing = false;

    protected $fillable = [
        'dni',
        'nombre',
        'fecha_ingreso',
        'rol',
        'tareas',
        'rendimiento',
        'id_cuenta',
        'activo',
        'id_grupo_trabajo'
    ];

}
