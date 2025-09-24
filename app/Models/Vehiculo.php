<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $primaryKey = 'patente';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'patente',
        'marca',
        'modelo',
        'vencimiento_vtv',
        'estado_neumaticos',
        'mantenimiento',
        'is_active'
    ];
}
