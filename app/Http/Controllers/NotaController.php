<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Materia;
use App\Models\Nota;

class NotaController extends Controller
{
    public function actualizar(Request $request, $idEstudiante)
    {
        $estudiante = Estudiante::find($idEstudiante);
        $materias = Materia::obtener();
        $notas = Nota::obtenerDeEstudiante($estudiante->id);
        $materiasConCalificacion = Nota::combinar($materias, $notas);

        foreach ($materiasConCalificacion as $materia) {
            $inputKey = 'materia_' . $materia->id; // Supongamos que usamos 'materia_id' en los inputs
            $puntaje = $request->input($inputKey);

            $nota = new Nota([
                'puntaje' => $puntaje,
                'id_estudiante' => $estudiante->id,
                'id_materia' => $materia->id,
            ]);
            $nota->guardar();
        }

        return redirect()->route('estudiantes.show_notas', ['id' => $estudiante->id]);
    }

    public function guardar(Request $request)
    {
        $puntaje = $request->input('puntaje');
        $idEstudiante = $request->input('id_estudiante');
        $idMateria = $request->input('id_materia');

        $nota = new Nota([
            'puntaje' => $puntaje,
            'id_estudiante' => $idEstudiante,
            'id_materia' => $idMateria,
        ]);
        $nota->guardar();

        return redirect()->route('estudiantes.show_notas', ['id' => $idEstudiante]);
    }

    public function update(Request $request)
    {
        $idEstudiante = $request->input('id_estudiante');
        $idMateria = $request->input('id_materia');
        $puntaje = $request->input('puntaje');

        $nota = new Nota([
            'puntaje' => $puntaje,
            'id_estudiante' => $idEstudiante,
            'id_materia' => $idMateria,
        ]);
        $nota->guardar();

        return redirect()->route('estudiantes.show_notas', ['id' => $idEstudiante]);
    }

    

    
}

