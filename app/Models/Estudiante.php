<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'grupo'];

    public function guardar()
    {
        $this->save();
    }

    public static function obtenerTodos()
    {
        return self::all(['id', 'nombre', 'grupo']);
    }

    public static function obtenerPorId($id)
    {
        return self::find($id, ['id', 'nombre', 'grupo']);
    }

    public function actualizar()
    {
        $this->save();
    }

    public static function eliminarPorId($id)
    {
        self::destroy($id);
    }
}
