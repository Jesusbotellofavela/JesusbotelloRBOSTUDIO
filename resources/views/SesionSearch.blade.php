@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    @if ($sesion->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID de la sesión</th>
                    <th>Fecha de la sesión</th>
                    <th>Descripción de la sesión</th>
                    <th>Fecha de finalización de la sesión</th>
                    <th>Dirección para la sesión</th>
                    <th>Hora de la sesión</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($sesion as $sesion)
            <tr>
                <td>{{ $sesion->id }}</td>
                <td>{{ $sesion->fecha_inicio }}</td>
                <td>{{ $sesion->descripcion_sesion }}</td>
                <td>{{ $sesion->fecha_fin}}</td>
                <td>{{ $sesion->direccion_sesion}}</td>
                <td>{{ $sesion->hora_sesion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
