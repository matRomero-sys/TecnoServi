<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GrupoTrabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'id_vehiculo',
        'is_active'
    ];

    public function empleados() {
        $this->hasMany(Empleado::class);
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
