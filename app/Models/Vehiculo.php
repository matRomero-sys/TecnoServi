<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehiculo extends Model
{
    use HasFactory;

    protected $primaryKey = 'patente';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'patente',
        'img',
        'modelo_id',
        'vencimiento_vtv',
        'estado_neumaticos',
        'mantenimiento',
        'is_active'
    ];

    public function modelo(){
        return $this->belongsTo(Modelo::class);
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
