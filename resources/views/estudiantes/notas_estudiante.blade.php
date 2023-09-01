@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Notas de {{ $estudiante->nombre }}</h1>
    </div>
    <div class="col-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                @php
                $sumatoria = 0;
                @endphp
                @foreach ($materiasConCalificacion as $materia)
                    @php
                    $sumatoria += $materia->puntaje;
                    @endphp
                    <tr>
                        <td>
                            {{ $materia->nombre }}
                        </td>
                        <td>
                            <form action="{{ route('notas.guardar') }}" method="POST" class="form-inline">
                                @csrf
                                <input type="hidden" value="{{ $estudiante->id }}" name="id_estudiante">
                                <input type="hidden" value="{{ $materia->id }}" name="id_materia">
                                <input value="{{ $materia->puntaje }}" required min="0" name="puntaje" placeholder="Escriba la calificación" type="number" class="form-control">
                                <button class="btn btn-success mx-2">Guardar</button>
                            </form>
                            
                            <form action="{{ route('notas.update') }}" method="POST" class="form-inline">
                                @csrf
                                <input type="hidden" value="{{ $estudiante->id }}" name="id_estudiante">
                                <input type="hidden" value="{{ $materia->id }}" name="id_materia">
                                <input value="{{ $materia->puntaje }}" required min="0" name="puntaje" placeholder="Escriba la calificación" type="number" class="form-control">
                                <button class="btn btn-success mx-2">Guardar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>Promedio</td>
                    <td>
                        <strong>
                            @php
                            $promedio = $sumatoria / count($materiasConCalificacion);
                            echo $promedio;
                            @endphp
                        </strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
