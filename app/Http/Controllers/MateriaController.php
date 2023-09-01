<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::obtener();
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