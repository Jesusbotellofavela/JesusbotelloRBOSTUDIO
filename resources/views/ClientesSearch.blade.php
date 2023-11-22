@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    @if ($clientes->count() > 0)
        <table class="table">
            <thead>
                <tr>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Referencia de la dirección</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>

                <td>{{$cliente->nombre_cliente }}</td>
                <td>{{$cliente->apellido_paterno_cliente}}</td>
                <td>{{$cliente->apellido_materno_cliente}}</td>
                <td>{{$cliente->email }}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->referencia_ubicacion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
