@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Editar materia</h1>
        <form action="{{ route('materias.update', ['materia' => $materia->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="{{ $materia->nombre }}" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection

