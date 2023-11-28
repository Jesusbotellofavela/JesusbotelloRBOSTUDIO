@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    @if ($galeria->count() > 0)
        <table class="table">
            <thead>
                <tr>
            <th>Nombre de la imagen</th>
            <th>Tamaño de la imagen</th>
            <th>Precio de la imagen</th>



        </tr>
    </thead>
    <tbody>
        @foreach ($galeria as $galeria)
            <tr>
                <td>{{ $galeria->nombre_imagen}}</td>
                <td>{{ $galeria->tamano }}</td>
                <td>{{ $galeria->precio_imagen }}</td>

                </tr>
            </tbody>
            @endforeach
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
