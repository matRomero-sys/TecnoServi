<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class Empleado extends Authenticatable
{
    use HasRoles;

    protected $primaryKey = 'dni';

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = [
        'dni',
        'nombre',
        'fecha_ingreso',
        'rol_id',
        'cantidad_tareas',
        'rendimiento',
        'activo',
        'id_grupo_trabajo',
        'password',
        'is_active'
    ];

    public function grupo_trabajo() {
        return $this->belongsTo(GrupoTrabajo::class);
    }

      public static function columnasForm()
    {
        $tabla = (new self())->getTable();
        $columnas = DB::getSchemaBuilder()->getColumnListing($tabla);
        $columnas = array_slice($columnas, 0, -3);
        $campos = [];

        foreach ($columnas as $columna) {
            $tipo = DB::getSchemaBuilder()->getColumnType($tabla, $columna);

            // Mapear tipos de base de datos a tipos de input HTML
            if (in_array($tipo, ['integer', 'bigint', 'smallint', 'mediumint', 'tinyint'])) {
                $inputType = 'number';
            } elseif (in_array($tipo, ['date'])) {
                $inputType = 'date';
            } elseif (in_array($tipo, ['datetime', 'timestamp'])) {
                $inputType = 'datetime-local';
            } elseif ($tipo === 'boolean') {
                $inputType = 'checkbox';
            } elseif (in_array($tipo, ['text', 'mediumtext', 'longtext'])) {
                $inputType = 'textarea'; // Podrías manejar textarea aparte
            } else {
                $inputType = 'text';
            }

            $campos[$columna] = $inputType;
        }

        return $campos;
    }
}
