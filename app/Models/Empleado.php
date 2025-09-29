<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class Empleado extends Model
{
    use HasRoles;

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
        'id_grupo_trabajo',
        'is_active'
    ];

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
