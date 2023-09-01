@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Nueva materia</h1>
        <form action="{{ route('materias.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection