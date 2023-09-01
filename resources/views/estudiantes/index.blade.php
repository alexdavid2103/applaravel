@extends('layouts.app') {{-- Puedes extender una plantilla base si la tienes --}}

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->grupo }}</td>
                        <td>
                            <a href="{{ route('notas_estudiante', ['id' => $estudiante->id]) }}" class="btn btn-info">
                                Notas
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('estudiantes.edit', ['id' => $estudiante->id]) }}" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('estudiantes.destroy', ['id' => $estudiante->id]) }}" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                        {{-- <td>
                            <form action="{{ route('estudiantes.destroy', ['id' => $estudiante->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection





