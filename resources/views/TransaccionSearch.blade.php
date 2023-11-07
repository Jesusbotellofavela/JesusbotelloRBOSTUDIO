@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    @if ($transaccion->count() > 0)
        <table class="table">
            <thead>
            <tr>
            <th>ID de Transaccion</th>
            <th>Tipo de Transacción</th>
            <th>Monto</th>
            <th>Fecha de Transaccion</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($transaccion as $transaccion)
            <tr>
                <td>{{ $transaccion->id }}</td>
                <td>{{ $transaccion->tipo_transaccion}}</td>
                <td>{{ $transaccion->monto }}</td>
                <td>{{ $transaccion->fecha_transaccion }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
