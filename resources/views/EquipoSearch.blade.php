@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    @if ($equipo->count() > 0)
        <table class="table">
            <thead>
            <tr>
            <th>Nombre del equipo</th>
            <th>Cantidad disponible</th>
            <th>Descripcion del equipo</th>
            <th>Precio del equipo</th>
            <th> Imagen del equipo</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($equipo as $equipo)
            <tr>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->cantidad_disponible }}</td>
                <td>{{ $equipo->descripcion }}</td>
                <td>{{ $equipo->precio }}</td>
                <td>
                                @if($equipo->imagen_equipo)
                                    <img style="height: 50px; width: 50px;" src="{{ asset('imagen_equipo/' . $equipo->imagen_equipo) }}" alt="Imagen del equipo">
                                @else
                                    No hay imagen disponible
                                @endif
                            </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
