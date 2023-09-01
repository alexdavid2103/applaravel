<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nota extends Model
{
    protected $fillable = ['puntaje', 'id_estudiante', 'id_materia'];

    public function guardar()
    {
        // Eliminamos nota existente (si hay)
        $this->eliminar();

        // Insertamos la nueva nota
        self::create([
            'puntaje' => $this->puntaje,
            'id_estudiante' => $this->idEstudiante,
            'id_materia' => $this->idMateria,
        ]);
    }

    public static function obtenerDeEstudiante($idEstudiante)
    {
        return DB::table('notas_estudiantes_materias')
            ->where('id_estudiante', $idEstudiante)
            ->select('id', 'id_estudiante', 'id_materia', 'puntaje')
            ->get()
            ->toArray();
    }

    public static function combinar($materias, $notas)
    {
        foreach ($materias as &$materia) {
            $materia->puntaje = self::obtenerCalificacion($notas, $materia->id);
        }
        return $materias;
    }

    private static function obtenerCalificacion($notas, $idMateria)
    {
        foreach ($notas as $nota) {
            if ($nota->id_materia === $idMateria) {
                return $nota->puntaje;
            }
        }
        return 0;
    }

    public function eliminar()
    {
        self::where('id_estudiante', $this->idEstudiante)
            ->where('id_materia', $this->idMateria)
            ->delete();
    }
}

