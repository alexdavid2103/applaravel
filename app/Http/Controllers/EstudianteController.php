<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::obtenerTodos();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]);
    }

    public function create()
    {
        // Mostrar el formulario de creación
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante([
            'nombre' => $request->input('nombre'),
            'grupo' => $request->input('grupo')
        ]);
        $estudiante->guardar();
        
        return redirect()->route('estudiantes.index');
    }

    public function edit($id)
    {
        $estudiante = Estudiante::obtenerPorId($id);
        return view('estudiantes.edit', ['estudiante' => $estudiante]);
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::obtenerPorId($id);
        $estudiante->nombre = $request->input('nombre');
        $estudiante->grupo = $request->input('grupo');
        $estudiante->actualizar();
        
        return redirect()->route('estudiantes.index');
    }

    public function showNotas($id)
{
    $estudiante = Estudiante::find($id); // Obtener el estudiante por su ID
    $materias = Materia::obtener();
    $notas = Nota::obtenerDeEstudiante($estudiante->id);
    $materiasConCalificacion = Nota::combinar($materias, $notas);
    
    return view('notas_estudiante', compact('estudiante', 'materiasConCalificacion'));
}

    public function destroy($id)
    {
        Estudiante::eliminarPorId($id);
        return redirect()->route('estudiantes.index');
    }
    
}
