<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    // Método para mostrar la lista de materias
    public function index()
    {
         // Recupera todas las materias de la base de datos utilizando el modelo Materia    
        $materias = Materia::obtener();
         // Retorna la vista 'materias.index' y pasa las materias como datos
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        $materia = new Materia([
            'nombre' => $request->input('nombre')
        ]);
        $materia->guardar();
        
        return redirect()->route('materias.index');
    }

    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    public function update(Request $request, Materia $materia)
    {
        $materia->nombre = $request->input('nombre');
        $materia->actualizar();
        
        return redirect()->route('materias.index');
    }

    public function destroy(Materia $materia)
    {
        $materia->eliminar($materia->id);
        return redirect()->route('materias.index');
    }
}