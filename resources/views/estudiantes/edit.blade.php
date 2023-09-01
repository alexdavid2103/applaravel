@extends('layouts.app') {{-- Puedes extender una plantilla base si la tienes --}}

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="{{ route('estudiantes.update', ['id' => $estudiante->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $estudiante->id }}">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="{{ $estudiante->nombre }}" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input value="{{ $estudiante->grupo }}" name="grupo" required type="text" id="grupo" class="form-control" placeholder="Grupo">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection




