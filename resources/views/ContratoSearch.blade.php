@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    @if ($contrato->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Precio</th>
                    <th> Direccion del evento</th>
                    <th> Descripcion del evento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contrato as $contrato)
                    <tr>
                        <td>{{ $contrato->fecha_inicio_contrato }}</td>
                        <td>{{ $contrato->fecha_fin_contrato }}</td>
                        <td>{{ $contrato->precio }}</td>
                        <td>{{ $contrato->direccion_evento}}</td>
                        <td>{{ $contrato->descripcion_evento}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
