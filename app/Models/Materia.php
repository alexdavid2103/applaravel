<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['nombre'];

    public function guardar()
    {
        $this->save();
    }

    public static function obtener()
    {
        return self::all(['id', 'nombre']);
    }

    public static function obtenerUna($id)
    {
        return self::find($id, ['id', 'nombre']);
    }

    public function actualizar()
    {
        $this->save();
    }

    public static function eliminar($id)
    {
        self::destroy($id);
    }
}
