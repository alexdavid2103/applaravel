@extends('layouts.app') {{-- Puedes extender una plantilla base si la tienes --}}

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Crear nuevo Aprendiz</h1>
        <form action="{{ route('estudiantes.store') }}" method="post">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="grupo">Grupo:</label>
            <input type="text" name="grupo" id="grupo">
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection

