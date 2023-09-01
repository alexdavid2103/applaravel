@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Listado de materias</h1>
        <a href="{{ route('materias.create') }}" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                    <tr>
                        <td>{{ $materia->nombre }}</td>
                        <td>
                            <a href="{{ route('materias.edit', ['materia' => $materia->id]) }}" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('materias.destroy', ['materia' => $materia->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection